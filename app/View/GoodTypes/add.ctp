<div class="container">        <!-- 全体を囲むコンテナ -->
商品タイプ情報入力<br>
<?php echo $this->Form->create('GoodType');   //create('モデル名',array(その他)) ?>
<?php echo $this->Form->input('goods_type_code');   //input('カラム名',array(その他)) ?>
<?php echo $this->Form->input('goods_type_name'); ?>
<?php echo $this->Form->input('goods_type_txt'); ?>
<?php echo $this->Form->end('入力'); ?>
</div>