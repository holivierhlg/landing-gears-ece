<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Landing Gears</title>

    <link rel="stylesheet" href="style.css"/>
    <meta http-equiv="refresh" content="1">

</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Olivier Hamoud Le Guellec
 * Date: 01/11/15
 * Time: 16:23
 */

/**
 * AGILE
 * XP
 * Pair Programming
 * Block 1
 *
 * Controller
 */


include('model.php'); //loading model
include('view.php');


$model = new model;


if($model->variable['doors']['front'] == 1 && $model->variable['direction'] == 0 )
{
    if($model->variable['gears']['front'] == 0) $model->doorsClosed(0);
    if($model->variable['gears']['front'] == 2) $model->doorsClosed(1);
}

if($model->variable['doors']['front'] == 2 && $model->variable['gears']['front'] == 2 && $model->variable['direction'] == 0 )
{
    $model->closingDoors();

}


if($model->variable['doors']['front'] == 2 && $model->variable['gears']['front'] == 0 && $model->variable['direction'] == 0 )
{
    $model->closingDoors();

}



if($model->variable['gears']['front'] == 1)
{

    if($model->variable['direction'] == 1) $model->down();
    if($model->variable['direction'] == 2) $model->up();
}

if($model->variable['doors']['front'] == 2 && $model->variable['gears']['front'] != 1 && $model->variable['direction'] != 0)
{
    $model->gearsMoving();
}


if($model->variable['doors']['front'] == 1 && $model->variable['direction'] != 0)
{
    $model->doorsOpened();
}



if(isset($_POST['action']))
{
    if($_POST['action'] == "up")
    {
        $model->openDoors(2);


    }
    else if($_POST['action'] == "down")
    {
        $model->openDoors(1);

    }
}

show($model->variable);



?>
