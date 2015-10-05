<h2>リスト作成</h2>
<ul>
    <li>
        <?php foreach($samples as $sampleRec): ?>
            <?php debug($sampleRec); ?>
        <?php endforeach; ?>
    </li>
    <li>
<div class="row">
<div class="col-md-8">.col-md-8</div>
<div class="col-md-4">.col-md-4</div>
</div>
    </li>
    
    <div id="header">
    <div class="logo">
        <h1>LOGO</h1>
    </div>
    <!-- /logo -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand visible-xs" href="#">Menu</span>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="first">
                        <a href="#">MENU</a>
                    </li>
                    <li>
                        <a href="#">MENU</a>
                    </li>
                    <li>
                        <a href="#">MENU</a>
                    </li>
                    <li>
                        <a href="#">MENU</a>
                    </li>
                    <li>
                        <a href="#">MENU</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- /nav -->
</div>
<!-- /header -->
    <li>
    <table class="table table-bordered">
    <tr>
        <th>シーケンスＩＤ</th>
        <th>INT1</th>
        <th>VARCHAR1</th>
        <th></th>
        <th></th>
    </tr>
    <?php $recCnt = 0; ?>
    <?php foreach($samples as $sampleRec): ?>
    <tr>
        <td><?php echo $sampleRec['sample']['id']; ?></td>
        <td><?php echo $sampleRec['sample']['i_sample1']; ?></td>
        <td><?php echo $sampleRec['sample']['v_sample1']; ?></td>
        <td><?php echo $this->Html->link('編集',array('action'=>'edit',$sampleRec['sample']['id'])); ?></td>
        <td><?php echo $this->Html->link('削除',array('action'=>'delete',$sampleRec['sample']['id'])); ?></td>
    </tr>
    <?php endforeach; ?>
    </li>
</table>
</ul>
