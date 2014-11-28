<!DOCTYPE html><html lang="en-gb">

<head>
	<title>样式向导 - Barebones 中文版</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="_css/styles.css" type="text/css"/>
	
</head>

<body>
	<main role="main">
		<div class="container">
			<header>
				<nav role="navigation" class="breadcrumb-nav">
					<a href="index.php">Barebones</a> /
				</nav><!--/.breadcrumb-nav-->
				<h1>样式向导</h1>
				<p class="lede">基础的标签和排版样式</p>
			</header>

			<h2>章节 <a href="#">Linked</a></h2>
			<p>本想到主页的标题是一个 <code>h1</code> 元素。任何头部元素都会包含链接，如同本示例所述。</p>
			<p>上面的二级标题是一个 <code>h2</code> 元素，可用于任何形式的页面标题。每个页面可以使用多个。考虑使用一个 <code>h2</code> 标签，除非你需要的是一个不太重要的标题级别，或者需要作为现有 <code>h2</code> 元素的子标题。</p>
			<h3>三级标题 <a href="#">Linked</a></h3>
			<p>上面的标题是一个 <code>h3</code> 元素，可用于任何形式的页面标题，在文档层次中作为低于 <code>h2</code> 标题。</p>
			<h4>四级标题 <a href="#">Linked</a></h4>
			<p>上面的标题是一个 <code>h4</code> 元素，可用于任何形式的页面标题, 在文档层次中作为低于 <code>h3</code> 标题。</p>
			<h5>五级标题 <a href="#">Linked</a></h5>
			<p>上面的标题是一个 <code>h5</code> 元素，可用于任何形式的页面标题, 在文档层次中作为低于 <code>h4</code> 标题。</p>
			<h6>六级标题 <a href="#">Linked</a></h6>
			<p>上面的标题是一个 <code>h6</code> 元素，可用于任何形式的页面标题, 在文档层次中作为低于 <code>h5</code> 标题。</p>

			<h2 id="grouping">内容分组</h2>
			<h3>段落</h3>
			<p>所有的段落都被包裹在 <code>p</code> 标签中。此外， 如果 <code>p</code> 元素作为引用的内容是，<code>p</code> 元素可以被包裹在 <code>blockquote</code> 元素中。 此前， <code>blockquote</code> 被纯粹用来强制缩进，但现在已经用CSS来实现这个效果。保留 <code>blockquote</code> 用于引用。</p>

			<h3>水平线规则</h3>
			<p><code>hr</code> 元素表示一个段落级的主题中断，比如故事中的场景变化，或者参考书籍中一个章节到另一个主题的过渡。下面引用了Peter F. Hamilton的 <cite>Pandora&#8217;s Star</cite> 的内容，展示了一处场景变化和它后面的段落:</p>
			<div class="example">
				<p>Dudley was ninety-two, in his second life, and fast approaching time for another rejuvenation. Despite his body having the physical age of a standard fifty-year-old, the prospect of a long degrading campaign within academia was one he regarded with dread. For a supposedly advanced civilization, the Intersolar Commonwearth could be appallingly backward at times, not to mention cruel.</p>
				<p><i>Maybe it won&#8217;t be that bad</i>, he told himself. The lie was comforting enough to get him through the rest of the night&#8217;s shift.</p>
				<hr/>
				<p>The Carlton AllLander drove Dudley home just after dawn. Like the astronomer, the vehicle was old and worn, but perfectly capable of doing its job. It had a cheap diesel engine, common enough on a semi-frontier world like Gralmond, although its drive array was a thoroughly modern photoneural processor. With its high suspension and deep-tread tyres it could plough along the dirt track to the observatory in all weather and seasons, including the metre-deep snow of Gralmond&#8217;s winters.</p>
			</div>
	
			<h3>预格式化文本</h3>
			<p><code>pre</code> 元素表示一个预格式化文本块，其结构是由印刷规范定义的，而不是由元素。比如一封电子邮件（用空白行标识段落，用前缀项目符号的线条标识列表），计算机代码片段 (由根据其语言的约定的结构标识) 或者显示 <abbr title="American Standard Code for Information Interchange">ASCII</abbr>艺术。这里是一个展示可印刷的 <abbr>ASCII</abbr> 字符的例子：</p>
			<div class="example">
