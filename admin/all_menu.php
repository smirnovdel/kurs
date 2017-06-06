<?if(isset($_GET['del_id'])){
$del_id=$_GET['del_id'];
$query = "DELETE FROM menu WHERE id='$del_id' ";
$db=mysqli_connect('localhost','root','123','groupe1')or die('Error connecting to MySQL server.');
mysqli_query($db,$query);	
}?>
<?php include('save/header.php')?>
	
         <div class="left">
			<? include('save/show_menu.php');?>
		 </div>
         <div class="right">
            <?php include('save/nav.php');?>
		  </div>
<?php include('save/footer.php')?>
