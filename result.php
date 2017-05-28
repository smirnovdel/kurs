<?php
$sum=0;
$food = array();
$price = array();
for ($i=1;$i<6;$i++) {
    $food[$i]=$_POST['food'.$i];
    $price[$i]=$_POST['price'.$i];
    $sum+=$price[$i];
    $mealtime=$_POST['mealtime'];
    };
?>

<!DOCTYPE html>
<html>
<head>
<title>Курс</title>
<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div class="conteiner">
            <div class="left">
                <ul>
                    <?php
 						for ($i=1;$i<6;$i++){   
						echo "<li>  $food[$i] </li> ";
											};
						echo "<li>  $mealtime	</li>";
					?>
               </ul>
            </div>
        <div class="right">
                <ul>
                    <?php
						for ($i=1;$i<6;$i++){   
						echo "<li>  $price[$i] </li> ";
											};
					echo "<li>  $sum	</li>";
					?>
                </ul>
            </div>
        </div>  
        
    </body>
</html>