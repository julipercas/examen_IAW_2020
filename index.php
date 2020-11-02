<?php
include 'head.php';
                                             

echo'<center><img src="images/alta_incidencia.png" width="600" height="300" alt="incidencia"/></center>';

$_SESSION['incidencias']=array(
    1=>array("Si", "Vandalismo", "25-10-2020 10:37:43", "Plaza mayor", "193.12.56.25", "Farola rota"),
    2=>array("Si","Basuras","26-10-2020 12:07:23","C/Pelicano 25","131.120.121.125","Contenedor basura roto"),
    3=>array("Si","Vandalismo","27-10-2020 00:07:23","C/Cigueña 5","145.10.11.15","Banco roto"),
);

$_SESSION['incremento']=3;



include 'pie.php';

