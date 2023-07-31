<!DOCTYPE html>
<html>
    <style>
        table{border-collapse: collapse;}
        h2{text-align: center}
        body{position: relative}
        @media print {
        @page {size: A4 landscape;margin: 0;}}
        html, body {
            width: 297mm;
            height: 210mm;
            margin: 0;
            padding: 0;
            }
        .content {
            width: 93%;
            height: 90%;
            margin: 10mm;
            margin-top: 8mm;
            margin-bottom: 10mm;
            box-sizing: border-box;}
        
        td{height: 15px;padding: 1px;font-size: 13px;border: 1px black solid;}
        th{font-size: 12px;text-align: center;border: 1px black solid;height: 15px;padding: 1px}
        td {
            border-top-width: 1px;
            border-bottom-width: 1px;
            }
        
        .imagen-esquina {
            position: absolute;
            top: -2mm; /* Ajusta la distancia desde el borde superior (cambia 10mm según necesites) */
            left: 33mm; /* Ajusta la distancia desde el borde izquierdo (cambia 10mm según necesites) */
            /* Ajusta el tamaño de la imagen (cambia width y height según necesites) */
            width: 40px;
            height: 50px;
            }

        .imagen-esquina-derecha {
            position: absolute;
            top: -2mm; /* Ajusta la distancia desde el borde superior (cambia 10mm según necesites) */
            right: 10mm; /* Ajusta la distancia desde el borde derecho (cambia 10mm según necesites) */
            /* Ajusta el tamaño de la imagen (cambia width y height según necesites) */
            width: 40px;
            height: 50px;
        }
        
    </style>
    <body>
        
    <div class="content">
        <img src="/images/dirsapol.png" class="imagen-esquina">
    <table>
        <thead>
            <tr>
                <th colspan="10"style="font-size: 24px;border: 1px white solid">KARDEX DE PACIENTE</th>
                <td style="border: 1px white solid"></td>
            </tr>
            
            <TR>
                <TD style="border: 1px white solid"></TD>
                <td style="border: 1px white solid"></td>
                <td style="border: 1px white solid"></td>
                <td style="border: 1px white solid"></td>
                <th colspan="3" style="border: 1px white solid">COMPLEJO HOSPITALARIO PNP LNS</th>
                
                
                
                <TD colspan="7" align="left" style="border: 1px white solid">TITULAR Y/O</TD>
            </TR>
            <TR>
                <th colspan="4" style="border: 1px white solid">HOSPITAL NACIONAL PNP LNS</th>
                <td width="110px" style="border: 1px white solid"></td>
                <td style="border: 1px white solid"></td>
                <TD style="border: 1px white solid"></TD>
                <TD colspan="5" align="left" style="border: 1px white solid">RESPONSABLE _______________________________________</TD>
            </TR>
            <TR>
                <th colspan="4" style="border: 1px white solid">DIVISIÓN DE ENFERMERIA</th>
                <td style="border: 1px white solid"></td>
                <td style="border: 1px white solid"></td>
                <td style="border: 1px white solid"></td>
                <TD colspan="5" align="left" style="border: 1px white solid">TELF.REF.: ___________________________________________</TD>
            </TR>
            <tr><td height="10px" style="border: 1px white solid"></td></tr>
        </thead>
        
        <tbody>
            
            <tr>
                <td style="border: 1px white solid">PACIENTE:</td>
                <td style="border: 1px white solid" colspan="5">_____________________________________________________________________</td>
                <td style="border: 1px white solid" colspan="2">CLASE:  ____________</td>
                <td style="border: 1px white solid">HC:</td>
                <td style="border: 1px white solid" width="100px">____________</td>
                <td style="border: 1px white solid">ALERGIAS</td>
                <td style="border: 1px white solid" width="100px">____________</td>
            </tr>
            <tr>
                <td style="border: 1px white solid">CAMA N°</td>
                <td style="border: 1px white solid" width="50px">______</td>
                <td style="border: 1px white solid">SALA</td>
                <td style="border: 1px white solid" width="60px">_______</td>
                <td style="border: 1px white solid">DIAGÓSTICO</td>
                <td style="border: 1px white solid" width="358px">___________________________________</td>
                <TD style="border: 1px white solid">INGRESO:</TD>
                <td style="border: 1px white solid" width="90px">_________</td>
                <TD style="border: 1px white solid">CIP:</TD>
                <td style="border: 1px white solid">____________</td>
                <td style="border: 1px white solid" colspan="2">______________________</td>
                
            </tr>
            <TR>
                <TD style="border: 1px white solid"></TD>
                <TD style="border: 1px white solid"></TD>
                <TD style="border: 1px white solid"></TD>
                <td style="border: 1px white solid"></td>
                <td style="border: 1px white solid"></td>
                <td style="border: 1px white solid">___________________________________</td>
                <TD style="border: 1px white solid" colspan="2">EDAD: _____________</TD>
                <TD style="border: 1px white solid">DNI:</TD>
                <td style="border: 1px white solid">____________</td>
                <TD style="border: 1px white solid" colspan="2">RX   ___________________</TD>
            </TR>
        </tbody>
    
    </table>

    <h1></h1>
    
    <table>
        <tbody >
            <tr>
                <th rowspan="2"colspan="4" width="220px">MEDICACIÓN - TRATAMIENTO</th>
                <th rowspan="2" width="70px">Frecuencia</th>
                <TD rowspan="2" colspan="3" width="80px"></TD>
                <TD rowspan="2" colspan="3" width="80px"></TD>
                <TD rowspan="2" colspan="3" width="80px"></TD>
                <TD rowspan="2" colspan="3" width="80px"></TD>
                <TD rowspan="2" colspan="6" width="80px"></TD>
                <TD rowspan="2" colspan="3" width="80px"></TD>
                <td colspan="4" align="center">EXÁMENES AUXILIARES</td>
            </tr>
            <tr>
                <td align="center">FECHA</td>
                <td align="center">HORA</td>
                <td align="center" colspan="2" width="140px">Análisis</td>
            </tr>
            
            <?php
                $filas = 15;
                $columnas = 4;
                for ($i = 1; $i <= $filas; $i++) {
                    echo "<tr>";
                    echo "<td colspan='4'></td><td></td>";
                    for ($j = 1; $j <= $columnas; $j++) {
                        echo "<td colspan='3'></td>";
                    }
                    echo "<td colspan='6'></td><td colspan='3'></td>";
                    echo "<td width='50px'></td><td width='45px'></td><td colspan='2'></td>";
                    echo "</tr>";
                }
            ?>
            <tr>
                <th colspan="4" style="text-align: left">DIETA</th>
                <?php
                    echo "<td></td>";
                    for ($j = 1; $j <= 4; $j++) {
                        echo "<td colspan='3'></td>";
                    }
                    echo "<td colspan='6'></td><td colspan='3'></td>";
                    echo "<td></td><td></td><td colspan='2'></td>";
                
                ?>
            </tr>
            <tr>
                <td colspan="4"></td>
                <?php
                    echo "<td></td>";
                    for ($j = 1; $j <= 4; $j++) {
                        echo "<td colspan='3'></td>";
                    }
                    echo "<td colspan='6'></td><td colspan='3'></td>";
                    echo "<td></td><td></td><td colspan='2'></td>";
                
                ?>
            </tr>
            <tr>
                <th colspan="4" style="text-align: left">MÉDICO RESPONSABLE</th>
                <?php
                    echo "<td></td>";
                    for ($j = 1; $j <= 4; $j++) {
                        echo "<td colspan='3'></td>";
                    }
                    echo "<td colspan='6'></td><td colspan='3'></td>";
                    echo "<td></td><td></td><td colspan='2'></td>";
                
                ?>
            </tr>
            <tr>
                <th colspan="4" style="text-align: left">GRADO DE DEPENDENCIA</th>
                <?php
                    echo "<td></td>";
                    for ($j = 1; $j <= 4; $j++) {
                        echo "<td colspan='3'></td>";
                    }
                    echo "<td colspan='6'></td><td colspan='3'></td>";
                ?>
                <td colspan="4">RX</td>
            </tr>
            <tr>
            <th colspan="4" style="text-align: left">VIA PERIFÉRICA</th>
            <?php
                    echo "<td></td>";
                    for ($j = 1; $j <= 12; $j++) {
                        echo "<td></td>";
                    }
                    for ($j = 1; $j <= 3; $j++) {
                        echo "<td colspan='2'></td>";
                    }
                    for ($j = 1; $j <= 3; $j++) {
                        echo "<td></td>";
                    }
                    echo "<td colspan='4'></td>";
                
                ?>
            </tr>
            <tr>
                <th colspan="4" style="text-align: left">AYUNAS</th>
                <?php
                    echo "<td></td>";
                    for ($j = 1; $j <= 3; $j++) {
                        echo "<td colspan='3'></td>";
                    }
                    echo "<td colspan='12'></td>";
                ?>
                <td colspan="4"></td>
            </tr>
            <tr>
                <th colspan="4" style="text-align: left">FIRMA ENFERMERA RESP.</th>
                <?php
                    echo "<td></td>";
                    for ($j = 1; $j <= 4; $j++) {
                        echo "<td colspan='3'></td>";
                    }
                    echo "<td colspan='6'></td>";
                    echo "<td colspan='3'></td>";
                ?>
                <td></td>
                <td colspan="3"></td>              
            </tr>
            <tr>
                <th width="40px">C.V.C.</th>
                <th width="40px"></th>
                <th width="40px">S.N.G.</th>
                <td width="40px"></td>
                <th colspan="10" align="center">CUIDADOS DE ENFERMERÍA</th>
                <th align="center" colspan="3">INTERCONS</th>
                <th width="40px" align="center" colspan="3">f/env</th>
                <th width="40px" align="center" colspan="3">f/res</th>
                <th colspan="4"  align="center" colspan="4">PROC. ESPECIALES</th>
                <th colspan="2" align="center">FECHA</th>
                <th  align="center">Informes</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="10" rowspan="5"></td>
                <TD colspan="3"></TD>
                <td colspan="3"></td>
                <td colspan="3"></td>
                <td colspan="4"></td>
                <td colspan="2"></td>
                <td></td>
            </tr>
            <tr>
                <th>T.E.T</th>
                <td></td>
                <th>S.FOLEY</th>
                <td></td>
                <TD colspan="3"></TD>
                <td colspan="3"></td>
                <td colspan="3"></td>
                <td colspan="4"></td>
                <td colspan="2"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <TD colspan="3"></TD>
                <td colspan="3"></td>
                <td colspan="3"></td>
                <td colspan="4"></td>
                <td colspan="2"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <TD colspan="3"></TD>
                <td colspan="3"></td>
                <td colspan="3"></td>
                <td colspan="4"></td>
                <td colspan="2"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <TD colspan="3"></TD>
                <td colspan="3"></td>
                <td colspan="3"></td>
                <td colspan="4"></td>
                <td colspan="2"></td>
                <td></td>
            </tr>

        </tbody>
    </table>
</div>
</body>
<footer><div style="text-align: center">
    <button id="botonPDF" onclick="generarPDF()">Generar y Descargar PDF</button>
</div></footer>

    <Script>
        function generarPDF() {
      // Muestra el botón antes de imprimir
      const botonPDF = document.getElementById('botonPDF');
      botonPDF.style.display = 'block';

      // Oculta el botón temporalmente para la versión de impresión
      botonPDF.style.visibility = 'hidden';

      // Muestra las imágenes antes de imprimir
      const imagenes = document.querySelectorAll('img');
      for (let i = 0; i < imagenes.length; i++) {
        imagenes[i].style.display = 'block';
      }

      // Ejecuta la función de impresión del navegador
      window.print();

      // Vuelve a ocultar el botón para la versión de impresión
      botonPDF.style.visibility = 'visible';

      // Vuelve a ocultar las imágenes después de imprimir
      for (let i = 0; i < imagenes.length; i++) {
        imagenes[i].style.display = 'none';
      }
    }
    </Script>

</body>
</html>
