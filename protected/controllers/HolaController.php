 <?php
 #http://127.0.0.1/yii/facilito/hola/index
 class HolaController extends Controller
 {
  public function actionIndex()
   {
    $model=CActiveRecord::model("users")->findAll();
    $twitter="@Liz03023";
	$this->render("index",array("model"=>$model,"twitter"=>$twitter));
   
   }
 
 }