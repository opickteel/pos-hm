<?php
namespace Controllers;

use lib\MVC\BaseController;
use Models\Product;
/**
 *
 */
class Home extends BaseController
{
  protected function Index()
  {
    $data = Product::getAllData();
    $this->loadView('Home',$data);
  }

}


?>
