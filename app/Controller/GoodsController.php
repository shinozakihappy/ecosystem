<?php
class GoodsController extends AppController{
 //使用モデルの指定（省略可）
 public $uses = array('User','Good');

 
 function beforeFilter(){
 //親クラスのbeforeFilterの読み込み
 parent::beforeFilter();
 $this->layout = 'defaultAdmin';
 
 }
 //indexアクション
 function index(){
 	
 	$this->set('goods',$this->Good->find('all'));
 	 
 }
 
 
 //ユーザー追加（認証が不要なページ）
 function add(){
 //POST送信なら
 if($this->request->is('post')) {
 	$uploaddir = IMAGES . Configure::read("up_img_path") . DS; // アップロードディレクトリを作成
 	
 //ユーザーの作成
 $this->Good->create();
 //リクエストデータを保存できたら
 if ($this->Good->save($this->request->data)) {
 	
 	$id = $this->Good->getLastInsertID();
 	
 	$fileNameExt1 = substr($filename, strrpos($this->request->data['Good']['img_file_name_1']['name'], '.') + 1);
 	
	if (move_uploaded_file($this->request->data['Good']['img_file_name_1']['tmp_name'], $uploaddir .sprintf("%20d_01",$id)) . "." . $fileNameExt1){
		debug("Success");
	}else{
		debug("err");
	}

	$fileNameExt2 = substr($filename, strrpos($this->request->data['Good']['img_file_name_2']['name'], '.') + 1);
	
	if (move_uploaded_file($this->request->data['Good']['img_file_name_2']['tmp_name'], $uploaddir .sprintf("%20d_02",$id)) . "." . $fileNameExt2){
		debug("Success");
	}else{
		debug("err");
	}

	$fileNameExt3 = substr($filename, strrpos($this->request->data['Good']['img_file_name_2']['name'], '.') + 1);
	
	if (move_uploaded_file($this->request->data['Good']['img_file_name_3']['tmp_name'], $uploaddir .sprintf("%20d_03",$id)) . "." . $fileNameExt3){
		debug("Success");
	}else{
		debug("err");
	}
 	
	$this->Session->setFlash(__('新規商品を追加しました'));
	$this->redirect(array('action' => 'index'));
 } else { //保存できなかったら
	$this->Session->setFlash(__('商品登録できませんでした。やり直して下さい'));
 }
 
 }
 }
 
 function edit($id = null){
 	
 	debug(IMAGES . Configure::read("up_img_path") . DS ."<br>"); // file.phpにパスが保存されている
 	 	
 	debug(FULL_BASE_URL);
 	
    $this->Good->id=$id;
    if($this->request->is('get'))
    {
        $this->request->data=$this->Good->read();   //更新画面の表示
    }
    else
    {
        if($this->Good->save($this->request->data)) //データの入力処理、addと同じ
        {
            $this->Session->setFlash('更新完了');
            $this->redirect(array('action'=>'index'));
        }
        else
        {
            $this->Sessin->setFlash('更新失敗');
        }
    } 	
 }
  
}

