<!DOCTYPE html><html lang="en-gb">

<head>
	<title>ģʽ���� - Barebones ���İ�</title>
	<meta charset="gb2312"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="_css/styles.css" type="text/css"/>
	<style>
		.pattern {
			margin-top:4em;
		}
		details.primer {
			margin-top:2.5em;
			background-color:#e9e9e9;
			border-bottom:4px solid #e9e9e9;
			position:relative;
		}
		details.primer summary {
			font-size:1.5em;
			line-height:1;
			text-shadow:0 1px 0 #fff;
			background-color:#e9e9e9;
			border-radius:0.25em 0 0 0;
			padding:0.25em;
			overflow:hidden;
			position:absolute;
			right:0;
			top:-1.5em;
			}
			details.primer summary::-webkit-details-marker {
				display:none;
			}
		details.primer section {
			padding:1.5%;
			overflow:hidden;
		}
		details.primer p.caption {
			margin-left:0;
			margin-bottom:0;
		}
		@media screen and (min-width:40em) {
			details.primer textarea {
				width:58%;
				float:left;
			}
			details.primer p.caption {
				width:38%;
				float:right;
			}
		}
	</style>
</head>

<body>
	<main role="main">
		<div class="container">
			<header>
				<nav role="navigation" class="breadcrumb-nav">
					<a href="index.php">Barebones</a> /
				</nav><!--/.breadcrumb-nav-->
				<h1>ģʽ����</h1>
				<p class="lede">���õı�ǩƬ��</p>
			</header>

<?php
	$files = array();
	$patterns_dir = "_patterns";
	$handle = opendir($patterns_dir);
	while (false !== ($file = readdir($handle))):
		if(stristr($file,'.html')):
			$files[] = $file;
		endif;
	endwhile;
	rsort($files);
	foreach ($files as $file):
		echo '<section class="pattern">';
		include($patterns_dir.'/'.$file);
		echo '<details class="primer">';
		echo '<summary title="��ʾ��ǩ���÷�">&#8226;&#8226;&#8226;</summary>';
		echo '<section>';
		echo '<textarea rows="10" cols="30" class="input code">'.htmlspecialchars(file_get_contents($patterns_dir.'/'.$file)).'</textarea>';
		echo '<p class="caption"><strong>�÷�:</strong> '.htmlspecialchars(@file_get_contents($patterns_dir.'/'.str_replace('.html','.txt',$file))).'</p>';
		echo '</section>';
		echo '</details><!--/.primer-->';
		echo '</section><!--/.pattern-->';
	endforeach;
?>

		</div><!--/container-->
	</main><!--@main-->

	<footer role="contentinfo">
		<div class="container">
			<p><small>Copyright &#169; 2013 <a href="http://paulrobertlloyd.com">Paul Robert Lloyd</a>. Code covered by the <a rel="license" href="http://paulrobertlloyd.mit-license.org/">MIT license</a>.</small>&nbsp;</small><small><a href="http://weibo.com/iyunye" target="_blank">@������i</a>����󷢲���<a href="http://benchu.org" target="_blank">����UX</a>.</small></p>
		</div><!--/container-->
	</footer><!--/@contentinfo-->
</body>
</html>