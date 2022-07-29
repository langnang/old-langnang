# String

**`String`** 全局对象是一个用于字符串或一个字符序列的构造函数。

## [语法](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#syntax)

字符串字面量采取以下形式：

```
'string text'
"string text"
"中文/汉语"
"español"
"English "
"हिन्दी"
"العربية"
"português"
"বাংলা"
"русский"
"日本語"
"ਪੰਜਾਬੀ"
"한국어"
```

你也能使用 `String` 函数将其他值生成或转换成字符串：

```
String(thing)
new String(thing)
```

### [参数](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#parameters)

- `thing`

  任何可以被转换成字符串的值。

### [模板字面量](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#parameters_2)

从 ECMAScript 2015 开始，字符串字面量也可以称为[模板字面量](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals)：

```
`hello world` `hello! world!` `hello ${who}` escape `<a>${who}</a>`
```

### [转义字符](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#parameters_3)



除了普通的可打印字符以外，一些有特殊功能的字符可以通过转义字符的形式放入字符串中：

| Code                     | Output                             |
| ------------------------ | ---------------------------------- |
| `\0`                     | 空字符                             |
| `\'`                     | 单引号                             |
| `\"`                     | `双引号`                           |
| `\\`                     | 反斜杠                             |
| `\n`                     | 换行                               |
| `\r`                     | `回车`                             |
| `\v`                     | 垂直制表符                         |
| `\t`                     | 水平制表符                         |
| `\b`                     | 退格                               |
| `\f`                     | 换页                               |
| `\uXXXX`                 | unicode 码                         |
| `\u{X}` ... `\u{XXXXXX}` | unicode codepoint     Experimental |
| `\xXX`                   | Latin-1 字符 (x 小写)              |

**备注：**和其他语言不同，javascript 的字符串不区分单引号和双引号，所以不论是单引号还是双引号的字符串，上面的转义字符都能运行 。

### [长字符串](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#长字符串)

有时，你的代码可能含有很长的字符串。你可能想将这样的字符串写成多行，而不是让这一行无限延长或着被编辑器折叠。有两种方法可以做到这一点。

其一，可以使用 + 运算符将多个字符串连接起来，如下所示：

```
let longString = "This is a very long string which needs " +
                 "to wrap across multiple lines because " +
                 "otherwise my code is unreadable.";
```

其二，可以在每行末尾使用反斜杠字符（“\”），以指示字符串将在下一行继续。确保反斜杠后面没有空格或任何除换行符之外的字符或缩进; 否则反斜杠将不会工作。 如下所示：

```
let longString = "This is a very long string which needs \
to wrap across multiple lines because \
otherwise my code is unreadable.";
```

使用这两种方式会创建相同的字符串。



## [描述](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#description)

字符串对于保存可以以文本形式表示的数据非常有用。 一些常用的字符串操作有：查询[字符串长度](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String/length)，使用[ + 和 += ](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/String_Operators)运算符来构建和连接字符串，使用 [indexOf](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String/indexOf) 方法检查某一子字符串在父字符串中的位置，又或是使用 [substring](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String/substring) 方法提取从父字符串中提取子字符串。

### [从字符串中获取单个字符](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#character_access)

获取字符串的某个字符有两种方法。 第一种是使用 [`charAt`](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String/charAt) 方法：

```
return 'cat'.charAt(1); // returns "a"
```

另一种 (在 ECMAScript 5 中有所介绍) 是把字符串当作一个类似数组的对象，其中的每个字符对应一个数值索引：

```
return 'cat'[1]; // returns "a"
```

使用括号访问字符串不可以对其进行删除或添加，因为字符串对应未知的属性并不是可读或配置的。 (更多的信息请参阅 [`Object.defineProperty`](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Object/defineProperty)。 )

### [字符串比较](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#comparing_strings)

熟练使用 C 语言的开发者经常使用 `strcmp` 函数来比较字符串，但在 JavaScript 中，你只需要使用[比较操作符 (>/=/<=) (en-US)](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators)：

```
var a = "a";
var b = "b";
if (a < b) // true
  print(a + " is less than " + b);
else if (a > b)
  print(a + " is greater than " + b);
else
  print(a + " and " + b + " are equal.");
```

使用从字符串实例继承而来的 [`localeCompare`](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String/localeCompare) 方法也能达到同样的效果。 

