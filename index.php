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


echo json_encode($model->variable);

?>
