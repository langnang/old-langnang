(window.webpackJsonp=window.webpackJsonp||[]).push([[160],{624:function(e,r,n){"use strict";n.r(r);var t=n(18),o=Object(t.a)({},(function(){var e=this,r=e.$createElement,n=e._self._c||r;return n("ContentSlotsDistributor",{attrs:{"slot-key":e.$parent.slotKey}},[n("h1",{attrs:{id:"string-decoder-字符串解码器-node-js-api-文档"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#string-decoder-字符串解码器-node-js-api-文档"}},[e._v("#")]),e._v(" string_decoder 字符串解码器 | Node.js API 文档")]),e._v(" "),n("blockquote",[n("h2",{attrs:{id:"excerpt"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#excerpt"}},[e._v("#")]),e._v(" Excerpt")]),e._v(" "),n("p",[e._v("中英对照")])]),e._v(" "),n("hr"),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/string_decoder/string_decoder.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("strong",[e._v("源代码:")]),e._v(" "),n("a",{attrs:{href:"https://github.com/nodejs/node/blob/v12.22.12/lib/string_decoder.js",target:"_blank",rel:"noopener noreferrer"}},[e._v("lib/string_decoder.js"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("code",[e._v("string_decoder")]),e._v(" 模块提供了用于将 "),n("code",[e._v("Buffer")]),e._v(" 对象解码为字符串（以保留编码的多字节 UTF-8 和 UTF-16 字符的方式）的 API。 可以使用以下方式访问它：")]),e._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[e._v("const { StringDecoder } = require('string_decoder');\n")])]),e._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[e._v("1")]),n("br")])]),n("p",[e._v("下面的示例展示了 "),n("code",[e._v("StringDecoder")]),e._v(" 类的基本用法。")]),e._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[e._v("const { StringDecoder } = require('string_decoder');\nconst decoder = new StringDecoder('utf8');\n\nconst cent = Buffer.from([0xC2, 0xA2]);\nconsole.log(decoder.write(cent));\n\nconst euro = Buffer.from([0xE2, 0x82, 0xAC]);\nconsole.log(decoder.write(euro));\n")])]),e._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[e._v("1")]),n("br"),n("span",{staticClass:"line-number"},[e._v("2")]),n("br"),n("span",{staticClass:"line-number"},[e._v("3")]),n("br"),n("span",{staticClass:"line-number"},[e._v("4")]),n("br"),n("span",{staticClass:"line-number"},[e._v("5")]),n("br"),n("span",{staticClass:"line-number"},[e._v("6")]),n("br"),n("span",{staticClass:"line-number"},[e._v("7")]),n("br"),n("span",{staticClass:"line-number"},[e._v("8")]),n("br")])]),n("p",[e._v("当 "),n("code",[e._v("Buffer")]),e._v(" 实例被写入 "),n("code",[e._v("StringDecoder")]),e._v(" 实例时，会使用内部的缓冲区来确保解码后的字符串不包含任何不完整的多字节字符。 这些都保存在缓冲区中，直到下一次调用 "),n("code",[e._v("stringDecoder.write()")]),e._v(" 或调用 "),n("code",[e._v("stringDecoder.end()")]),e._v("。")]),e._v(" "),n("p",[e._v("在以下示例中，欧洲欧元符号 ("),n("code",[e._v("€")]),e._v(") 的三个 UTF-8 编码的字节通过三次单独的操作写入：")]),e._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[e._v("const { StringDecoder } = require('string_decoder');\nconst decoder = new StringDecoder('utf8');\n\ndecoder.write(Buffer.from([0xE2]));\ndecoder.write(Buffer.from([0x82]));\nconsole.log(decoder.end(Buffer.from([0xAC])));\n")])]),e._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[e._v("1")]),n("br"),n("span",{staticClass:"line-number"},[e._v("2")]),n("br"),n("span",{staticClass:"line-number"},[e._v("3")]),n("br"),n("span",{staticClass:"line-number"},[e._v("4")]),n("br"),n("span",{staticClass:"line-number"},[e._v("5")]),n("br"),n("span",{staticClass:"line-number"},[e._v("6")]),n("br")])]),n("h3",{attrs:{id:"stringdecoder-类"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#stringdecoder-类"}},[e._v("#")]),e._v(" "),n("code",[e._v("StringDecoder")]),e._v(" 类"),n("a",{attrs:{href:"http://nodejs.cn/api-v12/string_decoder.html#class-stringdecoder",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("h4",{attrs:{id:"new-stringdecoder-encoding"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#new-stringdecoder-encoding"}},[e._v("#")]),e._v(" "),n("code",[e._v("new StringDecoder([encoding])")]),n("a",{attrs:{href:"http://nodejs.cn/api-v12/string_decoder.html#new-stringdecoderencoding",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/string_decoder/new_stringdecoder_encoding.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("p",[e._v("新增于: v0.1.99")]),e._v(" "),n("ul",[n("li",[n("code",[e._v("encoding")]),e._v(" "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[n("string",[n("OutboundLink")],1)],1),e._v(" "),n("code",[e._v("StringDecoder")]),e._v(" 将使用的字符"),n("a",{attrs:{href:"http://nodejs.cn/api-v12/buffer.html#buffer_buffers_and_character_encodings",target:"_blank",rel:"noopener noreferrer"}},[e._v("编码"),n("OutboundLink")],1),e._v("。 "),n("strong",[e._v("默认值:")]),e._v(" "),n("code",[e._v("'utf8'")]),e._v("。")])]),e._v(" "),n("p",[e._v("创建新的 "),n("code",[e._v("StringDecoder")]),e._v(" 实例。")]),e._v(" "),n("h4",{attrs:{id:"stringdecoder-end-buffer"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#stringdecoder-end-buffer"}},[e._v("#")]),e._v(" "),n("code",[e._v("stringDecoder.end([buffer])")]),n("a",{attrs:{href:"http://nodejs.cn/api-v12/string_decoder.html#stringdecoderendbuffer",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/string_decoder/stringdecoder_end_buffer.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("p",[e._v("新增于: v0.9.3")]),e._v(" "),n("ul",[n("li",[n("code",[e._v("buffer")]),e._v(" "),n("a",{attrs:{href:"http://nodejs.cn/api/buffer.html#class-buffer",target:"_blank",rel:"noopener noreferrer"}},[n("Buffer",[n("OutboundLink")],1)],1),e._v(" | "),n("a",{attrs:{href:"http://url.nodejs.cn/oh3CkV",target:"_blank",rel:"noopener noreferrer"}},[n("TypedArray",[n("OutboundLink")],1)],1),e._v(" | "),n("a",{attrs:{href:"http://url.nodejs.cn/yCdVkD",target:"_blank",rel:"noopener noreferrer"}},[n("DataView",[n("OutboundLink")],1)],1),e._v(" 包含要解码的字节的 "),n("code",[e._v("Buffer")]),e._v("、"),n("code",[e._v("TypedArray")]),e._v(" 或 "),n("code",[e._v("DataView")]),e._v("。")]),e._v(" "),n("li",[e._v("返回: "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[n("string",[n("OutboundLink")],1)],1)])]),e._v(" "),n("p",[e._v("以字符串形式返回存储在内部缓冲区中的任何剩余的输入。 表示不完整的 UTF-8 和 UTF-16 字符的字节将被替换为适合字符编码的替换字符。")]),e._v(" "),n("p",[e._v("如果提供了 "),n("code",[e._v("buffer")]),e._v(" 参数，则在返回剩余的输入之前执行对 "),n("code",[e._v("stringDecoder.write()")]),e._v(" 的最后一次调用。")]),e._v(" "),n("h4",{attrs:{id:"stringdecoder-write-buffer"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#stringdecoder-write-buffer"}},[e._v("#")]),e._v(" "),n("code",[e._v("stringDecoder.write(buffer)")]),n("a",{attrs:{href:"http://nodejs.cn/api-v12/string_decoder.html#stringdecoderwritebuffer",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/string_decoder/stringdecoder_write_buffer.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("ul",[n("li",[n("code",[e._v("buffer")]),e._v(" "),n("a",{attrs:{href:"http://nodejs.cn/api/buffer.html#class-buffer",target:"_blank",rel:"noopener noreferrer"}},[n("Buffer",[n("OutboundLink")],1)],1),e._v(" | "),n("a",{attrs:{href:"http://url.nodejs.cn/oh3CkV",target:"_blank",rel:"noopener noreferrer"}},[n("TypedArray",[n("OutboundLink")],1)],1),e._v(" | "),n("a",{attrs:{href:"http://url.nodejs.cn/yCdVkD",target:"_blank",rel:"noopener noreferrer"}},[n("DataView",[n("OutboundLink")],1)],1),e._v(" 包含要解码的字节的 "),n("code",[e._v("Buffer")]),e._v("、"),n("code",[e._v("TypedArray")]),e._v(" 或 "),n("code",[e._v("DataView")]),e._v("。")]),e._v(" "),n("li",[e._v("返回: "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[n("string",[n("OutboundLink")],1)],1)])]),e._v(" "),n("p",[e._v("返回已解码的字符串，确保从返回的字符串中省略 "),n("code",[e._v("Buffer")]),e._v("、"),n("code",[e._v("TypedArray")]),e._v(" 或 "),n("code",[e._v("DataView")]),e._v(" 末尾的任何不完整的多字节字符，并将其存储在内部缓冲区中，以备下次调用 "),n("code",[e._v("stringDecoder.write()")]),e._v(" 或 "),n("code",[e._v("stringDecoder.end()")]),e._v(" 时使用。")])])}),[],!1,null,null,null);r.default=o.exports}}]);