### [基本字符串和字符串对象的区别](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#基本字符串和字符串对象的区别)

请注意区分 JavaScript 字符串对象和基本字符串值 . ( 对于 [`Boolean`](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Boolean) 和[`Numbers`](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Number) 也同样如此.)

字符串字面量 (通过单引号或双引号定义) 和 直接调用 String 方法 (没有通过 new 生成字符串对象实例)  的字符串都是基本字符串。JavaScript  会自动将基本字符串转换为字符串对象，只有将基本字符串转化为字符串对象之后才可以使用字符串对象的方法。当基本字符串需要调用一个字符串对象才有的方法或者查询值的时候 (基本字符串是没有这些方法的)，JavaScript 会自动将基本字符串转化为字符串对象并且调用相应的方法或者执行查询。

```
var s_prim = "foo";
var s_obj = new String(s_prim);

console.log(typeof s_prim); // Logs "string"
console.log(typeof s_obj);  // Logs "object"
```

当使用 [`eval`](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/eval)时，基本字符串和字符串对象也会产生不同的结果。`eval` 会将基本字符串作为源代码处理; 而字符串对象则被看作对象处理，返回对象。 例如：

```
s1 = "2 + 2";               // creates a string primitive
s2 = new String("2 + 2");   // creates a String object
console.log(eval(s1));      // returns the number 4
console.log(eval(s2));      // returns the string "2 + 2"
```

由于上述原因，当一段代码在需要使用基本字符串的时候却使用了字符串对象就会导致执行失败 (虽然一般情况下程序员们并不需要考虑这样的问题)。

利用 [`valueOf`](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String/valueOf) 方法，我们可以将字符串对象转换为其对应的基本字符串。

```
console.log(eval(s2.valueOf())); // returns the number 4
```

**备注：** 其他的将字符串对象转换成基本字符串的方法可以及参考 [`StringView` – a C-like representation of strings based on typed arrays](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Typed_arrays/StringView).

## [属性](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#属性)

- [`String.prototype` (en-US)](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String)

  可以为 String 对象增加新的属性。

## [方法](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#methods)

- [`String.fromCharCode()`](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String/fromCharCode)  

   **通过一串 Unicode 创建字符串。**

- [`String.fromCodePoint()`](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String/fromCodePoint)     Experimental

  通过一串 码点 创建字符串。

- [`String.raw()`](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String/raw)     Experimental

  通过模板字符串创建字符串。

## [字符串泛型方法](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#字符串泛型方法)

**警告：**字符串泛型是**非标准的**，**已弃用**，**并且会在不远的****将来删除**。注意，你不能依靠他们的跨浏览器，而不使用下面提供的垫片。

应该避免在 Javascript 1.6（Firefox 浏览器的 JS 引擎）中使用（虽然也支持）将其他对象转化为字符的方法，因为方法并没有成为 ECMA 标准：

```
let num = 15;
console.log(String.replace(num, /5/, '2'));
```

移除字符串泛型的措施，参见 [Warning: String.x is deprecated; use String.prototype.x instead](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Errors/Deprecated_string_generics).

