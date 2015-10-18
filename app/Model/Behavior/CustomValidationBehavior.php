<?php
/**
 * 独自のバリデーションメソッドを記述するビヘイビアクラス。
 */
class CustomValidationBehavior extends ModelBehavior {

	/**
	 * 文字列が全角カタカナのみかどうかの判定。
	 *
	 * @param object $model モデルオブジェクト
	 * @param array $data バリデート対象のデータ配列
	 * @return boolean 全角カタカナのみであればTRUE。違えばFALSE。
	 */
	function isKatakana(&$model, $data) {
		$value = current($data);
		if (!preg_match("/^[ァ-ヶー]+$/u", $value)) {
			return false;
		}
		return true;
	}
}