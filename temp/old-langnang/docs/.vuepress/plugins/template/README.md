# vuepress-plugin-template

VuePress 通用插件模板

```sh
npm install @langnang/vuepress-plugin-template
```

## npm run dev

### 执行顺序

1. `chainMarkdown`
2. `extendMarkdown`
3. `extendPageData`*n：遍历所有页面
4. `additionalPages`
5. `clientDynamicModules`
6. `define`
7. `chainWebpack`
8. `beforeDevServer`
9. `afterDevServer`