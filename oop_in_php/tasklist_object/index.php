<?php
require "./vendor/JSONReader.php";
require "./class/Task.php";

$taskList = JSONReader('./dataset/TaskList.json');

//print_r($taskList);

//versione con foreach - paradigma imperativo
$taskListIstance = [];
foreach ($taskList as $taskArray) {
    $taskIstance = new Task();
    $taskIstance->id = $taskArray['id'];
    $taskIstance->taskName = $taskArray['taskName'];
    $taskIstance->status = $taskArray['status'];
    $taskIstance->expirationDate = $taskArray['expirationDate'];

    $taskListIstance[] = $taskIstance;
}

//versione con map - paradigma dichiarativo --> programmazione funzionale
$taskListIstance = array_map(function($taskArray){

    $taskIstance = new Task();
    $taskIstance->id = $taskArray['id'];
    $taskIstance->taskName = $taskArray['taskName'];
    $taskIstance->status = $taskArray['status'];
    $taskIstance->expirationDate = $taskArray['expirationDate'];
    return $taskIstance;

}, $taskList);

//print_r($taskListIstance); attiva i due print_r per fare test da console
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskList a oggetti</title>
</head>
<body>
    
    <table>
        <tr>
            <th>nome attività</th>
            <th>scaduta ?</th>
        </tr>
        <?php foreach ($taskListIstance as $taskObject) { ?>
            <!--- HTML --->
            <tr>
                <td><?php echo $taskObject->taskName ?></td>
                <td><?= $taskObject->isExpired() ? "si" : "no" ?></td>
            </tr>
        <?php }?>
        
        

    </table>
</body>
</html>