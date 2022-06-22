# Math

Math 是一个内置对象， 它具有数学常数和函数的属性和方法。不是一个函数对象。

Math 适用于 Number 类型。它不支持 BigInt。

## 目录

## 描述

与其他全局对象不同的是，Math 不是一个构造器。 Math 的所有属性与方法都是静态的。引用圆周率的写法是 Math.PI，调用正余弦函数的写法是 Math.sin(x)，x 是要传入的参数。Math 的常量是使用 JavaScript 中的全精度浮点数来定义的。

属性
Math.E
欧拉常数，自然对数的底数, 约等于 2.718。
Math.LN2
2 的自然对数, 约等于 0.693。
Math.LN10
10 的自然对数, 约等于 2.303。
Math.LOG2E
以 2 为底 E 的对数, 约等于 1.443。
Math.LOG10E
以 10 为底 E 的对数, 约等于 0.434。
Math.PI
圆周率，一个圆的周长和直径之比，约等于 3.14159。
Math.SQRT1_2
1/2 的平方根, 约等于 0.707。
Math.SQRT2
2 的平方根,约等于 1.414。
Properties inherited from Object:
constructor, **parent**, **proto**
方法
需要注意的是，sin(), cos(), tan(), asin(), acos(), atan(), atan2() 是以弧度返回值的。可以通过除法（Math.PI / 180）或其他方法把弧度转换为角度。

需要注意的是，很多数学函数都有一个精度，并且精度在不同实现中也是不相同的。这就意味着不同的浏览器会给出不同的结果，甚至相同的 JS 引擎在不同的系统或架构下也会给出不同的结果。

Math.abs(x)
返回 x 的绝对值。
Math.acos(x)
返回 x 的反余弦值。
Math.acosh(x)
返回 x 的反双曲余弦值。
Math.asin(x)
返回 x 的反正弦值。
Math.asinh(x)
返回 x 的反双曲正弦值。
Math.atan(x)
以介于 -PI/2 与 PI/2 弧度之间的数值来返回 x 的反正切值。
Math.atanh(x)
返回 x 的反双曲正切值。
Math.atan2(y, x)
返回 y/x 的反正切值。
Math.cbrt(x)
返回 x 的立方根。
Math.ceil(x)
返回 x 向上取整后的值。
Math.clz32(x)
返回一个 32 位整数的前导零的数量。
Math.cos(x)
返回 x 的余弦值。
Math.cosh(x)
返回 x 的双曲余弦值。
Math.exp(x)
返回 Ex，当 x 为参数，E 是欧拉常数（2.718...），自然对数的底数。
Math.expm1(x)
返回 exp(x) - 1 的值。
Math.floor(x)
返回小于 x 的最大整数。
Math.fround(x)
返回数字的最接近的单精度浮点型表示。
Math.hypot([x[, y[, …]]])
返回其参数平方和的平方根。
Math.imul(x, y)
返回 32 位整数乘法的结果。
Math.log(x)
返回一个数的自然对数（loge，即 ln）。
Math.log1p(x)
返回 1 加上一个数字的的自然对数（loge，即 ln）。
Math.log10(x)
返回以 10 为底数的 x 的对数。
Math.log2(x)
返回以 2 为底数的 x 的对数。
Math.max([x[, y[, …]]])
返回 0 个到多个数值中最大值。
Math.min([x[, y[, …]]])
返回 0 个到多个数值中最小值。
Math.pow(x, y)
返回 x 的 y 次幂。
Math.random()
返回 0 到 1 之间的伪随机数。
Math.round(x)
返回四舍五入后的整数。
Math.sign(x)
返回 x 的符号函数, 判定 x 是正数,负数还是 0。
Math.sin(x)
返回正弦值。
Math.sinh(x)
返回 x 的双曲正弦值。
Math.sqrt(x)
返回 x 的平方根。
Math.tan(x)
返回 x 的正切值。
Math.tanh(x)
返回 x 的双曲正切值。
Math.toSource()
返回字符串 "Math"。
Math.trunc(x)
返回 x 的整数部分，直接去除小数点及之后的部分。
