<?php
namespace lib\MVC;

/**
 *
 */
abstract class BaseModel
{

  protected $databaseHandle;

  public static function getDB()
  {
    $host = 'localhost';
    $dbname = 'spk_saw';
    $username = 'root';
    $password = '';
    return new \PDO("mysql:host=localhost;dbname=spk_saw","root", "");
  }

}




 ?>
