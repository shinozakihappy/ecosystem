<div class="container">        <!-- 全体を囲むコンテナ -->
商品情報入力<br>
<?php echo $this->Form->create('Good',array('type' => 'file'));   //create('モデル名',array(その他)) ?>
<?php echo $this->Form->input('goods_code');   //input('カラム名',array(その他)) ?>
<?php echo $this->Form->input('goods_name'); ?>
<?php echo $this->Form->input('amount'); ?>
<?php echo $this->Form->input('img_file_name_1', array('type'=>'file' )); ?>
<?php echo $this->Form->input('img_file_name_2', array('type'=>'file' )); ?>
<?php echo $this->Form->input('img_file_name_3', array('type'=>'file' )); ?>
<?php echo $this->Form->end('入力'); ?>
</div>