<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Landing Gears</title>

    <link rel="stylesheet" href="style.css"/>

</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: olivier
 * Date: 02/11/15
 * Time: 13:46
 */

/**
 * AGILE
 * XP
 * Pair Programming
 * Block 3
 *
 * View
 */

function show($dataTable){
?>
<table>
    <tr>
        <td id="light" ><img <?php if($dataTable['light']==2) echo 'class="blink"' ?>src="./img/light<?php echo $dataTable['light'] ?>.jpg"/></td>
        <td style="padding-left:200px;">
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="up">
                <input type="submit" value="Gears Up" <?php if($dataTable['gears']['front'] != 2 || $dataTable['gears']['left'] !=2 || $dataTable['gears']['right'] !=2 || $dataTable['doors']['front'] != 0 || $dataTable['doors']['left'] != 0 || $dataTable['doors']['right'] != 0 || $dataTable['emergencyHydraulicCircuit'] != 0) echo "disabled";?>>
            </form>
            <form action="index.php" method="post">
                <input type="hidden" name="action" value="down">
                <input type="submit" value="Gears Down" <?php if($dataTable['gears']['front'] != 0 || $dataTable['gears']['left'] != 0 || $dataTable['gears']['right'] != 0 || $dataTable['doors']['front'] != 0 || $dataTable['doors']['left'] != 0 || $dataTable['doors']['right'] != 0 || $dataTable['emergencyHydraulicCircuit'] != 0) echo "disabled"; ?>>
            </form>

        </td>
    </tr>
</table>
<table>
    <tr>
        <td></td>
        <td><center><h2>Doors</h2></center></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>Front<br><img src="./img/door2_<?php echo $dataTable['doors']['front']?>.jpg"></td>
        <td></td>
    </tr>
    <tr>
        <td>Left<br><img src="./img/door2_<?php echo $dataTable['doors']['left']?>.jpg"></td>
        <td></td>
        <td>Right<br><img src="./img/door2_<?php echo $dataTable['doors']['right']?>.jpg"></td>
    </tr>
    <tr>
        <td></td>
        <td><center><h2>Gears</h2></center></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>Front<br><img src="./img/gear2_<?php echo $dataTable['gears']['front']?>.jpg"></td>
        <td></td>
    </tr>
    <tr>
        <td>Left<br><img src="./img/gear2_<?php echo $dataTable['gears']['left']?>.jpg"></td>
        <td></td>
        <td>Right<br><img src="./img/gear2_<?php echo $dataTable['gears']['right']?>.jpg"></td>
    </tr>

</table>
<?php
}

?>
</body>