# Window 对象

- [DOM Style](https://www.w3school.com.cn/jsref/dom_obj_style.asp)
- [API Console](https://www.w3school.com.cn/jsref/api_console.asp)

## Window 对象

Window 对象表示浏览器中打开的窗口。

如果文档包含框架（frame 或 iframe 标签），浏览器会为 HTML 文档创建一个 window 对象，并为每个框架创建一个额外的 window 对象。

注释：没有应用于 window 对象的公开标准，不过所有浏览器都支持该对象。

## Window 对象集合

| 集合     | 描述                                                         |
| -------- | ------------------------------------------------------------ |
| frames[] | 返回窗口中所有命名的框架。 该集合是 Window 对象的数组，每个 Window 对象在窗口中含有一个框架或 <iframe>。属性  frames.length 存放数组 frames[] 中含有的元素个数。注意，frames[] 数组中引用的框架可能还包括框架，它们自己也具有 frames[] 数组。 |

## Window 对象属性

| 属性                                                         | 描述                                                         |
| ------------------------------------------------------------ | ------------------------------------------------------------ |
| [closed](https://www.w3school.com.cn/jsref/prop_win_closed.asp) | 返回窗口是否已被关闭。                                       |
| [defaultStatus](https://www.w3school.com.cn/jsref/prop_win_defaultstatus.asp) | 设置或返回窗口状态栏中的默认文本。                           |
| [document](https://www.w3school.com.cn/jsref/dom_obj_document.asp) | 对 Document 对象的只读引用。请参阅 [Document 对象](https://www.w3school.com.cn/jsref/dom_obj_document.asp)。 |
| [history](https://www.w3school.com.cn/jsref/dom_obj_history.asp) | 对 History 对象的只读引用。请参数 [History 对象](https://www.w3school.com.cn/jsref/dom_obj_history.asp)。 |
| [innerheight](https://www.w3school.com.cn/jsref/prop_win_innerheight_innerwidth.asp) | 返回窗口的文档显示区的高度。                                 |
| [innerwidth](https://www.w3school.com.cn/jsref/prop_win_innerheight_innerwidth.asp) | 返回窗口的文档显示区的宽度。                                 |
| length                                                       | 设置或返回窗口中的框架数量。                                 |
| [location](https://www.w3school.com.cn/jsref/dom_obj_location.asp) | 用于窗口或框架的 Location 对象。请参阅 [Location 对象](https://www.w3school.com.cn/jsref/dom_obj_location.asp)。 |
| [name](https://www.w3school.com.cn/jsref/prop_win_name.asp)  | 设置或返回窗口的名称。                                       |
| [Navigator](https://www.w3school.com.cn/jsref/dom_obj_navigator.asp) | 对 Navigator 对象的只读引用。请参数 [Navigator 对象](https://www.w3school.com.cn/jsref/dom_obj_navigator.asp)。 |
| [opener](https://www.w3school.com.cn/jsref/prop_win_opener.asp) | 返回对创建此窗口的窗口的引用。                               |
| [outerheight](https://www.w3school.com.cn/jsref/prop_win_outerheight.asp) | 返回窗口的外部高度。                                         |
| [outerwidth](https://www.w3school.com.cn/jsref/prop_win_outerwidth.asp) | 返回窗口的外部宽度。                                         |
| pageXOffset                                                  | 设置或返回当前页面相对于窗口显示区左上角的 X 位置。          |
| pageYOffset                                                  | 设置或返回当前页面相对于窗口显示区左上角的 Y 位置。          |
| parent                                                       | 返回父窗口。                                                 |
| [Screen](https://www.w3school.com.cn/jsref/dom_obj_screen.asp) | 对 Screen 对象的只读引用。请参数 [Screen 对象](https://www.w3school.com.cn/jsref/dom_obj_screen.asp)。 |
| [self](https://www.w3school.com.cn/jsref/prop_win_self.asp)  | 返回对当前窗口的引用。等价于 Window 属性。                   |
| [status](https://www.w3school.com.cn/jsref/prop_win_status.asp) | 设置窗口状态栏的文本。                                       |
| [top](https://www.w3school.com.cn/jsref/prop_win_top.asp)    | 返回最顶层的先辈窗口。                                       |
| window                                                       | window 属性等价于 self 属性，它包含了对窗口自身的引用。      |
| screenLeft screenTop screenX screenY                         | 只读整数。声明了窗口的左上角在屏幕上的的 x 坐标和 y 坐标。IE、Safari 和 Opera 支持 screenLeft 和 screenTop，而 Firefox 和 Safari 支持 screenX 和 screenY。 |

## Window 对象方法

| 方法                                                         | 描述                                               |
| ------------------------------------------------------------ | -------------------------------------------------- |
| [alert()](https://www.w3school.com.cn/jsref/met_win_alert.asp) | 显示带有一段消息和一个确认按钮的警告框。           |
| [blur()](https://www.w3school.com.cn/jsref/met_win_blur.asp) | 把键盘焦点从顶层窗口移开。                         |
| [clearInterval()](https://www.w3school.com.cn/jsref/met_win_clearinterval.asp) | 取消由 setInterval() 设置的 timeout。              |
| [clearTimeout()](https://www.w3school.com.cn/jsref/met_win_cleartimeout.asp) | 取消由 setTimeout() 方法设置的 timeout。           |
| [close()](https://www.w3school.com.cn/jsref/met_win_close.asp) | 关闭浏览器窗口。                                   |
| [confirm()](https://www.w3school.com.cn/jsref/met_win_confirm.asp) | 显示带有一段消息以及确认按钮和取消按钮的对话框。   |
| [createPopup()](https://www.w3school.com.cn/jsref/met_win_createpopup.asp) | 创建一个 pop-up 窗口。                             |
| [focus()](https://www.w3school.com.cn/jsref/met_win_focus.asp) | 把键盘焦点给予一个窗口。                           |
| [moveBy()](https://www.w3school.com.cn/jsref/met_win_moveby.asp) | 可相对窗口的当前坐标把它移动指定的像素。           |
| [moveTo()](https://www.w3school.com.cn/jsref/met_win_moveto.asp) | 把窗口的左上角移动到一个指定的坐标。               |
| [open()](https://www.w3school.com.cn/jsref/met_win_open.asp) | 打开一个新的浏览器窗口或查找一个已命名的窗口。     |
| [print()](https://www.w3school.com.cn/jsref/met_win_print.asp) | 打印当前窗口的内容。                               |
| [prompt()](https://www.w3school.com.cn/jsref/met_win_prompt.asp) | 显示可提示用户输入的对话框。                       |
| [resizeBy()](https://www.w3school.com.cn/jsref/met_win_resizeby.asp) | 按照指定的像素调整窗口的大小。                     |
| [resizeTo()](https://www.w3school.com.cn/jsref/met_win_resizeto.asp) | 把窗口的大小调整到指定的宽度和高度。               |
| [scrollBy()](https://www.w3school.com.cn/jsref/met_win_scrollby.asp) | 按照指定的像素值来滚动内容。                       |
| [scrollTo()](https://www.w3school.com.cn/jsref/met_win_scrollto.asp) | 把内容滚动到指定的坐标。                           |
| [setInterval()](https://www.w3school.com.cn/jsref/met_win_setinterval.asp) | 按照指定的周期（以毫秒计）来调用函数或计算表达式。 |
| [setTimeout()](https://www.w3school.com.cn/jsref/met_win_settimeout.asp) | 在指定的毫秒数后调用函数或计算表达式。             |

## Window 对象描述

Window 对象表示一个浏览器窗口或一个框架。在客户端 JavaScript 中，Window 对象是全局对象，所有的表达式都在当前的环境中计算。也就是说，要引用当前窗口根本不需要特殊的语法，可以把那个窗口的属性作为全局变量来使用。例如，可以只写 [document](https://www.w3school.com.cn/jsref/dom_obj_document.asp)，而不必写 window.document。

同样，可以把当前窗口对象的方法当作函数来使用，如只写 alert()，而不必写 Window.alert()。

除了上面列出的属性和方法，Window 对象还实现了核心 JavaScript 所定义的所有全局属性和方法。

Window 对象的 window 属性和 [self 属性](https://www.w3school.com.cn/jsref/prop_win_self.asp)引用的都是它自己。当你想明确地引用当前窗口，而不仅仅是隐式地引用它时，可以使用这两个属性。除了这两个属性之外，parent 属性、top 属性以及 frame[] 数组都引用了与当前 Window 对象相关的其他 Window 对象。

要引用窗口中的一个框架，可以使用如下语法：

```
frame[i]		//当前窗口的框架
self.frame[i]	//当前窗口的框架
w.frame[i]	//窗口 w 的框架
```

要引用一个框架的父窗口（或父框架），可以使用下面的语法：

```
parent		//当前窗口的父窗口
self.parent	//当前窗口的父窗口
w.parent 		//窗口 w 的父窗口
```

要从顶层窗口含有的任何一个框架中引用它，可以使用如下语法：

```
top		//当前框架的顶层窗口
self.top		//当前框架的顶层窗口
f.top		//框架 f 的顶层窗口
```

新的顶层浏览器窗口由方法 Window.open() 创建。当调用该方法时，应把 open() 调用的返回值存储在一个变量中，然后使用那个变量来引用新窗口。新窗口的 [opener 属性](https://www.w3school.com.cn/jsref/prop_win_opener.asp)反过来引用了打开它的那个窗口。

一般来说，Window 对象的方法都是对浏览器窗口或框架进行某种操作。而 [alert() 方法](https://www.w3school.com.cn/jsref/met_win_alert.asp)、[confirm() 方法](https://www.w3school.com.cn/jsref/met_win_confirm.asp)和 [prompt 方法](https://www.w3school.com.cn/jsref/met_win_prompt.asp)则不同，它们通过简单的对话框与用户进行交互。
