<h1>ECMAScript</h1>

- [ES5](#es5)
  - [参考](#%e5%8f%82%e8%80%83)
- [ES6](#es6)
  - [ECMAScript 简介](#ecmascript-%e7%ae%80%e4%bb%8b)
    - [ECMAScript 和 JavaScript 的关系](#ecmascript-%e5%92%8c-javascript-%e7%9a%84%e5%85%b3%e7%b3%bb)
    - [ES6 与 ECMAScript 的关系](#es6-%e4%b8%8e-ecmascript-%e7%9a%84%e5%85%b3%e7%b3%bb)
    - [语法提案的批准流程](#%e8%af%ad%e6%b3%95%e6%8f%90%e6%a1%88%e7%9a%84%e6%89%b9%e5%87%86%e6%b5%81%e7%a8%8b)
    - [ECMAScript 的历史](#ecmascript-%e7%9a%84%e5%8e%86%e5%8f%b2)
    - [部署进度](#%e9%83%a8%e7%bd%b2%e8%bf%9b%e5%ba%a6)
    - [Babel 转码器](#babel-%e8%bd%ac%e7%a0%81%e5%99%a8)
    - [Traceur 转码器](#traceur-%e8%bd%ac%e7%a0%81%e5%99%a8)
  - [let 和 const 命令](#let-%e5%92%8c-const-%e5%91%bd%e4%bb%a4)
    - [let 命令](#let-%e5%91%bd%e4%bb%a4)
    - [块级作用域](#%e5%9d%97%e7%ba%a7%e4%bd%9c%e7%94%a8%e5%9f%9f)
    - [const 命令](#const-%e5%91%bd%e4%bb%a4)
    - [顶层对象的属性](#%e9%a1%b6%e5%b1%82%e5%af%b9%e8%b1%a1%e7%9a%84%e5%b1%9e%e6%80%a7)
    - [global 对象](#global-%e5%af%b9%e8%b1%a1)
  - [变量的解构赋值](#%e5%8f%98%e9%87%8f%e7%9a%84%e8%a7%a3%e6%9e%84%e8%b5%8b%e5%80%bc)
    - [数组的解构赋值](#%e6%95%b0%e7%bb%84%e7%9a%84%e8%a7%a3%e6%9e%84%e8%b5%8b%e5%80%bc)
    - [对象的解构赋值](#%e5%af%b9%e8%b1%a1%e7%9a%84%e8%a7%a3%e6%9e%84%e8%b5%8b%e5%80%bc)
    - [字符串的解构赋值](#%e5%ad%97%e7%ac%a6%e4%b8%b2%e7%9a%84%e8%a7%a3%e6%9e%84%e8%b5%8b%e5%80%bc)
    - [数值和布尔值的解构赋值](#%e6%95%b0%e5%80%bc%e5%92%8c%e5%b8%83%e5%b0%94%e5%80%bc%e7%9a%84%e8%a7%a3%e6%9e%84%e8%b5%8b%e5%80%bc)
    - [函数参数的解构赋值](#%e5%87%bd%e6%95%b0%e5%8f%82%e6%95%b0%e7%9a%84%e8%a7%a3%e6%9e%84%e8%b5%8b%e5%80%bc)
    - [圆括号问题](#%e5%9c%86%e6%8b%ac%e5%8f%b7%e9%97%ae%e9%a2%98)
    - [用途](#%e7%94%a8%e9%80%94)
  - [字符串的扩展](#%e5%ad%97%e7%ac%a6%e4%b8%b2%e7%9a%84%e6%89%a9%e5%b1%95)
    - [字符的 Unicode 表示法](#%e5%ad%97%e7%ac%a6%e7%9a%84-unicode-%e8%a1%a8%e7%a4%ba%e6%b3%95)
    - [cidePointAt()](#cidepointat)
    - [String.fromCodePoint()](#stringfromcodepoint)
    - [字符串的遍历器接口](#%e5%ad%97%e7%ac%a6%e4%b8%b2%e7%9a%84%e9%81%8d%e5%8e%86%e5%99%a8%e6%8e%a5%e5%8f%a3)
    - [at()](#at)
    - [normalize()](#normalize)
    - [includes()、startWith()](#includesstartwith)
    - [repeat()](#repeat)
    - [padStart()、padEnd()](#padstartpadend)
    - [模板字符串](#%e6%a8%a1%e6%9d%bf%e5%ad%97%e7%ac%a6%e4%b8%b2)
    - [实例：模板编译](#%e5%ae%9e%e4%be%8b%e6%a8%a1%e6%9d%bf%e7%bc%96%e8%af%91)
    - [标签模板](#%e6%a0%87%e7%ad%be%e6%a8%a1%e6%9d%bf)
    - [String.raw()](#stringraw)
    - [模板字符串的限制](#%e6%a8%a1%e6%9d%bf%e5%ad%97%e7%ac%a6%e4%b8%b2%e7%9a%84%e9%99%90%e5%88%b6)
  - [正则的扩展](#%e6%ad%a3%e5%88%99%e7%9a%84%e6%89%a9%e5%b1%95)
    - [RegExp 构造函数](#regexp-%e6%9e%84%e9%80%a0%e5%87%bd%e6%95%b0)
    - [字符串的正则方法](#%e5%ad%97%e7%ac%a6%e4%b8%b2%e7%9a%84%e6%ad%a3%e5%88%99%e6%96%b9%e6%b3%95)
    - [u 修饰符](#u-%e4%bf%ae%e9%a5%b0%e7%ac%a6)
    - [y 修饰符](#y-%e4%bf%ae%e9%a5%b0%e7%ac%a6)
    - [sticky 属性](#sticky-%e5%b1%9e%e6%80%a7)
    - [flags 属性](#flags-%e5%b1%9e%e6%80%a7)
    - [s 修饰符：dotAll 模式](#s-%e4%bf%ae%e9%a5%b0%e7%ac%a6dotall-%e6%a8%a1%e5%bc%8f)
    - [后行断言](#%e5%90%8e%e8%a1%8c%e6%96%ad%e8%a8%80)
    - [Unicode 属性类](#unicode-%e5%b1%9e%e6%80%a7%e7%b1%bb)
  - [数值的扩展](#%e6%95%b0%e5%80%bc%e7%9a%84%e6%89%a9%e5%b1%95)
    - [二进制和八进制表示法](#%e4%ba%8c%e8%bf%9b%e5%88%b6%e5%92%8c%e5%85%ab%e8%bf%9b%e5%88%b6%e8%a1%a8%e7%a4%ba%e6%b3%95)
    - [Number.isFinite()、Number.isNaN()](#numberisfinitenumberisnan)
    - [Number.parseInt()、Number.parseFloat()](#numberparseintnumberparsefloat)
    - [Number.isInteger()](#numberisinteger)
    - [NUmber.EPSILON](#numberepsilon)
    - [安全整数和 Number.isSafeInteger()](#%e5%ae%89%e5%85%a8%e6%95%b4%e6%95%b0%e5%92%8c-numberissafeinteger)
    - [Math 对象的扩展](#math-%e5%af%b9%e8%b1%a1%e7%9a%84%e6%89%a9%e5%b1%95)
    - [Math.signbit()](#mathsignbit)
    - [指数运算符](#%e6%8c%87%e6%95%b0%e8%bf%90%e7%ae%97%e7%ac%a6)
    - [Integer 数据类型](#integer-%e6%95%b0%e6%8d%ae%e7%b1%bb%e5%9e%8b)
  - [函数的扩展](#%e5%87%bd%e6%95%b0%e7%9a%84%e6%89%a9%e5%b1%95)
  - [函数参数的默认值](#%e5%87%bd%e6%95%b0%e5%8f%82%e6%95%b0%e7%9a%84%e9%bb%98%e8%ae%a4%e5%80%bc)
  - [rest 参数](#rest-%e5%8f%82%e6%95%b0)
  - [严格模式](#%e4%b8%a5%e6%a0%bc%e6%a8%a1%e5%bc%8f)
  - [name 属性](#name-%e5%b1%9e%e6%80%a7)
  - [箭头函数](#%e7%ae%ad%e5%a4%b4%e5%87%bd%e6%95%b0)
  - [绑定 this](#%e7%bb%91%e5%ae%9a-this)
  - [尾调用优化](#%e5%b0%be%e8%b0%83%e7%94%a8%e4%bc%98%e5%8c%96)
  - [函数参数的尾逗号](#%e5%87%bd%e6%95%b0%e5%8f%82%e6%95%b0%e7%9a%84%e5%b0%be%e9%80%97%e5%8f%b7)
  - [数组的扩展](#%e6%95%b0%e7%bb%84%e7%9a%84%e6%89%a9%e5%b1%95)
  - [扩展运算符](#%e6%89%a9%e5%b1%95%e8%bf%90%e7%ae%97%e7%ac%a6)
  - [Array.from()](#arrayfrom)
  - [Array.of()](#arrayof)
  - [数组实例的 copyWithin()](#%e6%95%b0%e7%bb%84%e5%ae%9e%e4%be%8b%e7%9a%84-copywithin)
  - [数组实例的 find()和 findIndex()](#%e6%95%b0%e7%bb%84%e5%ae%9e%e4%be%8b%e7%9a%84-find%e5%92%8c-findindex)
  - [数组实例的 fill()](#%e6%95%b0%e7%bb%84%e5%ae%9e%e4%be%8b%e7%9a%84-fill)
  - [数组实例的 entries()、keys()和 values()](#%e6%95%b0%e7%bb%84%e5%ae%9e%e4%be%8b%e7%9a%84-entrieskeys%e5%92%8c-values)
  - [数组实例的 includes()](#%e6%95%b0%e7%bb%84%e5%ae%9e%e4%be%8b%e7%9a%84-includes)
  - [数组的空位](#%e6%95%b0%e7%bb%84%e7%9a%84%e7%a9%ba%e4%bd%8d)
  - [对象的扩展](#%e5%af%b9%e8%b1%a1%e7%9a%84%e6%89%a9%e5%b1%95)
  - [属性的简洁表示法](#%e5%b1%9e%e6%80%a7%e7%9a%84%e7%ae%80%e6%b4%81%e8%a1%a8%e7%a4%ba%e6%b3%95)
  - [属性名表达式](#%e5%b1%9e%e6%80%a7%e5%90%8d%e8%a1%a8%e8%be%be%e5%bc%8f)
  - [方法的 name 属性](#%e6%96%b9%e6%b3%95%e7%9a%84-name-%e5%b1%9e%e6%80%a7)
  - [Object.is()](#objectis)
  - [Object.assign()](#objectassign)
  - [属性的可枚举性](#%e5%b1%9e%e6%80%a7%e7%9a%84%e5%8f%af%e6%9e%9a%e4%b8%be%e6%80%a7)
  - [属性的遍历](#%e5%b1%9e%e6%80%a7%e7%9a%84%e9%81%8d%e5%8e%86)
  - [\_\_proto\_\_ 属性、Object.setPrototypeOf()、Object.getPrototypeOf()](#proto-%e5%b1%9e%e6%80%a7objectsetprototypeofobjectgetprototypeof)
  - [Object.keys()、Object.values()、Object.entries()](#objectkeysobjectvaluesobjectentries)
  - [对象的扩展运算符](#%e5%af%b9%e8%b1%a1%e7%9a%84%e6%89%a9%e5%b1%95%e8%bf%90%e7%ae%97%e7%ac%a6)
  - [Object.getOwnPropertyDescriptors()](#objectgetownpropertydescriptors)
  - [Null 传导运算符](#null-%e4%bc%a0%e5%af%bc%e8%bf%90%e7%ae%97%e7%ac%a6)
  - [Symbol](#symbol)
  - [概述](#%e6%a6%82%e8%bf%b0)
  - [作为属性名的 Symbol](#%e4%bd%9c%e4%b8%ba%e5%b1%9e%e6%80%a7%e5%90%8d%e7%9a%84-symbol)
  - [实例：消除魔术字符串](#%e5%ae%9e%e4%be%8b%e6%b6%88%e9%99%a4%e9%ad%94%e6%9c%af%e5%ad%97%e7%ac%a6%e4%b8%b2)
  - [属性名的遍历](#%e5%b1%9e%e6%80%a7%e5%90%8d%e7%9a%84%e9%81%8d%e5%8e%86)
  - [Symbol.for()、Symbol.keyFor()](#symbolforsymbolkeyfor)
  - [实例：模块的 Singleton 模式](#%e5%ae%9e%e4%be%8b%e6%a8%a1%e5%9d%97%e7%9a%84-singleton-%e6%a8%a1%e5%bc%8f)
  - [内置的 Symbol 值](#%e5%86%85%e7%bd%ae%e7%9a%84-symbol-%e5%80%bc)
  - [Set 和 Map 数据结构](#set-%e5%92%8c-map-%e6%95%b0%e6%8d%ae%e7%bb%93%e6%9e%84)
  - [Set](#set)
  - [WeakSet](#weakset)
  - [Map](#map)
  - [WeakMap](#weakmap)
  - [Proxy](#proxy)
  - [概述](#%e6%a6%82%e8%bf%b0-1)
  - [Proxy 实例的方法](#proxy-%e5%ae%9e%e4%be%8b%e7%9a%84%e6%96%b9%e6%b3%95)
  - [Proxy.revocable()](#proxyrevocable)
  - [this 问题](#this-%e9%97%ae%e9%a2%98)
  - [实例：Web 服务的客户端](#%e5%ae%9e%e4%be%8bweb-%e6%9c%8d%e5%8a%a1%e7%9a%84%e5%ae%a2%e6%88%b7%e7%ab%af)
  - [Reflect](#reflect)
  - [概述](#%e6%a6%82%e8%bf%b0-2)
  - [静态方法](#%e9%9d%99%e6%80%81%e6%96%b9%e6%b3%95)
  - [实例：使用 Proxy 实现观察者模式](#%e5%ae%9e%e4%be%8b%e4%bd%bf%e7%94%a8-proxy-%e5%ae%9e%e7%8e%b0%e8%a7%82%e5%af%9f%e8%80%85%e6%a8%a1%e5%bc%8f)
  - [Promise 对象](#promise-%e5%af%b9%e8%b1%a1)
  - [Promise 的含义](#promise-%e7%9a%84%e5%90%ab%e4%b9%89)
  - [基本用法](#%e5%9f%ba%e6%9c%ac%e7%94%a8%e6%b3%95)
  - [Promise.prototype.then()](#promiseprototypethen)
  - [Promise.prototype.catch()](#promiseprototypecatch)
  - [Promise.all()](#promiseall)
  - [Promise.race()](#promiserace)
  - [Promise.resolve()](#promiseresolve)
  - [Promise.reject()](#promisereject)
  - [两个有用的附加方法](#%e4%b8%a4%e4%b8%aa%e6%9c%89%e7%94%a8%e7%9a%84%e9%99%84%e5%8a%a0%e6%96%b9%e6%b3%95)
  - [应用](#%e5%ba%94%e7%94%a8)
  - [Promise.try()](#promisetry)
    - [参考](#%e5%8f%82%e8%80%83-1)
  - [Iterator 和 for...of 循环](#iterator-%e5%92%8c-forof-%e5%be%aa%e7%8e%af)
  - [Iterator（遍历器）的概念](#iterator%e9%81%8d%e5%8e%86%e5%99%a8%e7%9a%84%e6%a6%82%e5%bf%b5)
  - [默认 Iterator 接口](#%e9%bb%98%e8%ae%a4-iterator-%e6%8e%a5%e5%8f%a3)
  - [调用 Iterator 接口的场合](#%e8%b0%83%e7%94%a8-iterator-%e6%8e%a5%e5%8f%a3%e7%9a%84%e5%9c%ba%e5%90%88)
  - [字符串的 Iterator 接口](#%e5%ad%97%e7%ac%a6%e4%b8%b2%e7%9a%84-iterator-%e6%8e%a5%e5%8f%a3)
  - [Iterator 接口与 Generator 函数](#iterator-%e6%8e%a5%e5%8f%a3%e4%b8%8e-generator-%e5%87%bd%e6%95%b0)
  - [遍历器对象的 return()、throw()](#%e9%81%8d%e5%8e%86%e5%99%a8%e5%af%b9%e8%b1%a1%e7%9a%84-returnthrow)
  - [for...of 循环](#forof-%e5%be%aa%e7%8e%af)
  - [Generator 函数](#generator-%e5%87%bd%e6%95%b0)
  - [简介](#%e7%ae%80%e4%bb%8b)
  - [next 方法的参数](#next-%e6%96%b9%e6%b3%95%e7%9a%84%e5%8f%82%e6%95%b0)
  - [for...of 循环](#forof-%e5%be%aa%e7%8e%af-1)
  - [Generator.prototype.throw()](#generatorprototypethrow)
  - [Generator.prototype.return()](#generatorprototypereturn)
  - [yield\*表达式](#yield%e8%a1%a8%e8%be%be%e5%bc%8f)
  - [作为对象属](#%e4%bd%9c%e4%b8%ba%e5%af%b9%e8%b1%a1%e5%b1%9e)
  - [异步操作和 Async 函数](#%e5%bc%82%e6%ad%a5%e6%93%8d%e4%bd%9c%e5%92%8c-async-%e5%87%bd%e6%95%b0)
  - [Class](#class)
  - [Decorator](#decorator)
  - [Module](#module)
  - [编程风格](#%e7%bc%96%e7%a8%8b%e9%a3%8e%e6%a0%bc)
  - [读懂规格](#%e8%af%bb%e6%87%82%e8%a7%84%e6%a0%bc)
  - [二进制数组](#%e4%ba%8c%e8%bf%9b%e5%88%b6%e6%95%b0%e7%bb%84)
  - [SIMD](#simd)
- [参考](#%e5%8f%82%e8%80%83-2)

# ES5

## 参考

- https://yanhaijing.com/es5/

# ES6

## ECMAScript 简介

ECMAScript （以下简称 ES6）是 JavaScript 语言的下一代标准，己于 2015 年 6 月正式发布。它的目标是使 JavaScript 语言可以用于编写复杂的大型应用程序，成为企业级开发语言。

### ECMAScript 和 JavaScript 的关系

ECMAScript 和 JavaScript 的关系是，前者是后者的规格，后者是前者的一种实现（另外的 ECMAScript 方言含有 JScript 和 ActionScript）。在日常场合，这两个词是可以互换的。

### ES6 与 ECMAScript 的关系

ES6 既是一个历史名词，也是一个泛指，含义是 5.1 版本以后的 JavaScript 的下一代标准，涵盖了 ES2015、ES2016、ES2017 等，而 ES2015 则是正式名称，特指当年发布的正式版本的语言标准。

### 语法提案的批准流程


- Stage 0: Strawman（展示阶段）
- Stage 1: Proposal（征求意见阶段）
- Stage 2: Draft（草案阶段）
- Stage 3: Candidate（候选阶段）
- Stage 4: Finished（定案阶段）

### ECMAScript 的历史

### 部署进度

### Babel 转码器

- 配置文件.babelrc
- 命令行转码 babel-cli
- babel-node
- babel-register
- babel-core
- babel-polyfill
- 浏览器环境
- 在线转换
- 与其他工具的配合

### Traceur 转码器

- 在线转换
- 命令行转换
- Node.js 环境的用法

## let 和 const 命令

### let 命令

- 基本用法
  > ES6 新增了 let 命令，用于声明变量。其用法类似于 var，但是所声明的变量只在 let 命令所在的代码块内有效
- 不存在变量提升
  > let 命令所声明的变量一定要在声明后使用，否则便会报错
- 暂时性死区
  > 只要块级作用域内存在 let 命令，他所声明的变量就绑定(binding)在这个区域，不再受外部的影响
  > 在代码块内，使用 let 命令声明变量之前，该变量都是不可使用的。这在语法上称为暂时性死区（tmporal dead zone，简称 TDZ）
- 不允许重复声明
  > let 不允许在相同作用域内重复声明同一个变量

### 块级作用域

- 为什么需要块级作用域？

  > ES5 只有全局作用域和函数作用域，没有块级作用域，这导致很多场景不合理
  >
  > 第一种场景：内层变量可能会覆盖外层变量
  >
  > 第二种场景：用来计数的循环变量泄露为全局变量

- ES6 的块级作用域
- 块级作用域与函数声明
- do 表达式

### const 命令

- 基本用法
  > const 声明一个只读的常量。一旦声明，常量的值就不能改变。
  >
  > const 声明的常量不得改变值。这意味着，const 一旦声明常量，就必须立即初始化，不能留到以后赋值。
  >
  > const 的作用域与 let 命令相同：只在声明所在的块级作用域内有效。
  >
  > const 命令声明的常量也是不提升，同样存在暂时性死区，只能在声明的位置后面使用
  >
  > const 声明的常量，也与 let 一样不可重复声明。
- 本质
  > const 实际上保证的，并不是变量的值不得改动，而是变量指向的那个内存地址所保存的数据不得改动。
  >
  > 对于简单类型的数据（数值、字符串、布尔值），值就保存在变量指向的那个内存地址，因此等同于常量。
  >
  > 但对于复合类型的数据（主要是对象和数组），变量指向的内存地址，保存的只是一个指向实际数据的指针，const 只能保证这个指针是固定的（即总是指向另一个固定的地址），至于它指向的数据结构是不是可变的，就完全不能控制了。
  >
  > 因此，将一个对象声明为常量必须非常小心。
- ES6 声明变量的 6 种方法

ES5 只有两种声明变量的方法：var 命令和 function 命令。ES6 除了添加 let 和 const 命令，后面章节还会提到，另外两种声明变量的方法：import 命令和 class 命令。所以，ES6 一共有 6 种声明变量的方法。

### 顶层对象的属性

顶层对象，在浏览器环境指的是 window 对象，在 Node 指的是 global 对象。

顶层对象的属性与全局变量挂钩，被认为是 JavaScript 语言最大的设计败笔之一。这样的设计带来了几个很大的问题，首先是没法在编译时就报出变量未声明的错误，只有运行时才能知道（因为全局变量可能是顶层对象的属性创造的，而属性的创造是动态的）；其次，程序员很容易不知不觉地就创建了全局变量（比如打字出错）；最后，顶层对象的属性是到处可以读写的，这非常不利于模块化编程。另一方面，window 对象有实体含义，指的是浏览器的窗口对象，顶层对象是一个有实体含义的对象，也是不合适的。

ES6 为了改变这一点，一方面规定，为了保持兼容性，var 命令和 function 命令声明的全局变量，依旧是顶层对象的属性；另一方面规定，let 命令、const 命令、class 命令声明的全局变量，不属于顶层对象的属性。也就是说，从 ES6 开始，全局变量将逐步与顶层对象的属性脱钩。

### global 对象

JavaScript 语言存在一个顶层对象，它提供全局环境（即全局作用域），所有代码都是在这个环境中运行。但是，顶层对象在各种实现里面是不统一的。

浏览器里面，顶层对象是 window，但 Node 和 Web Worker 没有 window。
浏览器和 Web Worker 里面，self 也指向顶层对象，但是 Node 没有 self。
Node 里面，顶层对象是 global，但其他环境都不支持。
同一段代码为了能够在各种环境，都能取到顶层对象，现在一般是使用 this 变量，但是有局限性。

全局环境中，this 会返回顶层对象。但是，Node 模块和 ES6 模块中，this 返回的是当前模块。

函数里面的 this，如果函数不是作为对象的方法运行，而是单纯作为函数运行，this 会指向顶层对象。但是，严格模式下，这时 this 会返回 undefined。
不管是严格模式，还是普通模式，new Function('return this')()，总是会返回全局对象。但是，如果浏览器用了 CSP（Content Security Policy，内容安全策略），那么 eval、new Function 这些方法都可能无法使用。

综上所述，很难找到一种方法，可以在所有情况下，都取到顶层对象。

## 变量的解构赋值

> ES6 允许按照一定模式，从数组和对象中提取值，对变量进行赋值，这被称为解构（Destructuring）。

### 数组的解构赋值

- 基本用法
- 默认值
  > 解构赋值允许指定默认值。
  > 注意，ES6 内部使用严格相等运算符（===），判断一个位置是否有值。所以，只有当一个数组成员严格等于 undefined，默认值才会生效。

### 对象的解构赋值

- 简介
  > 解构不仅可以用于数组，还可以用于对象。
- 默认值
  > 对象的解构也可以指定默认值。
  > 默认值生效的条件是，对象的属性值严格等于 undefined。
- 注意点
  - 如果要将一个已经声明的变量用于解构赋值，必须非常小心。
  - 解构赋值允许等号左边的模式之中，不放置任何变量名。因此，可以写出非常古怪的赋值表达式。
  - 由于数组本质是特殊的对象，因此可以对数组进行对象属性的解构。

### 字符串的解构赋值

字符串也可以解构赋值。这是因为此时，字符串被转换成了一个类似数组的对象。

类似数组的对象都有一个 length 属性，因此还可以对这个属性解构赋值。

### 数值和布尔值的解构赋值

解构赋值时，如果等号右边是数值和布尔值，则会先转为对象。

解构赋值的规则是，只要等号右边的值不是对象或数组，就先将其转为对象。由于 undefined 和 null 无法转为对象，所以对它们进行解构赋值，都会报错。

### 函数参数的解构赋值

### 圆括号问题

不能使用圆括号的情况
可以使用圆括号的情况

### 用途

## 字符串的扩展

### 字符的 Unicode 表示法

### cidePointAt()

### String.fromCodePoint()

### 字符串的遍历器接口

### at()

### normalize()

### includes()、startWith()

### repeat()

### padStart()、padEnd()

### 模板字符串

### 实例：模板编译

### 标签模板

### String.raw()

### 模板字符串的限制

## 正则的扩展

### RegExp 构造函数

### 字符串的正则方法

### u 修饰符

### y 修饰符

### sticky 属性

### flags 属性

### s 修饰符：dotAll 模式

### 后行断言

### Unicode 属性类

## 数值的扩展

### 二进制和八进制表示法

### Number.isFinite()、Number.isNaN()

### Number.parseInt()、Number.parseFloat()

### Number.isInteger()

### NUmber.EPSILON

### 安全整数和 Number.isSafeInteger()

### Math 对象的扩展

### Math.signbit()

### 指数运算符

> ES2016 新增了一个指数运算符（\*\*）

### Integer 数据类型

## 函数的扩展

## 函数参数的默认值

- 基本用法
- 与解构赋值默认值结合使用
- 参数默认值的位置
- 函数的 length 属性
- 作用域
- 应用

## rest 参数

## 严格模式

## name 属性

## 箭头函数

- 基本用法
- 注意事项
- 嵌套的箭头函数

## 绑定 this

## 尾调用优化

- 什么是尾调用
- 尾调用优化
- 尾递归
- 递归函数的改写
- 严格模式
- 尾递归优化的实现

## 函数参数的尾逗号

## 数组的扩展

## 扩展运算符

- 含义
- 替代数组的 apply 方法
- 扩展运算符的应用

## Array.from()

## Array.of()

## 数组实例的 copyWithin()

## 数组实例的 find()和 findIndex()

## 数组实例的 fill()

## 数组实例的 entries()、keys()和 values()

## 数组实例的 includes()

## 数组的空位

## 对象的扩展

## 属性的简洁表示法

## 属性名表达式

## 方法的 name 属性

## Object.is()

## Object.assign()

- 基本用法
- 注意点
- 常见用途

## 属性的可枚举性

## 属性的遍历

## \_\_proto\_\_ 属性、Object.setPrototypeOf()、Object.getPrototypeOf()

- \_\_proto\_\_ 属性
- Object.setPrototypeOf()
- Object.getPrototypeOf()

## Object.keys()、Object.values()、Object.entries()

- Object.keys()
- Object.values()
- Object.entries

## 对象的扩展运算符

## Object.getOwnPropertyDescriptors()

## Null 传导运算符

## Symbol

## 概述

## 作为属性名的 Symbol

## 实例：消除魔术字符串

## 属性名的遍历

## Symbol.for()、Symbol.keyFor()

## 实例：模块的 Singleton 模式

## 内置的 Symbol 值

- Symbol.hasInstance
- Symbol.isConcatSpreadable
- Symbol.species
- Symbol.match
- Symbol.replace
- Symbol.search
- Symbol.split
- Symbol.iterator
- Symbol.toPrimitive
- Symbol.toStringTag
- Symbol.unscopables

## Set 和 Map 数据结构

## Set

- 基本用法
- Set 实例的属性和方法
- 遍历操作

## WeakSet

- 含义
- 语法

## Map

- 含义和基本用法
- 实例的属性和操作方法
- 遍历方法
- 与其他数据结构的互相转换

## WeakMap

- 含义
- WeakMap 的语法
- WeakMap 示例
- WeakMap 的用途

## Proxy

## 概述

## Proxy 实例的方法

- get()
- set()
- apply()
- has()
- construct()
- deleteProperty()
- defineProperty()
- getOwnPropertyDescriptor()
- getPrototypeOf()
- isExtensible()
- ownKeys()
- preventExtensions()
- setPrototypeOf()

## Proxy.revocable()

## this 问题

## 实例：Web 服务的客户端

## Reflect

## 概述

## 静态方法

- Reflect.get(target, name, receiver)
- Reflect.set(target, name, value, receiver)
- Reflect.has(obj, name)
- Reflect.deleteProperty(obj, name)
- Reflect.construct(target, args)
- Reflect.getPrototypeOf(obj)
- Reflect.setPrototypeOf(obj, newProto)
- Reflect.apply(func, thisArg, args)
- Reflect.defineProperty(target, propertyKey, attributes)
- Reflect.getOwnPropertyDescriptor (target, propertyKey)
- Reflect.isExtensible (target)
- Reflect.preventExtensions(target)
- Reflect.ownKeys (target)

## 实例：使用 Proxy 实现观察者模式

## Promise 对象

## Promise 的含义

## 基本用法

## Promise.prototype.then()

## Promise.prototype.catch()

## Promise.all()

## Promise.race()

## Promise.resolve()

## Promise.reject()

## 两个有用的附加方法

- done()
- finally()

## 应用

- 加载图片
- Generator 函数与 Promise 的结合

## Promise.try()

### 参考

https://www.jianshu.com/p/43de678e918a

## Iterator 和 for...of 循环

## Iterator（遍历器）的概念

## 默认 Iterator 接口

## 调用 Iterator 接口的场合

## 字符串的 Iterator 接口

## Iterator 接口与 Generator 函数

## 遍历器对象的 return()、throw()

## for...of 循环

- 数组
- Set 和 Map 结构
- 计算生成的数据结构
- 类似数组的对象
- 对象
- 与其他遍历语法的比较

## Generator 函数

## 简介

- 基本概念
- yield 表达式
- 与 Iterator 接口的关系

## next 方法的参数

## for...of 循环

## Generator.prototype.throw()

## Generator.prototype.return()

## yield\*表达式

## 作为对象属

## 异步操作和 Async 函数

## Class

## Decorator

## Module

## 编程风格

## 读懂规格

## 二进制数组

## SIMD

# 参考

- ES6 标准入门(第 版)
-
