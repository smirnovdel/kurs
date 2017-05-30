<!DOCTYPE html>
<html>
<head>
<title>Курс</title>
<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
    <body>
            <div class="conteiner">
            <form class="name_form" method="post" action="result.php">
            <div class="left">
		      <ul>
                <li>
                <label for="food1">блюдо 1</label> <br>   
                <input name="food1" type="text"/>
				<label> Кол-во:<select name="schet1">
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
					<option >4</option>
					<option >5</option>					
                  </select>шт.</label>
                </li>
                
                <li>
                <label for="food2">блюдо 2</label> <br>   
                <input name="food2" type="text"/>
					<label> Кол-во:<select name="schet2">
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
					<option >4</option>
					<option >5</option>					
                  </select>шт.</label>
                </li>
                
                <li>
                <label for="food3">блюдо 3</label> <br>   
                <input name="food3" type="text"/>
				<label> Кол-во:<select name="schet3">
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
					<option >4</option>
					<option >5</option>					
                  </select>шт.</label>
                </li>
                
                                
                <li>
                <label for="food4">блюдо 4</label> <br>   
                <input name="food4" type="text"/>
				<label> Кол-во:<select name="schet4">
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
					<option >4</option>
					<option >5</option>					
                  </select>шт. </label>
                </li>
                
                <li>
                <label for="food5">блюдо 5</label> <br>   
                <input name="food5" type="text"/>
				<label> Кол-во:<select name="schet5">
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
					<option >4</option>
					<option >5</option>					
                  </select>шт.</label>
                </li>
                  
                  <li>
                  <label for="mealtime">Прием пищи</label> <br>
                  <select name="mealtime">
                    <option >Завтрак</option>
                    <option >Обед</option>
                    <option >Ужин</option>
                  </select>
                </li>
               
                </ul>
                
            </div>
                
            <div class="right">
                 <ul>
                <li>
                <label for="price1">цена 1</label> <br>   
                <label><input name="price1" type="text"/>руб.</label>
                </li>
                
                <li>
                <label for="price2">цена 2</label> <br>   
                <label><input name="price2" type="text"/>руб.</label>
                </li>
                
                <li>
                <label for="price3">цена 3</label> <br>   
                <label><input name="price3" type="text"/>руб.</label>
                </li>
                
                                
                <li>
                <label for="price4">цена 4</label> <br>   
                <label><input name="price4" type="text"/>руб.</label>
                </li>
                
                <li>
                <label for="price5">цена 5</label> <br>   
                <label><input name="price5" type="text"/>руб.</label>
                </li>
                
                <li>
                  <input type="submit"/>
                </li>
                     
                </ul>
            </div>
            </form>
        </div>
    </body>
</html>
