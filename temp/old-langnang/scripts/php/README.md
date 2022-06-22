# PHP

## Modules

### API 接口

- [anti-motivational-quotes](API/anti-motivational-quotes.php): 随机一条毒鸡汤

**Convert**

- [bt-to-magnet](API/convert-bt-to-magnet.php): bt 转磁力链
- [img-to-base64](API/convert-img-to-base64.php): 图片转 base64 编码

**Spider**

- [baidu](API/spider-baidu.php): 百度爬虫
- [douban](API/spider-douban.php): 豆瓣爬虫
- [javbus](API/spider-javbus.php): JavBus

### Array 数组

<details>

| 函数                    | 描述                                                           |
| ----------------------- | -------------------------------------------------------------- |
| array_change_key_case   | 将数组中的所有键名修改为全大写或小写                           |
| array_chunk             | 将一个数组分割成多个                                           |
| array_column            | 返回数组中指定的一列                                           |
| array_combine           | 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值 |
| array_count_values      | 统计数组中所有的值                                             |
| array_diff_assoc        | 带索引检查计算数组的差集                                       |
| array_diff_key          | 使用键名比较计算数组的差集                                     |
| array_diff_uassoc       | 用用户提供的回调函数做索引检查来计算数组的差集                 |
| array_diff_ukey         | 用回调函数对键名比较计算数组的差集                             |
| array_diff              | 计算数组的差集                                                 |
| array_fill_keys         | 使用指定的键和值填充数组                                       |
| array_fill              | 用给定的值填充数组                                             |
| array_filter            | 使用回调函数过滤数组的元素                                     |
| array_flip              | 交换数组中的键和值                                             |
| array_intersect_assoc   | 带索引检查计算数组的交集                                       |
| array_intersect_key     | 使用键名比较计算数组的交集                                     |
| array_intersect_uassoc  | 带索引检查计算数组的交集，用回调函数比较索引                   |
| array_intersect_ukey    | 用回调函数比较键名来计算数组的交集                             |
| array_intersect         | 计算数组的交集                                                 |
| array_key_exists        | 检查数组里是否有指定的键名或索引                               |
| array_key_first         | 获取指定数组的第一个键值                                       |
| array_key_last          | 获取一个数组的最后一个键值                                     |
| array_keys              | 返回数组中部分的或所有的键名                                   |
| array_map               | 为数组的每个元素应用回调函数                                   |
| array_merge_recursive   | 递归地合并一个或多个数组                                       |
| array_merge             | 合并一个或多个数组                                             |
| array_multisort         | 对多个数组或多维数组进行排序                                   |
| array_pad               | 以指定长度将一个值填充进数组                                   |
| array_pop               | 弹出数组最后一个单元（出栈）                                   |
| array_product           | 计算数组中所有值的乘积                                         |
| array_push              | 将一个或多个单元压入数组的末尾（入栈）                         |
| array_rand              | 从数组中随机取出一个或多个单元                                 |
| array_reduce            | 用回调函数迭代地将数组简化为单一的值                           |
| array_replace_recursive | 使用传递的数组递归替换第一个数组的元素                         |
| array_replace           | 使用传递的数组替换第一个数组的元素                             |
| array_reverse           | 返回单元顺序相反的数组                                         |
| array_search            | 在数组中搜索给定的值，如果成功则返回首个相应的键名             |
| array_shift             | 将数组开头的单元移出数组                                       |
| array_slice             | 从数组中取出一段                                               |
| array_splice            | 去掉数组中的某一部分并用其它值取代                             |
| array_sum               | 对数组中所有值求和                                             |
| array_udiff_assoc       | 带索引检查计算数组的差集，用回调函数比较数据                   |
| array_udiff_uassoc      | 带索引检查计算数组的差集，用回调函数比较数据和索引             |
| array_udiff             | 用回调函数比较数据来计算数组的差集                             |
| array_uintersect_assoc  | 带索引检查计算数组的交集，用回调函数比较数据                   |
| array_uintersect_uassoc | 带索引检查计算数组的交集，用单独的回调函数比较数据和索引       |
| array_uintersect        | 计算数组的交集，用回调函数比较数据                             |
| array_unique            | 移除数组中重复的值                                             |
| array_unshift           | 在数组开头插入一个或多个单元                                   |
| array_values            | 返回数组中所有的值                                             |
| array_walk_recursive    | 对数组中的每个成员递归地应用用户函数                           |
| array_walk              | 使用用户自定义函数对数组中的每个元素做回调处理                 |
| array                   | 新建一个数组                                                   |
| arsort                  | 对数组进行逆向排序并保持索引关系                               |
| asort                   | 对数组进行排序并保持索引关系                                   |
| compact                 | 建立一个数组，包括变量名和它们的值                             |
| count                   | 计算数组中的单元数目，或对象中的属性个数                       |
| current                 | 返回数组中的当前单元                                           |
| each                    | 返回数组中当前的键／值对并将数组指针向前移动一步               |
| end                     | 将数组的内部指针指向最后一个单元                               |
| extract                 | 从数组中将变量导入到当前的符号表                               |
| in_array                | 检查数组中是否存在某个值                                       |
| key_exists              | 别名 array_key_exists                                          |
| key                     | 从关联数组中取得键名                                           |
| krsort                  | 对数组按照键名逆向排序                                         |
| ksort                   | 对数组按照键名排序                                             |
| list                    | 把数组中的值赋给一组变量                                       |
| natcasesort             | 用“自然排序”算法对数组进行不区分大小写字母的排序               |
| natsort                 | 用“自然排序”算法对数组排序                                     |
| next                    | 将数组中的内部指针向前移动一位                                 |
| pos                     | current 的别名                                                 |
| prev                    | 将数组的内部指针倒回一位                                       |
| range                   | 根据范围创建数组，包含指定的元素                               |
| reset                   | 将数组的内部指针指向第一个单元                                 |
| rsort                   | 对数组逆向排序                                                 |
| shuffle                 | 打乱数组                                                       |
| sizeof                  | count 的别名                                                   |
| sort                    | 对数组排序                                                     |
| uasort                  | 使用用户自定义的比较函数对数组中的值进行排序并保持索引关联     |
| uksort                  | 使用用户自定义的比较函数对数组中的键名进行排序                 |
| usort                   | 使用用户自定义的比较函数对数组中的值进行排序                   |

