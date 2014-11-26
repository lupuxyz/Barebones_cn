<!DOCTYPE html><html lang="en-gb">

<head>
	<title>Barebones 中文版 - 一枚初始化的目录设置，样式向导和模式入门。</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="_css/styles.css" type="text/css"/>
</head>

<body>
	<header role="banner">
		<div class="container">
			<h1 class="headline">Barebones</h1>
			<p class="lede">一枚初始化的目录设置，样式向导和模式入门。</p>
		</div><!--/container-->
	</header><!--/@banner-->

	<main role="main">
		<div class="container">
			<p>刚开始建立Barebones，只是为了我自己的项目。现在，你可以免费地Fork，或者按你的需求进行改编。</p>
			<p><a class="button" href="https://github.com/paulrobertlloyd/barebones/archive/master.zip" download="barebones">下载 Barebones 英文版</a> 或&#160;<a href="https://github.com/paulrobertlloyd/barebones"  target="_blank">在Github上浏览项目</a>.<p>
            <p><a class="button" href="http://benchu.org/barebones/barebones_cn.zip" download="barebones_cn">下载 Barebones 中文版</a> 或&#160;<a href="https://github.com/lupuxyz/Barebones_cn" target="_blank">在Github上浏览项目</a>.<p>
			<h2>内容</h2>
			<dl>
				<dt><a href="_styleguide.php">样式向导</a></dt>
				<dd>基础的标签和排版样式</dd>
				<dt><a href="_patterns.php">模式库</a></dt>
				<dd>常用代码片段</dd>
				<dt><a href="_forms.php">表单示例</a></dt>
				<dd>基础的表单样式</dd>
			</dl>
			<h2>关于“样式向导”的介绍</h2>
            <p class="caption">以下内容节选自《响应式Web设计实践》。</p>
            <p>为了能够对Web设计项目有所帮助，你需要创建视觉样式向导以及相应的模式库。样式向导已经流行多时，一个纯粹的视觉样式向导能够让人们知道应该如何使用品牌的视觉元素——字体、图片以及logo。即是设计师不会直接参与到创作中去，该向导也能保证到用户依然可以听到品牌那熟悉的声音。</p><br/>
            <p>当我们将相同的观点应用到开发中时，我们便有了前端样式向导。该向导为我们演示了不同的组件在站点中应该如何显示，其中包括表格、按钮、错误信息、排版、图片，等等。</p><br/>
            <p>此外，向导也为我们提供了所有可用的标签的使用模式。例如，在展示如何显示表格时，向导也会展示该表格应该如何编码，包括它的结构和属性。这样做不但可以确保站点可以维持一个同一个视觉外观，而且代码也能维持统一的样式，这在很大程度上简化了后期的维护。</p><br/>
            <p>由于这些样式向导使用HTML和CSS创建的，因此它们本身就是在不同浏览器及各种窗口宽度中测试这些样式的绝佳途径。当你将所有组件都放在一个页面里之后，你只需在不同的浏览器或设备中加载该页面就可以立即看到所有元素会如何显示了。你还可以缩放浏览器窗口或者调整字体大小，就可以直接地看到这些改变对于每个组件会产生哪些影响了。</p><br/>
            <p>如果你决定要修改样式，只需要在向导中作出调整，然后在你的目标设备中重新加载那个页面就可以看到元素会有哪些改变。当某一浏览器对于某一特性缺乏支持时，元素还会保持原有的外观和感觉吗？当在某一小屏幕设备上查看页面时，排版仍然是有效的吗？在大屏幕上浏览时，是否需要调整字体的大小呢？</p><br/>
            <p>现在，样式向导正变得越来越流行，其中最为著名的样式向导之一就是Twitter的Bootstrap。Bootstrap展示了从多媒体到排版再到对话框等所有东西应该如何编码和样式化。有了这样一份资源，即使对于一位刚刚接手项目的菜鸟开发者来说，快速开展工作也会成为一件容易的事。</p><br/>
			<h2>创建你自己的样式向导</h2>
            <p>并不存在一套创建样式向导的正确方法，只要你的步骤能帮你简化维护、方便测试并利于查看，那么它们就是正确的步骤。</p>
            <p>本站的<strong>Barebones</strong>是由<em>Paul Robert Lloyd</em>创建的参考工具。<strong>Barebones</strong>是一个免费的、多用途的框架，其中包含初始化的路径设置、样式向导以及模式库。</p>
            <p>该工具的设置过程非常简单：将代码下载到合适的位置，一切就都就绪了。<br/>代码中包含如下路径结构：</p>
			<h2>文件结构</h2>
            <dl class="metadata">
            	<dt>_assets</dt>
                <dd>一个空的用来放置你站点中的图片和字体的文件夹</dd>
                <dt>_css</dt>
                <dd>用来存放CSS的文件夹</dd>
                <dt>_includes</dt>
                <dd>一个空的用来存放PHP包含文件的文件夹</dd>
                <dt>_js</dt>
                <dd>一个空的用来存放JavaScript文件的文件夹</dd>
                <dt>_patterns</dt>
                <dd>用来为模式库存放模式的文件夹。与HTML文件同名的TXT文档用来说明该代码片段的用法</dd>
                <dt>_patterns.php</dt>
                <dd>用来显示模式库的页面</dd>
                <dt>_styleguide.php</dt>
                <dd>用来显示样式向导的页面</dd>
                <dt>_forms.php</dt>
                <dd>用来显示表单示例的页面</dd>
                <dt>index.php</dt>
                <dd>首页</dd>
            </dl><br/>
            <p><a href="_styleguide.php" target="_blank">样式向导</a>会用站点的样式来显示基本的标签（比如列表、header元素、hr元素，等等）。由于样式向导是一个静态的页面，因此如果你想往向导中增加某一元素时，你可以直接编辑_styleguide.php，然后把相应的样式放入位于_css文件夹中的_patterns.css里即可。</p><br/>
            <p>一份良好的视觉参考除了要包括站点内各个元素的样式之外，样式向导内还应该提供特定的元素要在什么时候以及如何被使用的信息。</p><br/>
            <p><a href="_patterns.php" target="_blank">模式库</a>不仅展示了应该如何样式化及显示不同的代码片段（比如工具提示或错误信息），而且还演示了如何在HTML标签中使用这些代码片段。</p><br/>
            <p>所有模式页面中的代码片段都被单独地以HTML文件的形式存储在_patterns文件夹中。模式页面会遍历整个文件夹，并显示每一个代码片段以及他们的标签。若要增加一个新的模式，只需在文件夹中创建一个新的代码片段文件，并在_patterns.css中增加相应的样式即可。</p><br/>
            <p>让我们来看一下PHP文件中发生了什么，别担心，它里面的代码很简单：</p>
            <code>
            	<ol class="code">
                	<li>$files = array();</li>
					<li>$patterns_dir = "_patterns";</li>
					<li>$handle = opendir($patterns_dir);</li>
					<li>while (false !== ($file = readdir($handle))):</li>
					<li>	if(stristr($file,'.html')):</li>
					<li>		$files[] = $file;</li>
					<li>	endif;</li>
					<li>endwhile;</li>
					<li>rsort($files);</li>
            	</ol>
			</code>
            <p>这段代码打开了我们的模式所在的路径（第3行），读出每一项内容（第4到8行）并将他们放在一个数组中，然后按照字母表的顺序将文件名排序（第9行）。</p><br/>
            <p>现在，在模式路径下已经有了一个存储着所有代码片段的数组，接下来PHP文件会遍历整个数组，然后将文件里面的内容输入到样式向导中去。</p><br/>
            <code>
            	<ol class="code">
                	<li>foreach ($files as $file):</li>
                	<li>	echo '&lt;section class=&quot;pattern&quot;&gt;';</li>
                	<li>	include($patterns_dir.'/'.$file);</li>
                	<li>	echo '&lt;details class=&quot;primer&quot;&gt;';</li>
                	<li>	echo '&lt;summary title=&quot;显示标签和用法&quot;&gt;&amp;#8226;&amp;#8226;&amp;#8226;&lt;/summary&gt;';</li>
                	<li>	echo '&lt;section&gt;';</li>
                	<li>	echo '&lt;textarea rows=&quot;10&quot; cols=&quot;30&quot; class=&quot;input code&quot;&gt;'.htmlspecialchars(file_get_contents($patterns_dir.'/'.$file)).'&lt;/textarea&gt;';</li>
                	<li>	echo '&lt;p class=&quot;caption&quot;&gt;&lt;strong&gt;用法:&lt;/strong&gt; '.htmlspecialchars(@file_get_contents($patterns_dir.'/'.str_replace('.html','.txt',$file))).'&lt;/p&gt;';</li>
                	<li>	echo '&lt;/section&gt;';</li>
                	<li>	echo '&lt;/details&gt;&lt;!--/.primer--&gt;';</li>
                	<li>	echo '&lt;/section&gt;&lt;!--/.pattern--&gt;';</li>
                	<li>endforeach;</li>
                </ol>
            </code><br/>
            <p>在PHP文件遍历代码片段的过程中，程序会将代码片段插入到一个div元素中（第3到5行），并将未经处理的HTML插入到文本区域（第6到11行），这样你就可以看到代码片段的标记了。</p><br/>
            <p>有了这样一个简单的工具，便使得向样式向导中添加内容变得非常容易。每当你有了一个新的元素需要样式化的时候，你只需要将代码片段包含到模式库中，然后它便会自动显示在你的向导中。它的维护成本非常小，将样式和代码片段在一个页面中呈现能够让你事半功倍。</p>
		</div><!--/container-->
	</main><!--@main-->

	<footer role="contentinfo">
		<div class="container">
			<p><small>Copyright &#169; 2013 <a href="http://paulrobertlloyd.com">Paul Robert Lloyd</a>. Code covered by the <a rel="license" href="http://paulrobertlloyd.mit-license.org/">MIT license</a>.&nbsp;</small><small><a href="http://weibo.com/iyunye" target="_blank">@月凌云i</a>翻译后发布在<a href="http://benchu.org" target="_blank">本初UX</a>.</small></p>
		</div><!--/container-->
	</footer><!--/@contentinfo-->
</body>
</html>