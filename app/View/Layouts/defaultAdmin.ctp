<!DOCTYPE html>
<html lang="en">
<head>
 <script src="http://www.google.com/jsapi"></script>
	<meta charset="utf-8">
	<title>
		BoostCake -
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<style>
	body {
		padding-top: 70px; /* 70px to make the container go all the way to the bottom of the topbar */
	}
	.affix {
		position: fixed;
		top: 60px;
		width: 220px;
	}
	</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">EC サイト</a>
			</div>
	
			<div class="collapse navbar-collapse" id="navbarEexample">
				<ul class="nav navbar-nav">
					<li><a href="#">メニュー <span class="sr-only">(current)</span></a></li>
					<?php if($loginMode == true) { ?>
					<li><?php echo $this->Html->link('ログアウト','logout',array(),'ログアウトしてもいいですか？');?></li>
					<?php } else { ?>
					<li><?php echo $this->Html->link('ログインページ','login');?></li>
					<?php } ?>

				  <!-- ここが表示されるボタン <a>タグでもOK -->
					<?php if($loginMode == true) { ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
					<li><?php echo $this->Html->link('商品管理','listgoods',array('controller' => 'Goods','action' => 'index'));?></li>
					<li><?php echo $this->Html->link('特集管理','listgoods',array('controller' => 'Features','action' => 'index'));?></li>
					<li><?php echo $this->Html->link('商品タイプ管理','listgoods',array('controller' => 'GoodTyeps','action' => 'index'));?></li>
					<li><?php echo $this->Html->link('新規ユーザ作成','add',array('controller' => 'Users','action' => 'add'));?></li>
					<li><?php echo $this->Html->link('新規作成','add');?></li>
          </ul>
        </li>
					<?php } ?>
					
				</ul>
				
			</div>
		</div>
	</nav>

	<div class="container">

		<?php echo $this->fetch('content'); ?>

	</div><!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
<!-- 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
	<script src="http://bootstrap3.cyberlab.info/jquery/jquery-1.11.2.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
	<?php echo $this->fetch('script'); ?>

</body>
</html>
