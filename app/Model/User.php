<?php
App::uses('Operator', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
	
	public $validate = array(
		'password' => array(
			'minLength' => array(
				'rule'	=> array('minLength', '8'),
				'message' => 'パスワードは、8文字以上での登録が必要です。',
			)
		),
	);
	
/*	public function beforeSave($options = array()){
		$passwordHasher = new BlowfishPasswordHasher();
		$this->data['User']['password'] = $passwordHasher->hash($this->data['User']['password']);
		return true;
	}
	
	public function validate_passwords() {
		return $this->data[$this->alias]['password'] === $this->data[$this->alias]['password_check'];
	} */
	
}
