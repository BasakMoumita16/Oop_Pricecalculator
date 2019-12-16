
<!DOCTYPE html>
<html>

<head>
			<title>pricecalculatorApp</title>
			<meta name ="viewport" content=" width=device-width, initial-scale=1.0">
			<meta charset="utf-8" />
			<link rel="stylesheet" href="./css/style.css">
</head>
<body>


	
<?php
		

$customer = "C:\laragon\www\Oop_Pricecalculator\model\customers.json";
$data = json_decode(file_get_contents($customer));

echo '<select>';
foreach ($data as $element) {

echo ' <option value="name">'.$element->name.'&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;</option>';
}
echo '</select>';
                    

$product ="C:\laragon\www\Oop_Pricecalculator\model\products.json";
$data1 = json_decode(file_get_contents($product));

                echo '<select>'; 
                echo '<br>';
                
                        
foreach ($data1 as $element) {

                            echo ' <option value="name">'.$element->name.'&nbsp;&nbsp&nbsp;&nbsp</option>';
                            echo ' <option value="name">'.$element->price.'</option>';
                            }
                            echo '</select>';
                    echo '</br>';
                    ?>
            <br> <br> <br>
            
<button type="button">submit</button>

<?php

?>

</body>
</html>