<pre><samp>&#32; ! " # $ % &amp; ' ( ) * + , - . /
0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
@ A B C D E F G H I J K L M N O
P Q R S T U V W X Y Z [ \ ] ^ _
` a b c d e f g h i j k l m n o
p q r s t u v w x y z { | } ~</samp></pre>
			</div>

			<h3>块引用</h3>
			<p><code>blockquote</code> 元素表示一个从别处引用的段落。</p>
			<div class="example">
				<blockquote cite="http://hansard.millbanksystems.com/commons/1947/nov/11/parliament-bill#column_206">
					<p>Many forms of Government have been tried, and will be tried in this world of sin and woe. No one pretends that democracy is perfect or all-wise. Indeed, it has been said that democracy is the worst form of government except all those other forms that have been tried from time to time.</p>
				</blockquote>
			</div>

			<h3>有序列表</h3>
			<p><code>ol</code> 元素表示有序列表，并且可以用CSS赋予不同形式的编号方案 (包括 1,2,3&#8230; a,b,c&#8230; i,ii,iii&#8230; 等等)。每个列表项都必须放在 <code>&lt;li&gt;</code> 和 <code>&lt;/li&gt;</code> 标签中，用来表示列表中的单独的项目 (正如你所猜测的， <code>li</code> 表示列表项)。</p>
			<div class="example">
				<ol>
					<li>这是一个有序列表。</li>
					<li>
						这是第二项，它包含一个子列表
						<ol>
							<li>这是子列表，同样是有序的。</li>
							<li>It has two items.</li>
						</ol>
					</li>
					<li>这是这个列表的最后一个项目。</li>
				</ol>
			</div>

			<h3>无序列表</h3>
			<p><code>ul</code> 元素表示无序列表 (比如，无需编号的松散列表，或者符号前缀列表)。再次，每个列表项都必须放在 <code>&lt;li&gt;</code> 和 <code>&lt;/li&gt;</code> 标签中，用来表示列表中的单独的项目。这里有一个示例列表，展示了大不列颠群岛的组成：</p>
			<div class="example">
				<ul>
					<li>
						United Kingdom of Great Britain and Northern Ireland:
						<ul>
							<li>England</li>
							<li>Scotland</li>
							<li>Wales</li>
							<li>Northern Ireland</li>
						</ul>
					</li>
					<li>Republic of Ireland</li>
					<li>Isle of Man</li>
					<li>
						Channel Islands:
						<ul>
							<li>Bailiwick of Guernsey</li>
							<li>Bailiwick of Jersey</li>
						</ul>
					</li>
				</ul>
			</div>
			<p>有时，我们可能想要每个列表项都包含块级元素，通常是一个或者两个段落。</p>
			<div class="example">
				<ul>
					<li>
						<p>The British Isles is an archipelago consisting of the two large islands of Great Britain and Ireland, and many smaller surrounding islands.</p>
					</li>
					<li>
						<p>Great Britain is the largest island of the archipelago. Ireland is the second largest island of the archipelago and lies directly to the west of Great Britain.</p>
					</li>
					<li>
						<p>The full list of islands in the British Isles includes over 1,000 islands, of which 51 have an area larger than 20 km<sup>2</sup>.</p>
					</li>
				</ul>
			</div>

			<h3>定义列表</h3>
			<p><code>dl</code> 元素是另一种形式的列表——定义列表。不同于列表项，<code>dl</code> 的内容由 <code>dt</code> (定义术语) 和 <code>dd</code> (定义描述) 配对组合而成。虽然它被称为 &#8220;定义列表&#8221;， <code>dl</code> 可以被用于其他父元素/子元素关系适用的情境中。比如，它可以用于标记对话，用 <code>dt</code> 表示对话者，用 <code>dd</code> 包含他/她的话语。</p>
			<div class="example">
				<dl>
					<dt>这是一条术语。</dt>
					<dd>这是术语的定义，他们都存在于 <code>dl</code>中。</dd>
					<dt>这是另一条术语。</dt>
					<dd>这条术语也有定义，就是这行。</dd>
					<dt>这是一条与下一条术语共享定义描述的术语。</dt>
					<dt>这是一条被定义的术语。</dt>
					<dd><code>dt</code> 术语可能不带 <code>dd</code> 而单独出现，但在这种情况是与下一个可用的 <code>dt</code><em>共享</em>描述。不能出现没有搭配<code>dt</code>元素的<code>dd</code>。</dd>
				</dl>
			</div>

			<h3>Figure</h3>
			<p>figure通常指的是图片：</p>
			<div class="example">
				<figure>
					<img src="http://lorempixum.com/680/400/abstract" alt="Example image"/>
					<figcaption>
						这是一个支持标题的占位符图像。
					</figcaption>
				</figure>
			</div>
			<p>这里，这首诗的一部分是用figure标记的：</p>
			<div class="example">
				<figure>
					<p>&#8216;Twas brillig, and the slithy toves<br/>
					Did gyre and gimble in the wabe;<br/>
					All mimsy were the borogoves,<br/>
					And the mome raths outgrabe.</p>
					<figcaption>
						<cite>Jabberwocky</cite> (first verse). Lewis Carroll, 1832-98
					</figcaption>
				</figure>
			</div>
			<p>如果你想标注引用的来源，你也应该用figure来完成：</p>
			<div class="example">
				<blockquote cite="http://hansard.millbanksystems.com/commons/1947/nov/11/parliament-bill#column_206">
					<p>Many forms of Government have been tried, and will be tried in this world of sin and woe. No one pretends that democracy is perfect or all-wise. Indeed, it has been said that democracy is the worst form of government except all those other forms that have been tried from time to time.</p>
				</blockquote>
				<figcaption>
					Winston Churchill, in <cite><a href="http://hansard.millbanksystems.com/commons/1947/nov/11/parliament-bill#column_206">a speech to the House of Commons</a></cite>. 11th November 1947
				</figcaption>
			</div>

			<h2 id="text">文本级语义</h2>
			<p>这里是一些可以在其他元素中使用的行内 <abbr title="HyperText Markup Language">HTML</abbr> 元素。</p>

			<h3>链接与锚</h3>
			<p><code>a</code> 元素用于超级链接文本，指向另一个页面，当前页面中被命名的某个片段或者网络上任意其它位置。例如：</p>
			<div class="example">
				<p><a href="/">前往首页</a> 或 <a href="#banner">回到本页顶部</a>.</p>
			</div>

			<h3>强调重点</h3>
			<p><code>em</code> 元素用于标识需要强调重点的文本，比如某些需要不同地发音的词语。在语体分化中需要用到斜体字的地方，使用 <code>i</code> 元素或许更合适。例如：</p>
			<div class="example">
				<p>You simply <em>must</em> try the negitoro maki!</p>
			</div>

			<h3>强调重要性</h3>
			<p><code>strong</code> 元素用于标识需要强调重要性的文本。在语体分化中需要用到粗体的地方，使用 <code>b</code> 元素或许更合适。例如：</p> 
			<div class="example">
				<p><strong>Don&#8217;t</strong> stick nails in the electrical outlet.</p>
			</div>

			<h3>小号字体</h3>
			<p><small>small</small> 元素用于表示免责声明，警告，法律限制，或者版权信息（通常被称为“小字”）。它也可以用于标识属性或者标识满足许可证要求。例如：</p>
			<div class="example">
				<p><small>Copyright &#169; 1922-2011 Acme Corporation. All Rights Reserved.</small></p>
			</div>

			<h3>中划线</h3>
			<p><code>s</code> 元素用于表示内容不再准确或者不再具有关联。在文档编辑中标示一段被删除的文本时，使用 <code>del</code> 代替。例如：</p>
			<div class="example">
				<p><s>Recommended retail price: &#163;3.99 per bottle</s><br/><strong>Now selling for just &#163;2.99 a bottle!</strong></p>
			</div>

			<h3>引文</h3>
			<p><code>cite</code> 元素用于表示作品的题目（即：书，论文，诗，歌，电影，电视节目，雕塑，绘画，音乐，展览等等）。它可以是详情中被引用或被参考的部分，或者是被顺便提及的。例如：</p>
			<div class="example">
				<p><cite>Universal Declaration of Human Rights</cite>, United Nations, December 1948. Adopted by General Assembly resolution 217 A (III).</p>
			</div>

			<h3>行内的引用</h3>
			<p><code>q</code> 元素用于行内引用文本。例如嵌套的引用语：</p>
			<div class="example">
				<p>John said, <q>I saw Lucy at lunch, she told me <q>Mary wants you to get some ice cream on your way home</q>. I think I will get some at Ben and Jerry&#8217;s, on Gloucester Road.</q></p>
			</div>

			<h3>定义</h3>
			<p><code>dfn</code> 元素用于高亮显示首次用到的术语。<code>title</code> 属性用于描述这个术语。例如：</p>
			<div class="example">
				<p>Bob&#8217;s <dfn title="Dog">canine</dfn> mother and <dfn title="Horse">equine</dfn> father sat him down and carefully explained that he was an <dfn title="A mutation that combines two or more sets of chromosomes from different species">allopolyploid</dfn> organism.</p>
			</div>

			<h3>缩写</h3>
			<p><code>abbr</code> 元素用于任意缩写的文本，无论是简写词还是首字母缩写或者其他形式。一般用的比较少，但足够有用，用于标记页面中首次出现的某个缩写，并忽略其它的。用户将鼠标悬停在缩写上面时， <code>title</code> 属性中的所有文字都会显示出来。示例的缩写：</p>
			<div class="example">
				<p><abbr title="British Broadcasting Corportation">BBC</abbr>, <abbr title="HyperText Markup Language">HTML</abbr>, and <abbr title="Staffordshire">Staffs.</abbr></p>
			</div>

			<h3>时间</h3>
			<p><code>time</code> 元素用于表示24小时制时间，或者确定的公历日期。例如：</p>
			<div class="example">
				<p>Queen Elizabeth II was proclaimed sovereign of each of the Commonwealth realms on <time datetime="1952-02-6">6</time> and <time datetime="1952-02-7">7 February 1952</time>, after the death of her father, King George VI.</p>
			</div>

			<h3>代码</h3>
			<p><code>code</code> 元素用于表示计算机代码片段。对于科技类网站很有用处，不然就没那么有用了。例如：</p>
			<div class="example">
				<p>When you call the <code>activate()</code> method on the <code>robotSnowman</code> object, the eyes glow.</p>
			</div>
			<p>配合 <code>pre</code> 元素使用：</p>
			<div class="example">
<pre><code>function getJelly() {
&#160;&#160;&#160;&#160;echo $aDeliciousSnack;
}</code></pre>
			</div>

			<h3>变量</h3>
			<p><code>var</code> 元素用于表示数学表达式或者编程环境中的变量，但也能用来表示内容可以更换为你自己的值的占位符。例如：</p>
			<div class="example">
				<p>If there are <var>n</var> pipes leading to the ice cream factory then I expect at <em>least</em> <var>n</var> flavours of ice cream to be available for purchase!</p>
			</div>

			<h3>样本输出</h3>
			<p><code>samp</code> 元素用于表示程序或计算系统输出的样本。对于科技类网站很有用处，不然就没那么有用了。例如：</p>
			<div class="example">
				<p>The computer said <samp>Too much cheese in tray two</samp> but I didn&#8217;t know what that meant.</p>
			</div>

			<h3>键盘输入</h3>
			<p><code>kbd</code> 元素用于表示用户输入（通常表示通过键盘输入，也可以表示使用其他输入方面，比如声控指令）。例如：<p>
			<div class="example">
				<p>To take a screenshot on your Mac, press <kbd>&#8984; Cmd</kbd> + <kbd>&#8679; Shift</kbd> + <kbd>3</kbd>.</p>
			</div>

			<h3>文本的上标和下标</h3>
			<p><code>sup</code> 表示上标，<code>sub</code> 元素表示下标。这两个元素只用于标记具有特殊意义的印刷规范，而不是排版演示。缺少这些元素会改变内容的意思时才会用到这些元素。例如：</p>
			<div class="example">
				<p>The coordinate of the <var>i</var>th point is (<var>x<sub><var>i</var></sub></var>, <var>y<sub><var>i</var></sub></var>). For example, the 10th point has coordinate (<var>x<sub>10</sub></var>, <var>y<sub>10</sub></var>).</p>
				<p>f(<var>x</var>, <var>n</var>) = log<sub>4</sub><var>x</var><sup><var>n</var></sup></p>
			</div>

			<h3>斜体</h3>
			<p><code>i</code> 元素用于标识不同的语调或情绪的，或者偏离了正常腔调的文本。比如含有分类名称，技术术语，其他语言的俗语，船舶的名字或者其他字体通常是斜体的文本。例如：</p>
			<div class="example">
				<p>There is a certain <i lang="fr">je ne sais quoi</i> in the air.</p>
			</div>

			<h3>粗体</h3>
			<p><code>b</code> 元素用于文体形式偏离正常腔调而不带有传达额外重要性的文本，比如文档摘要中的关键词，待审查的产品名称，或者其他字体通常是粗体的文本。例如：</p>
			<div class="example">
				<p>You enter a small room. Your <b>sword</b> glows brighter. A <b>rat</b> scurries past the corner wall.</p>
			</div>

			<h3>标记或高亮显示的文本</h3>
			<p><code>mark</code> 元素用于表示作为参考的被标记或高亮显示的文本。当被用在引用的语句中时，用它来高亮吸引读者注意文本的这一部分。当用于文档中时，用它来突出这一部分与用户当前活动的相关性。例如：</p>
			<div class="example">
				<p>I also have some <mark>kitten</mark>s who are visiting me these days. They&#8217;re really cute. I think they like my garden! Maybe I should adopt a <mark>kitten</mark>.</p>
			</div>

			<h3 id="edits">编辑</h3>
			<p><code>del</code> 元素用来表示由于某些原因必须保留在页面中的被删除或撤销的文字。此外， <code>ins</code> 元素用于表示插入的文字。 <code>del</code> 和 <code>ins</code> 都有 <code>datetime</code> 属性，允许你在元素中直接加入时间戳。如何使用插入的文字：</p>
			<div class="example">
				<p>She bought <del datetime="2005-05-30T13:00:00">two</del> <ins datetime="2005-05-30T13:00:00">five</ins> pairs of shoes.</p>
			</div>

			<h2 id="tables">表格数据</h2>
			<p>表格是用来显示表格数据的。表格中，用<code>thead</code>, <code>tfoot</code> 和 <code>tbody</code> 组合成行。</p>
			<p>如果你使用这些元素，你就必须用到每一个元素。它们应该按此秩序使用：<code>thead</code>, <code>tfoot</code> 和 <code>tbody</code>，这样浏览器才能在接收所有数据前渲染出底部。你必须在 <code>table</code> 元素中使用这些标签。</p>
			<div class="example">
				<table>
					<caption>The Very Best Eggnog</caption>
					<colgroup>
						<col style="width:50%" />
						<col style="width:25%" />
						<col style="width:25%" />
					</colgroup>
					<thead>
						<tr>
							<th scope="col">Ingredients</th>
							<th scope="col">Serves 12</th>
							<th scope="col">Serves 24</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Milk</td>
							<td>1 quart</td>
							<td>2 quart</td>
						</tr>
						<tr>
							<td>Cinnamon Sticks</td>
							<td>2</td>
							<td>1</td>
						</tr>
						<tr>
							<td>Vanilla Bean, Split</td>
							<td>1</td>
							<td>2</td>
						</tr>
						<tr>
							<td>Cloves</td>
							<td>5</td>
							<td>10</td>
						</tr>
						<tr>
							<td>Mace</td>
							<td>10 blades</td>
							<td>20 blades</td>
						</tr>
						<tr>
							<td>Egg Yolks</td>
							<td>12</td>
							<td>24</td>
						</tr>
						<tr>
							<td>Cups Sugar</td>
							<td>1 &frac12; cups</td>
							<td>3 cups</td>
						</tr>
						<tr>
							<td>Dark Rum</td>
							<td>1 &frac12; cups</td>
							<td>3 cups</td>
						</tr>
						<tr>
							<td>Brandy</td>
							<td>1 &frac12; cups</td>
							<td>3 cups</td>
						</tr>
						<tr>
							<td>Vanilla</td>
							<td>1 tbsp</td>
							<td>2 tbsp</td>
						</tr>
						<tr>
							<td>Half-and-half or Light Cream</td>
							<td>1 quart</td>
							<td>2 quart</td>
						</tr>
						<tr>
							<td>Freshly grated nutmeg to taste</td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div><!--/container-->
	</main><!--@main-->

	<footer role="contentinfo">
		<div class="container">
			<p><small>Copyright &#169; 2013 <a href="http://paulrobertlloyd.com">Paul Robert Lloyd</a>. Code covered by the <a rel="license" href="http://paulrobertlloyd.mit-license.org/">MIT license</a>.</small>&nbsp;</small><small><a href="http://weibo.com/iyunye" target="_blank">@月凌云i</a>翻译后发布在<a href="http://benchu.org" target="_blank">本初UX</a>.</small></p>
		</div><!--/container-->
	</footer><!--/@contentinfo-->
</body>
</html>