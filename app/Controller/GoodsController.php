<?php
class GoodsController extends AppController{
 //使用モデルの指定（省略可）
 public $uses = array('User','Good');

 public $components = array('FilePath');
 
 function beforeFilter(){
 //親クラスのbeforeFilterの読み込み
 parent::beforeFilter();
 $this->layout = 'defaultAdmin';
 
 	$this->set('loginMode',true);
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
 	
// 	debug($this->request->data);
 //ユーザーの作成
 $this->Good->create();
 
 // なんかアップロードファイルの情報を配列からDBに登録しようとしてDBエラーを起こすので配列からアップロード情報を削除する
 // アホな仕様だがアプロードプラグインの導入は時間的に次回にする。アホなのはCakePHPだと思うが 
 $dataWrk = $this->request->data;
 
 if(array_key_exists('img_file_name_1',$this->request->data['Good']) == true) {
 	
 	
 	$this->request->data['Good']['img_file_name_1'] = $this->request->data['Good']['img_file_name_1']['name'];
 }
 else {
 	$this->request->data['Good']['img_file_name_1'] = '';
 }
 if(array_key_exists('img_file_name_2',$this->request->data['Good']) == true) {
 	$this->request->data['Good']['img_file_name_2'] = $this->request->data['Good']['img_file_name_2']['name'];
 }
 else {
 	$this->request->data['Good']['img_file_name_2'] = '';
 }
 
 if(array_key_exists('img_file_name_3',$this->request->data['Good']) == true) {
 	$this->request->data['Good']['img_file_name_3'] = $this->request->data['Good']['img_file_name_3']['name'];
 }
 else {
 	$this->request->data['Good']['img_file_name_3'] = '';
 }
 
 debug($this->request->data);
 
 //リクエストデータを保存できたら
 if ($this->Good->save($this->request->data)) {
 	
 	// save終わったからもとにもどそう、Cakeのソース直したくないからあんまり良く無いけどそんな感じで
 	$this->request->data = $dataWrk;
 	
 	
 	$id = $this->Good->getLastInsertID();
 	
 	$this->Good->read(null, $id);
 	 	
 	if($this->request->data['Good']['img_file_name_1']['name'] != '') {
 		
 		$prefix = "_01";
// 		debug($this->FilePath->makeImageFilePath($this->request->data['Good']['img_file_name_1']['name'],$id,$prefix));
 			
// 		$fileNameExt1 = substr($this->request->data['Good']['img_file_name_1']['name'], strrpos($this->request->data['Good']['img_file_name_1']['name'], '.') + 1);
 	
 		if (move_uploaded_file($this->request->data['Good']['img_file_name_1']['tmp_name'], $this->FilePath->makeImageFilePath($this->request->data['Good']['img_file_name_1']['name'],$id,$prefix))){
 			
 			if(array_key_exists('img_file_name_1',$this->request->data['Good']) == true && $this->request->data['Good']['img_file_name_1']['name'] !== '') {
 			
 				$this->Good->set("img_file_name_1", $this->FilePath->makeImageFileName($this->request->data['Good']['img_file_name_1']['name'],$id,$prefix));
 					
 			}
//			debug("Success");
 		}else{
// 			debug("err");
 		}
 	}

 	if($this->request->data['Good']['img_file_name_2']['name'] != '') {
 		
 		$prefix = "_02";
 			
 		$fileNameExt2 = substr($this->request->data['Good']['img_file_name_2']['name'], strrpos($this->request->data['Good']['img_file_name_2']['name'], '.') + 1);
	
 		if (move_uploaded_file($this->request->data['Good']['img_file_name_2']['tmp_name'], $this->FilePath->makeImageFilePath($this->request->data['Good']['img_file_name_2']['name'],$id,$prefix))){
 			
 		 	if(array_key_exists('img_file_name_2',$this->request->data['Good']) == true && $this->request->data['Good']['img_file_name_2']['name'] !== '') {
 			
 				$this->Good->set("img_file_name_2", $this->FilePath->makeImageFileName($this->request->data['Good']['img_file_name_2']['name'],$id,$prefix));
 					
 			}
 			 			//			debug("Success");
		}else{
//			debug("err");
		}
 	}

 	if($this->request->data['Good']['img_file_name_3']['name'] != '') {
 		
 		$prefix = "_03";
 			
	 	$fileNameExt3 = substr($this->request->data['Good']['img_file_name_3']['name'], strrpos($this->request->data['Good']['img_file_name_3']['name'], '.') + 1);
		
 		if (move_uploaded_file($this->request->data['Good']['img_file_name_3']['tmp_name'], $this->FilePath->makeImageFilePath($this->request->data['Good']['img_file_name_3']['name'],$id,$prefix))){

 			if(array_key_exists('img_file_name_3',$this->request->data['Good']) == true && $this->request->data['Good']['img_file_name_3']['name'] !== '') {
 			
 				$this->Good->set("img_file_name_3", $this->FilePath->makeImageFileName($this->request->data['Good']['img_file_name_3']['name'],$id,$prefix));
 			
 			}
 			
//			debug("Success");
		}else{
//			debug("err");
		}
 	}
 	 	
 	$this->Good->save();
 	
 	
	$this->Session->setFlash(__('新規商品を追加しました'));
	$this->redirect(array('action' => 'index'));
 } else { //保存できなかったら
	$this->Session->setFlash(__('商品登録できませんでした。やり直して下さい'));
 }
 
 }
 }
 
 function edit($id = null){
 	
// 	debug(IMAGES . Configure::read("up_img_path") . DS ."<br>"); // file.phpにパスが保存されている
 	 	
// 	debug(FULL_BASE_URL);
 	
    $this->Good->id=$id;
    if($this->request->is('get'))
    {
        $this->request->data=$this->Good->read();   //更新画面の表示
        
        debug($this->request->data);
        
//        $this->set('pathImgFileName1',Configure::read("up_img_path") . "/");
//        $this->set('pathImgFileName2',$this->Good->find('all'));
//        $this->set('pathImgFileName3',$this->Good->find('all'));
        
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

