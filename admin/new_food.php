<?if(isset($_POST['food'])){
$food = $_POST['food'];
$weight = $_POST['weight'];
$price = $_POST['price'];
$time_id = $_POST['time_id'];
/*отправка данных в таблицу БД*/
$query = "INSERT INTO menu (food,weight,price,time_id) VALUES ('$food','$weight','$price','$time_id')";
$db=mysqli_connect('localhost','root','123','groupe1')or die('Error connecting to MySQL server.');
mysqli_query($db,$query);
header('Location: '.$_SERVER['REQUEST_URI'].'');	
}?>
<?php include('save/header.php')?>
         <div class="left">
			  <form class="name_form" method="post" action="">
			   	<ul>
				<li>
                	<label for="food">Название </label>    
					<input name="food" type="text"/>
                </li>
				<li>
                	<label for="weight">Вес в граммах </label>    
					<input name="weight" type="text"/>
                </li>
				<li>
                	<label for="price">Цена </label>    
					<input name="price" type="text"/>
                </li>
				<li>
                	<select name="time_id">
                    <!-- Выпадающее меню данные из БД -->				
					<?php 
						$db=mysqli_connect('localhost','root','123','groupe1')or die('Error connecting to MySQL server.');
						$query="SELECT id,title FROM table_time_id";
						$result = mysqli_query($db,$query);
						while($row = mysqli_fetch_assoc($result)){
    						echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
							}						
					?>													
                    </select>
                </li>
				<li>
               		<input value="сохранить" type="submit"/>
                </li>
				</ul> 
			  </form>
			  
		 </div>
                
         <div class="right">
            <?php include('save/nav.php');?>     
         </div>
			
<?php include('save/footer.php')?>