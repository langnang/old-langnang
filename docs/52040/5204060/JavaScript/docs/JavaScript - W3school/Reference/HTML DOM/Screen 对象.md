- # Screen 对象

  - [DOM Navigator](https://www.w3school.com.cn/jsref/obj_navigator.asp)
  - [DOM Style](https://www.w3school.com.cn/jsref/dom_obj_style.asp)

  ## Screen 对象

  Screen 对象包含有关客户端显示屏幕的信息。

  注释：没有应用于 screen 对象的公开标准，不过所有浏览器都支持该对象。

  ## Screen 对象属性

  | 属性                                                         | 描述                                         |
  | ------------------------------------------------------------ | -------------------------------------------- |
  | [availHeight](https://www.w3school.com.cn/jsref/prop_screen_availheight.asp) | 返回显示屏幕的高度 (除 Windows 任务栏之外)。 |
  | [availWidth](https://www.w3school.com.cn/jsref/prop_screen_availwidth.asp) | 返回显示屏幕的宽度 (除 Windows 任务栏之外)。 |
  | [bufferDepth](https://www.w3school.com.cn/jsref/prop_screen_bufferdepth.asp) | 设置或返回调色板的比特深度。                 |
  | [colorDepth](https://www.w3school.com.cn/jsref/prop_screen_colordepth.asp) | 返回目标设备或缓冲器上的调色板的比特深度。   |
  | [deviceXDPI](https://www.w3school.com.cn/jsref/prop_screen_devicexdpi.asp) | 返回显示屏幕的每英寸水平点数。               |
  | [deviceYDPI](https://www.w3school.com.cn/jsref/prop_screen_deviceydpi.asp) | 返回显示屏幕的每英寸垂直点数。               |
  | [fontSmoothingEnabled](https://www.w3school.com.cn/jsref/prop_screen_fontsmoothingenabled.asp) | 返回用户是否在显示控制面板中启用了字体平滑。 |
  | [height](https://www.w3school.com.cn/jsref/prop_screen_height.asp) | 返回显示屏幕的高度。                         |
  | [logicalXDPI](https://www.w3school.com.cn/jsref/prop_screen_logicalxdpi.asp) | 返回显示屏幕每英寸的水平方向的常规点数。     |
  | [logicalYDPI](https://www.w3school.com.cn/jsref/prop_screen_logicalydpi.asp) | 返回显示屏幕每英寸的垂直方向的常规点数。     |
  | [pixelDepth](https://www.w3school.com.cn/jsref/prop_screen_pixeldepth.asp) | 返回显示屏幕的颜色分辨率（比特每像素）。     |
  | [updateInterval](https://www.w3school.com.cn/jsref/prop_screen_updateinterval.asp) | 设置或返回屏幕的刷新率。                     |
  | [width](https://www.w3school.com.cn/jsref/prop_screen_width.asp) | 返回显示器屏幕的宽度。                       |

  ## Screen 对象描述

  每个 Window 对象的 screen 属性都引用一个 Screen 对象。Screen  对象中存放着有关显示浏览器屏幕的信息。JavaScript  程序将利用这些信息来优化它们的输出，以达到用户的显示要求。例如，一个程序可以根据显示器的尺寸选择使用大图像还是使用小图像，它还可以根据显示器的颜色深度选择使用 16 位色还是使用 8 位色的图形。另外，JavaScript 程序还能根据有关屏幕尺寸的信息将新的浏览器窗口定位在屏幕中间。
