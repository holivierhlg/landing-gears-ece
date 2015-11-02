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
 */


//initializing variables
session_start();
if($_SESSION['variables']['set'] != 1) {

    $variable['gearsHandle'] = 0; // 0 : up, 1 : down

    $variable['light']['green'] = 0; // 0 : off, 1 : on
    $variable['light']['yellow'] = 0;
    $variable['light']['red'] = 0;

    $variable['gears']['front'] = 0; // 0 : locked up, 1 : maneuvering, 2 : locked down
    $variable['gears']['left'] = 0;
    $variable['gears']['right'] = 0;

    $variable['doors']['front'] = 0; // 0 : closed, 1 : maneuvering, 2 : open
    $variable['doors']['left'] = 0;
    $variable['doors']['right'] = 0;


    $variable['emergencyHydraulicCircuit'] = 0; // 0 : off, 1 : activated and locked

    $variable['set'] = 1;

    $_SESSION['variables'] = $variable;
}
?>
