# Boolean

> Boolean 对象是一个布尔值的对象包装器。

- [语法](#语法)
- [描述](#描述)
- [属性](#属性)

## 语法

```js
new Boolean([value]);
```

**参数**

- value - 可选，用来初始化 Boolean 对象的值。

## 描述

如果第一个参数不是布尔值，则会将其转换为布尔值。如果省略该参数，或者其值为 0、-0、null、false、NaN、undefined、或者空字符串（""），则生成的 Boolean 对象的值为 false。如果传入的参数是 DOM 对象 document.all，也会生成值为 false 的 Boolean 对象。任何其他的值，包括值为 "false" 的字符串和任何对象，都会创建一个值为 true 的 Boolean 对象。

注意不要将基本类型中的布尔值 true 和 false 与值为 true 和 false 的 Boolean 对象弄混了。

任何不是 undefined 和 null 的对象，包括值为 false 的 Boolean 对象，直接用于条件语句时都会被当做 true 来对待。例如，下面 if 语句中的条件为真:

```js
var x = new Boolean(false);
if (x) {
  // 这里的代码会被执行
}
```

基本类型的布尔值不受此规则影响。例如下面的 if 语句的条件为假：

```js
var x = false;
if (x) {
  // 这里的代码不会执行
}
```

不要用创建 Boolean 对象的方式将一个非布尔值转化成布尔值，直接将 Boolean 当做转换函数来使用即可，或者使用双重非（!!）运算符：

```js
var x = Boolean(expression); // 推荐
var x = !!expression; // 推荐
var x = new Boolean(expression); // 不太好
```

对于任何对象，即使是值为 false 的 Boolean 对象，当将其传给 Boolean 函数时，生成的 Boolean 对象的值都是 true。

```js
var myFalse = new Boolean(false); // false
var g = new Boolean(myFalse); // true
var myString = new String("Hello");
var s = new Boolean(myString); // true
```

最后，不要在应该使用基本类型布尔值的地方使用 Boolean 对象。

## 属性

Boolean.length
length 属性，值为 1。
Boolean.prototype
Boolean 构造函数的原型对象。
方法
Boolean 对象自身没有任何方法，不过它从自己的原型链上继承了一些方法，见下面的“Boolean 实例”小节。

Boolean 实例
所有 Boolean 实例都继承于 Boolean.prototype。与所有的构造函数一样，Boolean 的原型对象为其实例提供继承属性和方法。

属性
Boolean.prototype.constructor
返回创建了实例原型的函数。默认为 Boolean 函数。
方法
Boolean.prototype.toSource()
返回包含 Boolean 对象源码的字符串；你可以使用这个字符串来创建一个等价的对象。覆盖了 Object.prototype.toSource() 方法。
Boolean.prototype.toString()
根据对象的值来返回一个字符串："true" 或 "false"。覆盖了 Object.prototype.toString() 方法。
Boolean.prototype.valueOf()
返回 Boolean 对象的原始值。覆盖了 Object.prototype.valueOf() 方法。
