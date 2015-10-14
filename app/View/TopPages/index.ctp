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

<body style="background:#CFD8DC;">

<div class="container">        <!-- 全体を囲むコンテナ -->

<div class="row">
	  <div class="col-xs-4 well" style="padding: 10px 10px 10px 10px; border-color: #455A64;">
	  <?php echo $this->Html->image('org/light_forest.jpg',array('alt' =>'あるとを記述','class' => 'img-rounded img-responsive')); ?>
	  </div>
	  <div class="col-xs-4 well" style="padding: 10px 10px 10px 10px; border-color: #455A64;">
	  <?php echo $this->Html->image('org/light_forest.jpg',array('alt' =>'あるとを記述','class' => 'img-rounded img-responsive')); ?>
	  </div>
	  <div class="col-xs-4 well" style="padding: 10px 10px 10px 10px; border-color: #455A64; height:150px;">
	  	  お電話でのお問い合わせ<br>
	  	  xxx-xxx-xxxx
      </div>

</div>
<div class="row">
  <div class="col-xs-8 well well-sm gutter-10" style="padding: 10px 10px 10px 10px;">受付案内</div>
  <div class="col-xs-4">商品I</div>
</div>
<div class="row row-40">
  <div class="col-xs-8 well well-sm"><div> 商品G</div></div>
  <div class="col-xs-4 well well-sm">
診療受付時間
  <table class="table table-striped table-bordered table-hover" style="background:#B2EBF2;">
    <thead>
      <tr>
        <th>曜日</th>
        <th>午前</th>
        <th>午後</th>
        <th>夜間</th>
      </tr>
    </thead>
    <thead>
      <tr>
        <th>月〜金</th>
        <th>8:00～12:30</th>
        <th>13:30～17:00</th>
        <th>17:30～20:00</th>
      </tr>
    </thead>
    <thead>
      <tr>
      <tr>
        <th>土</th>
        <th>8:00～12:30</th>
        <th>13:30～17:00</th>
        <th>休診</th>
      </tr>
      </tr>
    </thead>
   </table>
 </div>
</div>

</div>        <!-- 全体を囲むコンテナ -->
</body>

</html>