</details>

### cURL 链接&通讯

<details>

| 函数                      | 描述                                                        |
| ------------------------- | ----------------------------------------------------------- |
| curl_close                | 关闭 cURL 会话                                              |
| curl_copy_handle          | 复制一个 cURL 句柄和它的所有选项                            |
| curl_errno                | 返回最后一次的错误代码                                      |
| curl_error                | 返回当前会话最后一次错误的字符串                            |
| curl_escape               | 使用 URL 编码给定的字符串                                   |
| curl_exec                 | 执行 cURL 会话                                              |
| curl_file_create          | 创建一个 CURLFile 对象                                      |
| curl_getinfo              | 获取一个 cURL 连接资源句柄的信息                            |
| curl_init                 | 初始化 cURL 会话                                            |
| curl_multi_add_handle     | 向 curl 批处理会话中添加单独的 curl 句柄                    |
| curl_multi_close          | 关闭一组 cURL 句柄                                          |
| curl_multi_errno          | 返回上一次 curl 批处理的错误码                              |
| curl_multi_exec           | 运行当前 cURL 句柄的子连接                                  |
| curl_multi_getcontent     | 如果设置了 CURLOPT_RETURNTRANSFER，则返回获取的输出的文本流 |
| curl_multi_info_read      | 获取当前解析的 cURL 的相关传输信息                          |
| curl_multi_init           | 返回一个新 cURL 批处理句柄                                  |
| curl_multi_remove_handle  | 移除 cURL 批处理句柄资源中的某个句柄资源                    |
| curl_multi_select         | 等待所有 cURL 批处理中的活动连接                            |
| curl_multi_setopt         | 为 cURL 并行处理设置一个选项                                |
| curl_multi_strerror       | 返回字符串描述的错误代码                                    |
| curl_pause                | 暂停和取消暂停一个连接。                                    |
| curl_reset                | 重置一个 libcurl 会话句柄的所有的选项                       |
| curl_setopt_array         | 为 cURL 传输会话批量设置选项                                |
| curl_setopt               | 设置 cURL 传输选项                                          |
| curl_share_close          | 关闭 cURL 共享句柄                                          |
| curl_share_errno          | 返回共享 curl 句柄的最后一次错误号                          |
| curl_share_init           | 初始化一个 cURL 共享句柄。                                  |
| curl_share_setopt         | 为 cURL 共享句柄设置选项。                                  |
| curl_share_strerror       | 返回错误号对应的错误消息                                    |
| curl_strerror             | 返回错误代码的字符串描述                                    |
| curl_unescape             | 解码给定的 URL 编码的字符串                                 |
| curl_version              | 获取 cURL 版本信息                                          |
| CURLFile::\_\_construct   | 创建 CURLFile 对象                                          |
| CURLFile::getFilename     | 获取被上传文件的 文件名                                     |
| CURLFile::getMimeType     | 获取被上传文件的 MIME 类型                                  |
| CURLFile::getPostFilename | 获取 POST 请求时使用的 文件名                               |
| CURLFile::setMimeType     | 设置被上传文件的 MIME 类型                                  |
| CURLFile::setPostFilename | 设置 POST 请求时使用的文件名                                |

