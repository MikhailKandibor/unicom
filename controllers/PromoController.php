<?php
class PromoController{
	public function actionIndex(){

	// Подключаем вид
    require_once(ROOT . '/views/promo/index.php');
    return true;
}


}
?>