- # JavaScript Date 参考手册

  - [JS Class](https://www.w3school.com.cn/jsref/jsref_classes.asp)
  - [JS Error](https://www.w3school.com.cn/jsref/jsref_obj_error.asp)

  ## Date 对象

  Date 对象用于处理日期和时间。

  日期对象是用 new Date() 创建的。

  实例化日期有四种方式：

  ```
  var d = new Date();
  var d = new Date(milliseconds);
  var d = new Date(dateString);
  var d = new Date(year, month, day, hours, minutes, seconds, milliseconds);
  ```

  [亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_date_obj)

  有关日期和时间的教程，请阅读我们的 [JavaScript 日期教程](https://www.w3school.com.cn/js/js_dates.asp)。

  ## Date 对象属性

  | 属性                                                         | 描述                           |
  | ------------------------------------------------------------ | ------------------------------ |
  | [constructor](https://www.w3school.com.cn/jsref/jsref_constructor_date.asp) | 返回创建 Date 对象原型的函数。 |
  | [prototype](https://www.w3school.com.cn/jsref/jsref_prototype_date.asp) | 允许您向对象添加属性和方法。   |

  ## Date 对象方法

  | 方法                                                         | 描述                                                         |
  | ------------------------------------------------------------ | ------------------------------------------------------------ |
  | [getDate()](https://www.w3school.com.cn/jsref/jsref_getdate.asp) | 返回月中的第几天（从 1 到 31）。                             |
  | [getDay()](https://www.w3school.com.cn/jsref/jsref_getday.asp) | 返回星期几（0-6）。                                          |
  | [getFullYear()](https://www.w3school.com.cn/jsref/jsref_getfullyear.asp) | 返回年份。                                                   |
  | [getHours()](https://www.w3school.com.cn/jsref/jsref_gethours.asp) | 返回小时（从 0-23）。                                        |
  | [getMilliseconds()](https://www.w3school.com.cn/jsref/jsref_getmilliseconds.asp) | 返回毫秒（0-999）。                                          |
  | [getMinutes()](https://www.w3school.com.cn/jsref/jsref_getminutes.asp) | 返回分钟（从 0-59）。                                        |
  | [getMonth()](https://www.w3school.com.cn/jsref/jsref_getmonth.asp) | 返回月份（从 0-11）。                                        |
  | [getSeconds()](https://www.w3school.com.cn/jsref/jsref_getseconds.asp) | 返回秒数（从 0-59）。                                        |
  | [getTime()](https://www.w3school.com.cn/jsref/jsref_gettime.asp) | 返回自 1970 年 1 月 1 日午夜以来与指定日期的毫秒数。         |
  | [getTimezoneOffset()](https://www.w3school.com.cn/jsref/jsref_gettimezoneoffset.asp) | 返回 UTC 时间与本地时间之间的时差，以分钟为单位。            |
  | [getUTCDate()](https://www.w3school.com.cn/jsref/jsref_getutcdate.asp) | 根据世界时，返回月份中的第几天（从 1 到 31）。               |
  | [getUTCDay()](https://www.w3school.com.cn/jsref/jsref_getutcday.asp) | 根据世界时，返回星期几（0-6）。                              |
  | [getUTCFullYear()](https://www.w3school.com.cn/jsref/jsref_getutcfullyear.asp) | 根据世界时，返回年份。                                       |
  | [getUTCHours()](https://www.w3school.com.cn/jsref/jsref_getutchours.asp) | 根据世界时，返回小时（0-23）。                               |
  | [getUTCMilliseconds()](https://www.w3school.com.cn/jsref/jsref_getutcmilliseconds.asp) | 根据世界时，返回毫秒数（0-999）。                            |
  | [getUTCMinutes()](https://www.w3school.com.cn/jsref/jsref_getutcminutes.asp) | 根据世界时，返回分钟（0-59）。                               |
  | [getUTCMonth()](https://www.w3school.com.cn/jsref/jsref_getutcmonth.asp) | 根据世界时，返回月份（0-11）。                               |
  | [getUTCSeconds()](https://www.w3school.com.cn/jsref/jsref_getutcseconds.asp) | 根据世界时，返回秒数（0-59）。                               |
  | getYear()                                                    | 已弃用。请改用 [getFullYear() 方法](https://www.w3school.com.cn/jsref/jsref_getfullyear.asp)。 |
  | [now()](https://www.w3school.com.cn/jsref/jsref_now.asp)     | 返回自 1970 年 1 月 1 日午夜以来的毫秒数。                   |
  | [parse()](https://www.w3school.com.cn/jsref/jsref_parse.asp) | 解析日期字符串并返回自 1970 年 1 月 1 日以来的毫秒数。       |
  | [setDate()](https://www.w3school.com.cn/jsref/jsref_setdate.asp) | 设置 Date 对象中月的某一天。                                 |
  | [setFullYear()](https://www.w3school.com.cn/jsref/jsref_setfullyear.asp) | 设置日期对象的年份                                           |
  | [setHours()](https://www.w3school.com.cn/jsref/jsref_sethours.asp) | 设置日期对象的小时。                                         |
  | [setMilliseconds()](https://www.w3school.com.cn/jsref/jsref_setmilliseconds.asp) | 设置日期对象的毫秒数。                                       |
  | [setMinutes()](https://www.w3school.com.cn/jsref/jsref_setminutes.asp) | 设置日期对象的分钟数。                                       |
  | [setMonth()](https://www.w3school.com.cn/jsref/jsref_setmonth.asp) | 设置日期对象的月份。                                         |
  | [setSeconds()](https://www.w3school.com.cn/jsref/jsref_setseconds.asp) | 设置日期对象的秒数。                                         |
  | [setTime()](https://www.w3school.com.cn/jsref/jsref_settime.asp) | 将日期设置为 1970 年 1 月 1 日之后/之前的指定毫秒数。        |
  | [setUTCDate()](https://www.w3school.com.cn/jsref/jsref_setutcdate.asp) | 根据世界时，设置 Date 对象中月份的一天。                     |
  | [setUTCFullYear()](https://www.w3school.com.cn/jsref/jsref_setutcfullyear.asp) | 根据世界时，设置日期对象的年份。                             |
  | [setUTCHours()](https://www.w3school.com.cn/jsref/jsref_setutchours.asp) | 根据世界时，设置日期对象的小时。                             |
  | [setUTCMilliseconds()](https://www.w3school.com.cn/jsref/jsref_setutcmilliseconds.asp) | 根据世界时，设置日期对象的毫秒数。                           |
  | [setUTCMinutes()](https://www.w3school.com.cn/jsref/jsref_setutcminutes.asp) | 根据世界时，设置日期对象的分钟数。                           |
  | [setUTCMonth()](https://www.w3school.com.cn/jsref/jsref_setutcmonth.asp) | 根据世界时，设置日期对象的月份。                             |
  | [setUTCSeconds()](https://www.w3school.com.cn/jsref/jsref_setutcseconds.asp) | 根据世界时，设置日期对象的秒数。                             |
  | setYear()                                                    | 已弃用。请改用 [setFullYear() 方法](https://www.w3school.com.cn/jsref/jsref_setfullyear.asp)。 |
  | [toDateString()](https://www.w3school.com.cn/jsref/jsref_todatestring.asp) | 将 Date 对象的日期部分转换为可读字符串。                     |
  | toGMTString()                                                | 已弃用。请改用 [toUTCString() 方法](https://www.w3school.com.cn/jsref/jsref_toutcstring.asp)。 |
  | [toISOString()](https://www.w3school.com.cn/jsref/jsref_toisostring.asp) | 使用 ISO 标准将日期作为字符串返回。                          |
  | [toJSON()](https://www.w3school.com.cn/jsref/jsref_tojson.asp) | 以字符串形式返回日期，格式为 JSON 日期。                     |
  | [toLocaleDateString()](https://www.w3school.com.cn/jsref/jsref_tolocaledatestring.asp) | 使用区域设置约定将 Date 对象的日期部分作为字符串返回。       |
  | [toLocaleTimeString()](https://www.w3school.com.cn/jsref/jsref_tolocaletimestring.asp) | 使用区域设置约定将 Date 对象的时间部分作为字符串返回。       |
  | [toLocaleString()](https://www.w3school.com.cn/jsref/jsref_tolocalestring.asp) | 使用区域设置约定将 Date 对象转换为字符串。                   |
  | [toString()](https://www.w3school.com.cn/jsref/jsref_tostring_date.asp) | 将 Date 对象转换为字符串。                                   |
  | [toTimeString()](https://www.w3school.com.cn/jsref/jsref_totimestring.asp) | 将 Date 对象的时间部分转换为字符串。                         |
  | [toUTCString()](https://www.w3school.com.cn/jsref/jsref_toutcstring.asp) | 根据世界时，将 Date 对象转换为字符串。                       |
  | [UTC()](https://www.w3school.com.cn/jsref/jsref_utc.asp)     | 根据 UTC 时间，返回自 1970 年 1 月 1 日午夜以来的日期中的毫秒数。 |
  | [valueOf()](https://www.w3school.com.cn/jsref/jsref_valueof_date.asp) | 返回 Date 对象的原始值。                                     |
