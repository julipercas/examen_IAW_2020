<?php
include 'head.php';
                                             
 print' 
        <h2 class="postheader">FORMULARIO ALTA INCIDENCIA</h2>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              <tr>
              <td align="right"><strong>Urgente? :</strong></td>
              <td>

              <input type="checkbox" name="urgente" value="urg"/>Si											  </td></tr>
              <tr><td align="right"><strong>Tipo :</strong></td><td>
              <div align="left">
                    <select name="tipo">
                      <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                       <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Mobiliario Urbano">Otros</option>
                      
                    </select>
              </div></td></tr>
              
              <tr><td align="right"><strong>Lugar :</strong></td><td>
              <div align="left">
                    <input type="text" name="lugar" size=35"/>
              </div></td></tr>
              <tr><td align="right"><strong>Descripcion: </strong></td><td>
              <div align="left">
                    <textarea cols=50 rows=4 name="descripcion"></textarea>
              </div></td></tr>
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="enviar" type="submit" id="enviar" value="Dar de alta"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>
<div id="imagen1">
        </div>        
';
//cuando pinchen sobre el boton de 'enviar', comenzamos el procedimiento.
if (isset ($_REQUEST['enviar'])){
      //comprobamos que todos los campos han sido rellenados
      if (strlen($_REQUEST['lugar'])==0 OR strlen($_REQUEST['descripcion'])==0){
            echo "Por favor, incluya todos los datos solicitados.";
      }
      else{
            //una vez hecha la comprobacion, extraemos los datos
            if (isset($_REQUEST['urgente']))
                  $urgencia='Si';
            else
                  $urgencia='No';
            $tipo=$_REQUEST['tipo'];
            $lugar=htmlspecialchars($_REQUEST['lugar']);
            $descripcion=htmlspecialchars($_REQUEST['descripcion']);
            
            //los datos de fecha y IP se extraen de una forma distinta. El numero de incidencia se generara de forma automatica.
            $ip=$_SERVER['REMOTE_ADDR'];
            $fecha=date('d-m-Y H:i:s');
            $_SESSION['incremento']+=1;
            $id=$_SESSION['incremento'];

            //ahora insertamos todos nuestros datos a un array.
            $_SESSION['incidencias'][$id]=array($urgencia,$tipo,$fecha,$lugar,$ip,$descripcion);
            }

            
      }


 include 'pie.php';
											
                           