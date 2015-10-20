<div class="container">        <!-- 全体を囲むコンテナ -->
商品タイプ情報入力<br>
<?php echo $this->Form->create('Feature');   //create('モデル名',array(その他)) ?>

<div class="container">        <!-- 全体を囲むコンテナ -->
  <table class="table table-striped table-bordered table-hover" style="background:#B2EBF2;">
    <thead>
      <tr>
      	<th>
<?php echo $this->Form->input('features_code');   //input('カラム名',array(その他)) ?>
      	</th>
      </tr>
      <tr>
      	<th>
<?php echo $this->Form->input('features_name'); ?>
      	</th>
      </tr>
      <tr>
      	<th>
<?php echo $this->Form->input('features_txt'); ?>
      	</th>
      </tr>
    </thead>
   </table>
</div>
<?php echo $this->Form->end('入力'); ?>
</div>