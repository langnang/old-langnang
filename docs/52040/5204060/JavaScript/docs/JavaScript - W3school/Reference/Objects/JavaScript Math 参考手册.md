- # JavaScript Math 参考手册

  - [JS JSON](https://www.w3school.com.cn/jsref/jsref_obj_json.asp)
  - [JS Number](https://www.w3school.com.cn/jsref/jsref_obj_number.asp)

  ## Math 对象

  Math 对象允许您执行数学任务。

  Math 不是构造函数。Math 的所有属性/方法都可以通过使用 Math 作为对象来调用，而无需创建它：

  ```
  var x = Math.PI;            // 返回 PI
  var y = Math.sqrt(16);      // 返回 16 的平方根
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_math)

  有关 Math 对象的教程，请阅读我们的 [JavaScript 数学教程](https://www.w3school.com.cn/js/js_math.asp)。

  ## Math 对象属性

  | 属性                                                         | 描述                                    |
  | ------------------------------------------------------------ | --------------------------------------- |
  | [E](https://www.w3school.com.cn/jsref/jsref_e.asp)           | 返回欧拉数（约 2.718）。                |
  | [LN2](https://www.w3school.com.cn/jsref/jsref_ln2.asp)       | 返回 2 的自然对数（约 0.693）。         |
  | [LN10](https://www.w3school.com.cn/jsref/jsref_ln10.asp)     | 返回 10 的自然对数（约 2.302）。        |
  | [LOG2E](https://www.w3school.com.cn/jsref/jsref_log2e.asp)   | 返回 E 的以 2 为底的对数（约 1.442）。  |
  | [LOG10E](https://www.w3school.com.cn/jsref/jsref_log10e.asp) | 返回 E 的以 10 为底的对数（约 0.434）。 |
  | [PI](https://www.w3school.com.cn/jsref/jsref_pi.asp)         | 返回 PI（约 3.14）。                    |
  | [SQRT1_2](https://www.w3school.com.cn/jsref/jsref_sqrt1_2.asp) | 返回 1/2 的平方根（约 0.707）。         |
  | [SQRT2](https://www.w3school.com.cn/jsref/jsref_sqrt2.asp)   | 返回 2 的平方根（约 1.414）。           |

  ## Math 对象方法

  | 方法                                                         | 描述                                                       |
  | ------------------------------------------------------------ | ---------------------------------------------------------- |
  | [abs(*x*)](https://www.w3school.com.cn/jsref/jsref_abs.asp)  | 返回 x 的绝对值。                                          |
  | [acos(*x*)](https://www.w3school.com.cn/jsref/jsref_acos.asp) | 返回 x 的反余弦值，以弧度为单位。                          |
  | [acosh(*x*)](https://www.w3school.com.cn/jsref/jsref_acosh.asp) | 返回 x 的双曲反余弦值。                                    |
  | [asin(*x*)](https://www.w3school.com.cn/jsref/jsref_asin.asp) | 返回 x 的反正弦值，以弧度为单位。                          |
  | [asinh(*x*)](https://www.w3school.com.cn/jsref/jsref_asinh.asp) | 返回 x 的双曲反正弦值。                                    |
  | [atan(*x*)](https://www.w3school.com.cn/jsref/jsref_atan.asp) | 返回 x 的反正切值，返回的值是 -PI/2 到 PI/2 之间的弧度值。 |
  | [atan2(*y*, *x*)](https://www.w3school.com.cn/jsref/jsref_atan2.asp) | 返回其参数商的反正切值。                                   |
  | [atanh(*x*)](https://www.w3school.com.cn/jsref/jsref_atanh.asp) | 返回 x 的双曲反正切值。                                    |
  | [cbrt(*x*)](https://www.w3school.com.cn/jsref/jsref_cbrt.asp) | 返回 x 的三次方根。                                        |
  | [ceil(*x*)](https://www.w3school.com.cn/jsref/jsref_ceil.asp) | 返回 x，向上舍入为最接近的整数。                           |
  | [clz32(*x*)](https://www.w3school.com.cn/jsref/jsref_clz32.asp) | 返回 x 的 32 位二进制表示中前导零的数量。                  |
  | [cos(*x*)](https://www.w3school.com.cn/jsref/jsref_cos.asp)  | 返回 x 的余弦值（x 以弧度为单位）。                        |
  | [cosh(*x*)](https://www.w3school.com.cn/jsref/jsref_cosh.asp) | 返回 x 的双曲余弦值。                                      |
  | [exp(*x*)](https://www.w3school.com.cn/jsref/jsref_exp.asp)  | 返回 Ex 的值。                                             |
  | [expm1(*x*)](https://www.w3school.com.cn/jsref/jsref_expm1.asp) | 返回 Ex 减去 1 的值。                                      |
  | [floor(*x*)](https://www.w3school.com.cn/jsref/jsref_floor.asp) | 返回 x，向下舍入为最接近的整数。                           |
  | [fround(*x*)](https://www.w3school.com.cn/jsref/jsref_fround.asp) | 返回数的最接近的（32 位单精度）浮点表示。                  |
  | [log(*x*)](https://www.w3school.com.cn/jsref/jsref_log.asp)  | 返回 x 的自然对数。                                        |
  | [log10(*x*)](https://www.w3school.com.cn/jsref/jsref_log10.asp) | 返回 x 的以 10 为底的对数。                                |
  | [log1p(*x*)](https://www.w3school.com.cn/jsref/jsref_log1p.asp) | 返回 1 + x 的自然对数。                                    |
  | [log2(*x*)](https://www.w3school.com.cn/jsref/jsref_log2.asp) | 返回 x 的以 2 为底的对数。                                 |
  | [max(*x*, *y*, *z*, ..., *n*)](https://www.w3school.com.cn/jsref/jsref_max.asp) | 返回值最高的数字。                                         |
  | [min(*x*, *y*, *z*, ..., *n*)](https://www.w3school.com.cn/jsref/jsref_min.asp) | 返回值最小的数字。                                         |
  | [pow(*x*, *y*)](https://www.w3school.com.cn/jsref/jsref_pow.asp) | 返回 x 的 y 次幂值。                                       |
  | [random()](https://www.w3school.com.cn/jsref/jsref_random.asp) | 返回 0 到 1 之间的随机数。                                 |
  | [round(*x*)](https://www.w3school.com.cn/jsref/jsref_round.asp) | 将 x 舍入为最接近的整数。                                  |
  | [sign(*x*)](https://www.w3school.com.cn/jsref/jsref_sign.asp) | 返回数的符号（检查它是正数、负数还是零）。                 |
  | [sin(*x*)](https://www.w3school.com.cn/jsref/jsref_sin.asp)  | 返回 x 的正弦值（x 以弧度为单位）。                        |
  | [sinh(*x*)](https://www.w3school.com.cn/jsref/jsref_sinh.asp) | 返回 x 的双曲正弦值。                                      |
  | [sqrt(*x*)](https://www.w3school.com.cn/jsref/jsref_sqrt.asp) | 返回 x 的平方根。                                          |
  | [tan(*x*)](https://www.w3school.com.cn/jsref/jsref_tan.asp)  | 返回角度的正切值。                                         |
  | [tanh(*x*)](https://www.w3school.com.cn/jsref/jsref_tanh.asp) | 返回数的双曲正切值。                                       |
  | [trunc(*x*)](https://www.w3school.com.cn/jsref/jsref_trunc.asp) | 返回数字 (x) 的整数部分。                                  |
