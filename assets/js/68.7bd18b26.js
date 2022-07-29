(window.webpackJsonp=window.webpackJsonp||[]).push([[68],{538:function(s,e,n){"use strict";n.r(e);var a=n(18),t=Object(a.a)({},(function(){var s=this,e=s.$createElement,n=s._self._c||e;return n("ContentSlotsDistributor",{attrs:{"slot-key":s.$parent.slotKey}},[n("h1",{attrs:{id:"运算符的扩展"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#运算符的扩展"}},[s._v("#")]),s._v(" 运算符的扩展")]),s._v(" "),n("ol",[n("li",[n("a",{attrs:{href:"https://es6.ruanyifeng.com/#docs/operator#%E6%8C%87%E6%95%B0%E8%BF%90%E7%AE%97%E7%AC%A6",target:"_blank",rel:"noopener noreferrer"}},[s._v("指数运算符"),n("OutboundLink")],1)]),s._v(" "),n("li",[n("a",{attrs:{href:"https://es6.ruanyifeng.com/#docs/operator#%E9%93%BE%E5%88%A4%E6%96%AD%E8%BF%90%E7%AE%97%E7%AC%A6",target:"_blank",rel:"noopener noreferrer"}},[s._v("链判断运算符"),n("OutboundLink")],1)]),s._v(" "),n("li",[n("a",{attrs:{href:"https://es6.ruanyifeng.com/#docs/operator#Null%20%E5%88%A4%E6%96%AD%E8%BF%90%E7%AE%97%E7%AC%A6",target:"_blank",rel:"noopener noreferrer"}},[s._v("Null 判断运算符"),n("OutboundLink")],1)]),s._v(" "),n("li",[n("a",{attrs:{href:"https://es6.ruanyifeng.com/#docs/operator#%E9%80%BB%E8%BE%91%E8%B5%8B%E5%80%BC%E8%BF%90%E7%AE%97%E7%AC%A6",target:"_blank",rel:"noopener noreferrer"}},[s._v("逻辑赋值运算符"),n("OutboundLink")],1)])]),s._v(" "),n("p",[s._v("本章介绍 ES6 后续标准添加的一些运算符。")]),s._v(" "),n("h2",{attrs:{id:"指数运算符"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#指数运算符"}},[s._v("#")]),s._v(" 指数运算符")]),s._v(" "),n("p",[s._v("ES2016 新增了一个指数运算符（"),n("code",[s._v("**")]),s._v("）。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("2 ** 2 // 4\n2 ** 3 // 8\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br")])]),n("p",[s._v("这个运算符的一个特点是右结合，而不是常见的左结合。多个指数运算符连用时，是从最右边开始计算的。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("// 相当于 2 ** (3 ** 2)\n2 ** 3 ** 2\n// 512\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br")])]),n("p",[s._v("上面代码中，首先计算的是第二个指数运算符，而不是第一个。")]),s._v(" "),n("p",[s._v("指数运算符可以与等号结合，形成一个新的赋值运算符（"),n("code",[s._v("**=")]),s._v("）。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("let a = 1.5;\na **= 2;\n// 等同于 a = a * a;\n\nlet b = 4;\nb **= 3;\n// 等同于 b = b * b * b;\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br"),n("span",{staticClass:"line-number"},[s._v("5")]),n("br"),n("span",{staticClass:"line-number"},[s._v("6")]),n("br"),n("span",{staticClass:"line-number"},[s._v("7")]),n("br")])]),n("h2",{attrs:{id:"链判断运算符"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#链判断运算符"}},[s._v("#")]),s._v(" 链判断运算符")]),s._v(" "),n("p",[s._v("编程实务中，如果读取对象内部的某个属性，往往需要判断一下，属性的上层对象是否存在。比如，读取"),n("code",[s._v("message.body.user.firstName")]),s._v("这个属性，安全的写法是写成下面这样。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("// 错误的写法\nconst  firstName = message.body.user.firstName || 'default';\n\n// 正确的写法\nconst firstName = (message\n  && message.body\n  && message.body.user\n  && message.body.user.firstName) || 'default';\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br"),n("span",{staticClass:"line-number"},[s._v("5")]),n("br"),n("span",{staticClass:"line-number"},[s._v("6")]),n("br"),n("span",{staticClass:"line-number"},[s._v("7")]),n("br"),n("span",{staticClass:"line-number"},[s._v("8")]),n("br")])]),n("p",[s._v("上面例子中，"),n("code",[s._v("firstName")]),s._v("属性在对象的第四层，所以需要判断四次，每一层是否有值。")]),s._v(" "),n("p",[s._v("三元运算符"),n("code",[s._v("?:")]),s._v("也常用于判断对象是否存在。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("const fooInput = myForm.querySelector('input[name=foo]')\nconst fooValue = fooInput ? fooInput.value : undefined\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br")])]),n("p",[s._v("上面例子中，必须先判断"),n("code",[s._v("fooInput")]),s._v("是否存在，才能读取"),n("code",[s._v("fooInput.value")]),s._v("。")]),s._v(" "),n("p",[s._v("这样的层层判断非常麻烦，因此 "),n("a",{attrs:{href:"https://github.com/tc39/proposal-optional-chaining",target:"_blank",rel:"noopener noreferrer"}},[s._v("ES2020"),n("OutboundLink")],1),s._v(" 引入了“链判断运算符”（optional chaining operator）"),n("code",[s._v("?.")]),s._v("，简化上面的写法。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("const firstName = message?.body?.user?.firstName || 'default';\nconst fooValue = myForm.querySelector('input[name=foo]')?.value\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br")])]),n("p",[s._v("上面代码使用了"),n("code",[s._v("?.")]),s._v("运算符，直接在链式调用的时候判断，左侧的对象是否为"),n("code",[s._v("null")]),s._v("或"),n("code",[s._v("undefined")]),s._v("。如果是的，就不再往下运算，而是返回"),n("code",[s._v("undefined")]),s._v("。")]),s._v(" "),n("p",[s._v("下面是判断对象方法是否存在，如果存在就立即执行的例子。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("iterator.return?.()\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br")])]),n("p",[s._v("上面代码中，"),n("code",[s._v("iterator.return")]),s._v("如果有定义，就会调用该方法，否则"),n("code",[s._v("iterator.return")]),s._v("直接返回"),n("code",[s._v("undefined")]),s._v("，不再执行"),n("code",[s._v("?.")]),s._v("后面的部分。")]),s._v(" "),n("p",[s._v("对于那些可能没有实现的方法，这个运算符尤其有用。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("if (myForm.checkValidity?.() === false) {\n  // 表单校验失败\n  return;\n}\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br")])]),n("p",[s._v("上面代码中，老式浏览器的表单对象可能没有"),n("code",[s._v("checkValidity()")]),s._v("这个方法，这时"),n("code",[s._v("?.")]),s._v("运算符就会返回"),n("code",[s._v("undefined")]),s._v("，判断语句就变成了"),n("code",[s._v("undefined === false")]),s._v("，所以就会跳过下面的代码。")]),s._v(" "),n("p",[s._v("链判断运算符"),n("code",[s._v("?.")]),s._v("有三种写法。")]),s._v(" "),n("ul",[n("li",[n("code",[s._v("obj?.prop")]),s._v(" // 对象属性是否存在")]),s._v(" "),n("li",[n("code",[s._v("obj?.[expr]")]),s._v(" // 同上")]),s._v(" "),n("li",[n("code",[s._v("func?.(...args)")]),s._v(" // 函数或对象方法是否存在")])]),s._v(" "),n("p",[s._v("下面是"),n("code",[s._v("obj?.[expr]")]),s._v("用法的一个例子。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v('let hex = "#C0FFEE".match(/#([A-Z]+)/i)?.[1];\n')])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br")])]),n("p",[s._v("上面例子中，字符串的"),n("code",[s._v("match()")]),s._v("方法，如果没有发现匹配会返回"),n("code",[s._v("null")]),s._v("，如果发现匹配会返回一个数组，"),n("code",[s._v("?.")]),s._v("运算符起到了判断作用。")]),s._v(" "),n("p",[s._v("下面是"),n("code",[s._v("?.")]),s._v("运算符常见形式，以及不使用该运算符时的等价形式。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("a?.b\n// 等同于\na == null ? undefined : a.b\n\na?.[x]\n// 等同于\na == null ? undefined : a[x]\n\na?.b()\n// 等同于\na == null ? undefined : a.b()\n\na?.()\n// 等同于\na == null ? undefined : a()\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br"),n("span",{staticClass:"line-number"},[s._v("5")]),n("br"),n("span",{staticClass:"line-number"},[s._v("6")]),n("br"),n("span",{staticClass:"line-number"},[s._v("7")]),n("br"),n("span",{staticClass:"line-number"},[s._v("8")]),n("br"),n("span",{staticClass:"line-number"},[s._v("9")]),n("br"),n("span",{staticClass:"line-number"},[s._v("10")]),n("br"),n("span",{staticClass:"line-number"},[s._v("11")]),n("br"),n("span",{staticClass:"line-number"},[s._v("12")]),n("br"),n("span",{staticClass:"line-number"},[s._v("13")]),n("br"),n("span",{staticClass:"line-number"},[s._v("14")]),n("br"),n("span",{staticClass:"line-number"},[s._v("15")]),n("br")])]),n("p",[s._v("上面代码中，特别注意后两种形式，如果"),n("code",[s._v("a?.b()")]),s._v("和"),n("code",[s._v("a?.()")]),s._v("。如果"),n("code",[s._v("a?.b()")]),s._v("里面的"),n("code",[s._v("a.b")]),s._v("有值，但不是函数，不可调用，那么"),n("code",[s._v("a?.b()")]),s._v("是会报错的。"),n("code",[s._v("a?.()")]),s._v("也是如此，如果"),n("code",[s._v("a")]),s._v("不是"),n("code",[s._v("null")]),s._v("或"),n("code",[s._v("undefined")]),s._v("，但也不是函数，那么"),n("code",[s._v("a?.()")]),s._v("会报错。")]),s._v(" "),n("p",[s._v("使用这个运算符，有几个注意点。")]),s._v(" "),n("p",[s._v("（1）短路机制")]),s._v(" "),n("p",[s._v("本质上，"),n("code",[s._v("?.")]),s._v("运算符相当于一种短路机制，只要不满足条件，就不再往下执行。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("a?.[++x]\n// 等同于\na == null ? undefined : a[++x]\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br")])]),n("p",[s._v("上面代码中，如果"),n("code",[s._v("a")]),s._v("是"),n("code",[s._v("undefined")]),s._v("或"),n("code",[s._v("null")]),s._v("，那么"),n("code",[s._v("x")]),s._v("不会进行递增运算。也就是说，链判断运算符一旦为真，右侧的表达式就不再求值。")]),s._v(" "),n("p",[s._v("（2）括号的影响")]),s._v(" "),n("p",[s._v("如果属性链有圆括号，链判断运算符对圆括号外部没有影响，只对圆括号内部有影响。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("(a?.b).c\n// 等价于\n(a == null ? undefined : a.b).c\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br")])]),n("p",[s._v("上面代码中，"),n("code",[s._v("?.")]),s._v("对圆括号外部没有影响，不管"),n("code",[s._v("a")]),s._v("对象是否存在，圆括号后面的"),n("code",[s._v(".c")]),s._v("总是会执行。")]),s._v(" "),n("p",[s._v("一般来说，使用"),n("code",[s._v("?.")]),s._v("运算符的场合，不应该使用圆括号。")]),s._v(" "),n("p",[s._v("（3）报错场合")]),s._v(" "),n("p",[s._v("以下写法是禁止的，会报错。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("// 构造函数\nnew a?.()\nnew a?.b()\n\n// 链判断运算符的右侧有模板字符串\na?.`{b}`\na?.b`{c}`\n\n// 链判断运算符的左侧是 super\nsuper?.()\nsuper?.foo\n\n// 链运算符用于赋值运算符左侧\na?.b = c\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br"),n("span",{staticClass:"line-number"},[s._v("5")]),n("br"),n("span",{staticClass:"line-number"},[s._v("6")]),n("br"),n("span",{staticClass:"line-number"},[s._v("7")]),n("br"),n("span",{staticClass:"line-number"},[s._v("8")]),n("br"),n("span",{staticClass:"line-number"},[s._v("9")]),n("br"),n("span",{staticClass:"line-number"},[s._v("10")]),n("br"),n("span",{staticClass:"line-number"},[s._v("11")]),n("br"),n("span",{staticClass:"line-number"},[s._v("12")]),n("br"),n("span",{staticClass:"line-number"},[s._v("13")]),n("br"),n("span",{staticClass:"line-number"},[s._v("14")]),n("br")])]),n("p",[s._v("（4）右侧不得为十进制数值")]),s._v(" "),n("p",[s._v("为了保证兼容以前的代码，允许"),n("code",[s._v("foo?.3:0")]),s._v("被解析成"),n("code",[s._v("foo ? .3 : 0")]),s._v("，因此规定如果"),n("code",[s._v("?.")]),s._v("后面紧跟一个十进制数字，那么"),n("code",[s._v("?.")]),s._v("不再被看成是一个完整的运算符，而会按照三元运算符进行处理，也就是说，那个小数点会归属于后面的十进制数字，形成一个小数。")]),s._v(" "),n("h2",{attrs:{id:"null-判断运算符"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#null-判断运算符"}},[s._v("#")]),s._v(" Null 判断运算符")]),s._v(" "),n("p",[s._v("读取对象属性的时候，如果某个属性的值是"),n("code",[s._v("null")]),s._v("或"),n("code",[s._v("undefined")]),s._v("，有时候需要为它们指定默认值。常见做法是通过"),n("code",[s._v("||")]),s._v("运算符指定默认值。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("const headerText = response.settings.headerText || 'Hello, world!';\nconst animationDuration = response.settings.animationDuration || 300;\nconst showSplashScreen = response.settings.showSplashScreen || true;\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br")])]),n("p",[s._v("上面的三行代码都通过"),n("code",[s._v("||")]),s._v("运算符指定默认值，但是这样写是错的。开发者的原意是，只要属性的值为"),n("code",[s._v("null")]),s._v("或"),n("code",[s._v("undefined")]),s._v("，默认值就会生效，但是属性的值如果为空字符串或"),n("code",[s._v("false")]),s._v("或"),n("code",[s._v("0")]),s._v("，默认值也会生效。")]),s._v(" "),n("p",[s._v("为了避免这种情况，"),n("a",{attrs:{href:"https://github.com/tc39/proposal-nullish-coalescing",target:"_blank",rel:"noopener noreferrer"}},[s._v("ES2020"),n("OutboundLink")],1),s._v(" 引入了一个新的 Null 判断运算符"),n("code",[s._v("??")]),s._v("。它的行为类似"),n("code",[s._v("||")]),s._v("，但是只有运算符左侧的值为"),n("code",[s._v("null")]),s._v("或"),n("code",[s._v("undefined")]),s._v("时，才会返回右侧的值。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("const headerText = response.settings.headerText ?? 'Hello, world!';\nconst animationDuration = response.settings.animationDuration ?? 300;\nconst showSplashScreen = response.settings.showSplashScreen ?? true;\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br")])]),n("p",[s._v("上面代码中，默认值只有在左侧属性值为"),n("code",[s._v("null")]),s._v("或"),n("code",[s._v("undefined")]),s._v("时，才会生效。")]),s._v(" "),n("p",[s._v("这个运算符的一个目的，就是跟链判断运算符"),n("code",[s._v("?.")]),s._v("配合使用，为"),n("code",[s._v("null")]),s._v("或"),n("code",[s._v("undefined")]),s._v("的值设置默认值。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("const animationDuration = response.settings?.animationDuration ?? 300;\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br")])]),n("p",[s._v("上面代码中，如果"),n("code",[s._v("response.settings")]),s._v("是"),n("code",[s._v("null")]),s._v("或"),n("code",[s._v("undefined")]),s._v("，或者"),n("code",[s._v("response.settings.animationDuration")]),s._v("是"),n("code",[s._v("null")]),s._v("或"),n("code",[s._v("undefined")]),s._v("，就会返回默认值 300。也就是说，这一行代码包括了两级属性的判断。")]),s._v(" "),n("p",[s._v("这个运算符很适合判断函数参数是否赋值。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("function Component(props) {\n  const enable = props.enabled ?? true;\n  // …\n}\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br")])]),n("p",[s._v("上面代码判断"),n("code",[s._v("props")]),s._v("参数的"),n("code",[s._v("enabled")]),s._v("属性是否赋值，基本等同于下面的写法。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("function Component(props) {\n  const {\n    enabled: enable = true,\n  } = props;\n  // …\n}\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br"),n("span",{staticClass:"line-number"},[s._v("5")]),n("br"),n("span",{staticClass:"line-number"},[s._v("6")]),n("br")])]),n("p",[n("code",[s._v("??")]),s._v("本质上是逻辑运算，它与其他两个逻辑运算符"),n("code",[s._v("&&")]),s._v("和"),n("code",[s._v("||")]),s._v("有一个优先级问题，它们之间的优先级到底孰高孰低。优先级的不同，往往会导致逻辑运算的结果不同。")]),s._v(" "),n("p",[s._v("现在的规则是，如果多个逻辑运算符一起使用，必须用括号表明优先级，否则会报错。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("// 报错\nlhs && middle ?? rhs\nlhs ?? middle && rhs\nlhs || middle ?? rhs\nlhs ?? middle || rhs\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br"),n("span",{staticClass:"line-number"},[s._v("5")]),n("br")])]),n("p",[s._v("上面四个表达式都会报错，必须加入表明优先级的括号。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("(lhs && middle) ?? rhs;\nlhs && (middle ?? rhs);\n\n(lhs ?? middle) && rhs;\nlhs ?? (middle && rhs);\n\n(lhs || middle) ?? rhs;\nlhs || (middle ?? rhs);\n\n(lhs ?? middle) || rhs;\nlhs ?? (middle || rhs);\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br"),n("span",{staticClass:"line-number"},[s._v("5")]),n("br"),n("span",{staticClass:"line-number"},[s._v("6")]),n("br"),n("span",{staticClass:"line-number"},[s._v("7")]),n("br"),n("span",{staticClass:"line-number"},[s._v("8")]),n("br"),n("span",{staticClass:"line-number"},[s._v("9")]),n("br"),n("span",{staticClass:"line-number"},[s._v("10")]),n("br"),n("span",{staticClass:"line-number"},[s._v("11")]),n("br")])]),n("h2",{attrs:{id:"逻辑赋值运算符"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#逻辑赋值运算符"}},[s._v("#")]),s._v(" 逻辑赋值运算符")]),s._v(" "),n("p",[s._v("ES2021 引入了三个新的"),n("a",{attrs:{href:"https://github.com/tc39/proposal-logical-assignment",target:"_blank",rel:"noopener noreferrer"}},[s._v("逻辑赋值运算符"),n("OutboundLink")],1),s._v("（logical assignment operators），将逻辑运算符与赋值运算符进行结合。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("// 或赋值运算符\nx ||= y\n// 等同于\nx || (x = y)\n\n// 与赋值运算符\nx &&= y\n// 等同于\nx && (x = y)\n\n// Null 赋值运算符\nx ??= y\n// 等同于\nx ?? (x = y)\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br"),n("span",{staticClass:"line-number"},[s._v("5")]),n("br"),n("span",{staticClass:"line-number"},[s._v("6")]),n("br"),n("span",{staticClass:"line-number"},[s._v("7")]),n("br"),n("span",{staticClass:"line-number"},[s._v("8")]),n("br"),n("span",{staticClass:"line-number"},[s._v("9")]),n("br"),n("span",{staticClass:"line-number"},[s._v("10")]),n("br"),n("span",{staticClass:"line-number"},[s._v("11")]),n("br"),n("span",{staticClass:"line-number"},[s._v("12")]),n("br"),n("span",{staticClass:"line-number"},[s._v("13")]),n("br"),n("span",{staticClass:"line-number"},[s._v("14")]),n("br")])]),n("p",[s._v("这三个运算符"),n("code",[s._v("||=")]),s._v("、"),n("code",[s._v("&&=")]),s._v("、"),n("code",[s._v("??=")]),s._v("相当于先进行逻辑运算，然后根据运算结果，再视情况进行赋值运算。")]),s._v(" "),n("p",[s._v("它们的一个用途是，为变量或属性设置默认值。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("// 老的写法\nuser.id = user.id || 1;\n\n// 新的写法\nuser.id ||= 1;\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br"),n("span",{staticClass:"line-number"},[s._v("5")]),n("br")])]),n("p",[s._v("上面示例中，"),n("code",[s._v("user.id")]),s._v("属性如果不存在，则设为"),n("code",[s._v("1")]),s._v("，新的写法比老的写法更紧凑一些。")]),s._v(" "),n("p",[s._v("下面是另一个例子。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("function example(opts) {\n  opts.foo = opts.foo ?? 'bar';\n  opts.baz ?? (opts.baz = 'qux');\n}\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br")])]),n("p",[s._v("上面示例中，参数对象"),n("code",[s._v("opts")]),s._v("如果不存在属性"),n("code",[s._v("foo")]),s._v("和属性"),n("code",[s._v("baz")]),s._v("，则为这两个属性设置默认值。有了“Null 赋值运算符”以后，就可以统一写成下面这样。")]),s._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[s._v("function example(opts) {\n  opts.foo ??= 'bar';\n  opts.baz ??= 'qux';\n}\n")])]),s._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[s._v("1")]),n("br"),n("span",{staticClass:"line-number"},[s._v("2")]),n("br"),n("span",{staticClass:"line-number"},[s._v("3")]),n("br"),n("span",{staticClass:"line-number"},[s._v("4")]),n("br")])]),n("h3",{attrs:{id:"留言"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#留言"}},[s._v("#")]),s._v(" 留言")])])}),[],!1,null,null,null);e.default=t.exports}}]);