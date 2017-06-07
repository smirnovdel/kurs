<?php include('save/db.php')?>
<?if(isset($_POST['id'])){
$id = $_POST['id'];
$food = $_POST['food'];
$weight = $_POST['weight'];
$price = $_POST['price'];
$time_id = $_POST['time_id'];
/*отправка данных в таблицу БД*/
$query = "UPDATE menu SET food='$food', weight='$weight', price='$price', time_id='$time_id' WHERE id='$id' ";
mysqli_query($db,$query);
header('Location: '.$_SERVER['REQUEST_URI'].'');	
}?><!-- запись меню в БД -->
<?php if(isset($_GET['id'])){$id=$_GET['id'];};
/*выборка записи из БД для редактирования*/
$query1="SELECT * FROM menu WHERE id='$id'";
$result1 = mysqli_query($db,$query1);
$row1 = mysqli_fetch_assoc($result1);
?>
<?php include('save/header.php')?>
         <div class="left">
			  <form class="name_form" method="post" action="">
			   	<ul>
				<li>
                	<label for="food" >Название </label>    
					<input name="food" type="text" value="<?=$row1['food']?>"/>
                </li>
				<li>
                	<label for="weight">Вес в граммах </label>    
					<input name="weight" type="text" value="<?=$row1['weight']?>"/>
                </li>
				<li>
                	<label for="price">Цена </label>    
					<input name="price" type="text" value="<?=$row1['price']?>"/>
                </li>
				<li>
                	<select name="time_id">
                    <!-- Выпадающее меню данные из БД 1 элемент списка действующее значение, остальные варианты замены -->				
					
					
							
					<?php 
						$query2="SELECT id,title FROM table_time_id";
						$result2 = mysqli_query($db,$query2);
						while($row2 = mysqli_fetch_assoc($result2)) 
							{ if ($row2['id']==$row1['time_id']){echo '<option value="'.$row2['id'].'">'.$row2['title'].'</option>';}};
						   
																
					?>	
						<?php 
						$query2="SELECT id,title FROM table_time_id";
						$result2 = mysqli_query($db,$query2);
						while($row2 = mysqli_fetch_assoc($result2)) 
							{ if ($row2['id']!=$row1['time_id']){echo '<option value="'.$row2['id'].'">'.$row2['title'].'</option>';}};
						   
																
					?>	
						
                    </select>
                </li>
				<li>
					<input name="id" value="<?=$row1['id']?>" type="hidden"/>
               		<input value="сохранить" type="submit"/>
                </li>
				</ul> 
			  </form>
			  
		 </div>
                
         <div class="right">
			<?php include('save/nav.php');?>
         </div>
<?php include('save/footer.php')?>