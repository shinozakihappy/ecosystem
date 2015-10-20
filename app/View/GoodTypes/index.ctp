<p>ようこそ！<?php echo h($userData['username']);?>さん</p>
<p>あなたの登録メールアドレスは<?php echo h($userData['email']);?>です。</p>
<h2>ここは商品タイプ管理ページです</h2>
<div class="container">        <!-- 全体を囲むコンテナ -->

<div class="row">
<li><?php echo $this->Html->link('新規商品タイプ作成','add',array('controller' => 'GoodTypes','action' => 'add'));?></li>
</div>
<div class="row">
<?php echo $this->Session->flash(); ?>
</div>
<div class="row">
  <table class="table table-striped table-bordered table-hover" style="background:#B2EBF2;">
    <thead>
      <tr>
        <th>ID</th>
        <th>商品タイプコード</th>
        <th>商品タイプ名</th>
        <th>商品タイプテキスト</th>
        <th>作成日付</th>
        <th>更新日付</th>
        <th> </th>
        <th> </th>
      </tr>
    </thead>
    <?php foreach($goodTypes as $GoodTypeRec): ?>
    <thead>
    <tr>
        <th><?php echo $GoodTypeRec['GoodType']['id']; ?></th>
        <th><?php echo $GoodTypeRec['GoodType']['goods_type_code']; ?></th>
        <th><?php echo $GoodTypeRec['GoodType']['goods_type_name']; ?></th>
        <th><?php echo $GoodTypeRec['GoodType']['goods_type_txt']; ?></th>
        <th><?php echo $GoodTypeRec['GoodType']['created']; ?></th>
        <th><?php echo $GoodTypeRec['GoodType']['modified']; ?></th>
        <th><?php echo $this->Html->link('編集',array('action'=>'edit',$GoodTypeRec['GoodType']['id'])); ?></th>
        <th><?php echo $this->Html->link('削除',array('action'=>'delete',$GoodTypeRec['GoodType']['id'])); ?></th>
    </tr>
    </thead>
    <?php endforeach; ?>
   
</div>

</div>