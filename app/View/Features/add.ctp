<div class="container">        <!-- 全体を囲むコンテナ -->
特集情報入力<br>
<?php echo $this->Form->create('Feature');   //create('モデル名',array(その他)) ?>
<?php echo $this->Form->input('features_code');   //input('カラム名',array(その他)) ?>
<?php echo $this->Form->input('features_name'); ?>
<?php echo $this->Form->input('features_txt'); ?>
<?php echo $this->Form->end('入力'); ?>
</div>