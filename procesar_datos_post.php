<?php
$peliculasVistas = null;
$datos = $_POST;
echo "<pre>";
print_r($datos);
echo "</pre>";
//echo $datos["peliculas_vistas"];

//echo count($datos);
$nombre = $datos["nombre"];
$apellido = $datos["apellido"];
$fecha = $datos["Calendario"];

//Funcion para obtener la edad
$hoy = getdate();
//print_r($hoy);
$año = $hoy["year"];
$mes = $hoy["mon"];
$dia = $hoy["mday"];
$datetime1 = new DateTime("$fecha");
$datetime2 = new DateTime("$año/$mes/$dia");
$interval = $datetime1->diff($datetime2);
//echo "Impresion de interval $interval";
$datito = intval($interval->format('%R%a días')); //ver porque esto funciona pero lo de abajo no.
//$datito=$interval->format('%R%a días');
//echo $datito;
$edad = intval($datito / 365);
//echo "La edad es " . intval($datito/365);



if (isset($var)) {
    $peliculasVistas = $datos["peliculas_vistas"];
    // Impresiones
    echo "<p> El usuario: <b> $nombre $apellido ($edad </b> años) miró " . count($peliculasVistas) . " de la lista. Las peliculas son: </p>";
    echo "<ul>";
    foreach ($peliculasVistas as $peli) {
        echo "<li> $peli </li>";
    }
    echo "</ul>";
    //Fin impresiones


    //Condicionales

    if (count($peliculasVistas) == 10) {
        echo "<p> Guauuu veo que tenes mucho tiempo para mirar peliculas</p>";
    } else if (count($peliculasVistas) > 6 && count($peliculasVistas) < 10) {
        echo "<p> Ok, Ok, te gustan las pelis</p>";
    } else if (count($peliculasVistas) > 2 && count($peliculasVistas) <= 6) {
        echo "<p> Bueno, es normal, estas un poco ocupado</p>";
    } else {
        echo "<p> Necesitas un poco de tiempo libre, no puede ser que no hayas visto 3 peliculas de la lista o no te gustan??</p>";
    }

    echo "<p> Vamos a ver tus gustosss....";

    if (in_array("Ipman 1", $peliculasVistas) && in_array("Ipman 2", $peliculasVistas) && in_array("Ipman 3", $peliculasVistas)) {
        echo "<p>No solo te gustan las peliculas de artes marciales, al parecer te encanta y tenes muy buen gusto</p>";
        if (in_array("The Legent fist return", $peliculasVistas)) {
            $indice = array_search("The Legent fist return", $peliculasVistas);
            echo "<p>OMG, si tmb viste <b> $peliculasVistas[$indice] </b> estoy en presencia de un fan de Donnie Yen</p>";
        }
    } else if (in_array("Ipman 1", $peliculasVistas) || in_array("Ipman 2", $peliculasVistas) || in_array("Ipman 3", $peliculasVistas)) {
        echo "<p>yVeo que te gustan las pelis de Ipman</p>";
    }
} else {
    echo "Al parecer no tenemos el mismo gusto en peliculas, es una lastima...";
}







//Fecha
/* */
