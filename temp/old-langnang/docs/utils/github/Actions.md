# GitHub Actions

- [1. GitHub Actions 是什么](#1-github-actions-是什么)
- [2. 基本概念](#2-基本概念)
- [3. workflow 文件](#3-workflow-文件)
  - [3.1. `name`](#31-name)
  - [3.2. `on`](#32-on)
  - [3.3. `on.<push|pull_request>.<tags|branches>`](#33-onpushpull_requesttagsbranches)
  - [3.4. `jobs.<job_id>.name`](#34-jobsjob_idname)
  - [3.5. `jobs.<job_id>.needs`](#35-jobsjob_idneeds)
  - [3.6. `jobs.<job_id>.runs-on`](#36-jobsjob_idruns-on)
  - [3.7. `jobs.<job_id>.steps`](#37-jobsjob_idsteps)
- [4. 常用 Actions](#4-常用-actions)
  - [Checkout](#checkout)
  - [Deploy to GitHub Pages](#deploy-to-github-pages)
- [5. 实例](#5-实例)
  - [5.1. Vue 项目发布到 GitHub Pages](#51-vue-项目发布到-github-pages)
  - [5.2. React 项目发布到 GitHub Pages](#52-react-项目发布到-github-pages)
- [参考链接](#参考链接)

## 1. GitHub Actions 是什么

大家知道，持续集成由很多操作组成，比如抓取代码、运行测试、登录远程服务器，发布到第三方服务等等。GitHub 把这些操作就称为 actions。

很多操作在不同项目里面是类似的，完全可以共享。GitHub 注意到了这一点，想出了一个很妙的点子，允许开发者把每个操作写成独立的脚本文件，存放到代码仓库，使得其他开发者可以引用。

如果你需要某个 action，不必自己写复杂的脚本，直接引用他人写好的 action 即可，整个持续集成过程，就变成了一个 actions 的组合。这就是 GitHub Actions 最特别的地方。

GitHub 做了一个[官方市场](https://github.com/marketplace?type=actions)，可以搜索到他人提交的 actions。另外，还有一个 [awesome actions](https://github.com/sdras/awesome-actions) 的仓库，也可以找到不少 action。

上面说了，每个 action 就是一个独立脚本，因此可以做成代码仓库，使用 userName/repoName 的语法引用 action。比如，actions/setup-node 就表示 github.com/actions/setup-node 这个仓库，它代表一个 action，作用是安装 Node.js。事实上，GitHub 官方的 actions 都放在 github.com/actions 里面。

既然 actions 是代码仓库，当然就有版本的概念，用户可以引用某个具体版本的 action。下面都是合法的 action 引用，用的就是 Git 的指针概念，详见[官方文档](https://help.github.com/en/articles/about-actions#versioning-your-action)。

```yml
actions/setup-node@74bc508 # 指向一个 commit
actions/setup-node@v1.0 # 指向一个标签
actions/setup-node@master # 指向一个分支
```

## 2. 基本概念

1. **workflow**（工作流程）：持续集成一次运行的过程，就是一个 workflow。
2. **job**（任务）：一个 workflow 由一个或多个 jobs 构成，含义是一次持续集成的运行，可以完成多个任务。
3. **step**（步骤）：每个 job 由多个 step 构成，一步步完成。
4. **action**（动作）：每个 step 可以依次执行一个或多个命令（action）。

## 3. workflow 文件

### 3.1. `name`

name 字段是 workflow 的名称。如果省略该字段，默认为当前 workflow 的文件名。

### 3.2. `on`

### 3.3. `on.<push|pull_request>.<tags|branches>`

### 3.4. `jobs.<job_id>.name`

### 3.5. `jobs.<job_id>.needs`

### 3.6. `jobs.<job_id>.runs-on`

runs-on 字段指定运行所需要的虚拟机环境。它是必填字段。目前可用的虚拟机如下。

- ubuntu-latest，ubuntu-18.04 或 ubuntu-16.04
- windows-latest，windows-2019 或 windows-2016
- macOS-latest 或 macOS-10.14

### 3.7. `jobs.<job_id>.steps`

steps 字段指定每个 Job 的运行步骤，可以包含一个或多个步骤。每个步骤都可以指定以下三个字段。

- jobs.<job_id>.steps.name：步骤名称。
- jobs.<job_id>.steps.run：该步骤运行的命令或者 action。
- jobs.<job_id>.steps.env：该步骤所需的环境变量。

## 4. 常用 Actions

### Checkout

https://github.com/marketplace/actions/checkout

获取仓库中的源码

```yml
- uses: actions/checkout@v2
  with:
    repository: ${{ github.repository }} # 仓库

    ref: "master" # 分支、标签

    token: ${{ github.token }} # 身份令牌

    # SSH key used to fetch the repository. The SSH key is configured with the local
    # git config, which enables your scripts to run authenticated git commands. The
    # post-job step removes the SSH key.
    #
    # We recommend using a service account with the least permissions necessary.
    #
    # [Learn more about creating and using encrypted secrets](https://help.github.com/en/actions/automating-your-workflow-with-github-actions/creating-and-using-encrypted-secrets)
    ssh-key: ""

    # Known hosts in addition to the user and global host key database. The public SSH
    # keys for a host may be obtained using the utility `ssh-keyscan`. For example,
    # `ssh-keyscan github.com`. The public key for github.com is always implicitly
    # added.
    ssh-known-hosts: ""

    # Whether to perform strict host key checking. When true, adds the options
    # `StrictHostKeyChecking=yes` and `CheckHostIP=no` to the SSH command line. Use
    # the input `ssh-known-hosts` to configure additional hosts.
    # Default: true
    ssh-strict: ""

    # Whether to configure the token or SSH key with the local git config
    # Default: true
    persist-credentials: ""

    # Relative path under $GITHUB_WORKSPACE to place the repository
    path: ""

    # Whether to execute `git clean -ffdx && git reset --hard HEAD` before fetching
    # Default: true
    clean: ""

    # Number of commits to fetch. 0 indicates all history.
    # Default: 1
    fetch-depth: ""

    # Whether to download Git-LFS files
    # Default: false
    lfs: ""

    # Whether to checkout submodules: `true` to checkout submodules or `recursive` to
    # recursively checkout submodules.
    #
    # When the `ssh-key` input is not provided, SSH URLs beginning with
    # `git@github.com:` are converted to HTTPS.
    #
    # Default: false
    submodules: ""
```

### Deploy to GitHub Pages

https://github.com/marketplace/actions/deploy-to-github-pages

发布至 GitHub Pages

```yml
name: Build and Deploy
on: [push]
jobs:
  build-and-deploy:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout 🛎️
        uses: actions/checkout@v2 # If you're using actions/checkout@v2 you must set persist-credentials to false in most cases for the deployment to work correctly.
        with:
          persist-credentials: false

      - name: Install and Build 🔧 # This example project is built using npm and outputs the result to the 'build' folder. Replace with the commands required to build your project, or remove this step entirely if your site is pre-built.
        run: |
          npm install
          npm run build

      - name: Deploy 🚀
        uses: JamesIves/github-pages-deploy-action@releases/v3
        with:
          ACCESS_TOKEN: ${{ secrets.ACCESS_TOKEN }}
          BRANCH: gh-pages # The branch the action should deploy to.
          FOLDER: build # The folder the action should deploy.
```

## 5. 实例

### 5.1. Vue 项目发布到 GitHub Pages

langnang.github.io/github-actions-vue-demo

### 5.2. React 项目发布到 GitHub Pages

langnang.github.io/github-actions-react-demo

## 参考链接

- [GitHub Actions 入门教程 - 阮一峰的网络日志](http://www.ruanyifeng.com/blog/2019/09/getting-started-with-github-actions.html)
- [GitHub Pages 官方文档](https://help.github.com/en/categories/automating-your-workflow-with-github-actions)
- [Github Actions for web apps](https://lukeboyle.com/blog-posts/2019/08/github-actions-for-web-apps/), Luke Boyle
- [My First Week With GitHub Actions](https://medium.com/@adam.zolyak/my-first-week-with-github-actions-5d92de4c4851), Adam Zolyak
