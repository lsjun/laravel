<!DOCTYPE html>
<html>
<head>
    <title>我的第一个HTML页面</title>
</head>
<body bgcolor="white">
<p>body 元素的内容会显示在浏览器种</p>
<p>title 元素的内容会显示在标题栏种</p>
<p>这是段落</p>
<p>段落元素由p标签定义</p>
<p>这个段落包含很多行,但是浏览器忽略了它们</p>
<p>这个段落在 浏览器种 包含 了很多行,但
    是浏览器忽略了 它们
</p>
<p>段落的行数依赖浏览器窗口的大小.如果调节浏览器窗口的大小,将改变段落中的行数.</p>
<h1>春晓</h1>
<p>
    春眠不觉晓,
    处处闻啼鸟,
    夜来风雨声,
    花落知多少.
</p>
<p>注意,浏览器忽略了源代码中排版(多余的空格和换行</p>
<p>
    to break<br/>lines<br/>in a<br/>paragraph,<br/>use the <br/> br tag.
</p>
<h1>title 1</h1>
<h2>title 2</h2>
<h3>title 3</h3>
<h4>title 4</h4>
<h5>title 5</h5>
<h6>title 6</h6>
<p>请仅仅把标题标签用于标题文本,不要仅仅为了产生粗体而使用它们,请使用其他标签或者CSS</p>
<h1 align="center">heading 1</h1>
<p>上面的标题进行了居中排列</p>
<p>hr 标签定义水瓶线</p>
<hr/>
<!--注释-->
<p>注释</p>
<p>改变颜色</p>
<a href="www.baidu.com">baidu link</a>
<hr/>
<b>this text is blod</b>
<hr/>
<strong>this text is strong</strong>
<hr/>
<big>this text is big, deprecated</big>
<hr/>
<em>this text is emphasized</em>
<br/>
<i>this text is italic</i>
<br/>
<small>this text is small</small>
<br/>
<sub>this text contains subscript</sub>
<br/>
<sup>this text contains supercript</sup>
<br/>
<pre>
    pre 这是预文本格式,
     保留了空
    格和
        换行.
</pre>
<code>compture code<br/></code>
<kbd>keyboard input<br/></kbd>
<tt>teleType text</tt>
<br/>
<samp>sample text</samp>
<br/>
<var>computer variable</var>
<br/>

<p>
    <b>注释</b>这些标签一般用于计算机/编程代码
</p>
<address>
    Written by <a href="mailto:webmaster@example.com">breeze temp</a>.<br>
    Visit us at:<br>
    Example.com<br>
    Box 564, <br>
    USA
</address>
<abbr title="etcetera">etc.</abbr>
<br>
<acronym title="World Wide Web">WWW</acronym>
<br />
<p>在某些浏览器中,当鼠标移动到文本上时,会显示title提示语</p>
<br />
<p>仅对于IE 5中的acronym有效</p>
<p>对于 Netscape 6.2 中的 abbr 和 acronym 元素都有效。</p>
<p>如果你的浏览器支持bi-directional override(bdo),下一行会从右向左输出(rtl)</p>
<bdo dir="rtl">here is some HeBrew text</bdo>
<blockquote>
    这是长的引用.这是长的引用.这是长的引用.这是长的引用.
    这是长的引用.这是长的引用.这是长的引用.这是长的引用.
    这是长的引用.这是长的引用.这是长的引用.这是长的引用.
</blockquote>
这是短的引用:
<p>
    这是短的引用.
</p>
<p>
    使用blockquote元素的话,浏览器会插入换行和外边距,而q元素不会有任何特殊的呈现.
</p>
<p>
    一打有<del>二十</del><ins>十二</ins>件.
</p>
<p>大多数浏览器会改写为删除文本和下划线文本,一些老得浏览器会把删除和插入显示为普通的文本.</p>
</body>
</html>
