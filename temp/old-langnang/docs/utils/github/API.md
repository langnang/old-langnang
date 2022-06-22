# GitHub API

> <https://api.github.com>

```js
{
  api:"https://api.github.com",
  owner:"",
  repo:"",
  issue_number:"",
  Requests:{
    issues:{
      {
        description:"List issues assigned to the authenticated user",
        method:"GET",
        url:"https://api.github.com/issues",
      },
      {
      description:"",
      method:"GET",
      url:"https://api.github.com/user/issues"  
      }
    },
      GET https://api.github.com/orgs/:org/issues
      GET https://api.github.com/repos/:owner/:repo/issues
      GET <https://api.github.com/repos/:owner/:repo/issues/:issue_number>

      POST https://api.github.com/repos/:owner/:repo/issues
      PATCH https://api.github.com/repos/:owner/:repo/issues/:issue_number

    }
  }
}
```

## Overview

## Activity

## Checks

## Gists

## Git Data

## GitHub Actions

## GitHub Apps

## GitHub Marketplace

## Interactions

## Issues

### List issues assigned to the authenticated user
```
GET https://api.github.com/issues
```
### List user account issues assigned to the authenticated user
```
GET https://api.github.com/user/issues
```
### List organization issues assigned to the authenticated user
```
GET https://api.github.com/orgs/:org/issues
```
### List repository issues - issue 列表
```
GET https://api.github.com/repos/:owner/:repo/issues
```
### Get an issue - 获取单个issue
```
GET https://api.github.com/repos/:owner/:repo/issues/:issue_number
```
### Create an issue - 创建单个issue

> Enabled for GitHub Apps
```
POST https://api.github.com/repos/:owner/:repo/issues
```

```js
axios({
  method:"POST",
  url:"https://api.github.com/repos/:owner/:repo/issues",
  data:{
    "title": "Found a bug",
    "body": "I'm having a problem with this.",
    "assignees": [
      "octocat"
    ],
    "milestone": 1,
    "labels": [
      "bug"
    ]
  },
  headers: {
    accept: "application/json",
    Authorization: `token :access_token`
  }
})
```

### Update an issue - 更新单个issue
```
PATCH https://api.github.com/repos/:owner/:repo/issues/:issue_number
```
```js
axios({
  method:"PATCH",
  url:"https://api.github.com/repos/:owner/:repo/issues/:issue_number",
  data:{
    "title": "Found a bug",
    "body": "I'm having a problem with this.",
    "assignees": [
      "octocat"
    ],
    "milestone": 1,
    "state": "open",
    "labels": [
      "bug"
    ]
  },
  headers: {
    accept: "application/json",
    Authorization: `token :access_token`
  }
})
```
```
### Lock an issue - 锁上单个issue
```
PUT https://api.github.com/repos/:owner/:repo/issues/:issue_number/lock
```
```js
axios({
  method:"PUT",
  url:"https://api.github.com/repos/:owner/:repo/issues/:issue_number/lock",
  data:{
    "locked": true,
    "active_lock_reason": "too heated"
  },
  headers: {
    accept: "application/json",
    Authorization: `token :access_token`
  }
})
```
### Unlock an issue - 解锁单个issue
```
DELETE https://api.github.com/repos/:owner/:repo/issues/:issue_number/lock
```
```js
axios({
  method:"DELETE",
  url:"https://api.github.com/repos/:owner/:repo/issues/:issue_number/lock",
  headers: {
    accept: "application/json",
    Authorization: `token :access_token`
  }
})
```
### Custom media types - 定制媒体类型

    application/vnd.github.VERSION.raw+json
    application/vnd.github.VERSION.text+json
    application/vnd.github.VERSION.html+json
    application/vnd.github.VERSION.full+json

## Migrations

## Miscellaneous

## Organizations

## Projects

## Pull Requests

## Reactions

## Repositories

## Search

## Teams

## SCIM

## Users

### Get a user - 获取单个用户
```
GET https://api.github.com/users/:owner
```

<details>
  <summary>
    <code>
        GET https://api.github.com/users/octocat
    </code>
  </summary>

```json
{
  "login": "octocat",
  "id": 583231,
  "node_id": "MDQ6VXNlcjU4MzIzMQ==",
  "avatar_url": "https://avatars3.githubusercontent.com/u/583231?v=4",
  "gravatar_id": "",
  "url": "https://api.github.com/users/octocat",
  "html_url": "https://github.com/octocat",
  "followers_url": "https://api.github.com/users/octocat/followers",
  "following_url": "https://api.github.com/users/octocat/following{/other_user}",
  "gists_url": "https://api.github.com/users/octocat/gists{/gist_id}",
  "starred_url": "https://api.github.com/users/octocat/starred{/owner}{/repo}",
  "subscriptions_url": "https://api.github.com/users/octocat/subscriptions",
  "organizations_url": "https://api.github.com/users/octocat/orgs",
  "repos_url": "https://api.github.com/users/octocat/repos",
  "events_url": "https://api.github.com/users/octocat/events{/privacy}",
  "received_events_url": "https://api.github.com/users/octocat/received_events",
  "type": "User",
  "site_admin": false,
  "name": "The Octocat",
  "company": "GitHub",
  "blog": "http://www.github.com/blog",
  "location": "San Francisco",
  "email": null,
  "hireable": null,
  "bio": null,
  "public_repos": 8,
  "public_gists": 8,
  "followers": 2991,
  "following": 9,
  "created_at": "2011-01-25T18:44:36Z",
  "updated_at": "2020-03-23T14:29:23Z"
}
```

</details>

### Get the authenticated user - 获取经过身份验证的用户
```
GET https://api.github.com/user
```
```js
axios({
  method:"GET",
  url:"https://api.github.com/user",
  headers:{
    Authorization: `Bearer :access_token`
  }
})
```
### Update the authenticated user - 更新经过身份验证的用户
```
PATCH https://api.github.com/user
```

### Get contextual information for a user - 获取有关用户的上下文信息
```
GET https://api.github.com/users/:username/hovercard
```
### List users - 获取所有用户
```
GET https://api.github.com/users
```
## 参考链接

-   [一篇文章搞定 Github API 调用 （v3）](https://segmentfault.com/a/1190000015144126)
-   [Github API：爬取 Github 用户数据](https://blog.csdn.net/qq_25537177/article/details/80561507)
-   [GitHub API v3 | GitHub Developer Guide](https://developer.github.com/v3/)
-   [GitHub GraphQL API v4 | GitHub Developer Guide](https://developer.github.com/v4/)
