<?php
    /*DB*/
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'positividad_covid';

    $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
    $semanaActual = 31;

    $id_estado = '';
    $nombre = '';
    $tendencia_casos = '';
    $tendencia_decesos = '';
    $tendencia_camas = '';
    $casos_est_activos = '';
    $tasa_inc_casos_est = '';
    $defunciones_est_catorce_dias = '';
    $tasa_mort_catorce_dias = '';
    $positividad = '';
    $semana = '';
    $id_estado_fk = '';

    //query to get data from the table
	$sql = "SELECT `positividad`, `semana`, `nombre`,`tasa_mort_catorce_dias` FROM `informacion` JOIN `estados` ON `id_estado_fk` = `id_estado` WHERE `semana` = " . $semanaActual . " ORDER BY `positividad` DESC";
    $sqlTwo = "SELECT `positividad`, `semana`, `nombre`,`tasa_mort_catorce_dias` FROM `informacion` JOIN `estados` ON `id_estado_fk` = `id_estado` WHERE `semana` = " . $semanaActual . " ORDER BY `tasa_mort_catorce_dias` DESC";
    // execute the query
    $query = $mysqli->query($sql);
    $data = array();
    while($r = $query->fetch_object()) {
        $data[] = $r;
    }

    $queryTwo = $mysqli->query($sqlTwo);
    $dataTwo = array();
    while($i =$queryTwo->fetch_object()) {
        $dataTwo[] = $i;
    }
?>