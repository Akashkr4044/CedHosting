<?php
if(!isset($_SESSION)){
    session_start();
}


require_once('dbcon.php');
class Product{
    public $id,$name,$link,$avb,$conn;
    function cat($id,$name,$link,$avb,$conn){
     
     $sql="INSERT INTO `tbl_product` (`prod_parent_id`, `prod_name`, `link`, `prod_available`, `prod_launch_date`)
      VALUES ('".$id."', '".$name."', '".$link."', '".$avb."', CURRENT_DATE())";
     $result=$conn->query($sql);
     echo "<script>alert('Category entered');</script>";
    }
    function cat_print($conn){
        $arry=array();
        $sql="SELECT * from tbl_product";
        $result=$conn->query($sql);
        // return $result;
        if ($result->num_rows > 0) {
            while ($row= $result->fetch_assoc()) {
                array_push($arry,$row) ;
            }
            return $arry;
        }
    }
 function cat_del($m,$conn){
$sql="DELETE FROM `tbl_product` WHERE `id`='".$m."'";
echo $sql;
$result=$conn->query($sql);
header("location:category.php");
    }
}