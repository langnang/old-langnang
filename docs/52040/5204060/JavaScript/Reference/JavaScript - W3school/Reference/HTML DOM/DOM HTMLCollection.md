---
created: 2022-07-27T20:00:48 (UTC +08:00)
tags: []
source: https://www.w3school.com.cn/jsref/dom_obj_htmlcollection.asp
author: w3school.com.cn
---

# DOM HTMLCollection

> ## Excerpt
> HTMLCollection 对象是 HTML 元素的类似数组的列表。

---
-   [DOM Event 对象](https://www.w3school.com.cn/jsref/obj_events.asp "Event 对象")
-   [DOM Location](https://www.w3school.com.cn/jsref/obj_location.asp "Location 对象")

## HTMLCollection 对象

HTMLCollection 对象是 HTML 元素的类似数组的列表。

诸如 getElementsByTagName() 之类的方法会返回 HTMLCollection。

## 属性和方法

可以在 HTMLCollection 对象上使用以下属性和方法：

| 属性 / 方法 | 描述 |
| --- | --- |
| [item()](https://www.w3school.com.cn/jsref/met_htmlcollection_item.asp "HTMLCollection item() 方法") | 返回 HTMLCollection 中指定索引处的元素。 |
| [length](https://www.w3school.com.cn/jsref/prop_htmlcollection_length.asp "HTMLCollection length 属性") | 返回 HTMLCollection 中的元素数。 |
| [namedItem()](https://www.w3school.com.cn/jsref/met_htmlcollection_nameditem.asp "HTMLCollection namedItem() 方法") | 返回 HTMLCollection 中有指定 ID 或名称的元素。 |

## 实例

### 实例

获取 HTMLCollection：

```
var x = document.getElementsByTagName("P");

```

[亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_htmlcollection_1)

### 实例

输出文档中 <p> 元素的数量：

```
var x = document.getElementsByTagName("P");
document.write(x.length);

```

[亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_htmlcollection_2)

### 实例

循环遍历 HTMLCollection 中的每个元素：

```
x = document.getElementsByTagName("*");
l = x.length;
for (i = 0; i < l; i++) {
  document.write(x[i].tagName + "<br>");
}

```

[亲自试一试](https://www.w3school.com.cn/tiy/t.asp?f=jsck_htmlcollection_loop)

-   [DOM Event 对象](https://www.w3school.com.cn/jsref/obj_events.asp "Event 对象")
-   [DOM Location](https://www.w3school.com.cn/jsref/obj_location.asp "Location 对象")
