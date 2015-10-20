<p>ようこそ！<?php echo h($userData['username']);?>さん</p>
<p>あなたの登録メールアドレスは<?php echo h($userData['email']);?>です。</p>
<h2>ここは特集管理ページです</h2>
<div class="container">        <!-- 全体を囲むコンテナ -->

<div class="row">
<li><?php echo $this->Html->link('新規特集作成','add',array('controller' => 'Features','action' => 'add'));?></li>
</div>
<div class="row">
<?php echo $this->Session->flash(); ?>
</div>
<div class="row">
  <table class="table table-striped table-bordered table-hover" style="background:#B2EBF2;">
    <thead>
      <tr>
        <th>ID</th>
        <th>特集コード</th>
        <th>特集名</th>
        <th>特集テキスト</th>
        <th>作成日付</th>
        <th>更新日付</th>
        <th> </th>
        <th> </th>
      </tr>
    </thead>
    <?php foreach($features as $featureRec): ?>
    <thead>
    <tr>
        <th><?php echo $featureRec['Feature']['id']; ?></th>
        <th><?php echo $featureRec['Feature']['features_code']; ?></th>
        <th><?php echo $featureRec['Feature']['features_name']; ?></th>
        <th><?php echo $featureRec['Feature']['features_txt']; ?></th>
        <th><?php echo $featureRec['Feature']['created']; ?></th>
        <th><?php echo $featureRec['Feature']['modified']; ?></th>
        <th><?php echo $this->Html->link('編集',array('action'=>'edit',$featureRec['Feature']['id'])); ?></th>
        <th><?php echo $this->Html->link('削除',array('action'=>'delete',$featureRec['Feature']['id'])); ?></th>
    </tr>
    </thead>
    <?php endforeach; ?>
   
</div>

</div>