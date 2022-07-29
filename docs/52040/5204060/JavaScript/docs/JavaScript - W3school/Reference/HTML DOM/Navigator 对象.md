- # Navigator 对象

  - [DOM Location](https://www.w3school.com.cn/jsref/obj_location.asp)
  - [DOM Screen](https://www.w3school.com.cn/jsref/obj_screen.asp)

  ## Navigator 对象

  Navigator 对象包含有关浏览器的信息。

  注释：没有应用于 navigator 对象的公开标准，不过所有浏览器都支持该对象。

  ## Navigator 对象集合

  | 集合      | 描述                                                         |
  | --------- | ------------------------------------------------------------ |
  | plugins[] | 返回对文档中所有嵌入式对象的引用。 该集合是一个 Plugin 对象的数组，其中的元素代表浏览器已经安装的插件。Plug-in 对象提供的是有关插件的信息，其中包括它所支持的 MIME 类型的列表。 虽然 plugins[] 数组是由 IE 4 定义的，但是在 IE 4 中它却总是空的，因为 IE 4 不支持插件和 Plugin 对象。 |

  ## Navigator 对象属性

  | 属性                                                         | 描述                                           |
  | ------------------------------------------------------------ | ---------------------------------------------- |
  | [appCodeName](https://www.w3school.com.cn/jsref/prop_nav_appcodename.asp) | 返回浏览器的代码名。                           |
  | [appMinorVersion](https://www.w3school.com.cn/jsref/prop_nav_appminorversion.asp) | 返回浏览器的次级版本。                         |
  | [appName](https://www.w3school.com.cn/jsref/prop_nav_appname.asp) | 返回浏览器的名称。                             |
  | [appVersion](https://www.w3school.com.cn/jsref/prop_nav_appversion.asp) | 返回浏览器的平台和版本信息。                   |
  | [browserLanguage](https://www.w3school.com.cn/jsref/prop_nav_browserlanguage.asp) | 返回当前浏览器的语言。                         |
  | [cookieEnabled](https://www.w3school.com.cn/jsref/prop_nav_cookieenabled.asp) | 返回指明浏览器中是否启用 cookie 的布尔值。     |
  | [cpuClass](https://www.w3school.com.cn/jsref/prop_nav_cpuclass.asp) | 返回浏览器系统的 CPU 等级。                    |
  | [onLine](https://www.w3school.com.cn/jsref/prop_nav_online.asp) | 返回指明系统是否处于脱机模式的布尔值。         |
  | [platform](https://www.w3school.com.cn/jsref/prop_nav_platform.asp) | 返回运行浏览器的操作系统平台。                 |
  | [systemLanguage](https://www.w3school.com.cn/jsref/prop_nav_systemlanguage.asp) | 返回 OS 使用的默认语言。                       |
  | [userAgent](https://www.w3school.com.cn/jsref/prop_nav_useragent.asp) | 返回由客户机发送服务器的 user-agent 头部的值。 |
  | [userLanguage](https://www.w3school.com.cn/jsref/prop_nav_userlanguage.asp) | 返回 OS 的自然语言设置。                       |

  ## Navigator 对象方法

  | 方法                                                         | 描述                                         |
  | ------------------------------------------------------------ | -------------------------------------------- |
  | [javaEnabled()](https://www.w3school.com.cn/jsref/met_nav_javaenabled.asp) | 规定浏览器是否启用 Java。                    |
  | [taintEnabled()](https://www.w3school.com.cn/jsref/met_nav_taintenabled.asp) | 规定浏览器是否启用数据污点 (data tainting)。 |

  ## Navigator 对象描述

  Navigator 对象包含的属性描述了正在使用的浏览器。可以使用这些属性进行平台专用的配置。

  虽然这个对象的名称显而易见的是 Netscape 的 Navigator 浏览器，但其他实现了 JavaScript 的浏览器也支持这个对象。

  Navigator 对象的实例是唯一的，可以用 Window 对象的 navigator 属性来引用它。
