<p>ようこそ！<?php echo h($userData['username']);?>さん</p>
<p>あなたの登録メールアドレスは<?php echo h($userData['email']);?>です。</p>
<h2>ここはIndexページです</h2>
<ul>
<li><?php echo $this->Html->link('ログアウト','logout',array(),'ログアウトしてもいいですか？');?></li>
<li><?php echo $this->Html->link('グッズ','/Goods',array('controller' => 'Goods','action' => 'index'));?></li>
<li><?php echo $this->Html->link('新規ユーザ作成','add',array('controller' => 'Users','action' => 'add'));?></li>
</ul>

