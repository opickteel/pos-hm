<?php
namespace lib\MVC;
/**
 *
 */
class Router
{
  private $controller;
  private $action;
  private $urlparams;
  private $controller_namespace = "\\Controllers\\";
  private $base_controller_name = "lib\\MVC\\BaseController";

  function __construct($url)
  {
    //memasukan semua parameter dari index yang di tangkap dengan GET
    $this->urlparams = $url;
    //menentukan nama controller
    if (empty($this->urlparams['controller'])) {
        $this->controller = $this->controller_namespace . "Home";
    }else {
        $this->controller = $this->controller_namespace . $this->urlparams['controller'];
    }

    //menentukan aksi yang akan dijalankan
    if (empty($this->urlparams['action'])) {
        $this->action = "index";
    }else {
        $this->action = $this->urlparams['action'];
    }
  }

  public function getController()
  {
    if (class_exists($this->controller)) {
        $parent = class_parents($this->controller);

        if (in_array($this->base_controller_name, $parent)) {
          if (method_exists($this->controller, $this->action)) {

            return new $this->controller($this->action, $this->urlparams);

          }else {
            throw new \Exception("Aksi tidak ditemukan, braaaaay", 1);
          }
        }else {
          throw new \Exception("class untuk controller salah braaay, coba sekali lagi", 1);
        }
    }else {
      throw new \Exception("Controller tidak ditemukan, braaay", 1);
    }
  }

}


?>
