<?php

class FileSystem
{
    public $name; // 名称
    public $path; // 路径
    public $dir; // 文件夹路径
    public $type; // 类型
    public $size; // 大小
    public $is_file; // 检测是否是文件
    public $is_dir; // 检测是否是目录
    public $can_read; // 检测文件是否可读
    public $can_write; // 检测文件是否可写
    public $can_exec; // 检测文件是否可执行
    public $create_time; // 创建时间
    public $update_time; // 修改时间
    public $visit_time; // 最后访问时间
    public $content; // 内容->>file:文件内容;
    public $children; // dir:文件夹内文件列表;

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
        $this->name = basename($path);
        $this->dir = dirname($path);
        $this->size = filesize($path);
        $this->is_file = is_file($path);
        $this->is_dir = is_dir($path);
        $this->can_read = is_readable($path);
        $this->can_write = is_writeable($path);
        $this->can_exec = is_executable($path);
        $this->create_time = date("Y-m-d H:i:s", filectime($path));
        $this->update_time = date("Y-m-d H:i:s", filemtime($path));
        $this->visit_time = date("Y-m-d H:i:s", fileatime($path));
        if ($this->is_file) {
            $this->type = substr(strrchr($this->name, '.'), 1);
        } else if ($this->is_dir) {
        }
    }

    /**
     * @param mixed $content
     */
    public function setContent()
    {
        if (!$this->is_file) {
            return;
        }
        $this->content = file_get_contents($this->path);
    }

    public function __construct($path)
    {
        self::setPath($path);
    }

    public function download($url)
    {
        var_dump(__FUNCTION__);
    }

    public function setChildren()
    {
        if (!$this->is_dir) {
            return;
        } else {
            $this->children = array();
        }

        $handler = opendir($this->path);
        while (($filename = readdir($handler)) !== false) {
            // 务必使用!==，防止目录下出现类似文件名“0”等情况
            if ($filename !== "." && $filename !== "..") {
                $file = new \FileSystemModule\FileSystemModule($this->path . "\\" . $filename);
                array_push($this->children, $file);
            }
        }
    }

    public function setAllChildren()
    {
        if (!$this->is_dir) {
            return;
        } else {
            $this->children = array();
        }

        $handler = opendir($this->path);
        while (($filename = readdir($handler)) !== false) {
            // 务必使用!==，防止目录下出现类似文件名“0”等情况
            if ($filename !== "." && $filename !== "..") {
                $file = new \FileSystemModule\FileSystemModule($this->path . "\\" . $filename);
                $file->setAllChildren();
                array_push($this->children, $file);
            }
        }
    }

    /**
     * $dir
     * $length
     */
    function list($dir, $rootPath, $length = 1)
    {
        if ($length < -1) {
            return ("Param length Error");
            // return;
        }

        $fileArray = FileSystemModule::listFile($dir, $rootPath);
        $dirArray = FileSystemModule::listDir($dir, $rootPath);

        $array = array();
        if (!empty($fileArray) && !empty($dirArray)) {
            $array = array_merge($dirArray, $fileArray);
        } else {
            if (!empty($dirArray)) {
                $array = $dirArray;
            }
            if (!empty($fileArray)) {
                $array = $fileArray;
            }
        }
        // echo $length;
        // var_dump($array);
        if ($length === -1 && !empty($array)) {
            foreach ($array as $k => $v) {
                // echo $dir."\\".$v->name."<br/>";
                if (!$v->ifile) {
                    $array[$k]->children = FileSystemModule::list($dir . "\\" . $v->name, $rootPath, $length);
                };
            }
        }
        if ($length === 0) {
            return;
        }
        if ($length > 0 && !empty($array)) {
            $length--;
            foreach ($array as $k => $v) {
                // echo $dir."\\".$v->name."<br/>";
                if (!$v->ifile) {
                    $array[$k]->children = FileSystemModule::list($dir . "\\" . $v->name, $rootPath, $length);
                };
            }
        }
        // var_dump($array);
        return $array;
    }

    function listDir($dir, $rootPath)
    {
        $dirArray = array();
        if (false != ($handle = opendir($dir))) {
            $i = 0;
            while (false !== ($file = readdir($handle))) {
                //去掉"“.”、“..”以及带“.xxx”后缀的文件
                if ($file != "." && $file != ".." && !strpos($file, ".")) {
                    $dirArray[$i] = new FileSystemModel($dir . "\\" . $file, $rootPath);
                    $i++;
                }
            }
            //关闭句柄
            closedir($handle);
        }
        return $dirArray;
    }

    function listFile($dir, $rootPath)
    {
        $fileArray = array();
        if (false != ($handle = opendir($dir))) {
            $i = 0;
            while (false !== ($file = readdir($handle))) {
                //去掉"“.”、“..”以及带“.xxx”后缀的文件
                if ($file != "." && $file != ".." && strpos($file, ".")) {
                    $fileArray[$i] = new FileSystemModel($dir . "\\" . $file, $rootPath);
                    $i++;
                }
            }
            //关闭句柄
            closedir($handle);
        }
        // var_dump($fileArray);
        return $fileArray;
    }

    function isExist($path)
    {
        if (file_exists($path)) {
            return true;
        }
        return false;
    }

    function fileInfo($path, $rootPath)
    {
        $file = new FileSystemModel($path, $rootPath);
        $file->content($rootPath);
        return $file;
    }

    /**
     * 接受上传的文件
     */
    function getUpload($data)
    {
    }

    function getUploadFromHTML($path)
    {
        $pic = $_FILES['file']["tmp_name"];
        // 上传的路径，建议写物理路径
        // $uploadDir = 'upload'; 
        // 创建文件夹  
        if (!file_exists($path)) {
            mkdir($path, 0777);
        }
        // 用时间戳来保存图片，防止重复
        $targetFile = $path . '/' . time() . $_FILES['file']['name'];
        // 将临时文件 移动到我们指定的路径，返回上传结果
        $upload_ret = move_uploaded_file($pic, $targetFile) ? true : false;
        // var_dump ($upload_ret);
        return $targetFile;
    }

    function getUploadFromPHP()
    {
    }

    /**
     * 上传文件
     */
    function upload($url, $file)
    {
        $data = array();
        // 将文件内容base64编码当作post请求的一个参数
        $data['file'] = base64_encode(file_get_contents($file));

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    function delete()
    {
    }

    function rename()
    {
    }

    function insert()
    {
        // file_put_contents();
    }

    function update($rootPath, $path, $content)
    {
        file_get_contents($rootPath . $this->path);
    }

    function build()
    {
    }

    function show($path)
    {
        switch (strtolower(FileSystemModule::type($path))) {
            case "jpg":
            case "png":
            case "ico":
                FileSystemModule::showImg($path);
                break;
            default:
                echo file_get_contents($path);
                break;
        }
    }

    function showImg($path)
    {
        header('content-type:image/jpeg');
        //读写图片
        $filename = $path;
        $handle = fopen($filename, 'rb+'); //读写二进制，图片的可移植性
        $res = fread($handle, filesize($filename));
        fclose($handle);
        echo $res;
    }
}
