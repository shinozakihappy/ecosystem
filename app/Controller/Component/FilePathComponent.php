<?php
App::uses('Component', 'Controller');

class FilePathComponent extends Component {
	
	public function makeImageFilePath($filename,$id,$prefix='') {
		
		$uploaddir = IMAGES . Configure::read("up_img_path") . DS; // アップロードディレクトリを作成
		
		$ImageFilePaht = $uploaddir . $this->makeImageFileName($filename,$id,$prefix);
		
		return $ImageFilePaht;
	}
	
	public function makeImageFileName($filename,$id,$prefix='') {
	
		$fileNameExt = substr($filename, strrpos($filename, '.') + 1);
	
		$ImageFileName = "GD" .sprintf("%010d",$id) . $prefix . "." . $fileNameExt;
	
		return $ImageFileName;
	}
	
}