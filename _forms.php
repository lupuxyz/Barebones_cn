<!DOCTYPE html><html lang="en-gb">

<head>
	<title>表单示例 - Barebones 中文版</title>
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
				<h1>表单示例</h1>
				<p class="lede">基础的表单样式</p>
			</header>
			<p><code>fieldset</code> 元素让你能把有关联的字段组合在一个表单中，每个表单中都应该包含一个相应的 <code>legend</code> 元素。<code>label</code> 元素用来确保描述字段与他们的表单控件相关联。</p>

			<fieldset>
				<legend>Legend</legend>
				<p><small class="caption">Required fields are marked <abbr title="Required">*</abbr></small></p>
				<?php include('_patterns/form-input.text.html'); ?>
				<?php include('_patterns/form-input.password.html'); ?>
				<?php include('_patterns/form-input.email.html'); ?>
				<?php include('_patterns/form-input.url.html'); ?>
				<?php include('_patterns/form-select.html'); ?>
				<?php include('_patterns/form-options.checkboxes.html'); ?>
				<?php include('_patterns/form-options.radios.html'); ?>
				<?php include('_patterns/form-textarea.html'); ?>
				<?php include('_patterns/form-input.checkbox.html'); ?>
				<?php include('_patterns/form-buttongroup.html'); ?>
			</fieldset>
		</div><!--/container-->
	</main><!--@main-->

	<footer role="contentinfo">
		<div class="container">
			<p><small>Copyright &#169; 2013 <a href="http://paulrobertlloyd.com">Paul Robert Lloyd</a>. Code covered by the <a rel="license" href="http://paulrobertlloyd.mit-license.org/">MIT license</a>.</small>&nbsp;</small><small><a href="http://weibo.com/iyunye" target="_blank">@月凌云i</a>翻译后发布在<a href="http://benchu.org" target="_blank">本初UX</a>.</small></p>
		</div><!--/container-->
	</footer><!--/@contentinfo-->
</body>
</html>