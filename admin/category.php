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
<!-- <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
</div> -->

<!-- <div class="text-center"> -->
  <!-- <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
    Modal Login Form</a>
</div> -->
  <!-- <div class="container">
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
</div> -->

<div class="card-body">
  <form>
    <h6 class="heading-small text-muted mb-4">Create Category</h6>
    <div class="pl-lg-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label class="form-control-label" for="input-username">Product-parent-id</label>
            <input type="text" name="id" id="input-username" class="form-control">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label class="form-control-label" for="input-email">Product-Name</label>
            <input type="text" name="name" id="input-email" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label class="form-control-label" for="input-first-name">Product-link</label>
            <input type="text" name="link" id="input-first-name" class="form-control">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label class="form-control-label" for="input-last-name">Product-Avaiblable</label>
            <input type="text" name="avb" id="input-last-name" class="form-control">
          </div>
        </div>
      </div>
      <div>
        <input type ="Submit" name="submit" class="submit ">
    </div>
    </div>
    <hr class="my-4" />
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
  $a= '<table id="myTable">
       <thead>
        <tr>
          <th style="padding-left:40px">Id</th>
          <th style="padding-left:40px">Parent-Id</th>
          <th style="padding-left:40px">Product-Name</th>
          <th style="padding-left:40px">Link</th>
          <th style="padding-left:40px">Is-Avb</th>
          <th style="padding-left:40px">Date</th>
          <th style="padding-left:40px"Action</th> 
        </tr>
        </thead><tbody><tr>';
  foreach($back as $val){
    $a.='<td style="padding-left:40px">'.$val['id'].'</td>';
    $a.='<td style="padding-left:40px">'.$val['prod_parent_id'].'</td>';
    $a.='<td style="padding-left:40px">'.$val['prod_name'].'</td>';
    $a.='<td style="padding-left:40px">'.$val['link'].'</td>';
    $a.='<td style="padding-left:40px">'.$val['prod_available'].'</td>';
    $a.='<td style="padding-left:40px">'.$val['prod_launch_date'].'</td>';
    $a.='<td style="padding-left:40px"><a href="cat_del.php?id='.$val['id'].'" class="btn btn-default btn-rounded">Delete</a><a href="cat_del.php?eid='.$val['id'].'" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginForm">Edit</a></td></tr>';
  }
  $a.='</tbody></table>';
  echo $a;

?>

<?php 
require_once('footer.php');
?>
