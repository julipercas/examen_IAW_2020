<?php
include 'head.php';
                                             
 print' 
            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';

    //comprobamos que se haya pulsado el boton 'dar de baja'
    if (isset ($_REQUEST['borrar'])){
        //comprobamos que se haya rellenado el campo
        if (strlen($_REQUEST['num_incidencia'])==0){
            echo "Por favor, introduzca un numero de incidencia.";
        }
        elseif (!is_numeric($_REQUEST['num_incidencia'])){
            echo "Por favor, introduzca un numero de incidencia de valor numerico.";
        }
        else{//extraemos el numero de incidencia, y creamos un contador para comparar el antes y el despues.
            $numero_incidencia=$_REQUEST['num_incidencia'];
            $contador_antes=count($_SESSION['incidencias']);
            unset($_SESSION['incidencias'][$numero_incidencia]);
            $contador_despues=count($_SESSION['incidencias']);

            //incluimos un error de si no se encuentra la incidencia. 
            if ($contador_antes!=$contador_despues){
                echo "La incidencia con el identificador ".$numero_incidencia." se ha eliminado.<br>";
            }
            else{
                echo "No existe incidencia con el identificador ".$numero_incidencia;
            }
        }
    }
 include 'pie.php';