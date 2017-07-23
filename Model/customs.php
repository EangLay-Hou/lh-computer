<?php
require_once("connectdb.php");
class customs{
    public $id;
    public $name;
    public $type;
    public $size;
    public $GenerationAndCore;
    public $price;
    //Case
    public static function getCases(){
        $data=array();
        $result=Database::query("SELECT * FROM cases");
        if($result && mysqli_num_rows($result) > 0){
          while ($row=mysqli_fetch_assoc($result)){
            $con=new customs();
            $con->id=$row["ID"];
            $con->name=$row["Name"];
            $con->type=$row["Type"];
            $con->price=$row["Price"];
            $data[]=$con;
          }
        }
        return $data;
}

//CPU
public static function getCpu(){
    $data=array();
    $result=Database::query("SELECT * FROM cpu");
    if($result && mysqli_num_rows($result) > 0){
      while ($row=mysqli_fetch_assoc($result)){
        $con=new customs();
        $con->id=$row["ID"];
        $con->name=$row["Name"];
        $con->GenerationAndCore=$row["Generation_and_Core"];
        $con->price=$row["Price"];
        $data[]=$con;
      }
    }
    return $data;
}


//Motherbard
public static function getMotherboard(){
  $data=array();
  $result=Database::query("SELECT * FROM Motherboard");
  if($result && mysqli_num_rows($result) > 0){
    while ($row=mysqli_fetch_assoc($result)){
      $con=new customs();
      $con->id=$row["ID"];
      $con->name=$row["Name"];
      $con->type=$row["Type"];
      $con->price=$row["Price"];
      $data[]=$con;
    }
  }
  return $data;
}

//Power Supply
public static function getPowerSupply(){
  $data=array();
  $result=Database::query("SELECT * FROM power_supply");
  if ($result && mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
      $con=new customs();
      $con->id=$row["ID"];
      $con->name=$row["Name"];
      $con->type=$row["Type"];
      $con->price=$row["Price"];
      $data[]=$con;
    }
  }
  return $data;
}

//RAM
public static function getRam(){
  $data=array();
  $result=Database::query("SELECT * FROM ram");
  if($result && mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
      $con=new customs();
      $con->id=$row["ID"];
      $con->name=$row["Name"];
      $con->type=$row["Type"];
      $con->size=$row["Size"];
      $con->price=$row["Price"];
      $data[]=$con;
    }
  }
  return $data;
}

//VGA
public static function getVga(){
  $data= array();
  $result=Database::query("SELECT * FROM vga");
  if($result && mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_assoc($result)){
      $con=new customs();
      $con->id=$row["ID"];
      $con->name=$row["Name"];
      $con->type=$row["Type"];
      $con->size=$row["Size"];
      $con->price=$row["Price"];
      $data[]=$con;
    }
  }
return $data;
}
}