</details>

### Date 日期

<details>

| 函数                                  | 描述                                                                          |
| ------------------------------------- | ----------------------------------------------------------------------------- |
| checkdate                             | 验证一个格里高里日期                                                          |
| date_add                              | 别名 DateTime::add                                                            |
| date_create_from_format               | 别名 DateTime::createFromFormat                                               |
| date_create_immutable_from_format     | 别名 DateTimeImmutable::createFromFormat                                      |
| date_create_immutable                 | 别名 DateTimeImmutable::\_\_construct                                         |
| date_create                           | 别名 DateTime::\_\_construct                                                  |
| date_date_set                         | 别名 DateTime::setDate                                                        |
| date_default_timezone_get             | 取得一个脚本中所有日期时间函数所使用的默认时区                                |
| date_default_timezone_set             | 设定用于一个脚本中所有日期时间函数的默认时区                                  |
| date_diff                             | 别名 DateTime::diff                                                           |
| date_format                           | 别名 DateTime::format                                                         |
| date_get_last_errors                  | 别名 DateTime::getLastErrors                                                  |
| date_interval_create_from_date_string | 别名 DateInterval::createFromDateString                                       |
| date_interval_format                  | 别名 DateInterval::format                                                     |
| date_isodate_set                      | 别名 DateTime::setISODate                                                     |
| date_modify                           | 别名 DateTime::modify                                                         |
| date_offset_get                       | 别名 DateTime::getOffset                                                      |
| date_parse_from_format                | Get info about given date formatted according to the specified format         |
| date_parse                            | Returns associative array with detailed info about given date/time            |
| date_sub                              | 别名 DateTime::sub                                                            |
| date_sun_info                         | Returns an array with information about sunset/sunrise and twilight begin/end |
| date_sunrise                          | 返回给定的日期与地点的日出时间                                                |
| date_sunset                           | 返回给定的日期与地点的日落时间                                                |
| date_time_set                         | 别名 DateTime::setTime                                                        |
| date_timestamp_get                    | 别名 DateTime::getTimestamp                                                   |
| date_timestamp_set                    | 别名 DateTime::setTimestamp                                                   |
| date_timezone_get                     | 别名 DateTime::getTimezone                                                    |
| date_timezone_set                     | 别名 DateTime::setTimezone                                                    |
| date                                  | 格式化一个本地时间／日期                                                      |
| getdate                               | 取得日期／时间信息                                                            |
| gettimeofday                          | 取得当前时间                                                                  |
| gmdate                                | 格式化一个 GMT/UTC 日期／时间                                                 |
| gmmktime                              | 取得 GMT 日期的 UNIX 时间戳                                                   |
| gmstrftime                            | 根据区域设置格式化 GMT/UTC 时间／日期                                         |
| idate                                 | 将本地时间日期格式化为整数                                                    |
| localtime                             | 取得本地时间                                                                  |
| microtime                             | 返回当前 Unix 时间戳和微秒数                                                  |
| mktime                                | 取得一个日期的 Unix 时间戳                                                    |
| strftime                              | 根据区域设置格式化本地时间／日期                                              |
| strptime                              | 解析由 strftime 生成的日期／时间                                              |
| strtotime                             | 将任何字符串的日期时间描述解析为 Unix 时间戳                                  |
| time                                  | 返回当前的 Unix 时间戳                                                        |
| timezone_abbreviations_list           | 别名 DateTimeZone::listAbbreviations                                          |
| timezone_identifiers_list             | 别名 DateTimeZone::listIdentifiers                                            |
| timezone_location_get                 | 别名 DateTimeZone::getLocation                                                |
| timezone_name_from_abbr               | Returns the timezone name from abbreviation                                   |
| timezone_name_get                     | 别名 DateTimeZone::getName                                                    |
| timezone_offset_get                   | 别名 DateTimeZone::getOffset                                                  |
| timezone_open                         | 别名 DateTimeZone::\_\_construct                                              |
| timezone_transitions_get              | 别名 DateTimeZone::getTransitions                                             |
| timezone_version_get                  | Gets the version of the timezonedb                                            |

