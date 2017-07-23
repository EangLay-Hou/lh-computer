<?php
require_once("connectdb.php");
// echo "hello";
class customs1{
  public $id;
  public $name;
  public $GenerationAndCore;
  public $price;
  public  static function AddRecord($P){
    Database::query("INSERT INTO cpu(ID, Name, Generation_and_Core, Price)
                     VALUES ('$P->name','$P->GenerationAndCore','$P->price')");
                     echo "Successful";
  }
}
?>
