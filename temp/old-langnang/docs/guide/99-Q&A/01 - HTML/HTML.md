<h1>HTML Interview Question</h1>

[TOC]

## 将 HTML5 看作成开放的网络平台，什么是 HTML5 的基本构件（building block）？

语义 - 提供更准确地描述内容。
连接 - 提供新的方式与服务器通信。
离线和存储 - 允许网页在本地存储数据并有效地离线运行。
多媒体 - 在 Open Web 中，视频和音频被视为一等公民（first-class citizens）。
2D/3D 图形和特效 - 提供更多种演示选项。
性能和集成 - 提供更快的访问速度和性能更好的计算机硬件。
设备访问 - 允许使用各种输入、输出设备。
外观 - 可以开发丰富的主题。
参考
https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5

## 请描述 cookie、sessionStorage 和 localStorage 的区别。

上面提到的技术名词，都是在客户端以键值对存储的存储机制，并且只能将值存储为字符串。

|                                                    | cookie                                             | localStorage | sessionStorage |
| -------------------------------------------------- | -------------------------------------------------- | ------------ | -------------- |
| 由谁初始化                                         | 客户端或服务器，服务器可以使用 Set-Cookie 请求头。 | 客户端       | 客户端         |
| 过期时间                                           | 手动设置                                           | 永不过期     | 当前页面关闭时 |
| 在当前浏览器会话（browser sessions）中是否保持不变 | 取决于是否设置了过期时间                           | 是           | 否             |
| 是否随着每个 HTTP 请求发送给服务器                 | 是，Cookies 会通过 Cookie 请求头，自动发送给服务器 | 否           | 否             |
| 容量（每个域名）                                   | 4kb                                                | 5MB          | 5MB            |
| 访问权限                                           | 任意窗口                                           | 任意窗口     | 当前页面窗口   |

参考
https://developer.mozilla.org/en-US/docs/Web/HTTP/Cookies
http://tutorial.techaltum.com/local-and-session-storage.html

## 请描述\<script>、\<script async>和\<script defer>的区别。

\<script> - HTML 解析中断，脚本被提取并立即执行。执行结束后，HTML 解析继续。
\<script async> - 脚本的提取、执行的过程与 HTML 解析过程并行，脚本执行完毕可能在 HTML 解析完毕之前。当脚本与页面上其他脚本独立时，可以使用 async，比如用作页面统计分析。
\<script defer> - 脚本仅提取过程与 HTML 解析过程并行，脚本的执行将在 HTML 解析完毕后进行。如果有多个含 defer 的脚本，脚本的执行顺序将按照在 document 中出现的位置，从上到下顺序执行。
注意：没有 src 属性的脚本，async 和 defer 属性会被忽略。

参考
http://www.growingwiththeweb.com/2014/02/async-vs-defer-attributes.html
https://stackoverflow.com/questions/10808109/script-tag-async-defer
https://bitsofco.de/async-vs-defer/

## 为什么最好把 CSS 的\<link>标签放在\<head>\</head>之间？为什么最好把 JS 的\<script>标签恰好放在\</body>之前，有例外情况吗？

**把\<link>放在\<head>中**

把\<link>标签放在\<head>\</head>之间是规范要求的内容。此外，这种做法可以让页面逐步呈现，提高了用户体验。将样式表放在文档底部附近，会使许多浏览器（包括 Internet Explorer）不能逐步呈现页面。一些浏览器会阻止渲染，以避免在页面样式发生变化时，重新绘制页面中的元素。这种做法可以防止呈现给用户空白的页面或没有样式的内容。

**把\<script>标签恰好放在\</body>之前**

脚本在下载和执行期间会阻止 HTML 解析。把\<script>标签放在底部，保证 HTML 首先完成解析，将页面尽早呈现给用户。

