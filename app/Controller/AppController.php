<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

/*	public $components = array(
		'Auth' => array(
			'flash' => array(
				'element' => 'alert',
				'key' => 'auth',
				'params' => array(
					'plugin' => 'BoostCake',
					'class' => 'alert-error'
				)
			)
		)
	); */
	
	public $loginMode = false;
	
	
	//使用コンポーネントの登録
	public $components = array(
			'Session',
			'Auth' => array(
					//ログイン後の移動先
					'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
					//ログアウ後の移動先
					'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
					//ログインページのパス
					'loginAction' => array('controller' => 'users', 'action' => 'login'),
					//未ログイン時のメッセージ
					'authError' => 'あなたのお名前とパスワードを入力して下さい。',
					
/*					'authenticate' => array(
							'Form' => array(
								'passwordHasher' => 'Blowfish'
							)
					) */
			)
	);

    // BoostCakeを読み込み
    public $helpers = array(
        'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
        'Form' => array('className' => 'BoostCake.BoostCakeForm'),
        'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
    );
    
    
    public function beforeFilter(){
    	
    	$user_data = $this->Auth->user();
    	
    	if(is_null($user_data)){
    	
    		$user_data['username'] = 'guest';
    		$user_data['email'] = '';
    		
    		$this->loginMode = false;
    		
    	}
    	else {
    		$this->loginMode = true;
    		
    	}
    	
    	 
//    	debug($user_data);
    	
    	$this->set('loginMode', false);
    	$this->set('userData', $user_data);

    	 
    }

    public function isAuthorized($user) {
    
//    	return $this->checkRoleData();
    
    	/*		// 登録済ユーザーは投稿できる
    		if (array_key_exists("admin",$this->roledata) === 'admin') {
    	return true;
    	}
    
    	// 投稿のオーナーは編集や削除ができる
    	if (in_array($this->action, array('edit', 'delete'))) {
    	$postId = (int) $this->request->params['pass'][0];
    	if ($this->Post->isOwnedBy($postId, $user['id'])) {
    	return true;
    	}
    	} */
    
    
    	return parent::isAuthorized($user);
    }
    
    public function checkRoleData(){
    
    	if (array_key_exists("admin",$this->roledata) == true) {
    
    		if ($this->user['role'] == "admin") {
    			return true;
    		}
    			
    	}
    
    	if (array_key_exists($this->user['role'],$this->roledata) == true) {
    
    		if (in_array($this->roledata[$this->user['role']][$this->name],$this->action) == true) {
    			return true;
    		}
    		else {
    			return false;
    		}
    
    	}
    
    	return false;
    		
    }
    
}
