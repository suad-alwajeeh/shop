<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class product_detailsController extends Controller{
public $controller;



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
        $homeItems=array(
            'categories'=>$cat_model->getDataWhereOrder(),
             'cartitem'=>$order_model->getOne($this->u),
             'favoriteitem'=>$order_model->getOnef($this->u),
             'filteritem'=>$order_model->getOnefilter($this->u)
            
        );

        //$this->controller->view_object->create_view('home',$homeItems);
        $this->controller->view_object->create_view('product_details',$homeItems);
       // $this->controller->view_object->create_view('admin/categories',$homeItems);
    
       }


}


?>