<?php 
$colori = ['red','green','blue','rebeccapurple'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
    <?php foreach($colori as $colore) { ?>

        <li> <?php echo $colore ?> </li>
   
   <?php } ?>
</ul>

<ul>
       <?php foreach($colori as $colore){

            echo "<li>$colore</li>";
       } 
       ?>

</ul>



</body>
</html>
