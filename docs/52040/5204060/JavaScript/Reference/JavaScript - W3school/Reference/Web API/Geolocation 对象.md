---
created: 2022-07-27T20:05:04 (UTC +08:00)
tags: []
source: https://www.w3school.com.cn/jsref/api_geolocation.asp
author: w3school.com.cn
---

# Geolocation 对象

> ## Excerpt
> Geolocation 对象允许用户向 Web 应用程序提供其位置。出于隐私原因，会要求用户允许报告位置信息。

---
-   [API Console](https://www.w3school.com.cn/jsref/api_console.asp "Console 对象")
-   [API History](https://www.w3school.com.cn/jsref/api_history.asp "History 对象")

## Geolocation 对象

Geolocation 对象允许用户向 Web 应用程序提供其位置。出于隐私原因，会要求用户允许报告位置信息。

注意：此特性仅在安全上下文（HTTPS）中可用。

注意：对于 iPhone 等装有 GPS 的设备，地理位置最为准确。

Geolocation API 是通过 navigator.geolocation 对象发布的。

## Geolocation 对象属性

| 属性 | 描述 |
| --- | --- |
| [coordinates](https://www.w3school.com.cn/jsref/prop_geo_coordinates.asp "Geolocation coordinates 属性") | 返回设备在地球上的位置和海拔。 |
| [position](https://www.w3school.com.cn/jsref/prop_geo_position.asp "Geolocation position 属性") | 返回在给定时间相关设备的位置。 |
| positionError | 返回使用地理定位设备时发生错误的原因。 |
| positionOptions | 描述包含选项属性的对象，该对象作为 Geolocation.getCurrentPosition() 和 Geolocation.watchPosition() 的参数传递。 |

## Geolocation 对象方法

| 方法 | 描述 |
| --- | --- |
| clearWatch() | 注销先前使用 Geolocation.watchPosition() 安装的位置/错误监视处理程序。 |
| getCurrentPosition() | 返回设备的当前位置。 |
| watchPosition() | 返回监听 ID 值，然后将其传递给 Geolocation.clearWatch() 方法即可用于注销处理程序。 |

-   [API Console](https://www.w3school.com.cn/jsref/api_console.asp "Console 对象")
-   [API History](https://www.w3school.com.cn/jsref/api_history.asp "History 对象")
