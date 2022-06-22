// THIS IS FILE IS OPTIONAL, you can delete it if you don't want to use it

// config.js is the entry file for your VuePress app configuration
// It can also be written in yml or toml instead of js
// See the documentation for more information on how to use it
// https://v1.vuepress.vuejs.org/config/

module.exports = {
  base: '/langnang/',
  title: 'Langnang',
  description: 'VuePress for Langnang',
  themeConfig: {
    nav: require('./conf/nav/index.js'),
    sidebar: 'auto',
    // sidebar: require('./conf/sidebar/index.js'),
    sidebarDepth: 2,
    lastUpdated: 'Last Updated', // string | boolean
    editLinkText: '查看原文 | 在GitHub上编辑此页',
  },
  plugins: require('./plugins'),
  globalUIComponents: [],
};
