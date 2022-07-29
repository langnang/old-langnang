- # JavaScript 运算符参考手册

  - [JS String](https://www.w3school.com.cn/jsref/jsref_obj_string.asp)
  - [JS 语句](https://www.w3school.com.cn/jsref/jsref_statements.asp)

  JavaScript 运算符用于赋值、比较值、执行算术运算等。

  ## JavaScript 算术运算符

  算术运算符用于在变量和/或值之间执行算术。

  给定 **y = 5**，下表解释了算术运算符：

  | 运算符  | 描述         | 例子      | y 中的结果                                                   | x 中的结果 | 试一试                                                       |
  | ------- | ------------ | --------- | ------------------------------------------------------------ | ---------- | ------------------------------------------------------------ |
  | +       | 加           | x = y + 2 | y = 5                                                        | x = 7      | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_add) |
  | -       | 减           | x = y - 2 | y = 5                                                        | x = 3      | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_sub) |
  | *       | 乘           | x = y * 2 | y = 5                                                        | x = 10     | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_mult) |
  | /       | 除           | x = y / 2 | y = 5                                                        | x = 2.5    | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_div) |
  | %       | 模数（除余） | x = y % 2 | y = 5                                                        | x = 1      | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_mod) |
  | ++      | 累加         | x = ++y   | y = 6                                                        | x = 6      | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_incr_1) |
  | x = y++ | y = 6        | x = 5     | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_incr_2) |            |                                                              |
  | --      | 递减         | x = --y   | y = 4                                                        | x = 4      | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_decr_1) |
  | x = y-- | y = 4        | x = 5     | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_decr_2) |            |                                                              |

  有关算术运算符的知识，请阅读我们的 [JavaScript 算术教程](https://www.w3school.com.cn/js/js_arithmetic.asp)。

  ## JavaScript 赋值运算符

  赋值运算符用于为 JavaScript 变量赋值。

  给定 **x = 10** 且 **y = 5**，下表解释了赋值运算符：

  | 运算符 | 例子   | 等同于    | x 中的结果 | 试一试                                                       |
  | ------ | ------ | --------- | ---------- | ------------------------------------------------------------ |
  | =      | x = y  | x = y     | x = 5      | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_equal) |
  | +=     | x += y | x = x + y | x = 15     | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_plusequal) |
  | -=     | x -= y | x = x - y | x = 5      | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_minequal) |
  | *=     | x *= y | x = x * y | x = 50     | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_multequal) |
  | /=     | x /= y | x = x / y | x = 2      | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_divequal) |
  | %=     | x %= y | x = x % y | x = 0      | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_modequal) |

  有关赋值运算符的知识，请阅读我们的 [JavaScript 赋值教程](https://www.w3school.com.cn/js/js_assignment.asp)。

  ## JavaScript 字符串运算符

  \+ 运算符和 += 运算符还可用于连接（添加）字符串。

  给定 **text1 = "Good "**、**text2 = "Morning"**，以及 **text3 = ""**，下表解释了该运算符：

  | 运算符 | 例子                  | text1          | text2     | text3          | 试一试                                                       |
  | ------ | --------------------- | -------------- | --------- | -------------- | ------------------------------------------------------------ |
  | +      | text3 = text1 + text2 | "Good "        | "Morning" | "Good Morning" | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_string_1) |
  | +=     | text1 += text2        | "Good Morning" | "Morning" | ""             | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_string_2) |

  ## 比较运算符

  在逻辑语句中使用比较运算符来确定变量或值之间的相等性或差异。

  给定 **x = 5**，下表解释了比较运算符：

  | 运算符  | 描述                     | 比较                                                         | 返回  | 试一试                                                       |
  | ------- | ------------------------ | ------------------------------------------------------------ | ----- | ------------------------------------------------------------ |
  | ==      | 等于                     | x == 8                                                       | false | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison_1) |
  | x == 5  | true                     | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison_2) |       |                                                              |
  | ===     | 相等值和相等类型         | x === "5"                                                    | false | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison_3) |
  | x === 5 | true                     | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison_4) |       |                                                              |
  | !=      | 不相等                   | x != 8                                                       | true  | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison_5) |
  | !==     | 不相等的值或不相等的类型 | x !== "5"                                                    | true  | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison_6) |
  | x !== 5 | false                    | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison_7) |       |                                                              |
  | >       | 大于                     | x > 8                                                        | false | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison_8) |
  | <       | 小于                     | x < 8                                                        | true  | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison_9) |
  | >=      | 大于或等于               | x >= 8                                                       | false | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison_10) |
  | <=      | 小于或等于               | x <= 8                                                       | true  | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison_11) |

  有关比较运算符的知识，请阅读我们的 [JavaScript 比较教程](https://www.w3school.com.cn/js/js_comparisons.asp)。

  ## 条件（三元）运算符

  条件运算符根据条件将值赋给变量。

  ### 语法

  ```
  variablename = (condition) ? value1:value2
  ```

  ### 实例

  ```
  voteable = (age < 18) ? "Too young":"Old enough";
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_comparison)

  ### 例子解释：

  如果变量 "age" 的值小于 18，则变量 "voteable" 的值将为 "Too young"，否则，"voteable" 的值将为 "Old enough"。

  ## 逻辑运算符

  逻辑运算符用于确定变量或值之间的逻辑。

  给定 **x = 6** 且 **y = 3**，下表解释了逻辑运算符：

  | 运算符 | 描述 | 例子                            | 试一试                                                       |
  | ------ | ---- | ------------------------------- | ------------------------------------------------------------ |
  | &&     | and  | (x < 10 && y > 1) is true       | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_and) |
  | \|\|   | or   | (x === 5 \|\| y === 5) is false | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_or) |
  | !      | not  | !(x === y) is true              | [试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_not) |

  ## JavaScript 位运算符

  位运算符可处理 32 位数字。该运算中的任何数字操作数都将转换为 32 位数字。结果将转换回 JavaScript 数字。

  | 运算符 | 描述        | 例子       | 等同于       | 结果 | 十进制 |
  | ------ | ----------- | ---------- | ------------ | ---- | ------ |
  | &      | AND         | x = 5 & 1  | 0101 & 0001  | 0001 | 1      |
  | \|     | OR          | x = 5 \| 1 | 0101 \| 0001 | 0101 | 5      |
  | ~      | NOT         | x = ~ 5    | ~0101        | 1010 | 10     |
  | ^      | XOR         | x = 5 ^ 1  | 0101 ^       | 0100 | 4      |
  | <<     | Left shift  | x = 5 << 1 | 0101 << 1    | 1010 | 10     |
  | >>     | Right shift | x = 5 >> 1 | 0101 >> 1    | 0010 | 2      |

  上面的例子使用了 4 位无符号的示例。但是 JavaScript 使用 32 位带符号的数字。

  因此，在 JavaScript 中，~ 5 不会返回 10，而是返回 -6。

  ~00000000000000000000000000000101 将返回 11111111111111111111111111111010

  ## typeof 运算符

  **typeof** 运算符返回变量、对象、函数或表达式的类型：

  ### 实例

  ```
  typeof "Bill"                 // 返回 string
  typeof 3.14                   // 返回 number
  typeof NaN                    // 返回 number
  typeof false                  // 返回 boolean
  typeof [1, 2, 3, 4]           // 返回 object
  typeof {name:'Bill', age:19}  // 返回 object
  typeof new Date()             // 返回 object
  typeof function () {}         // 返回 function
  typeof myCar                  // 返回 undefined（如果未声明 myCar）
  typeof null                   // 返回 object
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_typeof)

  请注意：

  - NaN 的数据类型是 number
  - 数组的数据类型是 object
  - 日期的数据类型是 object
  - null 的数据类型是 object
  - 未定义变量的数据类型是 undefined

  您不能使用 typeof 定义 JavaScript 对象是否为数组（或日期）。

  您无法使用 typeof 来定义 JavaScript 对象是否为数组（或日期）。

  ## delete 运算符

  **delete** 运算符从对象中删除属性：

  ### 实例

  ```
  var person = {firstName:"Bill", lastName:"Gates", age:19, eyeColor:"blue"};
  delete person.age;   // 删除 person["age"];
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_delete)

  delete 运算符会同时删除属性的值和属性本身。

  删除后，再次将其重新添加前，无法使用该属性。

  delete 运算符旨在用于对象属性。它对变量或函数没有影响。

  注释：不应在预定义的 JavaScript 对象属性上使用 delete 运算符。这么做可能会使您的应用程序崩溃。

  ## in 运算符

  如果指定的属性在指定的对象中，则 **in** 运算符将返回 true，否则返回 false：

  ### 实例

  ```
  // 数组
  var cars = ["Saab", "Volvo", "BMW"];
  "Saab" in cars          // 返回 false（指定索引号而不是值）
  0 in cars               // 返回 true
  1 in cars               // 返回 true
  4 in cars               // 返回 false（不存在）
  "length" in cars        // 返回 true（length 是数组属性）
  
  // 对象
  var person = {firstName:"Bill", lastName:"Gates", age:19};
  "firstName" in person   // 返回 true
  "age" in person         // 返回 true
  
  // 预定义对象
  "PI" in Math            // 返回 true
  "NaN" in Number         // 返回 true
  "length" in String      // 返回 true
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_in)

  ## instanceof 运算符

  如果指定对象是指定对象的实例，则 **instanceof** 运算符返回 true：

  ### 实例

  ```
  var cars = ["Saab", "Volvo", "BMW"];
  
  cars instanceof Array;          // 返回 true
  cars instanceof Object;         // 返回 true
  cars instanceof String;         // 返回 false
  cars instanceof Number;         // 返回 false
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_instanceof)

  ## void 运算符

  **void** 运算符计算一个表达式并返回 **undefined**。该运算符通常用于使用 "void(0)" 来获取未定义的原始值（在计算表达式而不使用返回值时很有用）。

  ### 实例

  ```
  <a href="javascript:void(0);">
    无用的链接
  </a>
  
  <a href="javascript:void(document.body.style.backgroundColor='red');">
    单击我将 body 的背景色更改为红色
  </a>
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_oper_void)
