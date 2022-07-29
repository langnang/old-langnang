---
created: 2022-07-27T20:00:48 (UTC +08:00)
tags: []
source: https://www.w3school.com.cn/jsref/dom_obj_attributes.asp
author: w3school.com.cn
---

# HTML DOM Attr 对象

> ## Excerpt
> 在 HTML DOM （文档对象模型）中，每个部分都是节点：

---
## HTML DOM Attr 对象

-   [JS 语句](https://www.w3school.com.cn/jsref/jsref_statements.asp "JavaScript 语句参考手册")
-   [DOM Document](https://www.w3school.com.cn/jsref/dom_obj_document.asp "HTML DOM Document 对象")

## HTML DOM 节点

在 HTML DOM （文档对象模型）中，每个部分都是节点：

-   文档本身是文档节点
-   所有 HTML 元素是元素节点
-   所有 HTML 属性是属性节点
-   HTML 元素内的文本是文本节点
-   注释是注释节点

## Attr 对象

在 HTML DOM 中，_Attr_ 对象表示 HTML 属性。

HTML 属性始终属于 HTML 元素。

## NamedNodeMap 对象

在 HTML DOM 中，_NamedNodeMap_ 对象表示元素属性节点的无序集合。

NamedNodeMap 中的节点可通过名称或索引（数字）来访问。

## 浏览器支持

| IE | Firefox | Chrome | Safari | Opera |
| --- | --- | --- | --- | --- |
|  |  |  |  |  |

所有浏览器都支持 Attr 对象和 NamedNodeMap 对象。

## DOM 4 警告！

在 W3C DOM Core 中，Attr (attribute) 对象从 Node 对象继承所有属性和方法。

在 DOM 4 中，Attr 对象不再从 Node 继承。

为了保证未来的代码安全，您应该避免在属性对象上使用节点对象的属性和方法：

| 属性 / 方法 | 避免的理由 |
| --- | --- |
| attr.appendChild() | 属性没有子节点。 |
| attr.attributes | 属性没有属性。 |
| attr.baseURI | 使用 document.baseURI 代替。 |
| attr.childNodes | 属性没有子节点。 |
| attr.cloneNode() | 使用 attr.value 代替。 |
| attr.firstChild | 属性没有子节点。 |
| attr.hasAttributes() | 属性没有属性。 |
| attr.hasChildNodes | 属性没有子节点。 |
| attr.insertBefore() | 属性没有子节点。 |
| attr.isEqualNode() | 没有意义。 |
| attr.isSameNode() | 没有意义。 |
| attr.isSupported() | 始终为 true。 |
| attr.lastChild | 属性没有子节点。 |
| attr.nextSibling | 属性没有同级节点。 |
| attr.nodeName | 使用 attr.name 代替。 |
| attr.nodeType | 始终为 2 (ATTRIBUTE\_NODE)。 |
| attr.nodeValue | 使用 attr.value 代替。 |
| attr.normalize() | 属性无法被正常化。 |
| attr.ownerDocument | 始终是您的 HTML 文档。 |
| attr.ownerElement | 这是您用来访问该属性的 HTML 元素。 |
| attr.parentNode | 这是您用来访问该属性的 HTML 元素。 |
| attr.previousSibling | 属性没有同级节点。 |
| attr.removeChild | 属性没有子节点。 |
| attr.replaceChild | 属性没有子节点。 |
| attr.textContent | 使用 attr.value 代替。 |

-   [JS 语句](https://www.w3school.com.cn/jsref/jsref_statements.asp "JavaScript 语句参考手册")
-   [DOM Document](https://www.w3school.com.cn/jsref/dom_obj_document.asp "HTML DOM Document 对象")
