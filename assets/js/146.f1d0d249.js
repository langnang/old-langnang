(window.webpackJsonp=window.webpackJsonp||[]).push([[146],{612:function(e,r,n){"use strict";n.r(r);var t=n(18),a=Object(t.a)({},(function(){var e=this,r=e.$createElement,n=e._self._c||r;return n("ContentSlotsDistributor",{attrs:{"slot-key":e.$parent.slotKey}},[n("h1",{attrs:{id:"module-模块-node-js-api-文档"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#module-模块-node-js-api-文档"}},[e._v("#")]),e._v(" module 模块 | Node.js API 文档")]),e._v(" "),n("blockquote",[n("h2",{attrs:{id:"excerpt"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#excerpt"}},[e._v("#")]),e._v(" Excerpt")]),e._v(" "),n("p",[e._v("中英对照")])]),e._v(" "),n("hr"),e._v(" "),n("h3",{attrs:{id:"module-对象"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#module-对象"}},[e._v("#")]),e._v(" Module 对象"),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#the-module-object",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/module/the_module_object.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("ul",[n("li",[n("a",{attrs:{href:"http://url.nodejs.cn/jzn6Ao",target:"_blank",rel:"noopener noreferrer"}},[n("Object",[n("OutboundLink")],1)],1)])]),e._v(" "),n("p",[e._v("当与 "),n("code",[e._v("Module")]),e._v(" 的实例交互时提供通用的实用方法，"),n("a",{attrs:{href:"http://nodejs.cn/api-v12/modules.html#modules_the_module_object",target:"_blank",rel:"noopener noreferrer"}},[n("code",[e._v("module")]),n("OutboundLink")],1),e._v(" 变量常见于 "),n("a",{attrs:{href:"http://nodejs.cn/api-v12/modules.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("CommonJS"),n("OutboundLink")],1),e._v(" 模块中。 通过 "),n("code",[e._v("import 'module'")]),e._v(" 或 "),n("code",[e._v("require('module')")]),e._v(" 访问。")]),e._v(" "),n("h4",{attrs:{id:"module-builtinmodules"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#module-builtinmodules"}},[e._v("#")]),e._v(" "),n("code",[e._v("module.builtinModules")]),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#modulebuiltinmodules",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/module/module_builtinmodules.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("p",[e._v("新增于: v9.3.0, v8.10.0, v6.13.0")]),e._v(" "),n("ul",[n("li",[n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[e._v("<string[]>"),n("OutboundLink")],1)])]),e._v(" "),n("p",[e._v("Node.js 提供的所有模块的名称列表。 可用于验证模块是否由第三方维护。")]),e._v(" "),n("p",[e._v("此上下文中的 "),n("code",[e._v("module")]),e._v(" 与"),n("a",{attrs:{href:"http://nodejs.cn/api-v12/modules_cjs.html#modules_cjs_the_module_wrapper",target:"_blank",rel:"noopener noreferrer"}},[e._v("模块封装器"),n("OutboundLink")],1),e._v("提供的对象不同。 要访问它，需要 "),n("code",[e._v("Module")]),e._v(" 模块：")]),e._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[e._v("// module.mjs\n// 在 ECMAScript 模块中\nimport { builtinModules as builtin } from 'module';\n")])]),e._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[e._v("1")]),n("br"),n("span",{staticClass:"line-number"},[e._v("2")]),n("br"),n("span",{staticClass:"line-number"},[e._v("3")]),n("br")])]),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[e._v("// module.cjs\n// 在 CommonJS 模块中\nconst builtin = require('module').builtinModules;\n")])]),e._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[e._v("1")]),n("br"),n("span",{staticClass:"line-number"},[e._v("2")]),n("br"),n("span",{staticClass:"line-number"},[e._v("3")]),n("br")])]),n("h4",{attrs:{id:"module-createrequire-filename"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#module-createrequire-filename"}},[e._v("#")]),e._v(" "),n("code",[e._v("module.createRequire(filename)")]),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#modulecreaterequirefilename",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/module/module_createrequire_filename.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("p",[e._v("新增于: v12.2.0")]),e._v(" "),n("ul",[n("li",[n("code",[e._v("filename")]),e._v(" "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[n("string",[n("OutboundLink")],1)],1),e._v(" | "),n("a",{attrs:{href:"http://nodejs.cn/api/url.html#the-whatwg-url-api",target:"_blank",rel:"noopener noreferrer"}},[n("URL",[n("OutboundLink")],1)],1),e._v(" 用于构造 require 函数的文件名。 必须是文件网址对象、文件网址字符串、或绝对路径字符串。")]),e._v(" "),n("li",[e._v("返回: "),n("a",{attrs:{href:"http://nodejs.cn/api/modules.html#requireid",target:"_blank",rel:"noopener noreferrer"}},[n("require",[n("OutboundLink")],1)],1),e._v(" require 函数")])]),e._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[e._v("import { createRequire } from 'module';\nconst require = createRequire(import.meta.url);\n\n// sibling-module.js 是 CommonJS 模块。\nconst siblingModule = require('./sibling-module');\n")])]),e._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[e._v("1")]),n("br"),n("span",{staticClass:"line-number"},[e._v("2")]),n("br"),n("span",{staticClass:"line-number"},[e._v("3")]),n("br"),n("span",{staticClass:"line-number"},[e._v("4")]),n("br"),n("span",{staticClass:"line-number"},[e._v("5")]),n("br")])]),n("h4",{attrs:{id:"module-createrequirefrompath-filename"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#module-createrequirefrompath-filename"}},[e._v("#")]),e._v(" "),n("code",[e._v("module.createRequireFromPath(filename)")]),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#modulecreaterequirefrompathfilename",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/module/module_createrequirefrompath_filename.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("p",[e._v("新增于: v10.12.0弃用于: v12.2.0")]),e._v(" "),n("ul",[n("li",[n("code",[e._v("filename")]),e._v(" "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[n("string",[n("OutboundLink")],1)],1),e._v(" 用于构造相对 require 函数的文件名。")]),e._v(" "),n("li",[e._v("返回: "),n("a",{attrs:{href:"http://nodejs.cn/api/modules.html#requireid",target:"_blank",rel:"noopener noreferrer"}},[n("require",[n("OutboundLink")],1)],1),e._v(" require 函数")])]),e._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[e._v("const { createRequireFromPath } = require('module');\nconst requireUtil = createRequireFromPath('../src/utils/');\n\n// 需要 `../src/utils/some-tool`\nrequireUtil('./some-tool');\n")])]),e._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[e._v("1")]),n("br"),n("span",{staticClass:"line-number"},[e._v("2")]),n("br"),n("span",{staticClass:"line-number"},[e._v("3")]),n("br"),n("span",{staticClass:"line-number"},[e._v("4")]),n("br"),n("span",{staticClass:"line-number"},[e._v("5")]),n("br")])]),n("h4",{attrs:{id:"module-syncbuiltinesmexports"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#module-syncbuiltinesmexports"}},[e._v("#")]),e._v(" "),n("code",[e._v("module.syncBuiltinESMExports()")]),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#modulesyncbuiltinesmexports",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/module/module_syncbuiltinesmexports.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("p",[e._v("新增于: v12.12.0")]),e._v(" "),n("p",[n("code",[e._v("module.syncBuiltinESMExports()")]),e._v(" 方法更新内置的 "),n("a",{attrs:{href:"http://nodejs.cn/api-v12/esm.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("ES 模块"),n("OutboundLink")],1),e._v("的所有实时绑定，以匹配 "),n("a",{attrs:{href:"http://nodejs.cn/api-v12/modules.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("CommonJS"),n("OutboundLink")],1),e._v(" 导出的属性。 它不会在 "),n("a",{attrs:{href:"http://nodejs.cn/api-v12/esm.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("ES 模块"),n("OutboundLink")],1),e._v("中添加或删除导出的名称。")]),e._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[e._v("const fs = require('fs');\nconst { syncBuiltinESMExports } = require('module');\n\nfs.readFile = null;\n\ndelete fs.readFileSync;\n\nfs.newAPI = function newAPI() {\n  // ...\n};\n\nsyncBuiltinESMExports();\n\nimport('fs').then((esmFS) => {\n  assert.strictEqual(esmFS.readFile, null);\n  assert.strictEqual('readFileSync' in fs, true);\n  assert.strictEqual(esmFS.newAPI, undefined);\n});\n")])]),e._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[e._v("1")]),n("br"),n("span",{staticClass:"line-number"},[e._v("2")]),n("br"),n("span",{staticClass:"line-number"},[e._v("3")]),n("br"),n("span",{staticClass:"line-number"},[e._v("4")]),n("br"),n("span",{staticClass:"line-number"},[e._v("5")]),n("br"),n("span",{staticClass:"line-number"},[e._v("6")]),n("br"),n("span",{staticClass:"line-number"},[e._v("7")]),n("br"),n("span",{staticClass:"line-number"},[e._v("8")]),n("br"),n("span",{staticClass:"line-number"},[e._v("9")]),n("br"),n("span",{staticClass:"line-number"},[e._v("10")]),n("br"),n("span",{staticClass:"line-number"},[e._v("11")]),n("br"),n("span",{staticClass:"line-number"},[e._v("12")]),n("br"),n("span",{staticClass:"line-number"},[e._v("13")]),n("br"),n("span",{staticClass:"line-number"},[e._v("14")]),n("br"),n("span",{staticClass:"line-number"},[e._v("15")]),n("br"),n("span",{staticClass:"line-number"},[e._v("16")]),n("br"),n("span",{staticClass:"line-number"},[e._v("17")]),n("br"),n("span",{staticClass:"line-number"},[e._v("18")]),n("br")])]),n("h3",{attrs:{id:"source-map-v3-的支持"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#source-map-v3-的支持"}},[e._v("#")]),e._v(" Source Map V3 的支持"),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#source-map-v3-support",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/module/source_map_v3_support.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("p",[e._v("新增于: v13.7.0, v12.17.0")]),e._v(" "),n("p",[e._v("与源映射缓存交互的助手。 当启用源映射解析并且在模块的页脚中找到"),n("a",{attrs:{href:"http://url.nodejs.cn/N2PLzU",target:"_blank",rel:"noopener noreferrer"}},[e._v("源映射包含指令"),n("OutboundLink")],1),e._v("时，则会填充此缓存。")]),e._v(" "),n("p",[e._v("要启用源映射解析，则 Node.js 必须使用标志 "),n("a",{attrs:{href:"http://nodejs.cn/api-v12/cli.html#cli_enable_source_maps",target:"_blank",rel:"noopener noreferrer"}},[n("code",[e._v("--enable-source-maps")]),n("OutboundLink")],1),e._v(" 运行、或者通过设置 "),n("a",{attrs:{href:"http://nodejs.cn/api-v12/cli.html#cli_node_v8_coverage_dir",target:"_blank",rel:"noopener noreferrer"}},[n("code",[e._v("NODE_V8_COVERAGE=dir")]),n("OutboundLink")],1),e._v(" 启用代码覆盖率。")]),e._v(" "),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[e._v("// module.mjs\n// 在 ECMAScript 模块中\nimport { findSourceMap, SourceMap } from 'module';\n")])]),e._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[e._v("1")]),n("br"),n("span",{staticClass:"line-number"},[e._v("2")]),n("br"),n("span",{staticClass:"line-number"},[e._v("3")]),n("br")])]),n("div",{staticClass:"language- line-numbers-mode"},[n("pre",{pre:!0,attrs:{class:"language-text"}},[n("code",[e._v("// module.cjs\n// 在 CommonJS 模块中\nconst { findSourceMap, SourceMap } = require('module');\n")])]),e._v(" "),n("div",{staticClass:"line-numbers-wrapper"},[n("span",{staticClass:"line-number"},[e._v("1")]),n("br"),n("span",{staticClass:"line-number"},[e._v("2")]),n("br"),n("span",{staticClass:"line-number"},[e._v("3")]),n("br")])]),n("h4",{attrs:{id:"module-findsourcemap-path-error"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#module-findsourcemap-path-error"}},[e._v("#")]),e._v(" "),n("code",[e._v("module.findSourceMap(path[, error])")]),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#modulefindsourcemappath-error",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/module/module_findsourcemap_path_error.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("p",[e._v("新增于: v13.7.0, v12.17.0")]),e._v(" "),n("ul",[n("li",[n("code",[e._v("path")]),e._v(" "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[n("string",[n("OutboundLink")],1)],1)]),e._v(" "),n("li",[n("code",[e._v("error")]),e._v(" "),n("a",{attrs:{href:"http://url.nodejs.cn/qZ873x",target:"_blank",rel:"noopener noreferrer"}},[n("Error",[n("OutboundLink")],1)],1)]),e._v(" "),n("li",[e._v("返回: "),n("a",{attrs:{href:"http://nodejs.cn/api/module.html#class-modulesourcemap",target:"_blank",rel:"noopener noreferrer"}},[e._v("<module.SourceMap>"),n("OutboundLink")],1)])]),e._v(" "),n("p",[n("code",[e._v("path")]),e._v(" 是文件的解析路径，应为其获取相应的源映射。")]),e._v(" "),n("h4",{attrs:{id:"module-sourcemap-类"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#module-sourcemap-类"}},[e._v("#")]),e._v(" "),n("code",[e._v("module.SourceMap")]),e._v(" 类"),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#class-modulesourcemap",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[e._v("新增于: v13.7.0, v12.17.0")]),e._v(" "),n("h5",{attrs:{id:"new-sourcemap-payload"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#new-sourcemap-payload"}},[e._v("#")]),e._v(" "),n("code",[e._v("new SourceMap(payload)")]),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#new-sourcemappayload",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/module/new_sourcemap_payload.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("ul",[n("li",[n("code",[e._v("payload")]),e._v(" "),n("a",{attrs:{href:"http://url.nodejs.cn/jzn6Ao",target:"_blank",rel:"noopener noreferrer"}},[n("Object",[n("OutboundLink")],1)],1)])]),e._v(" "),n("p",[e._v("创建新的 "),n("code",[e._v("sourceMap")]),e._v(" 实例。")]),e._v(" "),n("p",[n("code",[e._v("payload")]),e._v(" 是键匹配 "),n("a",{attrs:{href:"http://url.nodejs.cn/dP4AvC",target:"_blank",rel:"noopener noreferrer"}},[e._v("Source map v3 格式"),n("OutboundLink")],1),e._v("的对象：")]),e._v(" "),n("ul",[n("li",[n("code",[e._v("file")]),e._v(": "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[n("string",[n("OutboundLink")],1)],1)]),e._v(" "),n("li",[n("code",[e._v("version")]),e._v(": "),n("a",{attrs:{href:"http://url.nodejs.cn/SXbo1v",target:"_blank",rel:"noopener noreferrer"}},[n("number",[n("OutboundLink")],1)],1)]),e._v(" "),n("li",[n("code",[e._v("sources")]),e._v(": "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[e._v("<string[]>"),n("OutboundLink")],1)]),e._v(" "),n("li",[n("code",[e._v("sourcesContent")]),e._v(": "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[e._v("<string[]>"),n("OutboundLink")],1)]),e._v(" "),n("li",[n("code",[e._v("names")]),e._v(": "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[e._v("<string[]>"),n("OutboundLink")],1)]),e._v(" "),n("li",[n("code",[e._v("mappings")]),e._v(": "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[n("string",[n("OutboundLink")],1)],1)]),e._v(" "),n("li",[n("code",[e._v("sourceRoot")]),e._v(": "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[n("string",[n("OutboundLink")],1)],1)])]),e._v(" "),n("h5",{attrs:{id:"sourcemap-payload"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#sourcemap-payload"}},[e._v("#")]),e._v(" "),n("code",[e._v("sourceMap.payload")]),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#sourcemappayload",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/module/sourcemap_payload.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("ul",[n("li",[e._v("返回: "),n("a",{attrs:{href:"http://url.nodejs.cn/jzn6Ao",target:"_blank",rel:"noopener noreferrer"}},[n("Object",[n("OutboundLink")],1)],1)])]),e._v(" "),n("p",[e._v("用于构造 "),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#module_class_module_sourcemap",target:"_blank",rel:"noopener noreferrer"}},[n("code",[e._v("SourceMap")]),n("OutboundLink")],1),e._v(" 实例的有效负载的获取器。")]),e._v(" "),n("h5",{attrs:{id:"sourcemap-findentry-linenumber-columnnumber"}},[n("a",{staticClass:"header-anchor",attrs:{href:"#sourcemap-findentry-linenumber-columnnumber"}},[e._v("#")]),e._v(" "),n("code",[e._v("sourceMap.findEntry(lineNumber, columnNumber)")]),n("a",{attrs:{href:"http://nodejs.cn/api-v12/module.html#sourcemapfindentrylinenumber-columnnumber",target:"_blank",rel:"noopener noreferrer"}},[e._v("#"),n("OutboundLink")],1)]),e._v(" "),n("p",[n("a",{attrs:{href:"http://nodejs.cn/api-v12/module/sourcemap_findentry_linenumber_columnnumber.html",target:"_blank",rel:"noopener noreferrer"}},[e._v("中英对照"),n("OutboundLink")],1)]),e._v(" "),n("ul",[n("li",[n("code",[e._v("lineNumber")]),e._v(" "),n("a",{attrs:{href:"http://url.nodejs.cn/SXbo1v",target:"_blank",rel:"noopener noreferrer"}},[n("number",[n("OutboundLink")],1)],1)]),e._v(" "),n("li",[n("code",[e._v("columnNumber")]),e._v(" "),n("a",{attrs:{href:"http://url.nodejs.cn/SXbo1v",target:"_blank",rel:"noopener noreferrer"}},[n("number",[n("OutboundLink")],1)],1)]),e._v(" "),n("li",[e._v("返回: "),n("a",{attrs:{href:"http://url.nodejs.cn/jzn6Ao",target:"_blank",rel:"noopener noreferrer"}},[n("Object",[n("OutboundLink")],1)],1)])]),e._v(" "),n("p",[e._v("给定生成的源文件中的行号和列号，返回表示原始文件中位置的对象。 返回的对象包含以下键：")]),e._v(" "),n("ul",[n("li",[e._v("generatedLine: "),n("a",{attrs:{href:"http://url.nodejs.cn/SXbo1v",target:"_blank",rel:"noopener noreferrer"}},[n("number",[n("OutboundLink")],1)],1)]),e._v(" "),n("li",[e._v("generatedColumn: "),n("a",{attrs:{href:"http://url.nodejs.cn/SXbo1v",target:"_blank",rel:"noopener noreferrer"}},[n("number",[n("OutboundLink")],1)],1)]),e._v(" "),n("li",[e._v("originalSource: "),n("a",{attrs:{href:"http://url.nodejs.cn/9Tw2bK",target:"_blank",rel:"noopener noreferrer"}},[n("string",[n("OutboundLink")],1)],1)]),e._v(" "),n("li",[e._v("originalLine: "),n("a",{attrs:{href:"http://url.nodejs.cn/SXbo1v",target:"_blank",rel:"noopener noreferrer"}},[n("number",[n("OutboundLink")],1)],1)]),e._v(" "),n("li",[e._v("originalColumn: "),n("a",{attrs:{href:"http://url.nodejs.cn/SXbo1v",target:"_blank",rel:"noopener noreferrer"}},[n("number",[n("OutboundLink")],1)],1)])])])}),[],!1,null,null,null);r.default=a.exports}}]);