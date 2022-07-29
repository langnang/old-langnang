- # JavaScript Boolean 参考手册

  - [JS Array](https://www.w3school.com.cn/jsref/jsref_obj_array.asp)
  - [JS Class](https://www.w3school.com.cn/jsref/jsref_classes.asp)

  ## JavaScript Boolean（布尔）

  JavaScript 布尔值可以有以下两个值之一：true 或 false。

  ## Boolean() 函数

  您可以使用 Boolean() 函数来确定表达式是否为真：

  ### 实例

  ```
  Boolean(10 > 9)     // 返回 true
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_boolean_expression_1)

  或者更简单：

  ### 实例

  ```
  (10 > 9)            // 也返回 true
  10 > 9              // 也返回 true
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_boolean_expression_2)

  如需有关布尔值的教程，请阅读我们的 [JavaScript Boolean 教程](https://www.w3school.com.cn/js/js_booleans.asp)。

  ## Boolean 属性

  | 属性                                                         | 描述                                     |
  | ------------------------------------------------------------ | ---------------------------------------- |
  | [constructor](https://www.w3school.com.cn/jsref/jsref_constructor_boolean.asp) | 返回创建 JavaScript Boolean 原型的函数。 |
  | [prototype](https://www.w3school.com.cn/jsref/jsref_prototype_boolean.asp) | 允许您向 Boolean 原型添加属性和方法。    |

  ## Boolean 方法

  | 方法                                                         | 描述                               |
  | ------------------------------------------------------------ | ---------------------------------- |
  | [toString()](https://www.w3school.com.cn/jsref/jsref_tostring_boolean.asp) | 将布尔值转换为字符串，并返回结果。 |
  | [valueOf()](https://www.w3school.com.cn/jsref/jsref_valueof_boolean.asp) | 返回布尔值的原始值。               |

  ## Boolean 对象

  Boolean 对象表示两个值："true" 或 "false"。

  ### 创建 Boolean 对象的语法：

  ```
  new Boolean(value);	//构造函数
  Boolean(value);		//转换函数
  ```

  ### 参数

  参数 *value* 由布尔对象存放的值或者要转换成布尔值的值。

  ### 返回值

  当作为一个构造函数（带有运算符 new）调用时，Boolean() 将把它的参数转换成一个布尔值，并且返回一个包含该值的 Boolean 对象。

  如果作为一个函数（不带有运算符 new）调用时，Boolean() 只将把它的参数转换成一个原始的布尔值，并且返回这个值。

  注释：如果省略 value 参数，或者设置为 0、-0、null、""、false、undefined 或 NaN，则该对象设置为 false。否则设置为 true（即使 value 参数是字符串 "false"）。

  ## Boolean 对象描述

  在 JavaScript 中，布尔值是一种基本的数据类型。Boolean 对象是一个将布尔值打包的布尔对象。Boolean 对象主要用于提供将布尔值转换成字符串的 toString() 方法。

  当调用 toString() 方法将布尔值转换成字符串时（通常是由 JavaScript 隐式地调用），JavaScript 会内在地将这个布尔值转换成一个临时的 Boolean 对象，然后调用这个对象的 toString() 方法。

  ## 课外书

  如需更多信息，请阅读 JavaScript 高级教程中的相关内容：

  - [ECMAScript 引用类型](https://www.w3school.com.cn/js/pro_js_referencetypes.asp)

    引用类型通常叫做类（class）或对象。本节讲解 ECMAScript 的预定义引用类型。
