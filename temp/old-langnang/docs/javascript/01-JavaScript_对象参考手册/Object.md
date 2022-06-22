# Object

Object 构造函数创建一个对象包装器。

## 目录

语法
// 对象初始化器（Object initialiser）或对象字面量（literal）
{ [ nameValuePair1[, nameValuePair2[, ...nameValuePairN] ] ] }

// 以构造函数形式来调用
new Object([value])
参数
nameValuePair1, nameValuePair2, ... nameValuePairN
成对的名称（字符串）与值（任何值），其中名称通过冒号与值分隔。
value
任何值。
描述
Object 构造函数为给定值创建一个对象包装器。如果给定值是 null 或 undefined，将会创建并返回一个空对象，否则，将返回一个与给定值对应类型的对象。

当以非构造函数形式被调用时，Object 等同于 new Object()。

可查看 对象初始化/字面量语法。

Object 构造函数的属性
Object.length
值为 1。
Object.prototype
可以为所有 Object 类型的对象添加属性。
Object 构造函数的方法
Object.assign()
通过复制一个或多个对象来创建一个新的对象。
Object.create()
使用指定的原型对象和属性创建一个新对象。
Object.defineProperty()
给对象添加一个属性并指定该属性的配置。
Object.defineProperties()
给对象添加多个属性并分别指定它们的配置。
Object.entries()
返回给定对象自身可枚举属性的 [key, value] 数组。
Object.freeze()
冻结对象：其他代码不能删除或更改任何属性。
Object.getOwnPropertyDescriptor()
返回对象指定的属性配置。
Object.getOwnPropertyNames()
返回一个数组，它包含了指定对象所有的可枚举或不可枚举的属性名。
Object.getOwnPropertySymbols()
返回一个数组，它包含了指定对象自身所有的符号属性。
Object.getPrototypeOf()
返回指定对象的原型对象。
Object.is()
比较两个值是否相同。所有 NaN 值都相等（这与==和===不同）。
Object.isExtensible()
判断对象是否可扩展。
Object.isFrozen()
判断对象是否已经冻结。
Object.isSealed()
判断对象是否已经密封。
Object.keys()
返回一个包含所有给定对象自身可枚举属性名称的数组。
Object.preventExtensions()
防止对象的任何扩展。
Object.seal()
防止其他代码删除对象的属性。
Object.setPrototypeOf()
设置对象的原型（即内部 [[Prototype]] 属性）。
Object.values()
返回给定对象自身可枚举值的数组。
Object 实例和 Object 原型对象
JavaScript 中的所有对象都来自 Object；所有对象从 Object.prototype 继承方法和属性，尽管它们可能被覆盖。例如，其他构造函数的原型将覆盖 constructor 属性并提供自己的 toString() 方法。Object 原型对象的更改将传播到所有对象，除非受到这些更改的属性和方法将沿原型链进一步覆盖。

属性
Object.prototype.constructor
特定的函数，用于创建一个对象的原型。
Object.prototype.**proto**
指向当对象被实例化的时候，用作原型的对象。
Object.prototype.**noSuchMethod**
当未定义的对象成员被调用作方法的时候，允许定义并执行的函数。
Object.prototype.**count**
用于直接返回用户定义的对象中可数的属性的数量。已被废除。
Object.prototype.**parent**
用于指向对象的内容。已被废除。
方法
Object.prototype.**defineGetter**()  
关联一个函数到一个属性。访问该函数时，执行该函数并返回其返回值。
Object.prototype.**defineSetter**()  
关联一个函数到一个属性。设置该函数时，执行该修改属性的函数。
Object.prototype.**lookupGetter**()  
返回使用 **defineGetter** 定义的方法函数 。
Object.prototype.**lookupSetter**()  
返回使用 **defineSetter** 定义的方法函数。
Object.prototype.hasOwnProperty()
返回一个布尔值 ，表示某个对象是否含有指定的属性，而且此属性非原型链继承的。
Object.prototype.isPrototypeOf()
返回一个布尔值，表示指定的对象是否在本对象的原型链中。
Object.prototype.propertyIsEnumerable()
判断指定属性是否可枚举，内部属性设置参见 ECMAScript [[Enumerable]] attribute 。
Object.prototype.toSource()
返回字符串表示此对象的源代码形式，可以使用此字符串生成一个新的相同的对象。
Object.prototype.toLocaleString()
直接调用 toString()方法。
Object.prototype.toString()
返回对象的字符串表示。
Object.prototype.unwatch()
移除对象某个属性的监听。
Object.prototype.valueOf()
返回指定对象的原始值。
Object.prototype.watch()
给对象的某个属性增加监听。
