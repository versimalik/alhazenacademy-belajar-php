<?php
    $name_list = ["Andi", "Beni", "Candra"];

    function sayHello($name){
        return "Selamat datang, $name";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Say Hello</title>
</head>
<body>

    <?php foreach($name_list as $name): ?>

        <h1><?php echo sayHello($name); ?></h1>

    <?php endforeach; ?>
    
</body>
</html>