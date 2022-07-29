---
created: 2022-07-27T20:00:48 (UTC +08:00)
tags: []
source: https://www.w3school.com.cn/jsref/obj_location.asp
author: w3school.com.cn
---

# Location 对象

> ## Excerpt
> Location 对象包含有关当前 URL 的信息。

---
-   [DOM HTMLCollection](https://www.w3school.com.cn/jsref/dom_obj_htmlcollection.asp "DOM HTMLCollection")
-   [DOM Navigator](https://www.w3school.com.cn/jsref/obj_navigator.asp "Navigator 对象")

## Location 对象

Location 对象包含有关当前 URL 的信息。

Location 对象是 Window 对象的一个部分，可通过 window.location 属性来访问。

### 例子

[把用户带到一个新的地址](https://www.w3school.com.cn/tiy/t.asp?f=hdom_location)

## Location 对象属性

| 属性 | 描述 |
| --- | --- |
| [hash](https://www.w3school.com.cn/jsref/prop_loc_hash.asp) | 设置或返回从井号 (#) 开始的 URL（锚）。 |
| [host](https://www.w3school.com.cn/jsref/prop_loc_host.asp) | 设置或返回主机名和当前 URL 的端口号。 |
| [hostname](https://www.w3school.com.cn/jsref/prop_loc_hostname.asp) | 设置或返回当前 URL 的主机名。 |
| [href](https://www.w3school.com.cn/jsref/prop_loc_href.asp) | 设置或返回完整的 URL。 |
| [pathname](https://www.w3school.com.cn/jsref/prop_loc_pathname.asp) | 设置或返回当前 URL 的路径部分。 |
| [port](https://www.w3school.com.cn/jsref/prop_loc_port.asp) | 设置或返回当前 URL 的端口号。 |
| [protocol](https://www.w3school.com.cn/jsref/prop_loc_protocol.asp) | 设置或返回当前 URL 的协议。 |
| [search](https://www.w3school.com.cn/jsref/prop_loc_search.asp) | 设置或返回从问号 (?) 开始的 URL（查询部分）。 |

## Location 对象描述

Location 对象存储在 Window 对象的 Location 属性中，表示那个窗口中当前显示的文档的 Web 地址。它的 [href 属性](https://www.w3school.com.cn/jsref/prop_loc_href.asp)存放的是文档的完整 URL，其他属性则分别描述了 URL 的各个部分。这些属性与 Anchor 对象（或 Area 对象）的 URL 属性非常相似。当一个 Location 对象被转换成字符串，href 属性的值被返回。这意味着你可以使用表达式 location 来替代 location.href。

不过 Anchor 对象表示的是文档中的超链接，Location 对象表示的却是浏览器当前显示的文档的 URL（或位置）。但是 Location 对象所能做的远远不止这些，它还能控制浏览器显示的文档的位置。如果把一个含有 URL 的字符串赋予 Location 对象或它的 href 属性，浏览器就会把新的 URL 所指的文档装载进来，并显示出来。

除了设置 location 或 location.href 用完整的 URL 替换当前的 URL 之外，还可以修改部分 URL，只需要给 Location 对象的其他属性赋值即可。这样做就会创建新的 URL，其中的一部分与原来的 URL 不同，浏览器会将它装载并显示出来。例如，假设设置了Location对象的 [hash 属性](https://www.w3school.com.cn/jsref/prop_loc_hash.asp)，那么浏览器就会转移到当前文档中的一个指定的位置。同样，如果设置了 [search 属性](https://www.w3school.com.cn/jsref/prop_loc_search.asp)，那么浏览器就会重新装载附加了新的查询字符串的 URL。

除了 URL 属性外，Location 对象的 [reload() 方法](https://www.w3school.com.cn/jsref/met_loc_reload.asp)可以重新装载当前文档，[replace()](https://www.w3school.com.cn/jsref/met_loc_replace.asp) 可以装载一个新文档而无须为它创建一个新的历史记录，也就是说，在浏览器的历史列表中，新文档将替换当前文档。

-   [DOM HTMLCollection](https://www.w3school.com.cn/jsref/dom_obj_htmlcollection.asp "DOM HTMLCollection")
-   [DOM Navigator](https://www.w3school.com.cn/jsref/obj_navigator.asp "Navigator 对象")
