(window.webpackJsonp=window.webpackJsonp||[]).push([[34],{503:function(v,_,e){"use strict";e.r(_);var s=e(18),t=Object(s.a)({},(function(){var v=this,_=v.$createElement,e=v._self._c||_;return e("ContentSlotsDistributor",{attrs:{"slot-key":v.$parent.slotKey}},[e("h1",{attrs:{id:"css-选择器的优先级及继承属性"}},[e("a",{staticClass:"header-anchor",attrs:{href:"#css-选择器的优先级及继承属性"}},[v._v("#")]),v._v(" CSS 选择器的优先级及继承属性")]),v._v(" "),e("ul",[e("li",[e("RouterLink",{attrs:{to:"/52040/5204060/CSS/docs/CSS - W3school/Reference/CSS 选择器参考手册.html"}},[v._v("CSS 选择器")])],1)]),v._v(" "),e("p",[v._v("相信大家对"),e("code",[v._v("CSS")]),v._v("选择器的优先级都不陌生：")]),v._v(" "),e("blockquote",[e("p",[v._v("内联 > ID 选择器 > 类选择器 > 标签选择器")])]),v._v(" "),e("p",[v._v("到具体的计算层⾯，优先级是由 A 、B、C、D 的值来决定的，其中它们的值计算规则如下：")]),v._v(" "),e("ul",[e("li",[v._v("如果存在内联样式，那么 A = 1, 否则 A = 0")]),v._v(" "),e("li",[v._v("B 的值等于 ID 选择器出现的次数")]),v._v(" "),e("li",[v._v("C 的值等于 类选择器 和 属性选择器 和 伪类 出现的总次数")]),v._v(" "),e("li",[v._v("D 的值等于 标签选择器 和 伪元素 出现的总次数")])]),v._v(" "),e("p",[v._v("这里举个例子：")]),v._v(" "),e("div",{staticClass:"language-css line-numbers-mode"},[e("pre",{pre:!0,attrs:{class:"language-css"}},[e("code",[v._v("#nav-global > ul > li > a.nav-link"),e("span",{pre:!0,attrs:{class:"token punctuation"}},[v._v(";")]),v._v("\n")])]),v._v(" "),e("div",{staticClass:"line-numbers-wrapper"},[e("span",{staticClass:"line-number"},[v._v("1")]),e("br")])]),e("p",[v._v("套用上面的算法，依次求出 "),e("code",[v._v("A")]),v._v(" "),e("code",[v._v("B")]),v._v(" "),e("code",[v._v("C")]),v._v(" "),e("code",[v._v("D")]),v._v(" 的值：")]),v._v(" "),e("ul",[e("li",[v._v("因为没有内联样式 ，所以 A = 0")]),v._v(" "),e("li",[v._v("ID 选择器总共出现了 1 次， B = 1")]),v._v(" "),e("li",[v._v("类选择器出现了 1 次， 属性选择器出现了 0 次，伪类选择器出现 0 次，所以 C = (1 + 0 + 0) = 1")]),v._v(" "),e("li",[v._v("标签选择器出现了 3 次， 伪元素出现了 0 次，所以 D = (3 + 0) = 3")])]),v._v(" "),e("p",[v._v("上面算出的"),e("code",[v._v("A")]),v._v(" 、 "),e("code",[v._v("B")]),v._v("、"),e("code",[v._v("C")]),v._v("、"),e("code",[v._v("D")]),v._v(" 可以简记作："),e("code",[v._v("(0, 1, 1, 3)")])]),v._v(" "),e("p",[v._v("知道了优先级是如何计算之后，就来看看比较规则：")]),v._v(" "),e("ul",[e("li",[v._v("从左往右依次进行比较 ，较大者优先级更高")]),v._v(" "),e("li",[v._v("如果相等，则继续往右移动一位进行比较")]),v._v(" "),e("li",[v._v("如果 4 位全部相等，则后面的会覆盖前面的")])]),v._v(" "),e("p",[v._v("经过上面的优先级计算规则，我们知道内联样式的优先级最高，如果外部样式需要覆盖内联样式，就需要使用"),e("code",[v._v("!important")])])])}),[],!1,null,null,null);_.default=t.exports}}]);