例外情况是当你的脚本里包含 document.write()时。但是现在，document.write()不推荐使用。同时，将\<script>标签放在底部，意味着浏览器不能开始下载脚本，直到整个文档（document）被解析。也许，对此比较好的做法是，\<script>使用 defer 属性，放在\<head>中。

参考
https://developer.yahoo.com/performance/rules.html#css_top

## 什么是渐进式渲染（progressive rendering）？

渐进式渲染是用于提高网页性能（尤其是提高用户感知的加载速度），以尽快呈现页面的技术。

在以前互联网带宽较小的时期，这种技术更为普遍。如今，移动终端的盛行，而移动网络往往不稳定，渐进式渲染在现代前端开发中仍然有用武之地。

一些举例：

图片懒加载——页面上的图片不会一次性全部加载。当用户滚动页面到图片部分时，JavaScript 将加载并显示图像。
确定显示内容的优先级（分层次渲染）——为了尽快将页面呈现给用户，页面只包含基本的最少量的 CSS、脚本和内容，然后可以使用延迟加载脚本或监听 DOMContentLoaded/load 事件加载其他资源和内容。
异步加载 HTML 片段——当页面通过后台渲染时，把 HTML 拆分，通过异步请求，分块发送给浏览器。更多相关细节可以在这里找到。
参考
https://stackoverflow.com/questions/33651166/what-is-progressive-rendering
http://www.ebaytechblog.com/2014/12/08/async-fragments-rediscovering-progressive-html-rendering-with-marko/

## 为什么在\<img>标签中使用 srcset 属性？请描述浏览器遇到该属性后的处理过程。

因为需要设计响应式图片。我们可以使用两个新的属性——srcset 和 sizes——来提供更多额外的资源图像和提示，帮助浏览器选择正确的一个资源。

srcset 定义了我们允许浏览器选择的图像集，以及每个图像的大小。

sizes 定义了一组媒体条件（例如屏幕宽度）并且指明当某些媒体条件为真时，什么样的图片尺寸是最佳选择。

所以，有了这些属性，浏览器会：

查看设备宽度
检查 sizes 列表中哪个媒体条件是第一个为真
查看给予该媒体查询的槽大小
加载 srcset 列表中引用的最接近所选的槽大小的图像
参考
https://developer.mozilla.org/zh-CN/docs/Learn/HTML/Multimedia_and_embedding/Responsive_images

## 你有过使用不同模版语言的经历吗？

有过，比如 Pug （以前叫 Jade）、 ERB、 Slim、 Handlebars、 Jinja、 Liquid 等等。在我看来，这些模版语言大多是相似的，都提供了用于展示数据的内容替换和过滤器的功能。大部分模版引擎都支持自定义过滤器，以展示自定义格式的内容。

其它答案
https://neal.codes/blog/front-end-interview-questions-html/
http://peterdoes.it/2015/12/03/a-personal-exercise-front-end-job-interview-questions-and-my-answers-all/

## CSS 引入方式及 link 和@import 的区别是?

- link 是 XHTML 标签，除了加载 CSS 外，还可以定义 RSS 等其他事务；@import 属于 CSS 范畴，只能加载 CSS。
- link 引用 CSS 时，在页面载入时同时加载；@import 需要页面网页完全载入以后加载。 所以会出现一开始没有 css 样式，闪烁一下出现样式后的页面(网速慢的情况下)
- link 是 XHTML 标签，无兼容问题；@import 是在 CSS2.1 提出的，低版本的浏览器不支持。
- link 支持使用 Javascript 控制 DOM 去改变样式；而@import 不支持。

参考
https://xiangshuo.blog.csdn.net/article/details/52885924

## html 的元素有哪些（包含 H5）？

**块级元素**:div,dd,dl,dt,form,h1,h2,h3,h4,h5,h6,hr,li,ol,p,table,textarea,thead,tbody,tfoot, tr,th,ul,
**行内元素**：a,b,button,em,form,i,input,select,span,strong,td
**H5 新增**:header,section,asize,footer,nav,article

