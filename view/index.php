
<!DOCTYPE html>
<html lang="en">

<head>
			<title>pricecalculatorApp</title>
			<meta name ="viewport" content=" width=device-width, initial-scale=1.0">
			<meta charset="utf-8" />
			<link rel="stylesheet" href="./css/style.css">
</head>
<body>
                <form action="index.php" method="post">  
<?php
            $customer = "C:\laragon\www\Oop_Pricecalculator\model\customers.json";
            $data = json_decode(file_get_contents($customer));

                      echo '<select name = "Customer_list"';
            foreach ($data as $element) {
            echo ' <option value="'.$element->name.'">'.$element->name.'&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;</option>';
                                            }
            echo '</select>';


              $product ="C:\laragon\www\Oop_Pricecalculator\model\products.json";
            $data1 = json_decode(file_get_contents($product));
                    echo '<select name = "Product_list"'; 
                    echo '<br>';
            foreach ($data1 as $element) {
                echo ' <option value="'.$element->name.'">'.$element->name.'&nbsp;&nbsp&nbsp;&nbsp</option>';
                echo ' <option value="'.$element->price.'">'.$element->price.'</option>';
                }
                echo '</select>';
                echo '</br>';
                
                ?>
                <br> <br> <br>

                    <input type="submit" name="submit" value="Get Selected Values" /><br><br>
                  
                    </form>
<?php
if(isset($_POST['submit'])){
    $customerlist = $_POST['Customer_list'];
    echo $customerlist;
    echo "<br>";
    $productlist = $_POST['Product_list'];
    echo $productlist;
    echo "<br>";
};

?>
  <input type="text" name="lastname" value="price"><br><br>

<input type="submit" value="calculate">
</body>
</html>   