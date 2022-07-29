# Storage 对象

- [API History](https://www.w3school.com.cn/jsref/api_history.asp)
- [](https://www.w3school.com.cn/jsref/dom_obj_anchor.asp)

## Storage 对象

Web Storage API 的 Storage 对象提供对特定域的会话存储或本地存储的访问。这使您可以读取、添加、修改和删除存储的数据项。

## Storage 对象属性和方法

| 属性/方法                                                    | 描述                                         |
| ------------------------------------------------------------ | -------------------------------------------- |
| [key(*n*)](https://www.w3school.com.cn/jsref/met_storage_key.asp) | 返回存储中第 n 个键的名称。                  |
| [length](https://www.w3school.com.cn/jsref/prop_storage_length.asp) | 返回存储在 Storage 对象中的数据项的数量。    |
| [getItem(*keyname*)](https://www.w3school.com.cn/jsref/met_storage_getitem.asp) | 返回指定键名的值。                           |
| [setItem(*keyname*, *value*)](https://www.w3school.com.cn/jsref/met_storage_setitem.asp) | 将键添加到存储中，或更新键的值（若已存在）。 |
| [removeItem(*keyname*)](https://www.w3school.com.cn/jsref/met_storage_removeitem.asp) | 从存储中删除键。                             |
| [clear()](https://www.w3school.com.cn/jsref/met_storage_clear.asp) | 清空存储中的所有键。                         |

## Web Storage API 相关页面

| 属性                                                         | 描述                                                     |
| ------------------------------------------------------------ | -------------------------------------------------------- |
| [window.localStorage](https://www.w3school.com.cn/jsref/prop_win_localstorage.asp) | 允许将键/值对保存在Web浏览器中。存储没有到期日期的数据。 |
| [window.sessionStorage](https://www.w3school.com.cn/jsref/prop_win_sessionstorage.asp) | 允许将键/值对保存在 Web 浏览器中。为会话存储数据。       |