## HTML 全局属性(global attribute)有哪些（包含 H5）？

全局属性：用于任何 HTML5 元素的属性

- accesskey:设置快捷键
- class:为元素设置类标识
- contenteditable:指定元素内容是否可编辑
- contextmenu:自定义鼠标右键弹出上下文菜单内容（仅 firefox 支持）
- data-\*:为元素增加自定义属性
- dir：设置元素文本方向（默认 ltr；rtl）
- draggable:设置元素是否可拖拽
- dropzone:设置元素拖放类型（copy|move|link,H5 新属性，主流均不支持）
- hidden:规定元素仍未或不在相关
- id:元素 id，文档内唯一
- lang:元素内容的语言
- spellcheck:是否启动拼写和语法检查
- style:行内 css 样式
- tabindex:设置元素可以获得焦点，通过 tab 导航
- title:规定元素有关的额外信息
- translate:元素和子孙节点内容是否需要本地化（均不支持）

## HTML5 的文件离线储存怎么使用，工作原理是什么？

## 简述超链接 target 属性的取值和作用

\_self: 在当前窗口打开页面
\_blank: 在新窗口打开页面
\_top: 在整个框架打开页面不是很理解

## label 都有哪些作用？并举相应的例子说明

<h1>HTML 面试试题</h1>

> https://juejin.im/post/5ce4171ff265da1bd04eb4f3
>
> https://zhuanlan.zhihu.com/p/28415923

