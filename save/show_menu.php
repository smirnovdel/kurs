<?php 
$query="SELECT food, weight, price, table_time_id.time FROM menu INNER JOIN
table_time_id ON menu.time_id = table_time_id.id";
$result = mysqli_query($db,$query);
echo '<table> <tr><th>Блюдо</th><th>Вес</th><th>Цена</th><th>Время</th></tr>';
while($row = mysqli_fetch_assoc($result)){
    echo '<tr><td>'.$row['food'].'</td>
			  <td>'.$row['weight'].'</td>
			  <td>'.$row['price'].'</td>
			  <td>'.$row['time'].'</td></tr>';
}
echo '</table>';?>