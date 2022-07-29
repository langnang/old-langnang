- # JavaScript 全局参考手册

  - [JS Error](https://www.w3school.com.cn/jsref/jsref_obj_error.asp)
  - [JS JSON](https://www.w3school.com.cn/jsref/jsref_obj_json.asp)

  JavaScript 全局属性和函数可用于所有内置 JavaScript 对象。

  ## JavaScript 全局属性

  | 属性                                                         | 描述                           |
  | ------------------------------------------------------------ | ------------------------------ |
  | [Infinity](https://www.w3school.com.cn/jsref/jsref_infinity.asp) | 表示正/负无穷大的数值。        |
  | [NaN](https://www.w3school.com.cn/jsref/jsref_nan.asp)       | “非数字”（"Not-a-Number"）值。 |
  | [undefined](https://www.w3school.com.cn/jsref/jsref_undefined.asp) | 表示变量尚未赋值。             |

  ## JavaScript 全局函数

  | 函数                                                         | 描述                                                         |
  | ------------------------------------------------------------ | ------------------------------------------------------------ |
  | [decodeURI()](https://www.w3school.com.cn/jsref/jsref_decodeuri.asp) | 解码 URI。                                                   |
  | [decodeURIComponent()](https://www.w3school.com.cn/jsref/jsref_decodeuricomponent.asp) | 解码 URI 组件。                                              |
  | [encodeURI()](https://www.w3school.com.cn/jsref/jsref_encodeuri.asp) | 对 URI 进行编码。                                            |
  | [encodeURIComponent()](https://www.w3school.com.cn/jsref/jsref_encodeuricomponent.asp) | 对 URI 组件进行编码。                                        |
  | [escape()](https://www.w3school.com.cn/jsref/jsref_escape.asp) | 在 1.5 版中已弃用。请使用 [encodeURI()](https://www.w3school.com.cn/jsref/jsref_encodeuri.asp) 或 [encodeURIComponent()](https://www.w3school.com.cn/jsref/jsref_encodeuricomponent.asp) 代替。 |
  | [eval()](https://www.w3school.com.cn/jsref/jsref_eval.asp)   | 评估字符串并像脚本代码一样执行它。                           |
  | [isFinite()](https://www.w3school.com.cn/jsref/jsref_isfinite.asp) | 确定值是否是有限的合法数。                                   |
  | [isNaN()](https://www.w3school.com.cn/jsref/jsref_isnan.asp) | 确定值是否是非法数字。                                       |
  | [Number()](https://www.w3school.com.cn/jsref/jsref_number.asp) | 将对象的值转换为数字。                                       |
  | [parseFloat()](https://www.w3school.com.cn/jsref/jsref_parsefloat.asp) | 解析字符串并返回浮点数。                                     |
  | [parseInt()](https://www.w3school.com.cn/jsref/jsref_parseint.asp) | 解析字符串并返回整数。                                       |
  | [String()](https://www.w3school.com.cn/jsref/jsref_string.asp) | 将对象的值转换为字符串。                                     |
  | [unescape()](https://www.w3school.com.cn/jsref/jsref_unescape.asp) | 在 1.5 版中已弃用。请使用 [decodeURI()](https://www.w3school.com.cn/jsref/jsref_decodeuri.asp) 或 [decodeURIComponent()](https://www.w3school.com.cn/jsref/jsref_decodeuricomponent.asp) 代替。 |

  ## 函数还是方法？

  调用上面列表中的全局函数而不是全局方法是有意义的，因为函数是全局调用的，而非任何对象。

  无论如何，您也可以调用这些函数方法，因为它们是其运行环境的全局对象的方法。在 Web 浏览器中，全局对象是浏览器窗口。那么 isNaN() 其实就是一个窗口方法：window.isNaN()。

  ## 全局对象描述

  全局对象是预定义的对象，作为 JavaScript 的全局函数和全局属性的占位符。通过使用全局对象，可以访问所有其他所有预定义的对象、函数和属性。全局对象不是任何对象的属性，所以它没有名称。

  在顶层 JavaScript 代码中，可以用关键字 this  引用全局对象。但通常不必用这种方式引用全局对象，因为全局对象是作用域链的头，这意味着所有非限定性的变量和函数名都会作为该对象的属性来查询。例如，当JavaScript 代码引用 parseInt() 函数时，它引用的是全局对象的 parseInt 属性。全局对象是作用域链的头，还意味着在顶层  JavaScript 代码中声明的所有变量都将成为全局对象的属性。

  全局对象只是一个对象，而不是类。既没有构造函数，也无法实例化一个新的全局对象。

  在 JavaScript 代码嵌入一个特殊环境中时，全局对象通常具有环境特定的属性。实际上，ECMAScript  标准没有规定全局对象的类型，JavaScript 的实现或嵌入的 JavaScript  都可以把任意类型的对象作为全局对象，只要该对象定义了这里列出的基本属性和函数。例如，在允许通过 LiveConnect 或相关的技术来脚本化  Java 的 JavaScript 实现中，全局对象被赋予了这里列出的 java 和 Package 属性以及 getClass()  方法。而在客户端 JavaScript 中，全局对象就是 Window 对象，表示允许 JavaScript 代码的 Web 浏览器窗口。

  ### 例子

  在 JavaScript 核心语言中，全局对象的预定义属性都是不可枚举的，所有可以用 for/in 循环列出所有隐式或显式声明的全局变量，如下所示：

  ```
  var variables = "";
  
  for (var name in this) 
  {
  variables += name + "<br />";
  }
  
  document.write(variables);
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jseg_global)