- [HTML 基础](#html-%e5%9f%ba%e7%a1%80)
  - [1. doctype 有什么作用？怎么写？](#1-doctype-%e6%9c%89%e4%bb%80%e4%b9%88%e4%bd%9c%e7%94%a8%e6%80%8e%e4%b9%88%e5%86%99)
  - [2. 列出常见的标签，并简单介绍这些标签用在什么场景？](#2-%e5%88%97%e5%87%ba%e5%b8%b8%e8%a7%81%e7%9a%84%e6%a0%87%e7%ad%be%e5%b9%b6%e7%ae%80%e5%8d%95%e4%bb%8b%e7%bb%8d%e8%bf%99%e4%ba%9b%e6%a0%87%e7%ad%be%e7%94%a8%e5%9c%a8%e4%bb%80%e4%b9%88%e5%9c%ba%e6%99%af)
  - [3. 页面出现了乱码，是怎么回事？如何解决？](#3-%e9%a1%b5%e9%9d%a2%e5%87%ba%e7%8e%b0%e4%ba%86%e4%b9%b1%e7%a0%81%e6%98%af%e6%80%8e%e4%b9%88%e5%9b%9e%e4%ba%8b%e5%a6%82%e4%bd%95%e8%a7%a3%e5%86%b3)
  - [4. title 属性和 alt 属性分别有什么作用？](#4-title-%e5%b1%9e%e6%80%a7%e5%92%8c-alt-%e5%b1%9e%e6%80%a7%e5%88%86%e5%88%ab%e6%9c%89%e4%bb%80%e4%b9%88%e4%bd%9c%e7%94%a8)
  - [5. html 的注释怎样写？](#5-html-%e7%9a%84%e6%b3%a8%e9%87%8a%e6%80%8e%e6%a0%b7%e5%86%99)
  - [6. HTML5 为什么只写 <!DOCTYPE HTML> ？](#6-html5-%e4%b8%ba%e4%bb%80%e4%b9%88%e5%8f%aa%e5%86%99-doctype-html)
  - [7. data- 属性的作用？](#7-data--%e5%b1%9e%e6%80%a7%e7%9a%84%e4%bd%9c%e7%94%a8)
  - [8. <img> 的 title 和 alt 有什么区别？](#8-img-%e7%9a%84-title-%e5%92%8c-alt-%e6%9c%89%e4%bb%80%e4%b9%88%e5%8c%ba%e5%88%ab)
  - [9. WEB 标准以及 W3C 标准是什么？](#9-web-%e6%a0%87%e5%87%86%e4%bb%a5%e5%8f%8a-w3c-%e6%a0%87%e5%87%86%e6%98%af%e4%bb%80%e4%b9%88)
  - [10. doctype 作用? 严格模式与混杂模式如何区分？它们有何意义?](#10-doctype-%e4%bd%9c%e7%94%a8-%e4%b8%a5%e6%a0%bc%e6%a8%a1%e5%bc%8f%e4%b8%8e%e6%b7%b7%e6%9d%82%e6%a8%a1%e5%bc%8f%e5%a6%82%e4%bd%95%e5%8c%ba%e5%88%86%e5%ae%83%e4%bb%ac%e6%9c%89%e4%bd%95%e6%84%8f%e4%b9%89)
  - [11. HTML 全局属性（global attribute）有哪些？](#11-html-%e5%85%a8%e5%b1%80%e5%b1%9e%e6%80%a7global-attribute%e6%9c%89%e5%93%aa%e4%ba%9b)
- [HTML 元素、属性详解](#html-%e5%85%83%e7%b4%a0%e5%b1%9e%e6%80%a7%e8%af%a6%e8%a7%a3)
  - [1. meta 有哪些常见的值？](#1-meta-%e6%9c%89%e5%93%aa%e4%ba%9b%e5%b8%b8%e8%a7%81%e7%9a%84%e5%80%bc)
  - [2. meta viewport 是做什么用的，怎么写？](#2-meta-viewport-%e6%98%af%e5%81%9a%e4%bb%80%e4%b9%88%e7%94%a8%e7%9a%84%e6%80%8e%e4%b9%88%e5%86%99)
  - [3. 列出常见的标签，并简单介绍这些标签用在什么场景？](#3-%e5%88%97%e5%87%ba%e5%b8%b8%e8%a7%81%e7%9a%84%e6%a0%87%e7%ad%be%e5%b9%b6%e7%ae%80%e5%8d%95%e4%bb%8b%e7%bb%8d%e8%bf%99%e4%ba%9b%e6%a0%87%e7%ad%be%e7%94%a8%e5%9c%a8%e4%bb%80%e4%b9%88%e5%9c%ba%e6%99%af)
  - [4. 如何在 html 页面上展示 <div></div> 这几个字符？](#4-%e5%a6%82%e4%bd%95%e5%9c%a8-html-%e9%a1%b5%e9%9d%a2%e4%b8%8a%e5%b1%95%e7%a4%ba-divdiv-%e8%bf%99%e5%87%a0%e4%b8%aa%e5%ad%97%e7%ac%a6)
  - [5. 你是如何理解 HTML 语义化的？](#5-%e4%bd%a0%e6%98%af%e5%a6%82%e4%bd%95%e7%90%86%e8%a7%a3-html-%e8%af%ad%e4%b9%89%e5%8c%96%e7%9a%84)
  - [6. 前端需要注意哪些 SEO?](#6-%e5%89%8d%e7%ab%af%e9%9c%80%e8%a6%81%e6%b3%a8%e6%84%8f%e5%93%aa%e4%ba%9b-seo)
  - [7. 你对网页标准和 W3C 重要性的理解?](#7-%e4%bd%a0%e5%af%b9%e7%bd%91%e9%a1%b5%e6%a0%87%e5%87%86%e5%92%8c-w3c-%e9%87%8d%e8%a6%81%e6%80%a7%e7%9a%84%e7%90%86%e8%a7%a3)
- [HTML 表单详解](#html-%e8%a1%a8%e5%8d%95%e8%af%a6%e8%a7%a3)
  - [1. post 和 get 方式提交数据有什么区别？](#1-post-%e5%92%8c-get-%e6%96%b9%e5%bc%8f%e6%8f%90%e4%ba%a4%e6%95%b0%e6%8d%ae%e6%9c%89%e4%bb%80%e4%b9%88%e5%8c%ba%e5%88%ab)
  - [2. 在 input 里，name 有什么作用？](#2-%e5%9c%a8-input-%e9%87%8cname-%e6%9c%89%e4%bb%80%e4%b9%88%e4%bd%9c%e7%94%a8)
  - [3. label 有什么作用？如何使用？](#3-label-%e6%9c%89%e4%bb%80%e4%b9%88%e4%bd%9c%e7%94%a8%e5%a6%82%e4%bd%95%e4%bd%bf%e7%94%a8)
  - [4. radio 如何分组？](#4-radio-%e5%a6%82%e4%bd%95%e5%88%86%e7%bb%84)
  - [5. placeholder 属性有什么作用？](#5-placeholder-%e5%b1%9e%e6%80%a7%e6%9c%89%e4%bb%80%e4%b9%88%e4%bd%9c%e7%94%a8)
  - [6. type=hidden 隐藏域有什么作用？举例说明。](#6-typehidden-%e9%9a%90%e8%97%8f%e5%9f%9f%e6%9c%89%e4%bb%80%e4%b9%88%e4%bd%9c%e7%94%a8%e4%b8%be%e4%be%8b%e8%af%b4%e6%98%8e)
  - [7. CSRF 攻击是什么？如何防范？](#7-csrf-%e6%94%bb%e5%87%bb%e6%98%af%e4%bb%80%e4%b9%88%e5%a6%82%e4%bd%95%e9%98%b2%e8%8c%83)
  - [8. 网页验证码是干嘛的？是为了解决什么安全问题？](#8-%e7%bd%91%e9%a1%b5%e9%aa%8c%e8%af%81%e7%a0%81%e6%98%af%e5%b9%b2%e5%98%9b%e7%9a%84%e6%98%af%e4%b8%ba%e4%ba%86%e8%a7%a3%e5%86%b3%e4%bb%80%e4%b9%88%e5%ae%89%e5%85%a8%e9%97%ae%e9%a2%98)
  - [9. 常见 web 安全及防护原理？](#9-%e5%b8%b8%e8%a7%81-web-%e5%ae%89%e5%85%a8%e5%8f%8a%e9%98%b2%e6%8a%a4%e5%8e%9f%e7%90%86)

# HTML 基础

## 1. doctype 有什么作用？怎么写？

## 2. 列出常见的标签，并简单介绍这些标签用在什么场景？

## 3. 页面出现了乱码，是怎么回事？如何解决？

## 4. title 属性和 alt 属性分别有什么作用？

## 5. html 的注释怎样写？

## 6. HTML5 为什么只写 <!DOCTYPE HTML> ？

## 7. data- 属性的作用？

## 8. <img> 的 title 和 alt 有什么区别？

## 9. WEB 标准以及 W3C 标准是什么？

## 10. doctype 作用? 严格模式与混杂模式如何区分？它们有何意义?

## 11. HTML 全局属性（global attribute）有哪些？

# HTML 元素、属性详解

## 1. meta 有哪些常见的值？

## 2. meta viewport 是做什么用的，怎么写？

## 3. 列出常见的标签，并简单介绍这些标签用在什么场景？

## 4. 如何在 html 页面上展示 <div></div> 这几个字符？

## 5. 你是如何理解 HTML 语义化的？

## 6. 前端需要注意哪些 SEO?

## 7. 你对网页标准和 W3C 重要性的理解?

# HTML 表单详解

## 1. post 和 get 方式提交数据有什么区别？

## 2. 在 input 里，name 有什么作用？

## 3. label 有什么作用？如何使用？

## 4. radio 如何分组？

## 5. placeholder 属性有什么作用？

## 6. type=hidden 隐藏域有什么作用？举例说明。

## 7. CSRF 攻击是什么？如何防范？

## 8. 网页验证码是干嘛的？是为了解决什么安全问题？

## 9. 常见 web 安全及防护原理？
