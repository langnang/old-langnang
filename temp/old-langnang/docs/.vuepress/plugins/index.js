module.exports = [
	['@vuepress/active-header-links'],
	['@vuepress/last-updated'],
	['@vuepress/plugin-back-to-top'],
	['@vuepress/plugin-nprogress'],
	[
		'@vuepress/plugin-pwa',
		{
			serviceWorker: true,
			updatePopup: true,
		},
	],
	[
		'@vuepress/search',
		{
			searchMaxSuggestions: 10,
		},
	],
	['flowchart'],
	['code-switcher'],
	['demo-code'],
	[
		require('./reprint-article'),
		{
			// isDebugger: true,
		},
	],
];
