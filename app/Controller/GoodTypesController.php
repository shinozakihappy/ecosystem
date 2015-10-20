<?php
class GoodTypesController extends AppController{
 //使用モデルの指定（省略可）
 public $uses = array('User','GoodType');

 public $components = array('FilePath');
 
 function beforeFilter(){
 //親クラスのbeforeFilterの読み込み
 parent::beforeFilter();
	$this->layout = 'defaultAdmin';
 
	$this->set('loginMode',true);
 }
 //indexアクション
 function index(){
 	
	$this->set('goodTypes',$this->GoodType->find('all'));
 	 
 }
 
 
 //ユーザー追加（認証が不要なページ）
 function add(){
 	
 //POST送信なら
 if($this->request->is('post')) {
 	
// 	debug($this->request->data);
 //ユーザーの作成
 $this->GoodType->create();
 
 // なんかアップロードファイルの情報を配列からDBに登録しようとしてDBエラーを起こすので配列からアップロード情報を削除する
 // アホな仕様だがアプロードプラグインの導入は時間的に次回にする。アホなのはCakePHPだと思うが 
 $dataWrk = $this->request->data;
 
 //リクエストデータを保存できたら
 if ($this->GoodType->save($this->request->data)) {
 	
 	// save終わったからもとにもどそう、Cakeのソース直したくないからあんまり良く無いけどそんな感じで
 	$this->request->data = $dataWrk;
 	
	$this->Session->setFlash(__('特集を追加しました'));
	$this->redirect(array('action' => 'index'));
 } else { //保存できなかったら
	$this->Session->setFlash(__('特集登録できませんでした。やり直して下さい'));
 }
 
 }
 }
 
 function edit($id = null){
 	
// 	debug(IMAGES . Configure::read("up_img_path") . DS ."<br>"); // file.phpにパスが保存されている
 	 	
// 	debug(FULL_BASE_URL);
 	
    $this->GoodType->id=$id;
    if($this->request->is('get'))
    {
        $this->request->data=$this->GoodType->read();   //更新画面の表示
        
        
    }
    else
    {
        if($this->GoodType->save($this->request->data)) //データの入力処理、addと同じ
        {
			$this->Session->setFlash(__('特集を追加しました'));
        	$this->redirect(array('action'=>'index'));
        }
        else
        {
            $this->Sessin->setFlash('更新失敗');
        }
    }
    
 }
 
	//削除
	public function delete($id=null)
	{
	    $this->GoodType->id=$id;
	    if($this->GoodType->delete()) //データの削除、addと同じ
	    {
	        $this->Session->setFlash('削除完了');
	        $this->redirect(array('action'=>'index'));
	    }
	    else
	    {
	        $this->Sessin->setFlash('削除失敗');
	    }
	}
  
}

