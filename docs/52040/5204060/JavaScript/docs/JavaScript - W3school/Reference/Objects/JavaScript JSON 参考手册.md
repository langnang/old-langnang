- # JavaScript JSON 参考手册

  - [JS Global](https://www.w3school.com.cn/jsref/jsref_obj_global.asp)
  - [JS Math](https://www.w3school.com.cn/jsref/jsref_obj_math.asp)

  ## JSON（JavaScript Object Notation，JavaScript 对象表示法）

  JSON 是用于存储和传输数据的格式。

  JSON 是文本，文本可以在任何地方传输，并可通过任何编程语言读取。

  JavaScript 对象可以转换为 JSON，JSON 可以转换回 JavaScript 对象。

  这样，我们可以将数据作为 JavaScript 对象使用，而无需复杂的解析或转换。

  ### 实例

  发送 JSON：

  ```
  // JavaScript 对象...：
  var myObj = { "name":"Bill", "age":19, "city":"Seattle" };
  
  // ...转换为 JSON：
  var myJSON = JSON.stringify(myObj);
  
  // 发送 JSON：
  window.location = "demo_json.php?x=" + myJSON;
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_json_send)

  如需 JSON 的更多知识，请阅读我们的 [JSON 教程](https://www.w3school.com.cn/js/js_json_intro.asp)。

  ## JSON 方法

  | 方法                                                         | 描述                                     |
  | ------------------------------------------------------------ | ---------------------------------------- |
  | [parse()](https://www.w3school.com.cn/jsref/jsref_parse_json.asp) | 解析 JSON 字符串并返回 JavaScript 对象。 |
  | [stringify()](https://www.w3school.com.cn/jsref/jsref_stringify.asp) | 将 JavaScript 对象转换为 JSON 字符串。   |

  ## 有效数据类型

  在 JSON 中，值必须是以下数据类型之一：

  - 字符串
  - 数字
  - 对象（包含有效的 JSON 值）
  - 数组
  - 布尔
  - null

  JSON 值不能是以下数据类型之一：

  - 函数
  - 日期
  - undefined

  ## 更多实例

  ### 实例

  接收 JSON：

  ```
  // myJSON 是以 JSON 格式接收的文本
  // 将 JSON 转换为 JavaScript 对象：
  var myObj = JSON.parse(myJSON);
  document.getElementById("demo").innerHTML = myObj.name;
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_json_receive)

  ### 实例

  使用 localStorage 将数据存储为 JSON：

  ```
  // 存储数据：
  myObj = { "name":"Bill", "age":19, "city":"Seattle" };
  myJSON = JSON.stringify(myObj);
  localStorage.setItem("testJSON", myJSON);
  
  // 取回数据：
  text = localStorage.getItem("testJSON");
  obj = JSON.parse(text);
  document.getElementById("demo").innerHTML = obj.name;
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_json_store)

  如需 JSON 的更多知识，请阅读我们的 [JSON 教程](https://www.w3school.com.cn/js/js_json_intro.asp)。
