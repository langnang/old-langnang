const { path } = require('@vuepress/shared-utils');

const TemplatePlugin = (options, ctx) => {
	const { isProd, pages, sourceDir, tempPath, outDir, base, writeTemp } = ctx;
	const { isDebugger } = options;
	if (isDebugger) debugger;
	return {
		// 插件的名字
		name: 'vuepress-plugin-d3',
		// 一个插件可以像 preset 一样包含多个插件。
		plugins: [],
		// 修改内部的 webpack 配置
		chainWebpack(config, isServer) {
			// config 是一个 ChainableConfig 的实例
			const { amd, bail, cache } = config;
			// 由于 VuePress 是一个基于 Vue-SSR 的应用，这里会有两个 webpack 配置，
			// isServer 用于决定当前的 webpack 配置是应用到 server 还是 client。
			if (isDebugger) debugger;
		},
		define() {
			if (isDebugger) debugger;

			return {};
		},
		// 配置别名
		alias() {
			if (isDebugger) debugger;
			return {};
		},
		// 等同于 webpack-dev-server (opens new window)中的 before (opens new window)，
		// 你可以使用它来自定义你的 devServer
		beforeDevServer(app, server) {
			if (isDebugger) debugger;
		},
		// 等同于 webpack-dev-server (opens new window)中的 after (opens new window)，
		// 你可以用其在所有中间件的最后去执行一些自定义的中间件：
		afterDevServer(app, server) {
			if (isDebugger) debugger;
		},
		// 修改内部用于渲染 markdown 文件的 markdown-it (opens new window)实例
		// 的配置、或者应用一些额外的插件：
		extendMarkdown: (md) => {
			const { block, core, helpers, inline, linkify, normalizeLink, normalizeLinkText, options, renderer, utils, validateLink } = md;
			if (isDebugger) debugger;
		},
		// 使用 markdown-it-chain (opens new window)来修改内部的 markdown 配置
		chainMarkdown(config) {
			const { options, parent, plugins, store } = config;
			if (isDebugger) debugger;
		},
		// 此选项接受指向增强文件的绝对文件路径或返回该路径的函数，
		// 你可以通过此选项做一些应用级别的配置:
		enhanceAppFiles() {
			if (isDebugger) debugger;
			return path.resolve(__dirname, 'client.js');
		},
		// 在编译期间生成一些在客户端使用的模块：
		clientDynamicModules() {
			if (isDebugger) debugger;
			return {};
		},
		// 一个函数，用于拓展或者修改 $page 对象。这个函数将会在编译期为每个页面执行一次。
		extendPageData($page) {
			const {
				_filePath, // 源文件的绝对路径
				_computed, // 在构建期访问全局的计算属性，如：_computed.$localePath.
				_content, // 源文件的原始内容字符串
				_strippedContent, // 源文件剔除掉 frontmatter 的内容字符串
				key, // 页面唯一的 hash key
				frontmatter, // 页面的 frontmatter 对象
				regularPath, // 当前页面遵循文件层次结构的默认链接
				path, // 当前页面的实际链接（在 permalink 不存在时，使用 regularPath ）
				title,
			} = $page;
			if (isDebugger) debugger;
		},
		// 指向 mixin 文件的路径，它让你可以控制根组件的生命周期：
		clientRootMixin: path.resolve(__dirname, 'mixin.js'),
		// 增加一个指向某个 markdown 文件的页面：
		async additionalPages(app) {
			// 注意 VuePress 没有任何内置的请求库，
			// 你需要自己安装它。
			const { base, ClientComputedMixinm, isProd, markdown, options, pages } = app;
			if (isDebugger) debugger;
			return [];
		},
		// 注入某些全局的 UI，并固定在页面中的某处
		globalUIComponents: [],
		// 注册一个额外的 command 来增强 VuePress 的 CLI。
		// 这个函数将会以一个 CAC(opens new window)的实例作为第一个参数被调用。
		extendCli(cli, ...args) {
			if (isDebugger) debugger;
		},
	};
};
module.exports = TemplatePlugin;
