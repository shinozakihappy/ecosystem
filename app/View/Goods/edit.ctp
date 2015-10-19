<div class="container">        <!-- 全体を囲むコンテナ -->
商品情報入力<br>
<div class="container">        <!-- 全体を囲むコンテナ -->
  <table class="table table-striped table-bordered table-hover" style="background:#B2EBF2;">
    <thead>
      <tr>
      	<th>
<?php echo $this->Form->create('Good');   //create('モデル名',array(その他)) ?>
      	</th>
      </tr>
      <tr>
      	<th>
<?php echo $this->Form->input('goods_code');   //input('カラム名',array(その他)) ?>
      	</th>
      </tr>
      <tr>
      	<th>
<?php echo $this->Form->input('goods_name'); ?>
      	</th>
      </tr>
      <tr>
      	<th>
<?php echo $this->Form->input('amount'); ?>
      	</th>
      </tr>
      <tr>
      	<th>
<?php echo $this->Form->input('img_file_name_1', array('type'=>'file' )); ?>
      	</th>
      </tr>
      <tr>
      	<th>
<?php echo $this->Form->input($pathImgFileName1, array('alt' => 'img1')); ?>
      	</th>
      </tr>
      <tr>
      	<th>
<?php echo $this->Form->input('img_file_name_2', array('type'=>'file' )); ?>
      	</th>
      </tr>
      <tr>
      	<th>
<?php echo $this->Form->input($pathImgFileName2, array('alt' => 'img2')); ?>
      	</th>
      </tr>
      <tr>
      	<th>
<?php echo $this->Form->input('img_file_name_3', array('type'=>'file' )); ?>
      	</th>
      </tr>
      <tr>
      	<th>
<?php echo $this->Form->input($pathImgFileName3, array('alt' => 'img3')); ?>
      	</th>
      </tr>
    </thead>
   </table>
</div>

<?php echo $this->Form->end('入力'); ?>
</div>