<?php
include('database.php');
$id = $_GET["id"];
$titre=$_GET["titre"];
$form =  '
<div style=" width: 30%; height:300px;
margin: auto; background:ededed; padding:30px; text-align: center; margin-bottom: 40px;margin-top: 50px">
<p style="font-family:arial; font-weight:bold; color:323232; font-size:18px; color:#6001FF;"> Are you sure you want to delete <<('.$titre.')>></p>
  <form action="" method="post" style="display: inline-block;">
	<button name="sub" value='.$id.' style="background-color:red;color:white; font-family:arial; padding:10px 50px;  border: none; outline:none;" onclick='.ConfirmDelete().'>Yes</button>
	</form>
	<a href="read.php"><button  type=submit style="background-color:#6001FF; color:white; font-family:arial; padding:10px 50px; border: none; outline:none;">NO</button></a>
</div>';
echo $form;
function ConfirmDelete()
{
  
include('database.php');
  if(isset($_POST['sub'])){
    $sql = "DELETE FROM livres WHERE id=".$_GET["id"]."";
    $form = '<div>Record deleted successfully</div> ';
    if ($conn->query($sql)) {
      echo $form;
     header("location: read.php"); 
    } else {
      echo "Error deleting record: " . $conn->error;
    }

  }
 
}
?>



