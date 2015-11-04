<?php
/**
 * Created by PhpStorm.
 * User: olivier
 * Date: 03/11/15
 * Time: 10:23
 */

/**
 * AGILE
 * XP
 * Pair Programming
 * Block 2
 *
 * Model
 */


class model
{
    public $variable;

    function __construct()
    {
        //initializing variables
        session_start();
        if ($_SESSION['variables']['set'] != 1) {

            $this->variable['gearsHandle'] = 0; // 0 : up, 1 : down

            $this->variable['light']['green'] = 0; // 0 : off, 1 : on
            $this->variable['light']['yellow'] = 0;
            $this->variable['light']['red'] = 0;

            $this->variable['gears']['front'] = 0; // 0 : locked up, 1 : maneuvering, 2 : locked down
            $this->variable['gears']['left'] = 0;
            $this->variable['gears']['right'] = 0;

            $this->variable['doors']['front'] = 0; // 0 : closed, 1 : maneuvering, 2 : open
            $this->variable['doors']['left'] = 0;
            $this->variable['doors']['right'] = 0;


            $this->variable['emergencyHydraulicCircuit'] = 0; // 0 : off, 1 : activated and locked

            $this->variable['set'] = 1;

            $_SESSION['variables'] = $this->variable;
        }
        else{
            $this->variable['gearsHandle'] = $_SESSION['variables']['gearsHandle'];

            $this->variable['light']['green'] = $_SESSION['variables']['light']['green'];
            $this->variable['light']['yellow'] = $_SESSION['variables']['light']['yellow'];
            $this->variable['light']['red'] = $_SESSION['variables']['light']['red'];

            $this->variable['gears']['front'] = $_SESSION['variables']['gears']['front'];
            $this->variable['gears']['left'] = $_SESSION['variables']['gears']['left'];
            $this->variable['gears']['right'] = $_SESSION['variables']['gears']['right'];

            $this->variable['doors']['front'] = $_SESSION['variables']['doors']['front'];
            $this->variable['doors']['left'] = $_SESSION['variables']['doors']['left'];
            $this->variable['doors']['right'] = $_SESSION['variables']['doors']['right'];


            $this->variable['emergencyHydraulicCircuit'] = $_SESSION['variables']['emergencyHydraulicCircuit'];

        }
    }

    function returnData()
    {
        return $this->variable;
    }

    function saveData($dataTable)
    {
        $this->variable = $dataTable;
        $_SESSION['variables'] = $dataTable;
    }
}
?>