[Generics](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Array#array_generic_methods) 在 Javascript 1.6 中同样支持[`Array`](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Array)。

## [`String` 实例](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#string_instances)

### [属性](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#属性_2)

{{page('zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String/prototype', 'Properties')}}

{{page('zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String/prototype', 'Methods')}}

## [示例 ](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#示例)

### [将其他值转换成字符串](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#将其他值转换成字符串)

使用 String() 方法将其它对象转化为字符串可以被认为是一种更加安全的做法，虽然该方法底层使用的也是 toString() 方法，但是针对 null/undefined/symbols，String() 方法会有特殊的处理：

```
var outputStrings = [];
for (let i = 0, n = inputValues.length; i < n; ++i) {
  outputStrings.push(String(inputValues[i]));
}
```

## [规范](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#规范)

| Specification                                                | Status   | Comment             |
| ------------------------------------------------------------ | -------- | ------------------- |
| ECMAScript 1st Edition.                                      | Standard | Initial definition. |
| [ECMAScript 5.1 (ECMA-262) String](https://www.ecma-international.org/ecma-262/5.1/#sec-15.5) | Standard |                     |
| [ECMAScript 2015 (6th Edition, ECMA-262) String](https://www.ecma-international.org/ecma-262/6.0/#sec-string-objects) | Standard |                     |

## [浏览器兼容性](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#浏览器兼容性)

[Report problems with this compatibility data on GitHub](https://github.com/mdn/browser-compat-data/issues/new?mdn-url=https%3A%2F%2Fdeveloper.mozilla.org%2Fzh-CN%2Fdocs%2FWeb%2FJavaScript%2FReference%2FGlobal_Objects%2FString&metadata= MDN+page+report+details<%2Fsummary> *+Query%3A+`javascript.builtins.String` *+Report+started%3A+2022-07-27T11%3A32%3A08.077Z <%2Fdetails>&title=javascript.builtins.String+-+&template=data-problem.yml)

|          | desktop | mobile | server  |                   |       |        |                |                     |               |               |                  |                 |      |         |
| -------- | ------- | ------ | ------- | ----------------- | ----- | ------ | -------------- | ------------------- | ------------- | ------------- | ---------------- | --------------- | ---- | ------- |
|          | Chrome  | Edge   | Firefox | Internet Explorer | Opera | Safari | Chrome Android | Firefox for Android | Opera Android | Safari on iOS | Samsung Internet | WebView Android | Deno | Node.js |
| `String` |         |        |         |                   |       |        |                |                     |               |               |                  |                 |      |         |

| [`@@iterator`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/@@iterator) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`String()` constructor](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/String) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`anchor`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/anchor) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`at`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/at) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`big`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/big) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`blink`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/blink) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`bold`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/bold) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`charAt`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/charAt) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`charCodeAt`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/charCodeAt) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`codePointAt`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/codePointAt) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`concat`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/concat) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`endsWith`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/endsWith) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`fixed`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/fixed) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`fontcolor`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/fontcolor) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`fontsize`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/fontsize) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`fromCharCode`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/fromCharCode) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`fromCodePoint`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/fromCodePoint) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`includes`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/includes) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`indexOf`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/indexOf) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`italics`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/italics) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`lastIndexOf`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/lastIndexOf) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`length`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/length) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`link`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/link) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`localeCompare`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/localeCompare) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| `localeCompare.locales` |      |
| ----------------------- | ---- |
|                         |      |

| `localeCompare.options` |      |
| ----------------------- | ---- |
|                         |      |

| [`match`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/match) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`matchAll`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/matchAll) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`normalize`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/normalize) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`padEnd`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/padEnd) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`padStart`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/padStart) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`raw`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/raw) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`repeat`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/repeat) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`replace`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/replace) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`replaceAll`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/replaceAll) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`search`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/search) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| `search.flags`DeprecatedNon-standard |      |
| ------------------------------------ | ---- |
|                                      |      |

| [`slice`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/slice) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`small`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/small) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`split`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/split) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`startsWith`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/startsWith) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`strike`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/strike) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`sub`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/sub) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`substr`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/substr) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`substring`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/substring) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`sup`Deprecated](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/sup) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`toLocaleLowerCase`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/toLocaleLowerCase) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| `toLocaleLowerCase.locale` |      |
| -------------------------- | ---- |
|                            |      |

| [`toLocaleUpperCase`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/toLocaleUpperCase) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| `toLocaleUpperCase.locale` |      |
| -------------------------- | ---- |
|                            |      |

| [`toLowerCase`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/toLowerCase) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`toString`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/toString) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`toUpperCase`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/toUpperCase) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`trim`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/trim) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`trimEnd`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/trimEnd) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| [`trimStart`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/trimStart) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

| Unicode code point escapes \u{xxxxxx} |      |
| ------------------------------------- | ---- |
|                                       |      |

| [`valueOf`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/valueOf) |      |
| ------------------------------------------------------------ | ---- |
|                                                              |      |

### Legend



## [相关链接](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/String#相关链接)

- [`DOMString`](https://developer.mozilla.org/zh-CN/docs/conflicting/Web/JavaScript/Reference/Global_Objects/String_6fa58bba0570d663099f0ae7ae8883ab)
- [`StringView` – a C-like representation of strings based on typed arrays](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Typed_arrays/StringView)
- [Binary strings](https://developer.mozilla.org/zh-CN/docs/Web/API/DOMString/Binary)