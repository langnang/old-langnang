# HTML DOM 事件

- [DOM Element](https://www.w3school.com.cn/jsref/dom_obj_all.asp)
- [DOM Event 对象](https://www.w3school.com.cn/jsref/obj_events.asp)

## HTML DOM 事件

HTML DOM 事件允许 JavaScript 在 HTML 文档中的元素上注册不同的事件处理程序。

事件通常与函数结合使用，在事件发生之前函数不会被执行（例如当用户单击按钮时）。

如需有关事件的教程，请学习我们的 [JavaScript 事件教程](https://www.w3school.com.cn/js/js_events.asp)。

| 事件                                                         | 描述                                                         | 属于                                                         |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| [abort](https://www.w3school.com.cn/jsref/event_onabort_media.asp) | 媒体加载中止时发生该事件。                                   | [UiEvent](https://www.w3school.com.cn/jsref/obj_uievent.asp) 	[Event](https://www.w3school.com.cn/jsref/obj_event.asp) |
| [afterprint](https://www.w3school.com.cn/jsref/event_onafterprint.asp) | 当页面开始打印时，或者关闭打印对话框时，发生此事件。         | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [animationend](https://www.w3school.com.cn/jsref/event_animationend.asp) | CSS 动画完成时发生此事件。                                   | [AnimationEvent](https://www.w3school.com.cn/jsref/obj_animationevent.asp) |
| [animationiteration](https://www.w3school.com.cn/jsref/event_animationiteration.asp) | 重复 CSS 动画时发生此事件。                                  | [AnimationEvent](https://www.w3school.com.cn/jsref/obj_animationevent.asp) |
| [animationstart](https://www.w3school.com.cn/jsref/event_animationstart.asp) | CSS 动画开始时发生此事件。                                   | [AnimationEvent](https://www.w3school.com.cn/jsref/obj_animationevent.asp) |
| [beforeprint](https://www.w3school.com.cn/jsref/event_onbeforeprint.asp) | 即将打印页面时发生此事件。                                   | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [beforeunload](https://www.w3school.com.cn/jsref/event_onbeforeunload.asp) | 在文档即将被卸载之前发生此事件。                             | [UiEvent](https://www.w3school.com.cn/jsref/obj_uievent.asp) 	[Event](https://www.w3school.com.cn/jsref/obj_event.asp) |
| [blur](https://www.w3school.com.cn/jsref/event_onblur.asp)   | 当元素失去焦点时发生此事件。                                 | [FocusEvent](https://www.w3school.com.cn/jsref/obj_focusevent.asp) |
| [canplay](https://www.w3school.com.cn/jsref/event_oncanplay.asp) | 当浏览器可以开始播放媒体时，发生此事件。                     | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [canplaythrough](https://www.w3school.com.cn/jsref/event_oncanplaythrough.asp) | 当浏览器可以在不停止缓冲的情况下播放媒体时发生此事件。       | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [change](https://www.w3school.com.cn/jsref/event_onchange.asp) | 当form元素的内容、选择的内容或选中的状态发生改变时，发生此事件 | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [click](https://www.w3school.com.cn/jsref/event_onclick.asp) | 当用户单击元素时发生此事件。                                 | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [contextmenu](https://www.w3school.com.cn/jsref/event_oncontextmenu.asp) | 当用户右键单击某个元素以打开上下文菜单时，发生此事件。       | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [copy](https://www.w3school.com.cn/jsref/event_oncopy.asp)   | 当用户复制元素的内容时发生此事件。                           | [ClipboardEvent](https://www.w3school.com.cn/jsref/obj_clipboardevent.asp) |
| [cut](https://www.w3school.com.cn/jsref/event_oncut.asp)     | 当用户剪切元素的内容时发生此事件。                           | [ClipboardEvent](https://www.w3school.com.cn/jsref/obj_clipboardevent.asp) |
| [dblclick](https://www.w3school.com.cn/jsref/event_ondblclick.asp) | 当用户双击元素时发生此事件。                                 | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [drag](https://www.w3school.com.cn/jsref/event_ondrag.asp)   | 拖动元素时发生此事件。                                       | [DragEvent](https://www.w3school.com.cn/jsref/obj_dragevent.asp) |
| [dragend](https://www.w3school.com.cn/jsref/event_ondragend.asp) | 当用户完成拖动元素后，发生此事件。                           | [DragEvent](https://www.w3school.com.cn/jsref/obj_dragevent.asp) |
| [dragenter](https://www.w3school.com.cn/jsref/event_ondragenter.asp) | 当拖动的元素进入放置目标时，发生此事件。                     | [DragEvent](https://www.w3school.com.cn/jsref/obj_dragevent.asp) |
| [dragleave](https://www.w3school.com.cn/jsref/event_ondragleave.asp) | 当拖动的元素离开放置目标时，发生此事件。                     | [DragEvent](https://www.w3school.com.cn/jsref/obj_dragevent.asp) |
| [dragover](https://www.w3school.com.cn/jsref/event_ondragover.asp) | 当拖动的元素位于放置目标之上时，发生此事件。                 | [DragEvent](https://www.w3school.com.cn/jsref/obj_dragevent.asp) |
| [dragstart](https://www.w3school.com.cn/jsref/event_ondragstart.asp) | 当用户开始拖动元素时发生此事件。                             | [DragEvent](https://www.w3school.com.cn/jsref/obj_dragevent.asp) |
| [drop](https://www.w3school.com.cn/jsref/event_ondrop.asp)   | 当将拖动的元素放置在放置目标上时，发生此事件。               | [DragEvent](https://www.w3school.com.cn/jsref/obj_dragevent.asp) |
| [durationchange](https://www.w3school.com.cn/jsref/event_ondurationchange.asp) | 媒体时长改变时发生此事件。                                   | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [ended](https://www.w3school.com.cn/jsref/event_onended.asp) | 在媒体播放到尽头时发生此事件。                               | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [error](https://www.w3school.com.cn/jsref/event_onerror.asp) | 当加载外部文件时发生错误后，发生此事件。                     | [ProgressEvent](https://www.w3school.com.cn/jsref/obj_progressevent.asp) 	[UiEvent](https://www.w3school.com.cn/jsref/obj_uievent.asp) 	[Event](https://www.w3school.com.cn/jsref/obj_event.asp) |
| [focus](https://www.w3school.com.cn/jsref/event_onfocus.asp) | 在元素获得焦点时发生此事件。                                 | [FocusEvent](https://www.w3school.com.cn/jsref/obj_focusevent.asp) |
| [focusin](https://www.w3school.com.cn/jsref/event_onfocusin.asp) | 在元素即将获得焦点时发生此事件。                             | [FocusEvent](https://www.w3school.com.cn/jsref/obj_focusevent.asp) |
| [focusout](https://www.w3school.com.cn/jsref/event_onfocusout.asp) | 在元素即将失去焦点时发生此事件。                             | [FocusEvent](https://www.w3school.com.cn/jsref/obj_focusevent.asp) |
| [fullscreenchange](https://www.w3school.com.cn/jsref/event_fullscreenchange.asp) | 当元素以全屏模式显示时，发生此事件。                         | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [fullscreenerror](https://www.w3school.com.cn/jsref/event_fullscreenerror.asp) | 当元素无法在全屏模式下显示时，发生此事件。                   | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [hashchange](https://www.w3school.com.cn/jsref/event_onhashchange.asp) | 当 URL 的锚部分发生改变时，发生此事件。                      | [HashChangeEvent](https://www.w3school.com.cn/jsref/obj_hashchangeevent.asp) |
| [input](https://www.w3school.com.cn/jsref/event_oninput.asp) | 当元素获得用户输入时，发生此事件。                           | [InputEvent](https://www.w3school.com.cn/jsref/obj_inputevent.asp) 	[Event](https://www.w3school.com.cn/jsref/obj_event.asp) |
| [invalid](https://www.w3school.com.cn/jsref/event_oninvalid.asp) | 当元素无效时，发生此事件。                                   | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [keydown](https://www.w3school.com.cn/jsref/event_onkeydown.asp) | 当用户正在按下键时，发生此事件。                             | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) |
| [keypress](https://www.w3school.com.cn/jsref/event_onkeypress.asp) | 当用户按下键时，发生此事件。                                 | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) |
| [keyup](https://www.w3school.com.cn/jsref/event_onkeyup.asp) | 当用户松开键时，发生此事件。                                 | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) |
| [load](https://www.w3school.com.cn/jsref/event_onload.asp)   | 在对象已加载时，发生此事件。                                 | [UiEvent](https://www.w3school.com.cn/jsref/obj_uievent.asp) 	[Event](https://www.w3school.com.cn/jsref/obj_event.asp) |
| [loadeddata](https://www.w3school.com.cn/jsref/event_onloadeddata.asp) | 媒体数据加载后，发生此事件。                                 | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [loadedmetadata](https://www.w3school.com.cn/jsref/event_onloadedmetadata.asp) | 加载元数据（比如尺寸和持续时间）时，发生此事件。             | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [loadstart](https://www.w3school.com.cn/jsref/event_onloadstart.asp) | 当浏览器开始查找指定的媒体时，发生此事件。                   | [ProgressEvent](https://www.w3school.com.cn/jsref/obj_progressevent.asp) |
| [message](https://www.w3school.com.cn/jsref/event_onmessage_sse.asp) | 在通过此事件源接收消息时，发生此事件。                       | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [mousedown](https://www.w3school.com.cn/jsref/event_onmousedown.asp) | 当用户在元素上按下鼠标按钮时，发生此事件。                   | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [mouseenter](https://www.w3school.com.cn/jsref/event_onmouseenter.asp) | 当指针移动到元素上时，发生此事件。                           | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [mouseleave](https://www.w3school.com.cn/jsref/event_onmouseleave.asp) | 当指针从元素上移出时，发生此事件。                           | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [mousemove](https://www.w3school.com.cn/jsref/event_onmousemove.asp) | 当指针在元素上方移动时，发生此事件。                         | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [mouseout](https://www.w3school.com.cn/jsref/event_onmouseout.asp) | 当用户将鼠标指针移出元素或其中的子元素时，发生此事件。       | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [mouseover](https://www.w3school.com.cn/jsref/event_onmouseover.asp) | 当指针移动到元素或其中的子元素上时，发生此事件。             | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [mouseup](https://www.w3school.com.cn/jsref/event_onmouseup.asp) | 当用户在元素上释放鼠标按钮时，发生此事件。                   | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| mousewheel                                                   | 不推荐使用。请改用 [wheel](https://www.w3school.com.cn/jsref/event_onwheel.asp) 事件。 | [WheelEvent](https://www.w3school.com.cn/jsref/obj_wheelevent.asp) |
| [offline](https://www.w3school.com.cn/jsref/event_onoffline.asp) | 当浏览器开始脱机工作时，发生此事件。                         | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [online](https://www.w3school.com.cn/jsref/event_ononline.asp) | 当浏览器开始在线工作时，发生此事件。                         | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [open](https://www.w3school.com.cn/jsref/event_onopen_sse.asp) | 当打开与事件源的连接时，发生此事件。                         | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [pagehide](https://www.w3school.com.cn/jsref/event_onpagehide.asp) | 当用户离开某张网页进行导航时，发生此事件。                   | [PageTransitionEvent](https://www.w3school.com.cn/jsref/obj_pagetransitionevent.asp) |
| [pageshow](https://www.w3school.com.cn/jsref/event_onpageshow.asp) | 在用户导航到某张网页时，发生此事件。                         | [PageTransitionEvent](https://www.w3school.com.cn/jsref/obj_pagetransitionevent.asp) |
| [paste](https://www.w3school.com.cn/jsref/event_onpaste.asp) | 当用户将一些内容粘贴到元素中时，发生此事件。                 | [ClipboardEvent](https://www.w3school.com.cn/jsref/obj_clipboardevent.asp) |
| [pause](https://www.w3school.com.cn/jsref/event_onpause.asp) | 当媒体被用户暂停或以编程方式暂停时，发生此事件。             | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [play](https://www.w3school.com.cn/jsref/event_onplay.asp)   | 当媒体已启动或不再暂停时，发生此事件。                       | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [playing](https://www.w3school.com.cn/jsref/event_onplaying.asp) | 在媒体被暂停或停止以缓冲后播放时，发生此事件。               | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| popstate                                                     | 窗口的历史记录改变时，发生此事件。                           | [PopStateEvent](https://www.w3school.com.cn/jsref/obj_popstateevent.asp) |
| [progress](https://www.w3school.com.cn/jsref/event_onprogress.asp) | 当浏览器正处于获得媒体数据的过程中时，发生此事件。           | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [ratechange](https://www.w3school.com.cn/jsref/event_onratechange.asp) | 媒体播放速度改变时发生此事件。                               | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [reset](https://www.w3school.com.cn/jsref/event_onreset.asp) | 重置表单时发生此事件。                                       | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [resize](https://www.w3school.com.cn/jsref/event_onresize.asp) | 调整文档视图的大小时发生此事件。                             | [UiEvent](https://www.w3school.com.cn/jsref/obj_uievent.asp) 	[Event](https://www.w3school.com.cn/jsref/obj_event.asp) |
| [scroll](https://www.w3school.com.cn/jsref/event_onscroll.asp) | 滚动元素的滚动条时发生此事件。                               | [UiEvent](https://www.w3school.com.cn/jsref/obj_uievent.asp) 	[Event](https://www.w3school.com.cn/jsref/obj_event.asp) |
| [search](https://www.w3school.com.cn/jsref/event_onsearch.asp) | 当用户在搜索字段中输入内容时，发生此事件。                   | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [seeked](https://www.w3school.com.cn/jsref/event_onseeked.asp) | 当用户完成移动/跳到媒体中的新位置时，发生该事件。            | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [seeking](https://www.w3school.com.cn/jsref/event_onseeking.asp) | 当用户开始移动/跳到媒体中的新位置时，发生该事件。            | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [select](https://www.w3school.com.cn/jsref/event_onselect.asp) | 用户选择文本后（对于<input>和<textarea>）发生此事件          | [UiEvent](https://www.w3school.com.cn/jsref/obj_uievent.asp) 	[Event](https://www.w3school.com.cn/jsref/obj_event.asp) |
| [show](https://www.w3school.com.cn/jsref/event_onshow.asp)   | 当 <menu> 元素显示为上下文菜单时，发生此事件。               | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [stalled](https://www.w3school.com.cn/jsref/event_onstalled.asp) | 当浏览器尝试获取媒体数据但数据不可用时，发生此事件。         | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| storage                                                      | Web 存储区域更新时发生此事件。                               | [StorageEvent](https://www.w3school.com.cn/jsref/obj_storageevent.asp) |
| [submit](https://www.w3school.com.cn/jsref/event_onsubmit.asp) | 在提交表单时发生此事件。                                     | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [suspend](https://www.w3school.com.cn/jsref/event_onsuspend.asp) | 当浏览器有意不获取媒体数据时，发生此事件。                   | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [timeupdate](https://www.w3school.com.cn/jsref/event_ontimeupdate.asp) | 当播放位置更改时发生此事件。                                 | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [toggle](https://www.w3school.com.cn/jsref/event_ontoggle.asp) | 当用户打开或关闭 <details> 元素时，发生此事件。              | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [touchcancel](https://www.w3school.com.cn/jsref/event_touchcancel.asp) | 在触摸被中断时，发生此事件。                                 | [TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| [touchend](https://www.w3school.com.cn/jsref/event_touchend.asp) | 当手指从触摸屏上移开时，发生此事件。                         | [TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| [touchmove](https://www.w3school.com.cn/jsref/event_touchmove.asp) | 当手指在屏幕上拖动时，发生此事件。                           | [TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| [touchstart](https://www.w3school.com.cn/jsref/event_touchstart.asp) | 当手指放在触摸屏上时，发生此事件。                           | [TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| [transitionend](https://www.w3school.com.cn/jsref/event_transitionend.asp) | CSS 转换完成时，发生此事件。                                 | [TransitionEvent](https://www.w3school.com.cn/jsref/obj_transitionevent.asp) |
| [unload](https://www.w3school.com.cn/jsref/event_onunload.asp) | 页面卸载后（对于 <body>），发生此事件。                      | [UiEvent](https://www.w3school.com.cn/jsref/obj_uievent.asp) 	[Event](https://www.w3school.com.cn/jsref/obj_event.asp) |
| [volumechange](https://www.w3school.com.cn/jsref/event_onvolumechange.asp) | 当媒体的音量已更改时，发生此事件。                           | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [waiting](https://www.w3school.com.cn/jsref/event_onwaiting.asp) | 当媒体已暂停但预期会恢复时，发生此事件。                     | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [wheel](https://www.w3school.com.cn/jsref/event_onwheel.asp) | 当鼠标滚轮在元素向上或向下滚动时，发生此事件。               | [WheelEvent](https://www.w3school.com.cn/jsref/obj_wheelevent.asp) |

## HTML DOM 事件属性和方法

| 属性/方法                                                    | 描述                                                         | 属于                                                         |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| [altKey](https://www.w3school.com.cn/jsref/event_altkey.asp) | 返回触发鼠标事件时是否按下了 "ALT" 键。                      | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [altKey](https://www.w3school.com.cn/jsref/event_key_altkey.asp) | 返回触发按键事件时是否按下了 "ALT" 键。                      | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) 	[TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| [animationName](https://www.w3school.com.cn/jsref/event_animation_animationName.asp) | 返回动画的名称。                                             | [AnimationEvent](https://www.w3school.com.cn/jsref/obj_animationevent.asp) |
| [bubbles](https://www.w3school.com.cn/jsref/event_bubbles.asp) | 返回特定事件是否为冒泡事件。                                 | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [button](https://www.w3school.com.cn/jsref/event_button.asp) | 返回触发鼠标事件时按下的鼠标按钮。                           | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [buttons](https://www.w3school.com.cn/jsref/event_buttons.asp) | 返回触发鼠标事件时按下的鼠标按钮。                           | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [cancelBubble](https://www.w3school.com.cn/jsref/event_cancelbubble.asp) | 设置或返回事件是否应该向上层级进行传播。                     |                                                              |
| [cancelable](https://www.w3school.com.cn/jsref/event_cancelable.asp) | 返回事件是否可以阻止其默认操作。                             | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| changeTouches                                                | 返回在上一触摸与该触摸之间其状态已更改的所有触摸对象的列表   | [TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| [charCode](https://www.w3school.com.cn/jsref/event_key_charcode.asp) | 返回触发 onkeypress 事件的键的 Unicode 字符代码。            | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) |
| [clientX](https://www.w3school.com.cn/jsref/event_clientx.asp) | 返回触发鼠标事件时，鼠标指针相对于当前窗口的水平坐标。       | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) 	[TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| [clientY](https://www.w3school.com.cn/jsref/event_clienty.asp) | 返回触发鼠标事件时，鼠标指针相对于当前窗口的垂直坐标。       | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) 	[TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| clipboardData                                                | 返回对象，其中包含受剪贴板操作影响的数据。                   | [ClipboardData](https://www.w3school.com.cn/jsref/obj_clipboardevent.asp) |
| [code](https://www.w3school.com.cn/jsref/event_key_code.asp) | 返回触发事件的键的代码。                                     | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) |
| composed                                                     | 指示该事件是否可以从 Shadow DOM 传递到一般的 DOM。           | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [composedPath()](https://www.w3school.com.cn/jsref/event_composedpath.asp) | 返回事件的路径。                                             |                                                              |
| [createEvent()](https://www.w3school.com.cn/jsref/event_createevent.asp) | 创建新事件。                                                 | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [ctrlKey](https://www.w3school.com.cn/jsref/event_ctrlkey.asp) | 返回触发鼠标事件时是否按下了 "CTRL" 键。                     | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [ctrlKey](https://www.w3school.com.cn/jsref/event_key_ctrlkey.asp) | 返回按键鼠标事件时是否按下了 "CTRL" 键。                     | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) 	[TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| [currentTarget](https://www.w3school.com.cn/jsref/event_currenttarget.asp) | 返回其事件侦听器触发事件的元素。                             | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [data](https://www.w3school.com.cn/jsref/event_inputevent_data.asp) | 返回插入的字符。                                             | [InputEvent](https://www.w3school.com.cn/jsref/obj_inputevent.asp) |
| dataTransfer                                                 | 返回一个对象，其中包含被拖放或插入/删除的数据。              | [DragEvent](https://www.w3school.com.cn/jsref/obj_dragevent.asp) 	[InputEvent](https://www.w3school.com.cn/jsref/obj_inputevent.asp) |
| [defaultPrevented](https://www.w3school.com.cn/jsref/event_defaultprevented.asp) | 返回是否为事件调用 preventDefault() 方法。                   | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [deltaX](https://www.w3school.com.cn/jsref/event_wheel_deltax.asp) | 返回鼠标滚轮的水平滚动量（x 轴）。                           | [WheelEvent](https://www.w3school.com.cn/jsref/obj_wheelevent.asp) |
| [deltaY](https://www.w3school.com.cn/jsref/event_wheel_deltay.asp) | 返回鼠标滚轮的垂直滚动量（y 轴）。                           | [WheelEvent](https://www.w3school.com.cn/jsref/obj_wheelevent.asp) |
| [deltaZ](https://www.w3school.com.cn/jsref/event_wheel_deltaz.asp) | 返回鼠标滚轮的 Z 轴滚动量。                                  | [WheelEvent](https://www.w3school.com.cn/jsref/obj_wheelevent.asp) |
| [deltaMode](https://www.w3school.com.cn/jsref/event_wheel_deltamode.asp) | 返回数字，代表增量值（像素、线或页面）的度量单位。           | [WheelEvent](https://www.w3school.com.cn/jsref/obj_wheelevent.asp) |
| [detail](https://www.w3school.com.cn/jsref/event_detail.asp) | 返回数字，指示鼠标被单击了多少次。                           | [UiEvent](https://www.w3school.com.cn/jsref/obj_uievent.asp) |
| [elapsedTime](https://www.w3school.com.cn/jsref/event_animation_elapsedtime.asp) | 返回动画已运行的秒数。                                       | [AnimationEvent](https://www.w3school.com.cn/jsref/obj_animationevent.asp) |
| [elapsedTime](https://www.w3school.com.cn/jsref/event_transition_elapsedtime.asp) | 返回过渡已运行的秒数。                                       |                                                              |
| [eventPhase](https://www.w3school.com.cn/jsref/event_eventphase.asp) | 返回当前正在评估事件流处于哪个阶段。                         | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [getModifierState()](https://www.w3school.com.cn/jsref/event_mouse_getmodifierstate.asp) | 返回包含目标范围的数组，此范围将受到插入/删除的影响。        | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| getTargetRanges()                                            | 返回包含目标范围的数组，此范围将受到插入/删除的影响。        | [InputEvent](https://www.w3school.com.cn/jsref/obj_inputevent.asp) |
| [inputType](https://www.w3school.com.cn/jsref/event_inputevent_inputtype.asp) | 返回更改的类型（即 "inserting" 或 "deleting"）。             | [InputEvent](https://www.w3school.com.cn/jsref/obj_inputevent.asp) |
| isComposing                                                  | 返回事件的状态是否正在构成。                                 | [InputEvent](https://www.w3school.com.cn/jsref/obj_inputevent.asp) 	[KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) |
| [isTrusted](https://www.w3school.com.cn/jsref/event_istrusted.asp) | 返回事件是否受信任。                                         | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [key](https://www.w3school.com.cn/jsref/event_key_key.asp)   | 返回事件表示的键的键值。                                     | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) |
| key                                                          | 返回更改后的存储项的键。                                     | [StorageEvent](https://www.w3school.com.cn/jsref/obj_storageevent.asp) |
| [keyCode](https://www.w3school.com.cn/jsref/event_key_keycode.asp) | 返回触发 onkeypress、onkeydown 或 onkeyup 事件的键的 Unicode 字符代码。 | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) |
| [location](https://www.w3school.com.cn/jsref/event_key_location.asp) | 返回键盘或设备上按键的位置。                                 | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) |
| lengthComputable                                             | 返回进度的长度是否可计算。                                   | [ProgressEvent](https://www.w3school.com.cn/jsref/obj_progressevent.asp) |
| loaded                                                       | 返回已加载的工作量。                                         | [ProgressEvent](https://www.w3school.com.cn/jsref/obj_progressevent.asp) |
| [metaKey](https://www.w3school.com.cn/jsref/event_metakey.asp) | 返回事件触发时是否按下了 "META" 键。                         | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [metaKey](https://www.w3school.com.cn/jsref/event_key_metakey.asp) | 返回按键事件触发时是否按下了 "META" 键。                     | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) 	[TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| MovementX                                                    | 返回相对于上一 mousemove 事件的位置的鼠标指针的水平坐标      | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| MovementY                                                    | 返回相对于上一 mousemove 事件的位置的鼠标指针的垂直坐标      | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [newURL](https://www.w3school.com.cn/jsref/event_hashchange_newurl.asp) | 返回更改 hash 后的文档 URL。                                 | [HasChangeEvent](https://www.w3school.com.cn/jsref/obj_hashchangeevent.asp) |
| newValue                                                     | 返回更改后的存储项目的新值。                                 | [StorageEvent](https://www.w3school.com.cn/jsref/obj_storageevent.asp) |
| [offsetX](https://www.w3school.com.cn/jsref/event_offsetx.asp) | 返回鼠标指针相对于目标元素边缘位置的水平坐标。               | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [offsetY](https://www.w3school.com.cn/jsref/event_offsety.asp) | 返回鼠标指针相对于目标元素边缘位置的垂直坐标。               | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [oldURL](https://www.w3school.com.cn/jsref/event_hashchange_oldurl.asp) | 返回更改 hash 前的文档 URL。                                 | [HasChangeEvent](https://www.w3school.com.cn/jsref/obj_hashchangeevent.asp) |
| oldValue                                                     | 返回更改后的存储项目的旧值。                                 | [StorageEvent](https://www.w3school.com.cn/jsref/obj_storageevent.asp) |
| onemptied                                                    | 当发生不良情况且媒体文件突然不可用时，发生此事件。           |                                                              |
| [pageX](https://www.w3school.com.cn/jsref/event_pagex.asp)   | 返回触发鼠标事件时鼠标指针相对于文档的水平坐标。             | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [pageY](https://www.w3school.com.cn/jsref/event_pagey.asp)   | 返回触发鼠标事件时鼠标指针相对于文档的垂直坐标。             | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [persisted](https://www.w3school.com.cn/jsref/event_pagetransition_persisted.asp) | 返回网页是否被浏览器缓存。                                   | [PageTransitionEvent](https://www.w3school.com.cn/jsref/obj_pagetransitionevent.asp) |
| [preventDefault()](https://www.w3school.com.cn/jsref/event_preventdefault.asp) | 如果可以取消事件，则将其取消，不执行属于该事件的默认操作。   | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [propertyName](https://www.w3school.com.cn/jsref/event_transition_propertyName.asp) | 返回与动画或过渡相关联的 CSS 属性的名称。                    | [AnimationEvent](https://www.w3school.com.cn/jsref/obj_animationevent.asp) 	[TransitionEvent](https://www.w3school.com.cn/jsref/obj_transitionevent.asp) |
| pseudoElement                                                | 返回动画或过渡的伪元素的名称。                               | [AnimationEvent](https://www.w3school.com.cn/jsref/obj_animationevent.asp) 	[TransitionEvent](https://www.w3school.com.cn/jsref/obj_transitionevent.asp) |
| region                                                       |                                                              | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [relatedTarget](https://www.w3school.com.cn/jsref/event_relatedtarget.asp) | 返回与触发鼠标事件的元素相关的元素。                         | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [relatedTarget](https://www.w3school.com.cn/jsref/event_focus_relatedtarget.asp) | 返回与触发事件的元素相关的元素。                             | [FocusEvent](https://www.w3school.com.cn/jsref/obj_focusevent.asp) |
| repeat                                                       | 返回是否重复按住某个键。                                     | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) |
| [screenX](https://www.w3school.com.cn/jsref/event_screenx.asp) | 返回窗口/鼠标指针相对于屏幕的水平坐标。                      | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [screenY](https://www.w3school.com.cn/jsref/event_screeny.asp) | 返回窗口/鼠标指针相对于屏幕的垂直坐标。                      | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [shiftKey](https://www.w3school.com.cn/jsref/event_shiftkey.asp) | 返回事件触发时是否按下了 "SHIFT" 键。                        | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [shiftKey](https://www.w3school.com.cn/jsref/event_key_shiftkey.asp) | 返回按键事件触发时是否按下了 "SHIFT" 键。                    | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) 	[TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| state                                                        | 返回包含历史记录条目副本的对象。                             | [PopStateEvent](https://www.w3school.com.cn/jsref/obj_popstateevent.asp) |
| [stopImme...()](https://www.w3school.com.cn/jsref/event_stopimmediatepropagation.asp) | 防止同一事件的其他侦听器被调用。                             | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [stopPropagation()](https://www.w3school.com.cn/jsref/event_stoppropagation.asp) | 防止事件在事件流中进一步传播。                               | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| storageArea                                                  | 返回代表受影响的存储对象的对象。                             | [StorageEvent](https://www.w3school.com.cn/jsref/obj_storageevent.asp) |
| [target](https://www.w3school.com.cn/jsref/event_target.asp) | 返回触发事件的元素。                                         | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| [targetTouches](https://www.w3school.com.cn/jsref/event_touch_targettouches.asp) | 返回包含仍与触摸面接触的所有触摸点的Touch对象的TouchList列表 | [TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| [timeStamp](https://www.w3school.com.cn/jsref/event_timestamp.asp) | 返回创建事件的时间（相对于纪元的毫秒数）。                   | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| total                                                        | 返回将要加载的工作总量。                                     | [ProgressEvent](https://www.w3school.com.cn/jsref/obj_progressevent.asp) |
| [touches](https://www.w3school.com.cn/jsref/event_touch_touches.asp) | 返回当前与表面接触的所有 touch 对象的列表。                  | [TouchEvent](https://www.w3school.com.cn/jsref/obj_touchevent.asp) |
| [type](https://www.w3school.com.cn/jsref/event_type.asp)     | 返回事件名称。                                               | [Event](https://www.w3school.com.cn/jsref/obj_event.asp)     |
| url                                                          | 返回已更改项目的所在文档的 URL。                             | [StorageEvent](https://www.w3school.com.cn/jsref/obj_storageevent.asp) |
| [which](https://www.w3school.com.cn/jsref/event_which.asp)   | 返回触发鼠标事件时按下的鼠标按钮。                           | [MouseEvent](https://www.w3school.com.cn/jsref/obj_mouseevent.asp) |
| [which](https://www.w3school.com.cn/jsref/event_key_which.asp) | 返回触发 onkeypress 事件的键的 Unicode 字符码，或触发 onkeydown 或 onkeyup 事件的键的 Unicode 键码 | [KeyboardEvent](https://www.w3school.com.cn/jsref/obj_keyboardevent.asp) |
| [view](https://www.w3school.com.cn/jsref/event_view.asp)     | 返回对发生事件的 Window 对象的引用。                         | [UiEvent](https://www.w3school.com.cn/jsref/obj_uievent.asp) |