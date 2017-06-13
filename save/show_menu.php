<?php include('db.php')?>
<?php 
	
$query="SELECT table_time_id.id, title FROM table_time_id";
$result = mysqli_query($db,$query);
while($row = mysqli_fetch_array($result)){
    $type_food[]=$row['title'];
	$type_food_id[]=$row['id'];
}	
$id_count=count($type_food);
$i=0;?>
<form method="post" action="../save/show_zakaz.php">
	<table>
	<? while($i<$id_count):?>
		<?$num=$type_food_id[$i];
		$query="SELECT menu.id, food, weight, price, time_id FROM menu where time_id='$num' ";
		$result = mysqli_query($db,$query);
		echo '<th colspan="7" >'.$type_food[$i].'</th> <tr><th>Блюдо</th><th>Вес</th><th>Цена</th></tr> <tr>';?>

	
	<? while($row = mysqli_fetch_array($result)):?>
				<tr><td> <?=$row['food']?> </td>  
							<td> <?=$row['weight']?> </td>
							<td>  <?=$row['price']?> </td>
							<td> <a href='edit_food.php?id=<?=$row['id']?>'> &#9998  </a> </td>
							<td><a href='all_menu.php?del_id=<?=$row['id']?>'> &#10007 </a></td>
							<td><input type='checkbox' name='mass[]' value='<?=$row['id']?>'/></td>
							<td><input type='number' name='<?=$row['id']?>'/></td></tr>
			  				<? $sum[]=$row['price']; ?>
				<? endwhile?>
	
	
		<? $i++; ?>
	<? endwhile?>
	
		<tr><th>Сумма</th><th> </th><th><? echo array_sum($sum) ?></th></tr>
		
	</table>
	
	<input type='submit' value="Сделать заказ">
<p>Кол-во блюд  <? echo count($sum)?> </p>
</form>