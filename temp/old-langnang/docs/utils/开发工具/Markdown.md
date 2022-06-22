# Markdown

题记
　　为什么使用Markdown？这是一个问题。答案有很多种。比如，不局限于格式啦，比如.xls文档得用excel打开吧，.doc文档得用word打开吧，.xxx得用xxx打开吧。如果你机子上没有这个软件，岂不是抓瞎了，还能不能愉快的学习了？！因此你需要一种能使用简单的文本编辑器就可以书写，有浏览器就可正常显示的格式或标记，Markdown很适合哦。什么，这个理由不好？那么就权当是装B吧，你说你用Markdown写文档，是不是逼格一下就上去了。（哎，估计也只有我这种新手才用来炫耀，大牛都是不屑的。）

正文
二八定律说：

百分之二十的知识解决百分之八十的问题。

　　其实你只需要掌握基本语法标记就可以愉快的玩耍了。经过几个月使用Markdown写文档，发现掌握下面这些标记语法，就可以完成日常文档书写了。什么？要画流程图？这些需求对于大部分时间来说，你是用不到的，你只需要建立一个知识储备就好。遇到了想不起来？打开看一下就是了。想记住？对不起，这种事倍功半的事情，还是少做为妙，毕竟时间是硫酸，管你是什么都能够腐化，只是快慢而已。
　　那么问题来了，为什么这几个常用的要记住呢？因为这几个是经常使用的，虽然熟能生巧，日久便记住了，但是在熟能生巧的路上总不能天天翻看知识储备吧。太影响效率。何不花一点点时间强行记住，那么在日久记住的道路上，岂不是一路顺风？闲话不多说，来看看你要掌握的语法标记吧。如果你想学习和使用Markdown，我建议：

__常用标记__要先花一些时间熟记，后面经常使用的话就会形成习惯了，不过脑的正常书写，跟打字一样；
__次常用标记__要有基本的印象，能记住也是可以的；
__不常用标记__和专用标记just看看就好，等到使用的时候百度一下，你就知道。
1. 常用标记
1.1 标题
1.1.1 说明
使用#表示标题，一级标题使用一个#，二级标题使用两个##，以此类推，共有六级标题。
使用=====表示高阶标题，使用---------表示次阶标题。
1.1.2 示例
# 这是一级标题
## 这是二级标题
### 这是三级标题
###### 这是六级标题

这是高阶标题（效果和一级标题一样 ）
========

这是次阶标题（效果和二级标题一样）
--------------
这是一级标题
这是二级标题
这是三级标题
这是六级标题
这是高阶标题（效果和一级标题一样 ）
这是次阶标题（效果和二级标题一样）
1.1.3 注意
#和标题之间最好加一个空格。不要问我为什么，貌似有时候不会被识别为标题？已经忘记自己为什么要加空格了，也许是任性。
====和----表示标题时，大于等于2个都可以表示。
我通常在标题分级时使用标题标记，这个的用处很明了了。
1.2 目录
1.2.1 说明
使用[TOC]生成目录。如一开始的目录所示。

1.2.2 示例
[TOC]
[TOC]

1.2.3 注意
如果你的标题都是按照Markdown语法书写的话，可以自动生成层级目录。
我常用 为知笔记 记笔记，可惜为知笔记不支持[TOC]标记，一个悲伤的故事。
[TOC] 标记可能只能放在一级标题的前面，视不同的编译器而定。
1.3 引用
1.3.1 说明
使用>表示引用，>>表示引用里面再套一层引用，依次类推。

1.3.2 示例
例1：

> 这是一级引用
>>这是二级引用
>>> 这是三级引用

>这是一级引用
这是一级引用

这是二级引用

这是三级引用

这是一级引用

例2：

> 这是一级引用
>>这是二级引用
>>> 这是三级引用
>这是一级引用
这是一级引用

这是二级引用

这是三级引用
这是一级引用

