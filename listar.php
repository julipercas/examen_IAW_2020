<?php
include 'head.php';
                                          
 print' 
         <strong>SELECCIONA EL TIPO DE INCIDENCIA A LISTAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              										  </td></tr>
              <tr>
                <td align="right"><strong>Tipo :</strong></td><td>
                 <div align="left">
                    <select name="tipo">
                     <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                      <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Otros">Otros</option>
                    </select>
                </div>
               </td>
              </tr>
              <tr >
              <td colspan="2"><div align="center"><strong>
                <input name="listar" type="submit" id="listar" value="Listar"/>
                </strong>
                </div>
              </td>
            </tr>
              
        </table>
    </form>
        </div>';

        //comprobamos que se ha pinchado el boton "listar"
        if (isset ($_REQUEST['listar'])){
          //extraemos el tipo de incidencia que queremos visualizar
          $tipo=$_REQUEST['tipo'];
          //lo cotejamos con el contenido del array, y si el valor[1] (que es el segundo elemento de nuestro array, el tipo de incidencia) coincide con la variable $tipo, la muestra por pantalla
          foreach($_SESSION['incidencias'] as $clave=>$valor){
            if ($valor[1]==$tipo){
              print_r ($valor);
            }
          }

          //En principio, la tabla se mostraria de esta manera. Al final me hice un lio con los arrays matrices y no logre que se mostraran bien, por lo que he hecho las dos partes por separado.
          echo'<table>
          <tr>
          <th>ID</th>
          <th>urgencia</th>
          <th>tipo</th>
          <th>Fecha</th>
          <th>Lugar</th>
          <th>IP</th>
          <th>Descripcion</th>';
          foreach($_SESSION['incidencias'] as $clave=>$valor){
            //$clave es el ID
            $i=0;
            echo'<tr>';
            echo'<td>'.$clave.'</td>';
            //$valor es el array asociativo que contiene
            foreach($valor as $contenido){
              echo'<td>';
              print_r ($contenido[$i]);
              echo '</td>';
              $i++;  
            }
            echo'<tr>';
          }
          echo '</table>';
        }
 include 'pie.php';