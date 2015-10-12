<!DOCTYPE html>
<html lang="ja">

<style type="text/css">

.row-0{
	margin-left:0px;
	margin-right:0px;

	> div{
		padding-right:0px;
		padding-left:0px;
	}
}
.row-10{
	margin-left:-5px;
	margin-right:-5px;

	> div{
		padding-right:5px;
		padding-left:5px;
	}
}
.row-20{
	margin-left:-10px;
	margin-right:-10px;

	> div{
		padding-right:10px;
		padding-left:10px;
	}
}
.row-30{
	margin-left:-15px;
	margin-right:-15px;

	> div{
		padding-right:15px;
		padding-left:15px;
	}
}
.row-40{
	margin-left:-20px;
	margin-right:-20px;

	> div{
		padding-right:20px;
		padding-left:20px;
	}
}

</style>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>グリッドシステム</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="bg-success">

<div class="container">        <!-- 全体を囲むコンテナ -->

<h1>Grid system （位置をずらす）</h1>

<div class="row row-40">
	  <div class="col-xs-4  well well-sm" style="padding: 10px 10px 10px 10px; border-color: #7AC2E8; height:150px;">
	  	  <div style="background:#CCC;">受付案内</div>
	  </div>
	  <div class="col-xs-4" style="well;background:#CCC;height:150px;">商品B</div>
	  <div class="col-xs-4" style="padding: 10px 10px 10px 10px;background:#CCC;">商品C</div>

</div>
<div class="row">
  <div class="col-xs-4 well well-sm gutter-10" style="padding: 10px 10px 10px 10px;">受付案内</div>
  <div class="col-xs-4 well well-lg">商品H</div>
  <div class="col-xs-4">商品I</div>
</div>
<div class="row row-40">
  <div class="col-xs-4"><div> 商品G</div></div>
  <div class="col-xs-4">商品H</div>
  <div class="col-xs-4">
    商品I
  <table class="table">
    <thead>
      <tr>
        <th>Last Name</th>
        <th>Username</th>
      </tr>
    </thead>
   </table>
 </div>
</div>

</div>        <!-- 全体を囲むコンテナ -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
