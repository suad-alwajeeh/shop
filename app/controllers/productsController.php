<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class productsController extends Controller{
public $controller;
public $u;
    function __construct(){

        $this->controller=new Controller();
          @session_start();
        if(isset($_SESSION['uid'])){
         $this->u=$_SESSION['uid'];}else{
         $this->u=0;}
          $user_model=$this->controller->model_object->create_model('users');
        $order_model=$this->controller->model_object->create_model('order');
        $compare_product_model=$this->controller->model_object->create_model('compare_product');
        $favorite_product_model=$this->controller->model_object->create_model('favorite_product');
        $cat_model=$this->controller->model_object->create_model('category');
        $id=$_GET['id'];
        $homeItems=array(
            'products'=>$cat_model->getDataWhereOrderProd($id),
               'categories'=>$cat_model->getDataWhereOrder(),
             'cartitem'=>$order_model->getOne($this->u),
             'favoriteitem'=>$favorite_product_model->getOnef($this->u),
             'filteritem'=>$compare_product_model->getOnefilter($this->u)
            
        );
//print_r($homeItems);
        //$this->controller->view_object->create_view('products',$homeItems);
        $this->controller->view_object->create_view('products',$homeItems);

    
       }


}


?>