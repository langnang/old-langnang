# Vue

> Vue (读音 /vjuː/，类似于 view) 是一套用于构建用户界面的渐进式框架。

## 实例

### MVVM

MVVM 是 Model-View-ViewModel 的缩写。

Model 代表数据模型，也可以在 Model 中定义数据修改和操作的业务逻辑。

View 代表 UI 组件，它负责将数据模型转化成 UI 展现出来。

ViewModel 监听模型数据的改变和控制视图行为、处理用户交互，简单理解就是一个同步 View 和 Model 的对象，连接 Model 和 View。

在 MVVM 架构下，View 和 Model 之间并没有直接的联系，而是通过 ViewModel 进行交互，Model 和 ViewModel 之间的交互是双向的， 因此 View 数据的变化会同步到 Model 中，而 Model 数据的变化也会立即反应到 View 上。

ViewModel 通过双向数据绑定把 View 层和 Model 层连接了起来，而 View 和 Model 之间的同步工作完全是自动的，无需人为干涉，因此开发者只需关注业务逻辑，不需要手动操作 DOM, 不需要关注数据状态的同步问题，复杂的数据状态维护完全由 MVVM 来统一管理。

### 生命周期

beforeCreate（创建前） 在数据观测和初始化事件还未开始

created（创建后） 完成数据观测，属性和方法的运算，初始化事件，\$el 属性还没有显示出来

beforeMount（载入前） 在挂载开始之前被调用，相关的 render 函数首次被调用。实例已完成以下的配置：编译模板，把 data 里面的数据和模板生成 html。注意此时还没有挂载 html 到页面上。

mounted（载入后） 在 el 被新创建的 vm.\$el 替换，并挂载到实例上去之后调用。实例已完成以下的配置：用上面编译好的 html 内容替换 el 属性指向的 DOM 对象。完成模板中的 html 渲染到 html 页面中。此过程中进行 ajax 交互。

beforeUpdate（更新前） 在数据更新之前调用，发生在虚拟 DOM 重新渲染和打补丁之前。可以在该钩子中进一步地更改状态，不会触发附加的重渲染过程。

updated（更新后） 在由于数据更改导致的虚拟 DOM 重新渲染和打补丁之后调用。调用时，组件 DOM 已经更新，所以可以执行依赖于 DOM 的操作。然而在大多数情况下，应该避免在此期间更改状态，因为这可能会导致更新无限循环。该钩子在服务器端渲染期间不被调用。

beforeDestroy（销毁前） 在实例销毁之前调用。实例仍然完全可用。

destroyed（销毁后） 在实例销毁之后调用。调用后，所有的事件监听器会被移除，所有的子实例也会被销毁。该钩子在服务器端渲染期间不被调用。

### 组件间传值

1.父组件与子组件传值

父组件传给子组件：子组件通过 props 方法接受数据;
子组件传给父组件：\$emit 方法传递参数

2.非父子组件间的数据传递，兄弟组件传值

eventBus，就是创建一个事件中心，相当于中转站，可以用它来传递事件和接收事件。项目比较小时，用这个比较合适。（虽然也有不少人推荐直接用 VUEX，具体来说看需求咯。技术只是手段，目的达到才是王道。）

### 路由间跳转

### 实例内部获取外部数据

```js
var aaaa = "我是外部的数据";
var vm = new Vue({
  el: "#app",
  data: {
    mas: "sdsdsad",
    aaa: 123456,
    flag: true
  },
  methods: {
    test() {
      alert(aaaa); //点击可以拿到aaaa数据
    },
  },
});
```

### 外部获取实例内部数据

```js
var aaaa = "我是外部的数据";
var vm = new Vue({
  el: "#app",
  data: {
    mas: "sdsdsad",
    aaa: 123456,
    flag: true
  },
  methods: {
    test() {
      alert(aaaa); //点击可以拿到aaaa数据
    }
  }
});
console.log(vm.aaa); //输出123456
console.log(vm.test()); //执行此方法
```

## Awesome

- [vuejs/awesome-vue](https://github.com/vuejs/awesome-vue)
- [VuePress：Vue 驱动的静态网站生成器](./awesome/vuepress/)
- [<img src="https://element.eleme.cn/favicon.ico" class="brand-ico"/>Element：桌面端组件库](./awesome/element-ui/)

## 深入理解

- [qq281113270/vue](https://github.com/qq281113270/vue)：vue 源码逐行注释分析+40 多 m 的 vue 源码程序流程图思维导图
- [biaochenxuying/vue-family-mindmap](https://github.com/biaochenxuying/vue-family-mindmap)：用一张思维导图总结了 Vue | Vue-Router | Vuex 源码与架构要点。
- [HcySunYang/vue-design](https://github.com/HcySunYang/vue-design)
- [ustbhuangyi/vue-analysis](https://github.com/ustbhuangyi/vue-analysis)
- [answershuto/learnVue](https://github.com/answershuto/learnVue)
- [liutao/vue2.0-source](https://github.com/liutao/vue2.0-source)
- [vue3js.cn](https://vue3js.cn/)

## 文档

## 参考
