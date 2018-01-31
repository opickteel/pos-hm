<?php
namespace lib\MVC;

/**
 *
 */
abstract class BaseController
{
  protected $urlparams;
  protected $action;

  function __construct($action, $urlparams)
  {
    $this->action = $action;
    $this->urlparams = $urlparams;
  }

  public function executeAction()
  {
    return $this->{$this->action}();
  }

  protected function loadView($url, $data = '', $fullview = true)
  {
    $content = "/../Views/" . $url . ".php";

    if ($fullview) {
        require '/../../Views/template.php';
    }else {
        require $conten;
    }
  }
}

?>
