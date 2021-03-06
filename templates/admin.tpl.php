<div id="fixture_menu">
	<div class="fixture">
		<h2>Grupo A</h2>
        
        <?php
            $sql_partidosA = "SELECT * FROM partidos WHERE grupo = 'A' ORDER BY fecha ASC";
            $rsPartidosA = mysql_query($sql_partidosA,$conn) or die(mysql_error());
        ?>
        
        <table width="500">
            <?php while($rowPartidosA = mysql_fetch_assoc($rsPartidosA)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosA["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosA["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosA["equipo_visitante"], $conn);
              ?>
          	  <td width="70"><?php echo $equipo_locatario->getNombre(); ?></td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosA["goles_equipo_locatario"]; ?></div></td>
              <td width="15" align="center">vs</td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosA["goles_equipo_visitante"]; ?></div></td>
              <td width="74"><?php echo $equipo_visitante->getNombre(); ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidosA["id"]; ?>"><p1>Ingresar resultado<p1></a></td>
            </tr>
            <?php } ?>
        </table>
        
          <h2>Grupo B</h2>
        <?php
            $sql_partidosB = "SELECT * FROM partidos WHERE grupo = 'B' ORDER BY fecha ASC";
            $rsPartidosB = mysql_query($sql_partidosB,$conn) or die(mysql_error());
        ?>
        
        <table width="500">
            <?php while($rowPartidosB = mysql_fetch_assoc($rsPartidosB)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosB["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosB["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosB["equipo_visitante"], $conn);
              ?>
              <td width="70"><?php echo $equipo_locatario->getNombre(); ?></td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosB["goles_equipo_locatario"]; ?></div></td>
              <td width="15" align="center">vs</td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosB["goles_equipo_visitante"]; ?></div></td>
              <td width="74"><?php echo $equipo_visitante->getNombre(); ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidosB["id"]; ?>"><p1>Ingresar resultado<p1></a></td>
            </tr>
            <?php } ?>
        </table>
        
            <h2>Grupo C</h2>
        <?php
            $sql_partidosC = "SELECT * FROM partidos WHERE grupo = 'C' ORDER BY fecha ASC";
            $rsPartidosC = mysql_query($sql_partidosC,$conn) or die(mysql_error());
        ?>
        
        <table width="500">
            <?php while($rowPartidosC = mysql_fetch_assoc($rsPartidosC)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidosC["fecha"],$conn); ?></td>
              <?php 
              	$equipo_locatario = new Equipo($rowPartidosC["equipo_locatario"], $conn);
				$equipo_visitante = new Equipo($rowPartidosC["equipo_visitante"], $conn);
              ?>
              <td width="70"><?php echo $equipo_locatario->getNombre(); ?></td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosC["goles_equipo_locatario"]; ?></div></td>
              <td width="15" align="center">vs</td>
              <td width="15" align="center"><div class="resultado"><?php echo $rowPartidosC["goles_equipo_visitante"]; ?></div></td>
              <td width="74"><?php echo $equipo_visitante->getNombre(); ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidosC["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
	</div>
	
	<div class="fixture_finales">
            <h2>Cuartos de Finales</h2>
            
            <table width="500">
            <?php while($rowPartidoS1 = mysql_fetch_assoc($rsPartidoS1)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoS1["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoS1["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoS1["equipo_locatario"], $conn);
					$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "1ro Grupo A";
              	}
              	if($rowPartidoS1["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoS1["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "1er Tercero";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoS1["goles_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoS1["goles_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoS1["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        <table width="500">
            <?php while($rowPartidoS2 = mysql_fetch_assoc($rsPartidoS2)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoS2["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoS2["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoS2["equipo_locatario"], $conn);
              		$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "2do Grupo A";
              	}
              	if($rowPartidoS2["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoS2["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "2do Grupo C";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoS2["goles_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoS2["goles_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoS2["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        <table width="500">
            <?php while($rowPartidoS3 = mysql_fetch_assoc($rsPartidoS3)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoS3["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoS3["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoS3["equipo_locatario"], $conn);
              		$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "1ro Grupo B";
              	}
              	if($rowPartidoS3["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoS3["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "2do Tercero";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoS3["goles_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoS3["goles_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoS3["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        <table width="500">
            <?php while($rowPartidoS4 = mysql_fetch_assoc($rsPartidoS4)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoS4["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoS4["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoS4["equipo_locatario"], $conn);
              		$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "1ro Grupo C";
              	}
              	if($rowPartidoS4["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoS4["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "2do Grupo B";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoS4["goles_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoS4["goles_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoS4["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        
        <h2>Semifinales</h2>
        <table width="500">
            <?php while($rowPartidoG1 = mysql_fetch_assoc($rsPartidoG1)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoG1["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoG1["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoG1["equipo_locatario"], $conn);
					$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "Ganador S1";
              	}
              	if($rowPartidoG1["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoG1["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Ganador S2";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoG1["goles_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoG1["goles_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoG1["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        <table width="500">
            <?php while($rowPartidoG2 = mysql_fetch_assoc($rsPartidoG2)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoG2["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoG2["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoG2["equipo_locatario"], $conn);
              		$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "Ganador S3";
              	}
              	if($rowPartidoG2["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoG2["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Ganador S4";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoG2["goles_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoG2["goles_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoG2["id"]; ?>">Ingresar resultado</a></td>
            </tr>
            <?php } ?>
        </table>
        
        <h2>Tercer Puesto</h2>
            <table width="500">
            <?php while($rowPartidoTERCER = mysql_fetch_assoc($rsPartidoTERCER)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoTERCER["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoTERCER["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoTERCER["equipo_locatario"], $conn);
					$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "Perdedor G1";
              	}
              	if($rowPartidoTERCER["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoTERCER["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Perdedor G2";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoTERCER["goles_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoTERCER["goles_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoTERCER["id"]; ?>">Ingresar resultado</a></td>
              <td></td>
            </tr>
            <?php } ?>
        </table>
        
        <h2>Final</h2>
            <table width="500">
            <?php while($rowPartidoFINAL = mysql_fetch_assoc($rsPartidoFINAL)){ ?>
            <tr>
              <td width="86" align="center"><?php echo convertString2Date($rowPartidoFINAL["fecha"],$conn); ?></td>
              <?php
              	if($rowPartidoFINAL["equipo_locatario"] != 0){
              		$equipo_locatario_obj = new Equipo($rowPartidoFINAL["equipo_locatario"], $conn);
					$equipo_locatario = $equipo_locatario_obj->getNombre();
              	}else{
              		$equipo_locatario = "Ganador G1";
              	}
              	if($rowPartidoFINAL["equipo_visitante"] != 0){
              		$equipo_visitante_obj = new Equipo($rowPartidoFINAL["equipo_visitante"], $conn);
					$equipo_visitante = $equipo_visitante_obj->getNombre();
              	}else{
              		$equipo_visitante = "Ganador G2";
              	}
              ?>
              <td width="89"><?php echo $equipo_locatario; ?></td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoFINAL["goles_equipo_locatario"]; ?></div></td>
              <td width="17" align="center">vs</td>
              <td width="17" align="center"><div class="resultado"><?php echo $rowPartidoFINAL["goles_equipo_visitante"]; ?></div></td>
              <td width="114"><?php echo $equipo_visitante; ?></td>
              <td class="letra_cursiva"><a href="actualizar_resultado.php?id=<?php echo $rowPartidoFINAL["id"]; ?>">Ingresar resultado</a></td>
              <td></td>
            </tr>
            <?php } ?>
        </table>
	</div>
</div>