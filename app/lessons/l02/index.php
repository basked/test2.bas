<?php
require '../../vendor/autoload.php';

use BasHelpers\Helpers;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base</title>
</head>
<body>
<p>
    <?php Helpers::fill_header('Базовые возможности');
    function my_callback_function($e)
    {
        return $e * $e;
    } ;
     function getResource($fileName)
     {
         if (!file_exists($fileName)) {
             throw new Exception("No file");
         }
         $fr=@fopen($fileName,'r');
         return $fr;
     };
    $types = array(
        "string" => "String String",
        "int" => 234,
        "float" => 444.555,
        "bool" => true,
        "callable" => my_callback_function(8),
        "array" => [1, 2, 3, 4, 5],
        "object" => \Patterns\Creational\FactoryMethod\Product\ProductFactory::build('sofa', 'sku-sofa', 'name-sofa'),
        "resource" => getResource('readme.txt'),
    );
    foreach ($types as $key => $type) {

        switch ($key) {
            case 'callable':
            {
                echo '<b>'.gettype($type) ."</b>=>$type";
                echo "<br>";
                break;
            }
            case 'array':
            {
                echo '<b>'.gettype($type) ."</b>=>";
                print_r($type);
                echo "<br>";
                break;
            }
            case 'object':
            {
                echo '<b>'.gettype($type) ."</b>=>";
                echo "<pre>";
                print_r($type);
                echo "</pre>";
                break;
            }
            case 'resource':
            {
                echo '<b>'.gettype($type) ."</b>=>";
                if ($type) {
                    echo "<pre>";
                    while (($buffer = fgets($type, 4096)) !== false) {
                        echo $buffer;
                    }
                    if (!feof($type)) {
                        echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
                    }
                    fclose($type);
                }
                echo "</pre><br>";
                break;
            }
            default :
            {
                echo "<b>".gettype($type)."</b>=>$type<br>";

            }
        };


    }

    ?>

</p>
</body>
</html>