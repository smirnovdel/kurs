<?php 
$db=mysqli_connect('localhost','root','123','groupe1')or die('Error connecting to MySQL server.');
$query="SELECT menu.id, food, weight, price, table_time_id.title FROM menu INNER JOIN
table_time_id ON menu.time_id = table_time_id.id";
$result = mysqli_query($db,$query);
echo '<table> <tr><th>Блюдо</th><th>Вес</th><th>Цена</th><th>Время</th></tr>';
while($row = mysqli_fetch_assoc($result)){
    printf( "<tr><td> %s </td>  <td>  %s </td> <td>  %s </td> <td>  %s </td> <td> <a href='edit_food.php?id=%s '>&#9998  </a> </td> <td><a href='all_menu.php?del_id=%s '> &#10007 </a></td></tr>"
		  , $row['food'],$row['weight'],$row['price'],$row['title'],$row['id'],$row['id']);
}
echo '</table>';?>