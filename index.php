<?if(isset($_POST['food'])){include('save/save_menu.php');}?><!-- запись меню в БД -->
<?if(isset($_POST['time'])){include('save/save_time.php');}?><!-- запись меню в БД -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Группа1</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="conteiner">
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
						$query="SELECT id,time FROM table_time_id";
						$result = mysqli_query($db,$query);
						while($row = mysqli_fetch_assoc($result)){
    						echo '<option value="'.$row['id'].'">'.$row['time'].'</option>';
							}						
					?>													
                    </select>
                </li>
				<li>
               		<input value="сохранить" type="submit"/>
                </li>
				</ul> 
			  </form>
			  <form class="time_form" method="post" action="">
			   	<ul>
				<li>
                	<label for="time">Время </label>    
					<input name="time" type="text"/>
                </li>
				<li>
               		<input value="сохранить" type="submit"/>
                </li>
				</ul> 
			  </form>
		 </div>
                
         <div class="right">
                 
         </div>

		<? include('save/show_menu.php');?>
		
	
		
     </div>
</body>
</html>