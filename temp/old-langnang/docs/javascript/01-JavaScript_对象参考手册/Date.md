# 日期/时间

> 创建一个 JavaScript Date 实例，该实例呈现时间中的某个时刻。Date 对象则基于 Unix Time Stamp，即自 1970 年 1 月 1 日（UTC）起经过的毫秒数。

- [日期时间](#日期时间)
  - [语法](#语法)
  - [参数](#参数)
  - [简介](#简介)
  - [属性](#属性)
  - [方法](#方法)
- [实例](#实例)
  - [Date.prototype 方法 Getter](#dateprototype-方法-getter)
  - [Setter](#setter)
  - [Conversion getter](#conversion-getter)
- [封装](#封装)
- [参考链接](#参考链接)

## 日期时间

### 语法

```
new Date();
new Date(value);
new Date(dateString);
new Date(year, monthIndex [, day [, hours [, minutes [, seconds [, milliseconds]]]]]);
```

### 参数

注意 参数 monthIndex 是从“0”开始计算的，这就意味着一月份为“0”，十二月份为“11”。

注意：当 Date 作为构造函数调用并传入多个参数时，如果数值大于合理范围时（如月份为 13 或者分钟数为 70），相邻的数值会被调整。比如 new Date(2013, 13, 1)等于 new Date(2014, 1, 1)，它们都表示日期 2014-02-01（注意月份是从 0 开始的）。其他数值也是类似，new Date(2013, 2, 1, 0, 70)等于 new Date(2013, 2, 1, 1, 10)，都表示同一个时间：2013-03-01T01:10:00。

注意：当 Date 作为构造函数调用并传入多个参数时，所定义参数代表的是当地时间。如果需要使用世界协调时 UTC，使用 new Date(Date.UTC(...)) 和相同参数。

Date()构造函数有四种基本形式

**没有参数**
如果没有提供参数，那么新创建的 Date 对象表示实例化时刻的日期和时间。

**Unix 时间戳**

- value
  > 一个 Unix 时间戳（Unix Time Stamp），它是一个整数值，表示自 1970 年 1 月 1 日 00:00:00 UTC（the Unix epoch）以来的毫秒数，忽略了闰秒。请注意大多数 Unix 时间戳功能仅精确到最接近的秒。

**时间戳字符串**

- dateString
  > 表示日期的字符串值。该字符串应该能被 Date.parse() 正确方法识别（即符合 IETF-compliant RFC 2822 timestamps 或 version of ISO8601）。
  > 注意: 由于浏览器之间的差异与不一致性，强烈不推荐使用 Date 构造函数来解析日期字符串 (或使用与其等价的 Date.parse)。对 RFC 2822 格式的日期仅有约定俗称的支持。 对 ISO 8601 格式的支持中，仅有日期的串 (例如 "1970-01-01") 会被处理为 UTC 而不是本地时间，与其他格式的串的处理不同。

**分别提供日期与时间的每一个成员**
当至少提供了年份与月份时，这一形式的 Date() 返回的 Date 对象中的每一个成员都来自下列参数。没有提供的成员将使用最小可能值（对日期为 1，其他为 0）。

- year
  > 表示年份的整数值。 0 到 99 会被映射至 1900 年至 1999 年，其它值代表实际年份。参见 示例。
- monthIndex
  > 表示月份的整数值，从 0（1 月）到 11（12 月）。
- day 可选
  > 表示一个月中的第几天的整数值，从 1 开始。默认值为 1。
- hours 可选
  > 表示一天中的小时数的整数值 (24 小时制)。默认值为 0（午夜）。
- minutes 可选
  > 表示一个完整时间（如 01:10:00）中的分钟部分的整数值。默认值为 0。
- seconds 可选
  > 表示一个完整时间（如 01:10:00）中的秒部分的整数值。默认值为 0。
- milliseconds 可选
  > 表示一个完整时间的毫秒部分的整数值。默认值为 0。

### 简介

如果没有输入任何参数，则 Date 的构造器会依据系统设置的当前时间来创建一个 Date 对象。
如果提供了至少两个参数，其余的参数均会默认设置为 1（如果没有指定 day 参数）或者 0（如果没有指定 day 以外的参数）。
JavaScript 的时间由世界标准时间（UTC）1970 年 1 月 1 日开始，用毫秒计时，一天由 86,400,000 毫秒组成。Date 对象的范围是 -100,000,000 天至 100,000,000 天（等效的毫秒值）。
Date 对象为跨平台提供了统一的行为。时间属性可以在不同的系统中表示相同的时刻，而如果使用了本地时间对象，则反映当地的时间。
Date 对象支持多个处理 UTC 时间的方法，也相应地提供了应对当地时间的方法。UTC，也就是我们所说的格林威治时间，指的是 time 中的世界时间标准。而当地时间则是指执行 JavaScript 的客户端电脑所设置的时间。
以一个函数的形式来调用 Date 对象（即不使用 new 操作符）会返回一个代表当前日期和时间的字符串。

### 属性

- Date.prototype
  > 允许为 Date 对象添加属性。
- Date.length
  > Date.length 的值是 7。这是该构造函数可接受的参数个数。

### 方法

- Date.now()
  返回自 1970-1-1 00:00:00 UTC（世界标准时间）至今所经过的毫秒数。
- Date.parse()
  解析一个表示日期的字符串，并返回从 1970-1-1 00:00:00 所经过的毫秒数。
  注意: 由于浏览器差异和不一致，强烈建议不要使用 Date.parse 解析字符串。

- Date.UTC()
  接受和构造函数最长形式的参数相同的参数（从 2 到 7），并返回从 1970-01-01 00:00:00 UTC 开始所经过的毫秒数。

## 实例

所有的 Date 实例都继承自 Date.prototype。修改 Date 构造函数的原型对象会影响到所有的 Date 实例。

### Date.prototype 方法 Getter

- Date.prototype.getDate()
  根据本地时间返回指定日期对象的月份中的第几天（1-31）。
- Date.prototype.getDay()
  根据本地时间返回指定日期对象的星期中的第几天（0-6）。
- Date.prototype.getFullYear()
  根据本地时间返回指定日期对象的年份（四位数年份时返回四位数字）。
- Date.prototype.getHours()
  根据本地时间返回指定日期对象的小时（0-23）。
- Date.prototype.getMilliseconds()
  根据本地时间返回指定日期对象的毫秒（0-999）。
- Date.prototype.getMinutes()
  根据本地时间返回指定日期对象的分钟（0-59）。
- Date.prototype.getMonth()
  根据本地时间返回指定日期对象的月份（0-11）。
- Date.prototype.getSeconds()
  根据本地时间返回指定日期对象的秒数（0-59）。
- Date.prototype.getTime()
  返回从 1970-1-1 00:00:00 UTC（协调世界时）到该日期经过的毫秒数，对于 1970-1-1 00:00:00 UTC 之前的时间返回负值。
- Date.prototype.getTimezoneOffset()
  返回当前时区的时区偏移。
- Date.prototype.getUTCDate()
  根据世界时返回特定日期对象一个月的第几天（1-31）.
- Date.prototype.getUTCDay()
  根据世界时返回特定日期对象一个星期的第几天（0-6）.
- Date.prototype.getUTCFullYear()
  根据世界时返回特定日期对象所在的年份（4 位数）.
- Date.prototype.getUTCHours()
  根据世界时返回特定日期对象当前的小时（0-23）.
- Date.prototype.getUTCMilliseconds()
  根据世界时返回特定日期对象的毫秒数（0-999）.
- Date.prototype.getUTCMinutes()
  根据世界时返回特定日期对象的分钟数（0-59）.
- Date.prototype.getUTCMonth()
  根据世界时返回特定日期对象的月份（0-11）.
- Date.prototype.getUTCSeconds()
  根据世界时返回特定日期对象的秒数（0-59）.
- Date.prototype.getYear()
  根据特定日期返回年份 (通常 2-3 位数). 使用 getFullYear() .

### Setter

- Date.prototype.setDate()
  根据本地时间为指定的日期对象设置月份中的第几天。
- Date.prototype.setFullYear()
  根据本地时间为指定日期对象设置完整年份（四位数年份是四个数字）。
- Date.prototype.setHours()
  根据本地时间为指定日期对象设置小时数。
- Date.prototype.setMilliseconds()
  根据本地时间为指定日期对象设置毫秒数。
- Date.prototype.setMinutes()
  根据本地时间为指定日期对象设置分钟数。
- Date.prototype.setMonth()
  根据本地时间为指定日期对象设置月份。
- Date.prototype.setSeconds()
  根据本地时间为指定日期对象设置秒数。
- Date.prototype.setTime()
  通过指定从 1970-1-1 00:00:00 UTC 开始经过的毫秒数来设置日期对象的时间，对于早于 1970-1-1 00:00:00 UTC 的时间可使用负值。
- Date.prototype.setUTCDate()
  根据世界时设置 Date 对象中月份的一天 (1 ~ 31)。
- Date.prototype.setUTCFullYear()
  根据世界时设置 Date 对象中的年份（四位数字）。
- Date.prototype.setUTCHours()
  根据世界时设置 Date 对象中的小时 (0 ~ 23)。
- Date.prototype.setUTCMilliseconds()
  根据世界时设置 Date 对象中的毫秒 (0 ~ 999)。
- Date.prototype.setUTCMinutes()
  根据世界时设置 Date 对象中的分钟 (0 ~ 59)。
- Date.prototype.setUTCMonth()
  根据世界时设置 Date 对象中的月份 (0 ~ 11)。
- Date.prototype.setUTCSeconds()
  根据世界时设置 Date 对象中的秒钟 (0 ~ 59)。
- Date.prototype.setYear()
  setYear() 方法用于设置年份。请使用 setFullYear() 方法代替。

### Conversion getter

- Date.prototype.toDateString()
  以人类易读（human-readable）的形式返回该日期对象日期部分的字符串。
- Date.prototype.toISOString()
  把一个日期转换为符合 ISO 8601 扩展格式的字符串。
- Date.prototype.toJSON()
  使用 toISOString() 返回一个表示该日期的字符串。为了在 JSON.stringify() 方法中使用。
- Date.prototype.toGMTString()
  返回一个基于 GMT (UT) 时区的字符串来表示该日期。请使用 toUTCString() 方法代替。
- Date.prototype.toLocaleDateString()
  返回一个表示该日期对象日期部分的字符串，该字符串格式与系统设置的地区关联（locality sensitive）。
- Date.prototype.toLocaleFormat()
  使用格式字符串将日期转换为字符串。
- Date.prototype.toLocaleString()
  返回一个表示该日期对象的字符串，该字符串与系统设置的地区关联（locality sensitive）。覆盖了 Object.prototype.toLocaleString() 方法。
- Date.prototype.toLocaleTimeString()
  返回一个表示该日期对象时间部分的字符串，该字符串格式与系统设置的地区关联（locality sensitive）。
- Date.prototype.toSource()
  返回一个与 Date 等价的原始字符串对象，你可以使用这个值去生成一个新的对象。重写了 Object.prototype.toSource() 这个方法。
- Date.prototype.toString()
  返回一个表示该日期对象的字符串。覆盖了 Object.prototype.toString() 方法。
- Date.prototype.toTimeString()
  以人类易读格式返回日期对象时间部分的字符串。
- Date.prototype.toUTCString()
  把一个日期对象转换为一个以 UTC 时区计时的字符串。
- Date.prototype.valueOf()
  返回一个日期对象的原始值。覆盖了 Object.prototype.valueOf() 方法。

## 封装

## 参考链接

- [Date - JavaScript \| MDN](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Date)