1.3.3 注意
如果>和>>嵌套使用的话，从>>退到>时，必须之间要加一个空格或者>作为过渡，否则默认为下一行和上一行是同一级别的引用。如示例所示。
引用标记里可以使用其他标记，如：有序列表或无序列表标记，代码标记等。
我通常在引用别人的话或者某些时候做说明时使用引用标记，其实我一直拿不准到底什么情况下使用引用标记才是正确的。如果你知道，我只想说：请务必告诉我。
1.4 代码块
1.4.1 说明
使用```表示代码块。

1.4.2 示例
```javascript
var canvas = document.getElementById("canvas");
var context = canvas.getContext("2d");
```

var canvas = document.getElementById("canvas");
var context = canvas.getContext("2d");
1.4.3 注意
\`这个符号是在Esc键下面，切换到英文下即可。
\`\`\`后面的javascript表示此段代码为javascript代码，Markdown会自行使用javascript代码颜色渲染。这里也可以不写。PS：谁能够提供一个完整的Markdown可以渲染的语言列表啊，比如：linux命令这里写什么？
本文档所有使用讲解Markdown语法标记示例的地方都是使用代码块标记的。
1.5 行内代码
1.5.1 说明
使用``表示行内代码。

1.5.2 示例
这是`javascript`代码
这是javascript代码

1.5.3 注意
本页部分文字中间的英文字母就是使用行内代码标记标记的。
这个的使用场景我也有些模糊。我常在文字间有英文的时候使用，但有时又不知道该不该使用，困扰。如果你知道，请告诉我。
1.6 导入图片
1.6.1 说明
使用![Alt text](/path/to/img.jpg "Optional title")导入图片。其中：

Alt text为如果图片无法显示时显示的文字；
/path/to/img.jpg为图片所在路径；
Optional title为显示标题。显示效果为在你将鼠标放到图片上后，会显示一个小框提示，提示的内容就是 Optional title里的内容。
1.6.2 示例
![Markdown](https://images0.cnblogs.com/blog/404392/201501/122257231047591.jpg)
Markdown

1.6.3 注意
导入的图片路径可以使用绝对路径也可以使用相对路径，建议使用相对路径。
我通常的做法是Markdown文档的同级目录下建立一个pictures文件夹，里面放置所有所需的图片，如果图片多的话，你也可以在pictures文件夹里建立子文件夹归类。
1.7 列表
1.7.1 说明
使用1. 2. 3.表示有序列表，使用*或-或+表示无序列表。

1.7.2 示例
例1：有序列表

1. 第一点
2. 第二点
4. 第三点
第一点
第二点
第三点
例2：无序列表

+ 呵呵
    * 嘉嘉
    - 嘻嘻
    - 吼吼
        - 嘎嘎
        + 桀桀
* 哈哈
呵呵
嘉嘉
嘻嘻
吼吼
嘎嘎
桀桀
哈哈
1.7.3 注意
无序列表或有序列表标记和后面的文字之间要有一个空格隔开。
有序列表标记不是按照你写的数字进行显示的，而是根据当前有序列表标记所在位置显示的，如示例1所示。
无序列表的项目符号是按照实心圆、空心圆、实心方格的层级关系递进的，如例2所示。通常情况下，同一层级使用同一种标记表示，便于自己查看和管理。
无序列表和有序列表标记的使用场景也很明了，故不多说。
1.8 粗体和斜体
1.8.1 说明
使用 ** 或者 __ 表示粗体。
使用 * 或者 _ 表示斜体。

1.8.2 示例
 **粗体1**    __粗体2__
 *斜体1*    _斜体2_
粗体1 粗体2
斜体1 斜体2

1.8.3 注意
前后的 * 或 _ 与要加粗或倾斜的字体之间不能有空格。
我通常在强调时使用加粗标记，在和一行中的加粗区分且也表示强调时使用倾斜标记，这里的倾斜标记的使用场景不明确。如果你知道：请务必告诉我。
1.9 表格
1.9.1 说明
具体使用方式请看示例。

------:为右对齐。
:------为左对齐。
:------:为居中对齐。
-------为使用默认居中对齐。
1.9.2 示例
|         序号    |    交易名    |    交易说明    |    备注    |
|    ------: |    :-------:    |    :---------   |    ------    |
|    1    |    prfcfg    |    菜单配置    |    可以通过此交易查询到所有交易码和菜单的对应关系    |
|    2    |    gentmo    |    编译所有交易    |    |
|    100000    |    sysdba    |    数据库表模型汇总    |    |
序号	交易名	交易说明	备注
1	prfcfg	菜单配置	可以通过此交易查询到所有交易码和菜单的对应关系
2	gentmo	编译所有交易	
100000	sysdba	数据库表模型汇总	
1.9.3 注意
每个Markdown解析器都不一样，可能左右居中对齐方式的表示方式不一样。
1.10 分割线
1.10.1 说明
使用---或者***或者* * *表示水平分割线。

1.10.2 示例

---

***

* * *
1.10.3 注意
只要*或者-大于等于三个就可组成一条平行线。
使用---作为水平分割线时，要在它的前后都空一行，防止---被当成标题标记的表示方式。
1.11 链接
1.11.1 说明
使用[](link "Optional title")表示行内链接。其中：

[]内的内容为要添加链接的文字。
link为链接地址。
Optional title为显示标题。显示效果为在你将鼠标放到链接上后，会显示一个小框提示，提示的内容就是 Optional title里的内容。
参考式链接如例所示。

1.11.2 示例
例1：行内链接

这就是我们常用的地址：[Baidu](www.baidu.com "百度一下，你就知道" )
这就是我们常用的地址：Baidu

例2：参考式链接

这就是我们常用的地址：[Baidu][1]

[1]:www.baidu.com "百度一下，你就知道" 
这就是我们常用的地址：Baidu

1.11.3 注意
参考式链接和行内链接的显示效果是一样的，但是在编辑状态下的使用情况不一样。行内连接紧跟链接文字，可以在看到链接文字的同时清楚的知道链接地址，但是不便于多次重复利用。参考式链接可以重复使用，但一般都是将一些链接放在一起统一管理，如一段文字后面或文章结尾，因此在找到链接和链接文字的对应关系上有些麻烦。各有利弊了，分情况使用。
使用场景很明了，不多说。
1.11 反斜杠
1.11.1 说明
使用\表示反斜杠。在你不想显示Markdown标记时可以使用反斜杠。

1.11.2 示例
\*这里不会显示斜体\*
*这里不会显示斜体*

1.11.3 注意
无。

1.12 空格
1.12.1 说明
Markdown语法会忽略首行开头的空格，如果要体现出首行开头空两个的效果，可以使用全角符号下的空格，windows下使用shift+空格切换。

1.12.2 示例
无。

1.12.3 注意
无。

2. 次常用标记
#### 2.1 标签分类

2.1.1 说明
使用标签:或者Tags:表示标签标记。

2.1.2 示例
标签: 数学 英语
Tags: 数学 英语
标签: 数学 英语
Tags: 数学 英语

2.1.3 注意
标签:或者Tags:的冒号要使用半角冒号。
基本没使用过这个标记，不过应用场景应该是归类。便于快速了解文章分类。难道可以通过某种方式来遍历到标签标记？不甚了解。如你知道：请告诉我。
2.2 删除线
2.2.1 说明
使用 ~~表示删除线。

2.2.2 示例
~~这是一条删除线~~
这是一条删除线

2.2.3 注意
注意 ~~ 和 要添加删除线的文字之间不能有空格。
我常使用在显示的告诉自己这行文字是要删除的。
2.3 注脚
2.3.1 说明
使用 [^footer] 表示注脚。

2.3.2 示例
这是一个注脚测试[^footer1]。

[^footer1]: 这是一个测试，用来阐释注脚。
这是一个注脚测试[^footer1]。

2.3.3 注意
我常在需要解释一个名词，或者一本书，或者一个人时使用脚注标记。
3. 不常用标记
3.1 实现页内跳转
3.1.1 说明
使用html代码实现页内跳转。在要跳转到的位置定义个锚<span id = "jump">hehe</span>，然后使用[你好](#jump)将你好设置为一单击即跳转到hehe所在位置的效果。

3.1.2 示例
[你好](#jump)
<span id = "jump">hehe</span>
你好
hehe

3.1.3 注意
无。

4. 专项使用标记
4.1 流程图
以后在总结吧，现在的我完全没有使用上，没有需求就先不总结了。

4.2 LaTeX公式
以后在总结吧，现在的我完全没有使用上，没有需求就先不总结了。

写在后面的话
[TOC]不支持呀不支持，看不到效果了。
谁有什么好的方式在博客园中更好的显示Markdown，像作业部落一样。
更好的Markdown阅读效果：Markdown，你只需要掌握这几个
以上都是我学习到的，然后经过几个月的使用总结的，针对我的常用非常用分类。如果有描述的不对的地方，欢迎批评指正，共同进步。

## 符号及公式
Markdown中书写符号或者公式时，只需在符号或者公式前后同时添加`$`或`$$`即可，显示效果不同。

### 数学符号
#### 数学模式重音符
语法	效果	语法	效果	语法	效果	语法	效果
\bar{a}	a¯ \bar{a} 
a
ˉ
 	\acute{a}	aˊ \acute{a} 
a
ˊ
 	\check{a}	aˇ \check{a} 
a
ˇ
 	\grave{a}	aˋ \grave{a} 
a
ˋ
 
\hat{a}	aˆ \hat{a} 
a
^
 	\tilde{a}	a˜ \tilde{a} 
a
~
 	\dot{a}	a˙ \dot{a} 
a
˙
 	\ddot{a}	a¨ \ddot{a} 
a
¨
 
\breve{a}	a˘ \breve{a} 
a
˘
 	\vec{a}	a⃗  \vec{a} 
a
 	\widehat{A}	Aˆ \widehat{A} 
A
 	\widetilde{A}	A˜ \widetilde{A} 
A
 
小写希腊字母
语法	效果	语法	效果	语法	效果	语法	效果
\alpha	α \alphaα	\theta	θ \thetaθ	o	o oo	\upsilon	υ \upsilonυ
\beta	β \betaβ	\vartheta	ϑ \varthetaϑ	\pi	π \piπ	\phi	ϕ \phiϕ
\gamma	γ \gammaγ	\iota	ι \iotaι	\varpi	ϖ \varpiϖ	\varphi	φ \varphiφ
\delta	δ \deltaδ	\kappa	κ \kappaκ	\rho	ρ \rhoρ	\chi	χ \chiχ
\epsilon	ϵ \epsilonϵ	\lambda	λ \lambdaλ	\varrho	ϱ \varrhoϱ	\psi	ψ \psiψ
\varepsilon	ε \varepsilonε	\mu	μ \muμ	\sigma	$\sigma$	\omega	ω \omegaω
\zeta	ζ \zetaζ	\nu	ν \nuν	\varsigma	ς \varsigmaς	\eta	η \etaη
\xi	ξ \xiξ	\tau	τ \tauτ				
大写希腊字母
语法	效果	语法	效果	语法	效果	语法	效果
\Gamma	Γ \GammaΓ	\Lambda	Λ \LambdaΛ	\Sigma	Σ \SigmaΣ	\Psi	Ψ \PsiΨ
\Delta	Δ \DeltaΔ	\Xi	Ξ \XiΞ	\Upsilon	Υ \UpsilonΥ	\Omega	Ω \OmegaΩ
\Theta	Θ \ThetaΘ	\Pi	Π \PiΠ	\Phi	Φ \PhiΦ		
二元关系符
可以通过在下述命令前加上\not 来得到其否定形式，如"\not >"即为̸ > \not &gt; 
̸
​	
 >。

语法	效果	语法	效果	语法	效果	语法	效果
<	&lt; &lt;<	>	> &gt;>	=	= ==	\leq或\le	≤ \leq≤
\geq或\ge	≥ \ge≥	\equiv	≡ \equiv≡	\ll	≪ \ll≪	\gg	≫ \gg≫
\sim	∼ \sim∼	\simeq	≃ \simeq≃	\subset	⊂ \subset⊂	\supset	⊃ \supset⊃
\approx	≈ \approx≈	\subseteq	⊆ \subseteq⊆	\supseteq	⊇ \supseteq⊇	\cong	≅ \cong≅
\in	∈ \in∈	\ni或\owns	∋ \ni∋	\propto	∝ \propto∝	\mid	∣ \mid∣
\parallel	∥ \parallel∥	:	: ::	\notin	∉ \notin∈ 
/
​	
 	\neq或\ne	≠ \ne 
̸
​	
 =
二元运算符
语法	效果	语法	效果	语法	效果	语法	效果
+	+ ++	-	− -−	\mp	∓ \mp∓	\pm	± \pm±
\triangleleft	◃ \triangleleft◃	\triangleright	▹ \triangleright▹	\cdot	⋅ \cdot⋅	\div	÷ \div÷
\times	× \times×	setminus	∖ \setminus∖	\star	⋆ \star⋆	\ast	∗ \ast∗
\cup	∪ \cup∪	\cap	∩ \cap∩	\circ	∘ \circ∘	\bullet	∙ \bullet∙
\vee或\lor	∨ \vee∨	\wedge或land	∧ \land∧	\oplus	⊕ \oplus⊕	\ominus	⊖ \ominus⊖
\odot	⊙ \odot⊙	\oslash	⊘ \oslash⊘	\otimes	⊗ \otimes⊗	\diamond	⋄ \diamond⋄
\bigtriangleup	△ \bigtriangleup△	\bigtriangledown	▽ \bigtriangledown▽	\bigcirc	◯ \bigcirc◯		
大尺寸运算符
语法	效果	语法	效果	语法	效果	语法	效果
\sum	∑ \sum∑	\bigcup	⋃ \bigcup⋃	\bigvee	⋁ \bigvee⋁	\bigolus	⨁ \bigoplus⨁
\prod	∏ \prod∏	\bigcap	⋂ \bigcap⋂	\bigwedge	⋀ \bigwedge⋀	\bigotimes	⨂ \bigotimes⨂
\coprod	∐ \coprod∐	\int	∈ \in∈	\oint	∮ \oint∮	\bigodot	⨀ \bigodot⨀
箭头
语法	效果	语法	效果	语法	效果	语法	效果
\leftarrow或\gets	← \gets←	\longleftarrow	⟵ \longleftarrow⟵	\uparrow	↑ \uparrow↑	\downarrow	↓ \downarrow↓
\rightarrow或\to	→ \to→	\longrightarrow	⟶ \longrightarrow⟶	\leftrightarrow	↔ \leftrightarrow↔	updownarrow	↕ \updownarrow↕
\Leftarrow	⇐ \Leftarrow⇐	\Longleftarrow	⟸ \Longleftarrow⟸	\Uparrow	⇑ \Uparrow⇑	\Downarrow	⇓ \Downarrow⇓
\Rightarrow	⇒ \Rightarrow⇒	\Longrightarrow	⟹ \Longrightarrow⟹	\Leftrightarrow	⇔ \Leftrightarrow⇔	\Updownarrow	⇕ \Updownarrow⇕
\nearrow	↗ \nearrow↗	\searrow	↘ \searrow↘	\swarrow	↙ \swarrow↙	\nwarrow	↖ \nwarrow↖
\leftharpoonup	↼ \leftharpoonup↼	\rightharpoonup	⇀ \rightharpoonup⇀	\leftharpoondown	↽ \leftharpoondown↽	\rightharpoondown	⇁ \rightharpoondown⇁
\rightleftharpoons	⇌ \rightleftharpoons⇌	\iff	Unexpected text node: '&ThickSpace;'Unexpected text node: '&ThickSpace;'⟺				
其他符号
语法	效果	语法	效果	语法	效果	语法	效果
\dots	… \dots…	\cdots	⋯ \cdots⋯	\vdots	⋮ \vdots⋮	\ddots	⋱ \ddots⋱
\hbar	ℏ \hbarℏ	\imath	ı \imathı	\jmath	ȷ \jmathȷ	\ell	ℓ \ellℓ
\Re	R \Reℜ	\Im	I \Imℑ	aleph	ℵ \alephℵ	\wp	℘ \wp℘
\forall	∀ \forall∀	\exists	∃ \exists∃	\mho	℧ \mho℧	\partial	∂ \partial∂
’	′ &#x27; 
′
 	\prime	' \prime′	\emptyset	∅ \emptyset∅	\infty	∞ \infty∞
\nabla	∇ \nabla∇	\triangle	△ \triangle△	\Box	□ \Box□	\Diamond	◊ \Diamond◊
\bot	⊥ \bot⊥	\top	⊤ \top⊤	\angle	∠ \angle∠	\surd	√ \surd√
\diamondsuit	♢ \diamondsuit♢	\heartsuit	♡ \heartsuit♡	\clubsuit	♣ \clubsuit♣	\spadesuit	♠ \spadesuit♠
\neg或\lnot	¬ \lnot¬	\flat	♭ \flat♭	\natural	♮ \natural♮	\sharp	♯ \sharp♯
暂时整理这些符号，其他需要的用到再查。

公式
函数
语法	效果	语法	效果	语法	效果	语法	效果
\sin\theta	sinθ \sin\thetasinθ	\cos\theta	cosθ \cos\thetacosθ	\tan\theta	tanθ \tan\thetatanθ	\cot\theta	cotθ \cot\thetacotθ
\arcsin\frac{A}{C}	arcsinAC \arcsin\frac{A}{C}arcsin 
C
A
​	
 	\log X	logX \log XlogX	\sqrt{3}	3–√ \sqrt{3} 
3
​	
 	\sqrt[n]{3}	3–√n \sqrt[n]{3} 
n
  
3
​	
 
\lim A	limA \lim AlimA	\lim_{\imath\to n} x_\imath	limı→nxı \lim_{\imath\to n}x_\imathlim 
ı→n
​	
 x 
ı
​	
 				
积分、求和
功能	语法	效果
求和	\sum_{k=1}^N k^2	
\\begin{matrix} \sum_{k=1}^N k^2 \\end{matrix}	
求积	\prod_{i=1}^N x_i	
\\begin{matrix} \prod_{i=1}^N x_i \\end{matrix}	
积分	\int_{-N}^{N} e^x\, dx	
\\begin{matrix} \int_{-N}^{N} e^x\, dx\\end{matrix}	
双重积分	\iint_{-N}^{N} e^x\, dx	
三重积分	\iiint_{-N}^{N} e^x\, dx	
闭合的曲线、曲面积分	\oint_{C} x^3\, dx + 4y^2\, dy	
注：在实际使用过程中

\\begin{}
\\end{}
1
2
应书写为

\begin{}
\end{}
1
2
对html不熟悉，实在不知道怎么转义让公式不显示，故将begin、end前置双斜杠。后面同理。

矩阵、方程
功能	语法	效果
矩阵	
\\begin{bmatrix}
x & y \\
z & v
\\end{bmatrix}

\\begin{vmatrix}
x & y \\
z & v
\\end{vmatrix}

条件定义	
f(n) =
\\begin{cases} 
n/2, & \mbox{if }n\mbox{ is even} \\
3n+1, & \mbox{if }n\mbox{ is odd}
\\end{cases}

方程组	
\\begin{cases}
3x + 5y + z = 0\\
7x - 2y + 4z = 0 \\
-6x + 3y + 2z = 0
\\end{cases}

上下括号	
\\begin{matrix} 2 \\ \overbrace{ 
\\begin{bmatrix}
x & y \\
z & v
\\end{bmatrix}
}\\end{matrix}

\\begin{matrix} \underbrace{
\\begin{vmatrix}
x & y \\
z & v
\\end{vmatrix}} \\ 
2 \\end{matrix}

观察方程等的书写语法可知，只需在固定格式中替换所需功能对应的语法即可。

\begin{功能}
...
\end{功能}
1
2
3
若想在公式或方程后添加编号，只需添加\tag{序号}即可，如：

ax+by+c=0(1.1) ax+by+c=0 \tag{1.1}
ax+by+c=0(1.1)

命令为：

$$ax+by+c=0 \tag{1.1}$$
--------------------- 
作者：follow轻尘 
来源：CSDN 
原文：https://blog.csdn.net/u013914471/article/details/82973812 
版权声明：本文为博主原创文章，转载请附上博文链接！