<?php include('db.php')?>
<?php 
$query="SELECT menu.id, food, weight, price, time_id FROM menu where time_id=1 ";
$result = mysqli_query($db,$query);
echo '<table> <th colspan="5" >Завтрак</th></tr> <tr><th>Блюдо</th><th>Вес</th><th>Цена</th></tr> <tr>';
while($row = mysqli_fetch_array($result)){
    printf( "<tr><td> %s </td>  <td>  %s </td> <td>  %s </td>  <td> <a href='edit_food.php?id=%s '>&#9998  </a> </td> <td><a href='all_menu.php?del_id=%s '> &#10007 </a></td></tr>"
		  , $row['food'],$row['weight'],$row['price'],$row['id'],$row['id']);
	$sum[]=$row['price'];
}
$query="SELECT menu.id, food, weight, price, time_id FROM menu where time_id=2 ";
$result = mysqli_query($db,$query);
echo '<tr><th colspan="5" >Обед</th></tr>';
while($row = mysqli_fetch_assoc($result)){
    printf( "<tr><td> %s </td>  <td>  %s </td> <td>  %s </td>  <td> <a href='edit_food.php?id=%s '>&#9998  </a> </td> <td><a href='all_menu.php?del_id=%s '> &#10007 </a></td></tr>"
		  , $row['food'],$row['weight'],$row['price'],$row['id'],$row['id']);
	$sum[]=$row['price'];
}
$query="SELECT menu.id, food, weight, price, time_id FROM menu where time_id=3 ";
$result = mysqli_query($db,$query);
echo '<tr><th colspan="5" >Ужин</th></tr>';
while($row = mysqli_fetch_assoc($result)){
    printf( "<tr><td> %s </td>  <td>  %s </td> <td>  %s </td>  <td> <a href='edit_food.php?id=%s '>&#9998  </a> </td> <td><a href='all_menu.php?del_id=%s '> &#10007 </a></td></tr>"
		  , $row['food'],$row['weight'],$row['price'],$row['title'],$row['id']);
	$sum[]=$row['price'];
}
echo'<tr><th>Итого</th><th> </th><th>'.array_sum($sum).'</th></tr> <tr>';
echo '</table>';
echo 'Кол-во блюд  '.count($sum);

	;?>