</details>

- firstDayOfMonth: 月的第一天
- lastDayOfMonth: 月的最后一天

### FileSystem 文件操作

### JSON

<details>

| 函数                | 描述                                                                     |
| ------------------- | ------------------------------------------------------------------------ |
| json_decode         | 对 JSON 格式的字符串进行解码                                             |
| json_encode         | 对变量进行 JSON 编码                                                     |
| json_last_error_msg | Returns the error string of the last json_encode() or json_decode() call |
| json_last_error     | 返回最后发生的错误                                                       |

</details>

### Math 数学

<details>

| 函数          | 描述                                                             |
| ------------- | ---------------------------------------------------------------- |
| abs           | 绝对值                                                           |
| acos          | 反余弦                                                           |
| acosh         | 反双曲余弦                                                       |
| asin          | 反正弦                                                           |
| asinh         | 反双曲正弦                                                       |
| atan2         | 两个参数的反正切                                                 |
| atan          | 反正切                                                           |
| atanh         | 反双曲正切                                                       |
| base_convert  | 在任意进制之间转换数字                                           |
| bindec        | 二进制转换为十进制                                               |
| ceil          | 进一法取整                                                       |
| cos           | 余弦                                                             |
| cosh          | 双曲余弦                                                         |
| decbin        | 十进制转换为二进制                                               |
| dechex        | 十进制转换为十六进制                                             |
| decoct        | 十进制转换为八进制                                               |
| deg2rad       | 将角度转换为弧度                                                 |
| exp           | 计算 e 的指数                                                    |
| expm1         | 返回 exp(number)1，甚至当 number 的值接近零也能计算出准确结果    |
| fdiv          | Divides two numbers, according to IEEE 754                       |
| floor         | 舍去法取整                                                       |
| fmod          | 返回除法的浮点数余数                                             |
| getrandmax    | 显示随机数最大的可能值                                           |
| hexdec        | 十六进制转换为十进制                                             |
| hypot         | 计算一直角三角形的斜边长度                                       |
| intdiv        | 对除法结果取整                                                   |
| is_finite     | 判断是否为有限值                                                 |
| is_infinite   | 判断是否为无限值                                                 |
| is_nan        | 判断是否为合法数值                                               |
| lcg_value     | 组合线性同余发生器                                               |
| log10         | 以 10 为底的对数                                                 |
| log1p         | 返回 log(1 + number)，甚至当 number 的值接近零也能计算出准确结果 |
| log           | 自然对数                                                         |
| max           | 找出最大值                                                       |
| min           | 找出最小值                                                       |
| mt_getrandmax | 显示随机数的最大可能值                                           |
| mt_rand       | 生成更好的随机数                                                 |
| mt_srand      | 播下一个更好的随机数发生器种子                                   |
| octdec        | 八进制转换为十进制                                               |
| pi            | 得到圆周率值                                                     |
| pow           | 指数表达式                                                       |
| rad2deg       | 将弧度数转换为相应的角度数                                       |
| rand          | 产生一个随机整数                                                 |
| round         | 对浮点数进行四舍五入                                             |
| sin           | 正弦                                                             |
| sinh          | 双曲正弦                                                         |
| sqrt          | 平方根                                                           |
| srand         | 播下随机数发生器种子                                             |
| tan           | 正切                                                             |
| tanh          | 双曲正切                                                         |

</details>

### MySQL

### PCRE 正则表达式

<details>

