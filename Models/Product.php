<?php
namespace Models;
use lib\MVC\BaseModel;
/**
 *
 */
class Product extends BaseModel
{
  function getAllData()
  {
    $query = self::getDB()->prepare("SELECT * FROM kriteria");
    $data = $query->fetch();
    return $data;
  }

}


?>
