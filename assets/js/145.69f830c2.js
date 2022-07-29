(window.webpackJsonp=window.webpackJsonp||[]).push([[145],{610:function(e,n,r){"use strict";r.r(n);var t=r(18),s=Object(t.a)({},(function(){var e=this,n=e.$createElement,r=e._self._c||n;return r("ContentSlotsDistributor",{attrs:{"slot-key":e.$parent.slotKey}},[r("h1",{attrs:{id:"inspector-检查器-node-js-api-文档"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#inspector-检查器-node-js-api-文档"}},[e._v("#")]),e._v(" inspector 检查器 | Node.js API 文档")]),e._v(" "),r("blockquote",[r("h2",{attrs:{id:"excerpt"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#excerpt"}},[e._v("#")]),e._v(" Excerpt")]),e._v(" "),r("p",[e._v("中英对照")])]),e._v(" "),r("hr"),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/inspector.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("strong",[e._v("源代码:")]),e._v(" "),r("a",{attrs:{href:"https://github.com/nodejs/node/blob/v12.22.12/lib/inspector.js",target:"_blank",rel:"noopener noreferrer"}},[e._v("lib/inspector.js"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("code",[e._v("inspector")]),e._v(" 模块提供了与 V8 检查器交互的 API。")]),e._v(" "),r("p",[e._v("可以使用以下方式访问它：")]),e._v(" "),r("div",{staticClass:"language- line-numbers-mode"},[r("pre",{pre:!0,attrs:{class:"language-text"}},[r("code",[e._v("const inspector = require('inspector');\n")])]),e._v(" "),r("div",{staticClass:"line-numbers-wrapper"},[r("span",{staticClass:"line-number"},[e._v("1")]),r("br")])]),r("h3",{attrs:{id:"inspector-close"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#inspector-close"}},[e._v("#")]),e._v(" "),r("code",[e._v("inspector.close()")]),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#inspectorclose",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/inspector_close.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("停用检查器。 阻塞直到没有活动连接。")]),e._v(" "),r("h3",{attrs:{id:"inspector-console"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#inspector-console"}},[e._v("#")]),e._v(" "),r("code",[e._v("inspector.console")]),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#inspectorconsole",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/inspector_console.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("ul",[r("li",[r("a",{attrs:{href:"http://url.nodejs.cn/jzn6Ao",target:"_blank",rel:"noopener noreferrer"}},[r("Object",[r("OutboundLink")],1)],1),e._v(" 向远程检查器控制台发送消息的对象。")])]),e._v(" "),r("div",{staticClass:"language- line-numbers-mode"},[r("pre",{pre:!0,attrs:{class:"language-text"}},[r("code",[e._v("require('inspector').console.log('a message');\n")])]),e._v(" "),r("div",{staticClass:"line-numbers-wrapper"},[r("span",{staticClass:"line-number"},[e._v("1")]),r("br")])]),r("p",[e._v("检查器控制台没有与 Node.js 控制台的 API 奇偶校验。")]),e._v(" "),r("h3",{attrs:{id:"inspector-open-port-host-wait"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#inspector-open-port-host-wait"}},[e._v("#")]),e._v(" "),r("code",[e._v("inspector.open([port[, host[, wait]]])")]),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#inspectoropenport-host-wait",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/inspector_open_port_host_wait.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("ul",[r("li",[r("code",[e._v("port")]),e._v(" "),r("a",{attrs:{href:"http://url.nodejs.cn/SXbo1v",target:"_blank",rel:"noopener noreferrer"}},[r("number",[r("OutboundLink")],1)],1),e._v(" 监听检查器连接的端口。 可选的。 "),r("strong",[e._v("默认值:")]),e._v(" 命令行上指定的内容。")]),e._v(" "),r("li",[r("code",[e._v("host")]),e._v(" "),r("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[r("string",[r("OutboundLink")],1)],1),e._v(" 主机监听检查器连接。 可选的。 "),r("strong",[e._v("默认值:")]),e._v(" 命令行上指定的内容。")]),e._v(" "),r("li",[r("code",[e._v("wait")]),e._v(" "),r("a",{attrs:{href:"http://url.nodejs.cn/jFbvuT",target:"_blank",rel:"noopener noreferrer"}},[r("boolean",[r("OutboundLink")],1)],1),e._v(" 在客户端连接之前阻塞。 可选的。 "),r("strong",[e._v("默认值:")]),e._v(" "),r("code",[e._v("false")]),e._v("。")])]),e._v(" "),r("p",[e._v("在主机和端口上激活检查器。 相当于 "),r("code",[e._v("node --inspect=[[host:]port]")]),e._v("，但可以在 node 启动后以编程方式完成。")]),e._v(" "),r("p",[e._v("如果等待为 "),r("code",[e._v("true")]),e._v("，则将阻塞直到客户端连接到检查端口并且流量控制已传给调试器客户端。")]),e._v(" "),r("h3",{attrs:{id:"inspector-url"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#inspector-url"}},[e._v("#")]),e._v(" "),r("code",[e._v("inspector.url()")]),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#inspectorurl",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/inspector_url.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("ul",[r("li",[e._v("返回: "),r("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[r("string",[r("OutboundLink")],1)],1),e._v(" | "),r("a",{attrs:{href:"http://url.nodejs.cn/8ym6ow",target:"_blank",rel:"noopener noreferrer"}},[r("undefined",[r("OutboundLink")],1)],1)])]),e._v(" "),r("p",[e._v("返回活动检查器的网址，如果没有，则返回 "),r("code",[e._v("undefined")]),e._v("。")]),e._v(" "),r("div",{staticClass:"language- line-numbers-mode"},[r("pre",{pre:!0,attrs:{class:"language-text"}},[r("code",[e._v("$ node --inspect -p 'inspector.url()'\nDebugger listening on ws://127.0.0.1:9229/166e272e-7a30-4d09-97ce-f1c012b43c34\nFor help see https://nodejs.org/en/docs/inspector\nws://127.0.0.1:9229/166e272e-7a30-4d09-97ce-f1c012b43c34\n\n$ node --inspect=localhost:3000 -p 'inspector.url()'\nDebugger listening on ws://localhost:3000/51cf8d0e-3c36-4c59-8efd-54519839e56a\nFor help see https://nodejs.org/en/docs/inspector\nws://localhost:3000/51cf8d0e-3c36-4c59-8efd-54519839e56a\n\n$ node -p 'inspector.url()'\nundefined\n")])]),e._v(" "),r("div",{staticClass:"line-numbers-wrapper"},[r("span",{staticClass:"line-number"},[e._v("1")]),r("br"),r("span",{staticClass:"line-number"},[e._v("2")]),r("br"),r("span",{staticClass:"line-number"},[e._v("3")]),r("br"),r("span",{staticClass:"line-number"},[e._v("4")]),r("br"),r("span",{staticClass:"line-number"},[e._v("5")]),r("br"),r("span",{staticClass:"line-number"},[e._v("6")]),r("br"),r("span",{staticClass:"line-number"},[e._v("7")]),r("br"),r("span",{staticClass:"line-number"},[e._v("8")]),r("br"),r("span",{staticClass:"line-number"},[e._v("9")]),r("br"),r("span",{staticClass:"line-number"},[e._v("10")]),r("br"),r("span",{staticClass:"line-number"},[e._v("11")]),r("br"),r("span",{staticClass:"line-number"},[e._v("12")]),r("br")])]),r("h3",{attrs:{id:"inspector-waitfordebugger"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#inspector-waitfordebugger"}},[e._v("#")]),e._v(" "),r("code",[e._v("inspector.waitForDebugger()")]),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#inspectorwaitfordebugger",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/inspector_waitfordebugger.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("新增于: v12.7.0")]),e._v(" "),r("p",[e._v("阻塞直到客户端（现有或稍后连接）发送 "),r("code",[e._v("Runtime.runIfWaitingForDebugger")]),e._v(" 命令。")]),e._v(" "),r("p",[e._v("如果没有活动的检查器，则将会抛出异常。")]),e._v(" "),r("h3",{attrs:{id:"inspector-session-类"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#inspector-session-类"}},[e._v("#")]),e._v(" "),r("code",[e._v("inspector.Session")]),e._v(" 类"),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#class-inspectorsession",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/class_inspector_session.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("ul",[r("li",[e._v("继承自: "),r("a",{attrs:{href:"http://nodejs.cn/api/events.html#class-eventemitter",target:"_blank",rel:"noopener noreferrer"}},[r("EventEmitter",[r("OutboundLink")],1)],1)])]),e._v(" "),r("p",[r("code",[e._v("inspector.Session")]),e._v(" 用于向 V8 检查器后端发送消息并接收消息响应和通知。")]),e._v(" "),r("h4",{attrs:{id:"new-inspector-session"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#new-inspector-session"}},[e._v("#")]),e._v(" "),r("code",[e._v("new inspector.Session()")]),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#new-inspectorsession",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/new_inspector_session.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("新增于: v8.0.0")]),e._v(" "),r("p",[e._v("创建 "),r("code",[e._v("inspector.Session")]),e._v(" 类的新实例。 检查器会话需要通过 "),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#inspector_session_connect",target:"_blank",rel:"noopener noreferrer"}},[r("code",[e._v("session.connect()")]),r("OutboundLink")],1),e._v(" 连接才能将消息发送到检查员后端。")]),e._v(" "),r("h4",{attrs:{id:"inspectornotification-事件"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#inspectornotification-事件"}},[e._v("#")]),e._v(" "),r("code",[e._v("'inspectorNotification'")]),e._v(" 事件"),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#event-inspectornotification",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/event_inspectornotification.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("新增于: v8.0.0")]),e._v(" "),r("ul",[r("li",[r("a",{attrs:{href:"http://url.nodejs.cn/jzn6Ao",target:"_blank",rel:"noopener noreferrer"}},[r("Object",[r("OutboundLink")],1)],1),e._v(" 通知消息对象")])]),e._v(" "),r("p",[e._v("当接收到来自 V8 检查器的任何通知时触发。")]),e._v(" "),r("div",{staticClass:"language- line-numbers-mode"},[r("pre",{pre:!0,attrs:{class:"language-text"}},[r("code",[e._v("session.on('inspectorNotification', (message) => console.log(message.method));\n// Debugger.paused\n// Debugger.resumed\n")])]),e._v(" "),r("div",{staticClass:"line-numbers-wrapper"},[r("span",{staticClass:"line-number"},[e._v("1")]),r("br"),r("span",{staticClass:"line-number"},[e._v("2")]),r("br"),r("span",{staticClass:"line-number"},[e._v("3")]),r("br")])]),r("p",[e._v("也可以只订阅特定方法的通知：")]),e._v(" "),r("h4",{attrs:{id:"inspector-protocol-method-事件"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#inspector-protocol-method-事件"}},[e._v("#")]),e._v(" "),r("code",[e._v("<inspector-protocol-method>")]),e._v("; 事件"),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#event-inspector-protocol-method",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/event_inspector_protocol_method.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("新增于: v8.0.0")]),e._v(" "),r("ul",[r("li",[r("a",{attrs:{href:"http://url.nodejs.cn/jzn6Ao",target:"_blank",rel:"noopener noreferrer"}},[r("Object",[r("OutboundLink")],1)],1),e._v(" 通知消息对象")])]),e._v(" "),r("p",[e._v("当接收到检查器通知其方法字段设置为 "),r("code",[e._v("<inspector-protocol-method>")]),e._v(" 值时触发。")]),e._v(" "),r("p",[e._v("以下代码片段在 "),r("a",{attrs:{href:"http://url.nodejs.cn/H2jPQz",target:"_blank",rel:"noopener noreferrer"}},[r("code",[e._v("'Debugger.paused'")]),r("OutboundLink")],1),e._v(" 事件上安装了监听器，并在程序执行暂停时（例如通过断点）打印程序暂停的原因：")]),e._v(" "),r("div",{staticClass:"language- line-numbers-mode"},[r("pre",{pre:!0,attrs:{class:"language-text"}},[r("code",[e._v("session.on('Debugger.paused', ({ params }) => {\n  console.log(params.hitBreakpoints);\n});\n// [ '/the/file/that/has/the/breakpoint.js:11:0' ]\n")])]),e._v(" "),r("div",{staticClass:"line-numbers-wrapper"},[r("span",{staticClass:"line-number"},[e._v("1")]),r("br"),r("span",{staticClass:"line-number"},[e._v("2")]),r("br"),r("span",{staticClass:"line-number"},[e._v("3")]),r("br"),r("span",{staticClass:"line-number"},[e._v("4")]),r("br")])]),r("h4",{attrs:{id:"session-connect"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#session-connect"}},[e._v("#")]),e._v(" "),r("code",[e._v("session.connect()")]),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#sessionconnect",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/session_connect.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("新增于: v8.0.0")]),e._v(" "),r("p",[e._v("将会话连接到检查器后端。")]),e._v(" "),r("h4",{attrs:{id:"session-connecttomainthread"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#session-connecttomainthread"}},[e._v("#")]),e._v(" "),r("code",[e._v("session.connectToMainThread()")]),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#sessionconnecttomainthread",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/session_connecttomainthread.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("新增于: v12.11.0")]),e._v(" "),r("p",[e._v("将会话连接到主线程检查器后端。 如果没有在工作线程上调用此 API，则会抛出异常。")]),e._v(" "),r("h4",{attrs:{id:"session-disconnect"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#session-disconnect"}},[e._v("#")]),e._v(" "),r("code",[e._v("session.disconnect()")]),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#sessiondisconnect",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/session_disconnect.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("新增于: v8.0.0")]),e._v(" "),r("p",[e._v("立即关闭会话。 所有挂起的消息回调都将使用错误调用。 需要调用 "),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#inspector_session_connect",target:"_blank",rel:"noopener noreferrer"}},[r("code",[e._v("session.connect()")]),r("OutboundLink")],1),e._v(" 才能再次发送消息。 重新连接的会话将丢失所有检查器状态，例如启用的代理或配置的断点。")]),e._v(" "),r("h4",{attrs:{id:"session-post-method-params-callback"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#session-post-method-params-callback"}},[e._v("#")]),e._v(" "),r("code",[e._v("session.post(method[, params][, callback])")]),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#sessionpostmethod-params-callback",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/session_post_method_params_callback.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("新增于: v8.0.0")]),e._v(" "),r("ul",[r("li",[r("code",[e._v("method")]),e._v(" "),r("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[r("string",[r("OutboundLink")],1)],1)]),e._v(" "),r("li",[r("code",[e._v("params")]),e._v(" "),r("a",{attrs:{href:"http://url.nodejs.cn/jzn6Ao",target:"_blank",rel:"noopener noreferrer"}},[r("Object",[r("OutboundLink")],1)],1)]),e._v(" "),r("li",[r("code",[e._v("callback")]),e._v(" "),r("a",{attrs:{href:"http://url.nodejs.cn/ceTQa6",target:"_blank",rel:"noopener noreferrer"}},[r("Function",[r("OutboundLink")],1)],1)])]),e._v(" "),r("p",[e._v("向检查器后端发布消息。 "),r("code",[e._v("callback")]),e._v(" 将在接收到响应时收到通知。 "),r("code",[e._v("callback")]),e._v(" 是接受两个可选参数（错误和特定于消息的结果）的函数。")]),e._v(" "),r("div",{staticClass:"language- line-numbers-mode"},[r("pre",{pre:!0,attrs:{class:"language-text"}},[r("code",[e._v("session.post('Runtime.evaluate', { expression: '2 + 2' },\n             (error, { result }) => console.log(result));\n// 输出：{ type: 'number', value: 4, description: '4' }\n")])]),e._v(" "),r("div",{staticClass:"line-numbers-wrapper"},[r("span",{staticClass:"line-number"},[e._v("1")]),r("br"),r("span",{staticClass:"line-number"},[e._v("2")]),r("br"),r("span",{staticClass:"line-number"},[e._v("3")]),r("br")])]),r("p",[e._v("最新版本的 V8 检查器协议发布在 "),r("a",{attrs:{href:"http://url.nodejs.cn/L1ERN7",target:"_blank",rel:"noopener noreferrer"}},[e._v("Chrome 开发者工具协议查看器"),r("OutboundLink")],1),e._v("。")]),e._v(" "),r("p",[e._v("Node.js 检查器支持 V8 声明的所有 Chrome 开发者工具协议域。 Chrome 开发者工具协议域提供了一个接口，用于与用于检查应用程序状态和监听运行时事件的运行时代理之一进行交互。")]),e._v(" "),r("h3",{attrs:{id:"使用示例"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#使用示例"}},[e._v("#")]),e._v(" 使用示例"),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#example-usage",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/example_usage.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("除了调试器之外，还可以通过开发者工具协议使用各种 V8 分析器。")]),e._v(" "),r("h4",{attrs:{id:"cpu-分析器"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#cpu-分析器"}},[e._v("#")]),e._v(" CPU 分析器"),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#cpu-profiler",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/cpu_profiler.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("这是示例，展示了如何使用 "),r("a",{attrs:{href:"http://url.nodejs.cn/ouygJq",target:"_blank",rel:"noopener noreferrer"}},[e._v("CPU 分析器"),r("OutboundLink")],1),e._v("：")]),e._v(" "),r("div",{staticClass:"language- line-numbers-mode"},[r("pre",{pre:!0,attrs:{class:"language-text"}},[r("code",[e._v("const inspector = require('inspector');\nconst fs = require('fs');\nconst session = new inspector.Session();\nsession.connect();\n\nsession.post('Profiler.enable', () => {\n  session.post('Profiler.start', () => {\n    // 在此处调用测量中的业务逻辑...\n\n    // 一段时间之后...\n    session.post('Profiler.stop', (err, { profile }) => {\n      // 将分析文件写入磁盘、上传等\n      if (!err) {\n        fs.writeFileSync('./profile.cpuprofile', JSON.stringify(profile));\n      }\n    });\n  });\n});\n")])]),e._v(" "),r("div",{staticClass:"line-numbers-wrapper"},[r("span",{staticClass:"line-number"},[e._v("1")]),r("br"),r("span",{staticClass:"line-number"},[e._v("2")]),r("br"),r("span",{staticClass:"line-number"},[e._v("3")]),r("br"),r("span",{staticClass:"line-number"},[e._v("4")]),r("br"),r("span",{staticClass:"line-number"},[e._v("5")]),r("br"),r("span",{staticClass:"line-number"},[e._v("6")]),r("br"),r("span",{staticClass:"line-number"},[e._v("7")]),r("br"),r("span",{staticClass:"line-number"},[e._v("8")]),r("br"),r("span",{staticClass:"line-number"},[e._v("9")]),r("br"),r("span",{staticClass:"line-number"},[e._v("10")]),r("br"),r("span",{staticClass:"line-number"},[e._v("11")]),r("br"),r("span",{staticClass:"line-number"},[e._v("12")]),r("br"),r("span",{staticClass:"line-number"},[e._v("13")]),r("br"),r("span",{staticClass:"line-number"},[e._v("14")]),r("br"),r("span",{staticClass:"line-number"},[e._v("15")]),r("br"),r("span",{staticClass:"line-number"},[e._v("16")]),r("br"),r("span",{staticClass:"line-number"},[e._v("17")]),r("br"),r("span",{staticClass:"line-number"},[e._v("18")]),r("br")])]),r("h4",{attrs:{id:"堆分析器"}},[r("a",{staticClass:"header-anchor",attrs:{href:"#堆分析器"}},[e._v("#")]),e._v(" 堆分析器"),r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector.html#heap-profiler",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),r("OutboundLink")],1)]),e._v(" "),r("p",[r("a",{attrs:{href:"http://nodejs.cn/api-v12/inspector/heap_profiler.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),r("OutboundLink")],1)]),e._v(" "),r("p",[e._v("这是示例，展示了如何使用"),r("a",{attrs:{href:"http://url.nodejs.cn/qntq2p",target:"_blank",rel:"noopener noreferrer"}},[e._v("堆分析器"),r("OutboundLink")],1),e._v("：")]),e._v(" "),r("div",{staticClass:"language- line-numbers-mode"},[r("pre",{pre:!0,attrs:{class:"language-text"}},[r("code",[e._v("const inspector = require('inspector');\nconst fs = require('fs');\nconst session = new inspector.Session();\n\nconst fd = fs.openSync('profile.heapsnapshot', 'w');\n\nsession.connect();\n\nsession.on('HeapProfiler.addHeapSnapshotChunk', (m) => {\n  fs.writeSync(fd, m.params.chunk);\n});\n\nsession.post('HeapProfiler.takeHeapSnapshot', null, (err, r) => {\n  console.log('HeapProfiler.takeHeapSnapshot done:', err, r);\n  session.disconnect();\n  fs.closeSync(fd);\n});\n")])]),e._v(" "),r("div",{staticClass:"line-numbers-wrapper"},[r("span",{staticClass:"line-number"},[e._v("1")]),r("br"),r("span",{staticClass:"line-number"},[e._v("2")]),r("br"),r("span",{staticClass:"line-number"},[e._v("3")]),r("br"),r("span",{staticClass:"line-number"},[e._v("4")]),r("br"),r("span",{staticClass:"line-number"},[e._v("5")]),r("br"),r("span",{staticClass:"line-number"},[e._v("6")]),r("br"),r("span",{staticClass:"line-number"},[e._v("7")]),r("br"),r("span",{staticClass:"line-number"},[e._v("8")]),r("br"),r("span",{staticClass:"line-number"},[e._v("9")]),r("br"),r("span",{staticClass:"line-number"},[e._v("10")]),r("br"),r("span",{staticClass:"line-number"},[e._v("11")]),r("br"),r("span",{staticClass:"line-number"},[e._v("12")]),r("br"),r("span",{staticClass:"line-number"},[e._v("13")]),r("br"),r("span",{staticClass:"line-number"},[e._v("14")]),r("br"),r("span",{staticClass:"line-number"},[e._v("15")]),r("br"),r("span",{staticClass:"line-number"},[e._v("16")]),r("br"),r("span",{staticClass:"line-number"},[e._v("17")]),r("br")])])])}),[],!1,null,null,null);n.default=s.exports}}]);