| 函数                        | 描述                                           |
| --------------------------- | ---------------------------------------------- |
| preg_filter                 | 执行一个正则表达式搜索和替换                   |
| preg_grep                   | 返回匹配模式的数组条目                         |
| preg_last_error             | 返回最后一个 PCRE 正则执行产生的错误代码       |
| preg_match_all              | 执行一个全局正则表达式匹配                     |
| preg_match                  | 执行一个正则表达式匹配                         |
| preg_quote                  | 转义正则表达式字符                             |
| preg_replace_callback_array | 执行一个正则表达式搜索并且使用一个回调进行替换 |
| preg_replace_callback       | 执行一个正则表达式搜索并且使用一个回调进行替换 |
| preg_replace                | 执行一个正则表达式的搜索和替换                 |
| preg_split                  | 通过一个正则表达式分隔字符串                   |

</details>

### PostgreSQL

### Receive 数据接收

### Request 请求

- get

### Response 响应

### Router 路由

### Spider 爬虫

- spiderBody
- spiderEl
- spiderHead
- spiderTitle

### SQlite

### String 字符串

<details>

| 函数                       | 描述                                                                                        |
| -------------------------- | ------------------------------------------------------------------------------------------- |
| addcslashes                | 以 C 语言风格使用反斜线转义字符串中的字符                                                   |
| addslashes                 | 使用反斜线引用字符串                                                                        |
| bin2hex                    | 函数把包含数据的二进制字符串转换为十六进制值                                                |
| chop                       | rtrim 的别名                                                                                |
| chr                        | 返回指定的字符                                                                              |
| chunk_split                | 将字符串分割成小块                                                                          |
| convert_cyr_string         | 将字符由一种 Cyrillic 字符转换成另一种                                                      |
| convert_uudecode           | 解码一个 uuencode 编码的字符串                                                              |
| convert_uuencode           | 使用 uuencode 编码一个字符串                                                                |
| count_chars                | 返回字符串所用字符的信息                                                                    |
| crc32                      | 计算一个字符串的 crc32 多项式                                                               |
| crypt                      | 单向字符串散列                                                                              |
| echo                       | 输出一个或多个字符串                                                                        |
| explode                    | 使用一个字符串分割另一个字符串                                                              |
| fprintf                    | 将格式化后的字符串写入到流                                                                  |
| get_html_translation_table | 返回使用 htmlspecialchars 和 htmlentities 后的转换表                                        |
| hebrev                     | 将逻辑顺序希伯来文（logical-Hebrew）转换为视觉顺序希伯来文（visual-Hebrew）                 |
| hebrevc                    | 将逻辑顺序希伯来文（logical-Hebrew）转换为视觉顺序希伯来文（visual-Hebrew），并且转换换行符 |
| hex2bin                    | 转换十六进制字符串为二进制字符串                                                            |
| html_entity_decode         | Convert HTML entities to their corresponding characters                                     |
| htmlentities               | 将字符转换为 HTML 转义字符                                                                  |
| htmlspecialchars_decode    | 将特殊的 HTML 实体转换回普通字符                                                            |
| htmlspecialchars           | 将特殊字符转换为 HTML 实体                                                                  |
| implode                    | 将一个一维数组的值转化为字符串                                                              |
| join                       | 别名 implode                                                                                |
| lcfirst                    | 使一个字符串的第一个字符小写                                                                |
| levenshtein                | 计算两个字符串之间的编辑距离                                                                |
| localeconv                 | Get numeric formatting information                                                          |
| ltrim                      | 删除字符串开头的空白字符（或其他字符）                                                      |
| md5_file                   | 计算指定文件的 MD5 散列值                                                                   |
| md5                        | 计算字符串的 MD5 散列值                                                                     |
| metaphone                  | Calculate the metaphone key of a string                                                     |
| money_format               | 将数字格式化成货币字符串                                                                    |
| nl_langinfo                | Query language and locale information                                                       |
| nl2br                      | 在字符串所有新行之前插入 HTML 换行标记                                                      |
| number_format              | 以千位分隔符方式格式化一个数字                                                              |
| ord                        | 转换字符串第一个字节为 0-255 之间的值                                                       |
| parse_str                  | 将字符串解析成多个变量                                                                      |
| print                      | 输出字符串                                                                                  |
| printf                     | 输出格式化字符串                                                                            |
| quoted_printable_decode    | 将 quoted-printable 字符串转换为 8-bit 字符串                                               |
| quoted_printable_encode    | 将 8-bit 字符串转换成 quoted-printable 字符串                                               |
| quotemeta                  | 转义元字符集                                                                                |
| rtrim                      | 删除字符串末端的空白字符（或者其他字符）                                                    |
| setlocale                  | 设置地区信息                                                                                |
| sha1_file                  | 计算文件的 sha1 散列值                                                                      |
| sha1                       | 计算字符串的 sha1 散列值                                                                    |
| similar_text               | 计算两个字符串的相似度                                                                      |
| soundex                    | Calculate the soundex key of a string                                                       |
| sprintf                    | Return a formatted string                                                                   |
| sscanf                     | 根据指定格式解析输入的字符                                                                  |
| str_contains               | Determine if a string contains a given substring                                            |
| str_ends_with              | Checks if a string ends with a given substring                                              |
| str_getcsv                 | 解析 CSV 字符串为一个数组                                                                   |
| str_ireplace               | str_replace 的忽略大小写版本                                                                |
| str_pad                    | 使用另一个字符串填充字符串为指定长度                                                        |
| str_repeat                 | 重复一个字符串                                                                              |
| str_replace                | 子字符串替换                                                                                |
| str_rot13                  | 对字符串执行 ROT13 转换                                                                     |
| str_shuffle                | 随机打乱一个字符串                                                                          |
| str_split                  | 将字符串转换为数组                                                                          |
| str_starts_with            | Checks if a string starts with a given substring                                            |
| str_word_count             | 返回字符串中单词的使用情况                                                                  |
| strcasecmp                 | 二进制安全比较字符串（不区分大小写）                                                        |
| strchr                     | 别名 strstr                                                                                 |
| strcmp                     | 二进制安全字符串比较                                                                        |
| strcoll                    | 基于区域设置的字符串比较                                                                    |
| strcspn                    | 获取不匹配遮罩的起始子字符串的长度                                                          |
| strip_tags                 | 从字符串中去除 HTML 和 PHP 标记                                                             |
| stripcslashes              | 反引用一个使用 addcslashes 转义的字符串                                                     |
| stripos                    | 查找字符串首次出现的位置（不区分大小写）                                                    |
| stripslashes               | 反引用一个引用字符串                                                                        |
| stristr                    | strstr 函数的忽略大小写版本                                                                 |
| strlen                     | 获取字符串长度                                                                              |
| strnatcasecmp              | 使用“自然顺序”算法比较字符串（不区分大小写）                                                |
| strnatcmp                  | 使用自然排序算法比较字符串                                                                  |
| strncasecmp                | 二进制安全比较字符串开头的若干个字符（不区分大小写）                                        |
| strncmp                    | 二进制安全比较字符串开头的若干个字符                                                        |
| strpbrk                    | 在字符串中查找一组字符的任何一个字符                                                        |
| strpos                     | 查找字符串首次出现的位置                                                                    |
| strrchr                    | 查找指定字符在字符串中的最后一次出现                                                        |
| strrev                     | 反转字符串                                                                                  |
| strripos                   | 计算指定字符串在目标字符串中最后一次出现的位置（不区分大小写）                              |
| strrpos                    | 计算指定字符串在目标字符串中最后一次出现的位置                                              |
| strspn                     | 计算字符串中全部字符都存在于指定字符集合中的第一段子串的长度。                              |
| strstr                     | 查找字符串的首次出现                                                                        |
| strtok                     | 标记分割字符串                                                                              |
| strtolower                 | 将字符串转化为小写                                                                          |
| strtoupper                 | 将字符串转化为大写                                                                          |
| strtr                      | 转换指定字符                                                                                |
| substr_compare             | 二进制安全比较字符串（从偏移位置比较指定长度）                                              |
| substr_count               | 计算字串出现的次数                                                                          |
| substr_replace             | 替换字符串的子串                                                                            |
| substr                     | 返回字符串的子串                                                                            |
| trim                       | 去除字符串首尾处的空白字符（或者其他字符）                                                  |
| ucfirst                    | 将字符串的首字母转换为大写                                                                  |
| ucwords                    | 将字符串中每个单词的首字母转换为大写                                                        |
| vfprintf                   | 将格式化字符串写入流                                                                        |
| vprintf                    | 输出格式化字符串                                                                            |
| vsprintf                   | 返回格式化字符串                                                                            |
| wordwrap                   | 打断字符串为指定数量的字串                                                                  |

</details>

- [url](String/url.php): url
- [getUrlParams](String/getUrlParams.php): 从 url 字符串获取参数
