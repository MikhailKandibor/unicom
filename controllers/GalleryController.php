<?php
class GalleryController{
	public function actionIndex(){

	// Подключаем вид
    require_once(ROOT . '/views/gallery/index.php');
    return true;
}


}
?>