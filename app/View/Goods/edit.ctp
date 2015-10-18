<div class="container">        <!-- 全体を囲むコンテナ -->
商品情報入力<br>

<?php echo $this->Form->create('Good');   //create('モデル名',array(その他)) ?>
<?php echo $this->Form->input('goods_code');   //input('カラム名',array(その他)) ?>
<?php echo $this->Form->input('goods_name'); ?>
<?php echo $this->Form->input('amount'); ?>
<?php echo $this->Form->end('入力'); ?>
</div>