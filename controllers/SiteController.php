<?php
include_once ROOT.'/models/Site.php';

class SiteController
{

		public function actionIndex()
		{
			$newsList = array();
			$newsList = Site::getNewsList();

			require_once(ROOT.'/views/site/index.php');
			return true;
		}

		public function actionError(){
		echo "Ошибка 404";
		die;
		}


}
