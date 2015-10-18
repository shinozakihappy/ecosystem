<?php
class UsersController extends AppController{
 //使用モデルの指定（省略可）
 public $uses = array('User','Good');

 
 function beforeFilter(){
 //親クラスのbeforeFilterの読み込み
 parent::beforeFilter();
 //認証不要のページの指定
 $this->Auth->allow('login', 'logout','add','index');
 $this->layout = 'defaultAdmin';
 
 }
 //indexアクション（認証が必要なページ）
 function index(){
 	
 	//認証情報取得
 	
 /*	$user_data = $this->Auth->user();
 	
 	if(is_null($user_data)){
 	
 		$user_data['username'] = 'guest';
 	
 	}
 	
 	var_dump($user_data); */
 	
 //アクセス情報をビューに渡す
// $this->set('username',$user_data['username']);
 $this->set('aname',$this->action);

 
 $this->set('roledata',print_r($this->roledata,true));
 
 
 }
 //ログインアクション（認証が不要なページ）
 function login(){
 //POST送信なら
 if($this->request->is('post')) {
 //ログインOKなら
 if($this->Auth->login()) {
 //Auth指定のログインページへ移動
 return $this->redirect($this->Auth->redirect());
 } else { //ログインNGなら
 $this->Session->setFlash(__('ユーザ名かパスワードが違います'), 'default', array(), 'auth');
 }
 } 
 }
 //ログアウトアクション（認証が不要なページ）
 function logout(){
 $this->Auth->logout();
 }
 //ユーザー追加（認証が不要なページ）
 function add(){
 //POST送信なら
 if($this->request->is('post')) {
 //パスワードのハッシュ値変換
 $this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
 $this->request->data['User']['role'] = 'test';
 //ユーザーの作成
 $this->User->create();
 //リクエストデータを保存できたら
 if ($this->User->save($this->request->data)) {
 $this->Session->setFlash(__('新規ユーザーを追加しました'));
 $this->redirect(array('action' => 'index'));
 } else { //保存できなかったら
 $this->Session->setFlash(__('登録できませんでした。やり直して下さい'));
 }
 
 }
 }
 
 function ac1(){
 	
 }

 function ac2(){
 
 }

 function ac3(){
 
 }

 function ac4(){
 
 }
 
 function ac5(){
 
 }

 function listgoods(){
 	$this->set('goods',$this->Good->find('all'));
 }
 
}

