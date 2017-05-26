<!DOCTYPE html>
<html>
<head>
<title>Курс</title>
<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <?php
        $first_name = '#05668D';
        $last_name = '#427AA1';
        $middle_name = '#EBF2FA';
        $gender = '#427AA1';
        $color = 'white';
        $button = '#427AA1';
        
        ?>
        <div class="conteiner">
            <form class="name_form">
            <ul>
                <li style="background-color:<?=$first_name?>">
                <label for="first_name">Имя</label> <br>   
                <input name="first_name" type="text"/>
                </li>
                
                <li style="background-color:<?=$last_name?>">
                <label for="last_name">Фамилия</label> <br>   
                <input name="last_name" type="text"/>
                </li>
                
                <li style="background-color:<?=$middle_name?>">
                <label for="middle_name">Отчество</label> <br>   
                <input name="middle_name" type="text"/>
                </li>
                
                                
                <li style="background-color:<?=$gender?>">
                <label>М    
                <input name="gender" type="radio" value="man"/></label>
                 <label>Ж   
                <input name="gender" type="radio" value="woman"/>
                  </label>  
                </li>
                
                <li style="background-color:<?=$color?>">
                    Любимыый цвет <br>
                <label>Красный    
                <input type="checkbox" name="check1" /></label>
                 <label>Желтый   
                <input type="checkbox" name="check2" />
                  </label>  
                    <label>Синий   
                <input type="checkbox" name="check2" />
                  </label>  
                    <label>Зеленый   
                <input type="checkbox" name="check2" />
                  </label>  
                </li>
                
                  <li style="background-color:<?=$button?>">
                <label for="button">Кнопка</label> <br>   
                <input name="button" type="button"/>
                </li>
                
                </ul>
            </form>
        </div>
    </body>
</html>
