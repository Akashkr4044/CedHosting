<?php 
require_once('header.php');
require_once('../class/product.php');
require_once('../class/dbcon.php');
$obj= new DB();
$obj2=new Product();
if (isset($_POST['submit']))
 {
    $id=isset($_POST['id'])?$_POST['id']:'';
    $name=isset($_POST['name'])?$_POST['name']:'';
    $link=isset($_POST['link'])?$_POST['link']:'';
    $avb=isset($_POST['avb'])?$_POST['avb']:'';
    $obj2->cat($id,$name,$link,$avb,$obj->conn);

}
?>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <!-- <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
    Modal Login Form</a> -->
</div>
<div class="container">
    <form  method="POST">
<h4 class="h4">Create Category</h4>
<div class="form-control">
    Product-parent-id :<input type ="text" name="id" class="id ml-4">
</div>
<div class="form-control">
    Product-Name:<input type ="text" name="name" class="id ml-5">
</div>
<div class="form-control">
    Product-link:<input type ="text" name="link" class="id ml-5 ">
</div>
<div class="form-control">
    Product-Avaiblable :<input type ="text" name="avb" class="id ml-2">
</div>
<div class="form-control">
  <input type ="Submit" name="submit" class="submit ">
</div>
</form>
</div>
<?php 
if(isset($_GET['eid'])){
    $m=$_GET['eid'];
    $b='<form method="POST">';
}
?>
<?php 
  $back=$obj2->cat_print($obj->conn);
  $a= '<table id="myTable"><thead><tr><th>Id</th><th>Parent-Id</th><th>Product-Name</th><th>Link</th><th>Is-Avb</th><th>Date</th><th>Action</th></thead></tr><tbody><tr>';
  foreach($back as $val){
    $a.='<td>'.$val['id'].'</td>';
    $a.='<td>'.$val['prod_parent_id'].'</td>';
    $a.='<td>'.$val['prod_name'].'</td>';
    $a.='<td>'.$val['link'].'</td>';
    $a.='<td>'.$val['prod_available'].'</td>';
    $a.='<td>'.$val['prod_launch_date'].'</td>';
    $a.='<td><a href="cat_del.php?id='.$val['id'].'" class="sa">Delete</a><a href="cat_del.php?eid='.$val['id'].'" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Edit</a></td></tr>';
  }
  $a.='</tbody></table>';
  echo $a;

?>

<style>
.sa{
    padding:10px;
    color:red;
}
</style>


<?php 
require_once('footer.php');
?>
