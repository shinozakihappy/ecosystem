<p>ようこそ！<?php echo h($userData['username']);?>さん</p>
<p>あなたの登録メールアドレスは<?php echo h($userData['email']);?>です。</p>
<h2>ここはIndexページです</h2>
<div class="container">        <!-- 全体を囲むコンテナ -->

<div class="row">
<li><?php echo $this->Html->link('新規ユーザ作成','add',array('controller' => 'Users','action' => 'add'));?></li>
</div>
<div class="row">
  <table class="table table-striped table-bordered table-hover" style="background:#B2EBF2;">
    <thead>
      <tr>
        <th>ID</th>
        <th>商品コード</th>
        <th>商品名</th>
        <th>金額</th>
        <th>作成日付</th>
        <th>更新日付</th>
        <th> </th>
        <th> </th>
      </tr>
    </thead>
    <?php foreach($goods as $goodRec): ?>
    <thead>
    <tr>
        <th><?php echo $goodRec['Good']['id']; ?></th>
        <th><?php echo $goodRec['Good']['goods_code']; ?></th>
        <th><?php echo $goodRec['Good']['goods_name']; ?></th>
        <th><?php echo $goodRec['Good']['amount']; ?></th>
        <th><?php echo $goodRec['Good']['created']; ?></th>
        <th><?php echo $goodRec['Good']['modified']; ?></th>
        <th><?php echo $this->Html->link('編集',array('action'=>'edit',$goodRec['Good']['id'])); ?></th>
        <th><?php echo $this->Html->link('削除',array('action'=>'delete',$goodRec['Good']['id'])); ?></th>
    </tr>
    </thead>
    <?php endforeach; ?>
   
</div>

</div>