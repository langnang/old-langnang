- # JavaScript Error 参考手册

  - [JS Date](https://www.w3school.com.cn/jsref/jsref_obj_date.asp)
  - [JS Global](https://www.w3school.com.cn/jsref/jsref_obj_global.asp)

  ## Error 对象

  Error 对象提供发生错误时的错误信息。

  ### 实例

  在此例中，我们将 "alert" 写为 "adddlert" 以故意产生错误。

  返回错误名称和错误描述：

  ```
  try {
    adddlert("Welcome");
  }
  catch(err) {
    document.getElementById("demo").innerHTML = err.name + "<br>" + err.message;
  }
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_error)

  有关 JavaScript 错误的知识，请阅读我们的 [JavaScript 错误教程](https://www.w3school.com.cn/js/js_errors.asp)。

  ## Error 对象属性

  | 属性                                                         | 描述                           |
  | ------------------------------------------------------------ | ------------------------------ |
  | [name](https://www.w3school.com.cn/jsref/prop_error_name.asp) | 设置或返回错误名称。           |
  | [message](https://www.w3school.com.cn/jsref/prop_error_message.asp) | 设置或返回错误消息（字符串）。 |

  ## 非标准 Error 对象属性

  Mozilla 和 Microsoft 定义了一些非标准的 error 对象属性：

  - fileName (Mozilla)
  - lineNumber (Mozilla)
  - columnNumber (Mozilla)
  - stack (Mozilla)
  - description (Microsoft)
  - number (Microsoft)

  请勿在公共网站上使用这些属性。它们并非在所有浏览器中都适用。
