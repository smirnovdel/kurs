<?php
$sum=0;
$food = array();
$price = array();
for ($i=1;$i<6;$i++) {
	if (isset($_POST['food'.$i]) && isset($_POST['price'.$i])){
    	$food[$i]=$_POST['food'.$i];
    	$price[$i]=$_POST['price'.$i]*$_POST['schet'.$i];
		if ($food[$i]=='' || $price[$i]==0){unset($food[$i]); unset($price[$i]);}
		$sum+=$price[$i];		
    	}
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
							if (isset($food[$i])){
							echo "<li>  $food[$i] </li> ";}
						};
						echo "<li>  $mealtime	</li>";
					?>
               </ul>
            </div>
        <div class="right">
                <ul>
                    <?php
						for ($i=1;$i<6;$i++){  
							if (isset($price[$i])){
								echo "<li> Цена ". $price[$i]." руб. </li> ";}
											};
					echo "<li> Ваш заказ ". $sum	." руб.</li>";		
					
					if($sum>=100 && $sum<150){
							$sale=$sum/100*5;
							if($sum-$sale<100){
								echo "<li> Ваша скидка ". ($sum-100)	." руб.</li>";
								echo "<li> к оплате 100 руб.</li>";}
							else{echo "<li> Ваша скидка ". $sale	." руб.</li>";
								echo "<li> к оплате ".($sum-$sale). " руб.</li>";}}
					elseif($sum>=150 && $sum<200){
							$sale=$sum/100*7;							
							if($sum-$sale<150){
								echo "<li> Ваша скидка ". ($sum-150)	." руб.</li>";
								echo "<li> к оплате 150 руб.</li>";}
							else{echo "<li> Ваша скидка ". $sale	." руб.</li>";
								echo "<li> к оплате ".($sum-$sale). " руб.</li>";}}
					elseif($sum>=200){
							$sale=$sum/100*10;							
							if($sum-$sale<200){
								echo "<li> Ваша скидка ". ($sum-200)	." руб.</li>";
								echo "<li> к оплате 200 руб.</li>";}
							else{echo "<li> Ваша скидка ". $sale	." руб.</li>";
								echo "<li> к оплате ".($sum-$sale). " руб.</li>";}}
					elseif($sum<100){
							echo "<li> к оплате ".$sum. " руб.</li>";
						
					}				
					?>
                </ul>
            </div>
        </div>  
        
    </body>
</html>