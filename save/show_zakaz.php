<?php include('db.php')?>
<?php include('header.php')?>


	
         <div class="left">
		<? $query="SELECT table_time_id.id, title FROM table_time_id";
		 $result = mysqli_query($db,$query);
		/*Пересчет количества типов блюд. передача в массив*/
		 while($row = mysqli_fetch_array($result)){
			 $type_food[]=$row['title'];
			 $type_food_id[]=$row['id'];
			 }	
		 $id_count=count($type_food);
		 $i=0;?>
		 <table>
				 <!--перебирает все типы блюд имеющиеся в базе, делаем выборку всех записей по каждому типу блюд-->
		<? while($i<$id_count):?>
			<?$num=$type_food_id[$i];
			 $j=$i;
			 $query="SELECT menu.id, food, weight, price, time_id FROM menu where time_id='$num' ";
			 $result = mysqli_query($db,$query);?>
			 	<!--перебираем каждую запись выбранного типа-->
				 <? while($row = mysqli_fetch_array($result)):?>
			 		
			 	<!--перебираем каждую запись выбранного типа,если id данной записи есть в полученном массиве выводим-->
				 	<? foreach($_POST['mass'] as $key => $value) :?>
						<? if ($row['id']==$value):?>
			 				<!--выводим заголовок если это первая запись в этом типе блюд-->
				 			<?if ($j==$i) {echo '<th colspan="7" >'.$type_food[$i].'</th> <tr><th>Блюдо</th><th>Вес</th><th>Цена</th></tr> <tr>'; $j=-2;}?>
				 	 		<tr><td><?=$row['food']?> </td>  
					 		<td> <?=$row['weight']?> гр. </td>
					 		<td>  <?=$row['price']?> р. </td>
					 		<td>  <?=$_POST[$value]?> </td>
			 	 			</tr>
				 			<? $sum[]=$row['price']*$_POST[$value]; ?>
				 		<? endif?>
		
					<? endforeach ?>
				 <? endwhile?>			
		<? $i++; ?>
		<? endwhile?>
		<tr><th>Сумма</th><th> </th><th><? echo array_sum($sum) ?></th></tr>
		
		</table>
			 
			 
			 
		 </div>
         <div class="right">
           
			 
		  </div>
<?php include('footer.php')?>




