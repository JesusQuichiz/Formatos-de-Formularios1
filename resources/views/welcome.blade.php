<!DOCTYPE html>
<html>
    <!DOCTYPE html>
<html>
<head>
  <style>
        @page {
            size: A3 landscape;
            margin: 0;
        }

        html, body {
            width: 420mm;
            height: 297mm;
            margin: 0;
            padding: 0;
        }

        .content {
            width: 97.5%;
            height: 95%;
            margin: 5mm;
            box-sizing: border-box;
        }
        table{border-collapse: collapse;}
        td{font-size: 8.2px;height: 10px}
        /*tbody{border: 1px solid black;}*/
        th{text-align: center;font-size: 8.2px;height: 10px}
        .vertical-text {
            writing-mode: vertical-rl;
            text-orientation: upright;
            white-space: nowrap;
        }
        .vertical-text-container {
            display: flex;
            flex-direction: row;
        }


    /* Aquí puedes agregar tus estilos personalizados para el contenido del documento */

  </style>
</head>
<body>
  <div class="content">
    <table align="right">
        <tr height="20px"><th style="text-align: left" width="155px">Fecha Actual: ____________________</th><th style="text-align: left">Fecha de Ingreso: _______________</th>
            <td width="40px"></td><th style="text-align: left" width="180px">HORA DE INGRESO: ______________</th><th style="text-align: left" width="135px">DNI: __________________</th>
            <th style="text-align: left" colspan="2">HC: ________________________</th><TD WIDTH="55px"></TD><th style="text-align: left" width="160px">Días de Permanencia: ____________</th>
            <th style="text-align: left" width="220px">Perdidas insensibles: _____________ / _____________</th><TD WIDTH="40px"></TD><th style="text-align: left">Agua de Oxidación: _______ / _______</th>
            <td width="55px"></td><th style="text-align: left;border: 2px black solid;">NUMERO DE CAMA</th>
        </tr>
        <tr height="20px"><th style="text-align: left" colspan="5">NOMBRES Y APELLIDOS: _______________________________________________________________________________________________</th>
            <th style="text-align: left" width="90px">Edad: _________</th><th style="text-align: left" colspan="4">CIRUGIAS: _____________________________________________________________________________</th>
            <th></th><th style="text-align: left">Fecha de la cirugia: ________________</th><th></th><th style="border-left:2px black solid;border-right: 2px black solid"></th>
        </tr>
        <tr height="20px"><th style="text-align: left" colspan="6">Antecedentes: _______________________________________________________________________________________________</th>
            <th style="text-align: left" colspan="3">RAM: _________________________________________________</th>
            <th style="text-align: left">Grado de Dependencia: ( I ) ( II ) ( III ) ( IV ) ( V )</th>
            <th></th><th style="text-align: left">Días Post Operatorios: ________________</th><th></th><th style="border-left:2px black solid;border-right: 2px black solid"></th>
        </tr>
        <tr height="20px"><th style="text-align: left" colspan="13">Diagnóstico Médico: ____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</th>
            <th style="border-left:2px black solid;border-right: 2px black solid"></th>
        </tr>
        <tr height="20px"><th style="text-align: left">G.S.: _______________________</th><th style="text-align: left" colspan="2">Rh: _________ Religión: _____________________</th>
            <th style="text-align: left" colspan="3">Peso: _______________</th>
            <th style="text-align: left" colspan="3">B.H. Anterior: ________________________30___________</th>
            <th style="text-align: left" colspan="2">B.H. Acumulado: ___________________________________</th><th colspan="2"></th><th style="border-left:2px black solid;border-right: 2px black solid"></th>
        </tr>
        
    </table>
    <table border="1">
        <tr align="center" bgcolor="sky-blue">
            <th colspan="3">HORA</th>
            <?php
                $d=8;
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {
                        if ($d<=24) {
                            echo "<td style='border-top: 3px black solid;border-left: 3px black solid;border-right: 3px black solid' width='50'>";
                            echo $d;
                            echo "</td>";
                            $d++;
                        }else {
                            $d=1;
                            echo "<td style='border-top: 3px black solid;border-left: 3px black solid;border-right: 3px black solid' width='50'>";
                            echo $d;
                            echo "</td>";
                            $d++;
                        }
                    }else{
                        if ($d<=24) {
                            echo "<td width='50'>";
                            echo $d;
                            echo "</td>";
                            $d++;
                        }else {
                            $d=1;
                            echo "<td width='50'>";
                            echo $d;
                            echo "</td>";
                            $d++;
                        }
                    }
                }
            ?>
            <th rowspan="2" colspan="5" style="border: 2px black solid">VALORACION DE LA LINEA ARTERIAL</th>
            <th rowspan="2" colspan="2" style='border-top: 2px black solid;border-left: 2px black solid;border-right: 2px black solid'>TISS</th>
        </tr>
        <tr>
            <td rowspan="11" bgcolor="sky-blue" width="25px" align="center"><div class="vertical-text-container"><div class="vertical-text">MONITOREO</div><div class="vertical-text">HEMODINAMICO</div></div></td>
            <td colspan="2" height="14px">Estado de conciencia</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}
                }
            ?>
        </tr>
        <tr>
            <td colspan="2" height="14px">Pupila OD/OI</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}
                }
            ?>
            <th colspan="3" style="border: 2px black solid" bgcolor="sky-blue">ARTERIA</th>
            <th style="border: 2px black solid" width="50px" bgcolor="sky-blue">DIA</th><th style="border: 2px black solid" width="50px" bgcolor="sky-blue">NOCHE</th><th style="border-right: 2px black solid">TURNO</th><th style="border-right: 2px black solid">PUNTAJE</th>
        </tr>
        <tr>
            <td colspan="2" height="14px">Glasgow( ) RASS( )</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}
                }
            ?>
            <td rowspan="2" colspan="3" bgcolor="sky-blue">RETORNO SANGRE ARTERIAL</td><TD rowspan="2" align="center">SI / NO</TD><TD rowspan="2" style="border-right: 2px black solid"></TD>
            <Th style="border-right: 2px black solid">MT</Th><TD style="border-right: 2px black solid"></TD>
        </tr>
        <tr>
            <td colspan="2" height="14px">Presión Arterial</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}
                }
            ?>
            <th>N</th><TD style="border-right: 2px black solid"></TD>
        </tr>
        <tr>
            <td colspan="2" height="14px">Presión Arterial Media</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}
                }
            ?>
            <td colspan="3" rowspan="2">PULSO ARTERIAL</td><td rowspan="2" align="center">DEBIL / FUERTE</td><td rowspan="2"></td>
            <th colspan="2" rowspan="2" style='border-top: 2px black solid;border-left: 2px black solid;border-right: 2px black solid' bgcolor="sky-blue">NORTON</th>
        </tr>
        <tr>
            <td colspan="2" height="14px">Frecuencia Cardiaca</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}
                }
            ?>
        </tr>
        <tr>
            <td colspan="2" height="14px">Ritmo Cardiaco</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}
                }
            ?>
            <td rowspan="2" colspan="3">COLORACION DE PIEL</td><TD rowspan="2" align="center">CIANOSIS / PALIDA</TD><TD rowspan="2" style="border-right: 2px black solid"></TD>
            <Th>TURNO</Th><th style="border-right: 2px black solid">PUNTAJE</th>
        </tr>
        <tr>
            <td colspan="2" height="14px">Frecuencia Respiratoria</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}
                }
            ?><Th>MT</Th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr>
            <td colspan="2" height="14px">Temperatura Axilar</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}
                }
            ?>
            <TD colspan="3" rowspan="2">UBICACION</TD><TD rowspan="2"></TD><TD rowspan="2" style="border-right: 2px black solid"></TD><TH>N</TH><TH style="border-right: 2px black solid"></TH>
        </tr>
        <tr>
            <td colspan="2" height="14px">PVC( ) PIA( ) PIC( )</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}
                }
            ?><th colspan="2" rowspan="2" style='border-top: 2px black solid;border-left: 2px black solid;border-right: 2px black solid' bgcolor="sky-blue">CPOT</th>
        </tr>
        <tr>
            <td colspan="2" height="14px">Presión de Cuff</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}
                }
            ?><td rowspan="2" colspan="3"><?php echo "LLENADO CAPILAR <2" ?></td><td rowspan="2" align="center">SI / NO</td><td rowspan="2" style="border-right: 2px black solid"></td>
        </tr>
        <tr>
            <td bgcolor="sky-blue" height="14px"></td><td colspan="2" style="border: 2px black solid">TET N°/FIJACION/</td>
            <?php
                for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border: 2px black solid;border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td style='border: 2px black solid'></td>";}
                }
            ?><Th>TURNO</Th><th style="border-right: 2px black solid">PUNTAJE</th>
        </tr>
        <tr><td rowspan="13" width="20" bgcolor="sky-blue" align="center"><div class="vertical-text-container"><div class="vertical-text">MONITOREO</div><div class="vertical-text">RESPIRATORIO</div></div></td><td colspan="2">VM( ) VMN( ) CNAF( )</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><TH colspan="5" style="border: 2px black solid" bgcolor="sky-blue">LOCALIZACION DE LPP T CATETERES</TH>
                    <Th>MT</Th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td colspan="2">MODO</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td style="border: 2px black solid" colspan="5" rowspan="24"></td><TH style="border-bottom: 2px black solid">N</TH><TH style="border-right: 2px black solid;border-bottom: 2px black solid"></TH>
        </tr>
        <tr><td colspan="2">FIO2</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center" colspan="2" bgcolor="sky-blue">MORSE</td>
        </tr>
        <tr><td colspan="2">F.R./ PEEP</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center">MT</td><td></td>
        </tr>
        <tr><td colspan="2">VTP/VTE/FLUJO/LT</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center">N</td><td></td>
        </tr>
        <tr><td colspan="2">Vol. Min</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center" colspan="2" bgcolor="sky-blue">LEYENDA</td>
        </tr>
        <tr><td colspan="2">I:E</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center" rowspan="2">CVC</td><td rowspan="2"></td>
        </tr>
        <tr><td colspan="2">PRESIÓN SOPORTE/ P. MAXIMA</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?>
        </tr>
        <tr><td colspan="2">P. LIMINTE / P. CONTROL / P. INSPIRATORIO</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center" rowspan="2">CVP</td><td rowspan="2"></td>
        </tr>
        <tr><td colspan="2">PRESIÓN PICO / T. INSPIRATORIO</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?>
        </tr>
        <tr><td colspan="2">CO2</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center" rowspan="2">LPP</td><td rowspan="2"></td>
        </tr>
        <tr><td colspan="2">Sat02</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?>
        </tr>
        <tr><td colspan="2" style="border-top: 2px black solid">INDICE DE ROX</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center" rowspan="2">DRENES</td><td rowspan="2"></td>
        </tr>
        <tr><td colspan="3" style="border: 2px black solid" align="center">ESCALA (EVA) 0-10 / ESVALA CPOT 0-8</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border: 2px black solid;border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td style='border: 2px black solid'></td>";}} ?>
        </tr>
        <tr><td colspan="3" style="border-bottom: 2px black solid" align="center" bgcolor="sky-blue">HEMOGLUCO TEST</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center" rowspan="2">Enfisema SC</td><td rowspan="2"></td>
        </tr>
        <tr><td colspan="3" align="center" bgcolor="sky-blue">INSULINO TERAPIA</td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?>
        </tr>
        <tr><td rowspan="9" width="20" bgcolor="sky-blue" align="CENTER"><div class="vertical-text-container"><div class="vertical-text">INFUSIONES</div></div></td><td colspan="2" height="14px"></td>
            <?php for ($i=1; $i <= 24; $i++) {
                    if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center" rowspan="2">H. OPERATORIA</td><td rowspan="2"></td>
        </tr>
        <tr><td colspan="2" height="14px"></td><?php for ($i=1; $i <= 24; $i++) { if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?>
        </tr>
        <tr><td colspan="2" height="14px"></td><?php for ($i=1; $i <= 24; $i++) { if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center" rowspan="2">CAF</td><td rowspan="2"></td>
        </tr>
        <tr><td colspan="2" height="14px"></td><?php for ($i=1; $i <= 24; $i++) { if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?>
        </tr>
        <tr><td colspan="2" height="14px"></td><?php for ($i=1; $i <= 24; $i++) { if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center" rowspan="2">LINEA ARTERIAL</td><td rowspan="2"></td>
        </tr>
        <tr><td colspan="2" height="14px"></td><?php for ($i=1; $i <= 24; $i++) { if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?>
        </tr>
        <tr><td colspan="2" height="14px"></td><?php for ($i=1; $i <= 24; $i++) { if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td align="center" rowspan="2">SDVE</td><td rowspan="2"></td>
        </tr>
        <tr><td colspan="2" height="14px">NE</td><?php for ($i=1; $i <= 24; $i++) { if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?>
        </tr>
        <tr><td colspan="2" height="14px">DIURESIS HORARIA</td><?php for ($i=1; $i <= 24; $i++) { if ($i%6==0) {echo "<td style='border-left: 3px black solid;border-right: 3px black solid'></td>";
                    }else{echo "<td></td>";}} ?><td bgcolor="sky-blue" colspan="2"></td>
        </tr>
        <tr bgcolor="sky-blue"><td colspan="3" height="14px" style="border-top: 3px black solid;border-left: 3px black solid"></td>
            <TH colspan="3" style="border-top: 3px black solid;border-left: 2px black solid">MAÑANA</TH>
            <th colspan="3" style="border-top: 3px black solid;border-left: 2px black solid">TARDE</th>
            <th colspan="3" style="border-top: 3px black solid;border-left: 2px black solid">NOCHE I</th>
            <th colspan="3" style="border-top: 3px black solid;border-left: 2px black solid">NOCHE II</th>
            <th colspan="4" style="border-top: 3px black solid;border-left: 3px black solid">TOTAL EN 24 HRS</th>
            <th colspan="10" style="border: 2px black solid;border-left: 3px black solid">MONITOREO HEMODINAMICO</th>
            <th colspan="5" rowspan="2" style="border-top: 2px black solid;border-left: 2px black;border-right:2px black solid">MONITOREO DE ACCESOS INVASIVOS</th></tr>
        <tr><td rowspan="25" style="border-left:3px black solid;border-bottom:3px black solid;font-size:15px" bgcolor="sky-blue"><div class="vertical-text">BALANCE HIDRICO</div></td>
            <td rowspan="12" width="20px" bgcolor="sky-blue" style="font-size: 12px"><div class="vertical-text">INGRESO</div></td>
                <td height="14px">DIETA NE ( ) VO ( )</td><?php for ($i=1; $i < 5; $i++) { 
                echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?>
                <th colspan="3" style='border: 2px black solid;border-left: 3px black solid'>HORA</th><th colspan="2" style="font-size: 7.5px;border: 2px black solid">PARAMETROS NORMALES</th>
                <?php for ($i=1; $i < 6; $i++) { echo "<td style='border: 2px black solid' width='50px'></td>"; } ?>
        </tr>
        <tr><td height="14px">NTP 2:1 ( )  NTP 3:1 ( )</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border: 2px black solid;border-left: 3px black solid;text-align: left'>GASTO CARDIACO: GC</th><th colspan="2" style="border: 2px black solid">4-6 L/MIN</th>
            <?php for ($i=1; $i < 6; $i++) { echo "<td style='border: 2px black solid' width='50px'></td>"; } ?>
            <th width="50px">INVASIVO</th><th colspan="2">FECHA</th><th>LUGAR</th><th style="border-right: 2px black solid">T/PERMANENCIA</th>
        </tr>
        <tr><td height="14px">AGUA</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border: 2px black solid;border-left: 3px black solid;text-align: left'>INDICE CARDIACO: IC</th><th colspan="2" style="border: 2px black solid">2.2-4/min/m2</th>
            <?php for ($i=1; $i < 6; $i++) { echo "<td style='border: 2px black solid' width='50px'></td>"; } ?>
            <td>SOG / SNG</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px">HIDRATACIÓN</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border: 2px black solid;border-left: 3px black solid;text-align: left'>FRECUENCIA CARDIACA: FC</th><th colspan="2" style="border: 2px black solid">60-100 lpm</th>
            <?php for ($i=1; $i < 6; $i++) { echo "<td style='border: 2px black solid' width='50px'></td>"; } ?>
            <td>SNY</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px">TTO.EV</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border: 2px black solid;border-left: 3px black solid;text-align: left'>TIEMPO DE FLUJO CORREJIDO: TFC</th><th colspan="2" style="border: 2px black solid">330-360 mseg</th>
            <?php for ($i=1; $i < 6; $i++) { echo "<td style='border: 2px black solid' width='50px'></td>"; } ?>
            <td>CVC</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px"></td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border: 2px black solid;border-left: 3px black solid;text-align: left'>VOLUMEN LATIDO: VL</th><th colspan="2" style="border: 2px black solid">50-10 ML</th>
            <?php for ($i=1; $i < 6; $i++) { echo "<td style='border: 2px black solid' width='50px'></td>"; } ?>
            <td>CVC</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px"></td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border: 2px black solid;border-left: 3px black solid;text-align: left'>INDICE DE RESISTENCIA VASCULAR SISTEMICA: IRVS</th><th colspan="2" style="border: 2px black solid">1200-2400 dynas/m2</th>
            <?php for ($i=1; $i < 6; $i++) { echo "<td style='border: 2px black solid' width='50px'></td>"; } ?>
            <td>CVP</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px"></td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border: 2px black solid;border-left: 3px black solid;text-align: left'>RESISTENCIA VASCULAR SISTEMICA: RVS</th><th colspan="2" style="border: 2px black solid">800-1200 dyna</th>
            <?php for ($i=1; $i < 6; $i++) { echo "<td style='border: 2px black solid' width='50px'></td>"; } ?>
            <td>L.A</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px"></td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border: 2px black solid;border-left: 3px black solid;text-align: left'>PRESIÓN VENOSA CENTRAL: PVC mmHg</th><th colspan="2" style="border: 2px black solid"></th>
            <?php for ($i=1; $i < 6; $i++) { echo "<td style='border: 2px black solid' width='50px'></td>"; } ?>
            <td>CAF</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px"></td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border: 2px black solid;border-left: 3px black solid;text-align: left'>IVRS</th><th colspan="2" style="border: 2px black solid">1200-2400 dynas/m2</th>
            <?php for ($i=1; $i < 6; $i++) { echo "<td style='border: 2px black solid' width='50px'></td>"; } ?>
            <td>TET / TQT</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px">H2O OXIDACIÓN</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="5" style='border: 2px black solid;border-left: 3px black solid;text-align: left' bgcolor="sky-blue">TRANSFUSIONES</th><th colspan="5" style="border: 2px black solid" bgcolor="sky-blue">PRONACION</th>
            <td>TALLA VESICAL</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px" style="border: 3px black solid">SUB TOTAL</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border: 3px black solid'></td>"; } echo "<td colspan='4' style='border: 3px black solid'></td>" ?> 
            <th colspan="3" style='border-left: 3px black solid;text-align: left'>HEMODERIVADOS</th><th style="border-left: 2px black solid">ACTUAL (CANTIDAD)</th>
            <th style="border-left: 2px black solid;border-right: 2px black solid;font-size:7.5px">ACUMULADO</th><th rowspan="2" style="border-left: 2px black solid" bgcolor="sky-blue">CICLOS</th><th rowspan="2" bgcolor="sky-blue">INICIO</th><th rowspan="2" bgcolor="sky-blue">HORA</th><th rowspan="2" bgcolor="sky-blue">TERMINO</th><th rowspan="2" style="border-right: 2px black solid" bgcolor="sky-blue">HORA</th>
            <td>SONDA FOLEY</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td rowspan="13" bgcolor="sky-blue" style="font-size: 12px"><div class="vertical-text">EGRESOS</div></td>
            <td height="14px">DIURESIS</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border-left: 3px black solid;text-align: left'>PAQUETE GLOBULAR</th><td align="center">3</td><td align="center">5</td>
            <td>CARDIO Q</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px">DEPOSISIÓN</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border-left: 3px black solid;text-align: left'>CRIOPRECIPITADOS</th><td></td><td></td>
            <td style="border-left: 2px black solid">I</td><?php for ($i=1; $i < 5; $i++) { echo "<td></td>"; } ?>
            <td style="border-left: 2px black solid">DREN LUMINAR</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px">R. GÁSTRICO / VÓMITO</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border-left: 3px black solid;text-align: left'>PLAQUETAS</th><td></td><td></td>
            <td style="border-left: 2px black solid">II</td><?php for ($i=1; $i < 5; $i++) { echo "<td></td>"; } ?>
            <td style="border-left: 2px black solid">DREN TUBULAR</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px">SEC. BRONQUIAL / SEC. BOCA</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border-left: 3px black solid;text-align: left'>PLASMA FRESCO CONGELA.</th><td></td><td></td>
            <td style="border-left: 2px black solid">III</td><?php for ($i=1; $i < 5; $i++) { echo "<td></td>"; } ?>
            <td style="border-left: 2px black solid">COLOSTOMIA</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px">TEMPERATURA / DIAFORESIS</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border-left: 3px black solid;text-align: left'>AFERESIS</th><td></td><td></td>
            <td style="border-left: 2px black solid">IV</td><?php for ($i=1; $i < 5; $i++) { echo "<td></td>"; } ?>
            <td style="border-left: 2px black solid">ILEIOSTOMIA</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px"></td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border-left: 3px black solid;text-align: left'>POOL PLAQ.</th><td></td><td></td>
            <td style="border-left: 2px black solid">V</td><?php for ($i=1; $i < 5; $i++) { echo "<td></td>"; } ?>
            <td style="border-left: 2px black solid">YEYUNOSTOMIA</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px"></td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th colspan="3" style='border: 2px black solid;border-left: 3px black solid;text-align: left' bgcolor="sky-blue">HEMODIÁLISIS</th><th colspan="2" style="border-top: 2px black solid" bgcolor="sky-blue">IMÁGENES</th>
            <th style="border-left: 2px black solid;border-top: 2px black solid" colspan="5" bgcolor="sky-blue">ANTIBIOTICOTERPIA</th>
            <td style="border-left: 2px black solid">DREN TORÁXICO</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px"></td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th style='border-left: 3px black solid;text-align: left'>Sesión</th><th colspan="2">FECHA</th><th colspan="2" bgcolor="sky-blue">INERCONSULTAS</th>
            <th style="border-left: 2px black solid;text-align: left" colspan="3">FARMACO</th><td>DOSIS</td><td>N° DE DIAS</td>
            <td style="border-left: 2px black solid">NEFROSTOMA</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px"></td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th style='border-left: 3px black solid;text-align: left'></th><th colspan="2"></th><th colspan="2" style="border-left: 2px black solid;border-top: 2px black solid" bgcolor="sky-blue">ENDOSCIOPIA</th>
            <th style="border-left: 2px black solid;text-align: left" colspan="3"></th><td></td><td></td>
            <td style="border-left: 2px black solid">URETEROSTOMA</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px"></td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <th style='border:2px black solid;border-left: 3px black solid' colspan="3" bgcolor="sky-blue">LABORATORIO</th><th colspan="2" style="border: 2px black solid" bgcolor="sky-blue">BRAZALETE</th>
            <th style="border-left: 2px black solid;text-align: left" colspan="3"></th><td></td><td></td>
            <td style="border-left: 2px black solid">SDVE</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><td height="14px">PERDIDAS INSENSIBLES</td><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <td style='border-left: 3px black solid' colspan="3">CULTIVOS</td><th style="border-left: 2px black solid">BLANCO</th><th></th>
            <th style="border-left: 2px black solid;text-align: left" colspan="3"></th><td></td><td></td>
            <td style="border-left: 2px black solid">VENTANA PERICAR.</td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><th height="14px" style="text-align: left">SUB TOTAL</th><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>"; } echo "<td colspan='4' style='border-left: 3px black solid'></td>" ?> 
            <td style='border-left: 3px black solid' colspan="3">GASOMETRIA</td><th style="border-left: 2px black solid">ROJO</th><th></th>
            <th style="border-left: 2px black solid;text-align: left" colspan="3"></th><td></td><td></td>
            <td style="border-left: 2px black solid"></td><th colspan="2"></th><th></th><th style="border-right: 2px black solid"></th>
        </tr>
        <tr><th height="14px" style="text-align: left;border:2px black solid;border-bottom:3px black solid">TOTAL</th><?php for ($i=1; $i < 5; $i++) { echo "<td colspan='3' style='border: 2px black solid;border-bottom: 3px black solid'></td>"; } echo "<td colspan='4' style='border: 3px black solid'></td>" ?> 
            <td style='border-left: 3px black solid;border-bottom:2px black solid' colspan="3" bgcolor="sky-blue">PERFIL SEPTICO</td><th style="border-left: 2px black solid;border-bottom:2px black solid">AMARILLO</th><th style="border-bottom:2px black solid"></th>
            <th style="border-left: 2px black solid;text-align: left;border-bottom:2px black solid" colspan="3"></th><td style="border-bottom:2px black solid"></td><td style="border-bottom:2px black solid"></td>
            <td style="border-left: 2px black solid;border-bottom:2px black solid"></td><th colspan="2" style="border-bottom:2px black solid"></th><th style="border-bottom:2px black solid"></th><th style="border-right: 2px black solid;border-bottom:2px black solid"></th>
        </tr>
    </table>
    <!-- Aquí puedes generar el contenido del documento -->
  </div>
</body>
</html>


</html>