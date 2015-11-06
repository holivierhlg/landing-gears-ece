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

if(isset($_POST['action']))
{
    if($_POST['action'] == "up")
    {
        $model->up();
    }
    else if($_POST['action'] == "down")
    {
        $model->down();
    }
}

show($model->variable);



?>
