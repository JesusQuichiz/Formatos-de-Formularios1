<!DOCTYPE html>
<html>
    <style>
        table{border-collapse: collapse;}
        tbody{border: 2px solid black;}
        .rotated-text {transform: rotate(-90deg);white-space: nowrap;max-width: 40px;}
        body{position: relative}
        @media print {
        @page {size: A4;margin: 0;}}
        html, body {
            width: 210mm;
            height: 297mm;
            margin: 0;
            padding: 0;
            }
        .content {
            width: 90%;
            height: 90%;
            margin: 10mm;
            margin-top: 25mm;
            margin-bottom: 10mm;
            box-sizing: border-box;}
        td{height: 20px;padding: 1px;font-size: 12px;/*border: 1px black solid;*/}
        th{font-size: 13.5px;text-align: center;/*border: 1px black solid;*/height: 20px;padding: 1px}
        td {
            border-top-width: 1px;
            border-bottom-width: 1px;
            }
        
        .imagen-esquina {
            position: absolute;
            top: -15mm; /* Ajusta la distancia desde el borde superior (cambia 10mm según necesites) */
            left: 10mm; /* Ajusta la distancia desde el borde izquierdo (cambia 10mm según necesites) */
            /* Ajusta el tamaño de la imagen (cambia width y height según necesites) */
            width: 40px;
            height: 50px;
            }

        .imagen-esquina-derecha {
            position: absolute;
            top: -15mm; /* Ajusta la distancia desde el borde superior (cambia 10mm según necesites) */
            right: 10mm; /* Ajusta la distancia desde el borde derecho (cambia 10mm según necesites) */
            /* Ajusta el tamaño de la imagen (cambia width y height según necesites) */
            width: 40px;
            height: 50px;
        }
    </style>
    <div class="content">
        <img src="/images/dirsapol.png" class="imagen-esquina">
            <img src="/images/dirsapol.png" class="imagen-esquina-derecha">
    <head><h3>MOVIMIENTO DIARIO DE HOSPITALIZACION DE LAS CERO A LAS 24 HORAS</h3></head>
    <h3></h3>
    <body>
        
    <table>
        <thead>
            <tr>
                <td colspan="2">SALA .......................</td>
                <td>DIA ...................... MES ......................</</td>
                <TD width="200px">AÑO ......................</TD>
                <TD></TD>
            </tr>
        </thead>
        <tbody id="1">
            
            <tr>
                <td rowspan="8" class="rotated-text" style="border-right: 1px solid black">RESUMEN</td>
                <td width="210px">SALDO DEL DIA ANTERIOR</td><td width="320px" style="border-right: 1px solid black">____________________________________</td>
                <td style="border-right: 1px solid black">TOTAL DE INGRESOS</td><TD rowspan="2" style="border-bottom: 1px solid black" width="200px"></TD>
            </tr>
            <TR>
                <TD>INGRESOS AL SERVICIO</TD><td style="border-right: 1px solid black">____________________________________</td>
                <td style="border-right: 1px solid black">POR TRANFERENCIAS</td>
            </TR>
            <TR>
                <TD>TOTAL</TD><td style="border-right: 1px solid black">____________________________________</td>
                <td style="border-right: 1px solid black">TOTAL DE EGRESOS</td><TD rowspan="2" style="border-bottom: 1px solid black"></TD>
            </TR>
            <TR>
                <TD>EGRESOS DEL SERVICIO</TD><td style="border-right: 1px solid black">____________________________________</td>
                <td style="border-right: 1px solid black">POR TRANSFERENCIAS</td>
            </TR>
            <TR>
                <TD>SALDO AL DIA SIGUIENTE</TD><td style="border-right: 1px solid black">____________________________________</td>
                <td style="border-right: 1px solid black ">DOTACIÓN NORMAL</td><TD rowspan="2" style="border-bottom: 1px solid black"></TD>
            </TR>
            <TR>
                <TD colspan="2" style="border-right: 1px solid black">CAMAS DESOCUPADAS (cero horas) _____________________________</TD>
                <TD style="border-right: 1px solid black ;border-bottom: 1px solid black">DE CAMAS</TD>
            </TR>
            <tr>
                <td colspan="2" rowspan="2" style="border-right: 1px solid black">CAMAS OCUPADAS (cero horas) _________________________________</td>
                <TD colspan="2">FIRMA Y POSTDIRMA DE LA ENFERMERA</TD>
            </tr>
            <tr>
                <td align="center" colspan="2">__________________________________</td>
            </tr>
        </tbody>
    </table>
    <h2></h2>
    <table border="1">
        <tbody>
            <tr align="CENTER"><th colspan="10" style="font-size: 16px">INGRESOS</th><th colspan="10" style="border-left: 2px black solid;font-size: 16px">ALTAS</th></tr>
            <tr>
                <td Width="70px" colspan="2" style="font-size: 12px">CLASE O PARENTESCO</td>
                <TD width="35px" style="font-size: 11px">CAMA</TD>
                <TD width="35px" style="font-size: 11px">HORA</TD>
                <th colspan="6" align="center" width="290px">APELLIDOS Y NOMBRES</th>
                <TD Width="70px" colspan="2" style="font-size: 12px;border-left: 2px black solid">CLASE O PARENTESCO</TD>
                <TD width="35px" style="font-size: 11px">CAMA</TD>
                <TD width="35px" style="font-size: 11px">HORA</TD>
                <th colspan="6" align="center" width="290px">APELLIDOS Y NOMBRES</th>
            </tr>
                <?php
                for ($i = 1; $i <= 6; $i++) {
                    echo "<tr>";
                    echo "<td height='20' colspan='2'></td> ";
                    for ($j = 1; $j <= 2; $j++) {
                        echo "<td height='20'></td>";
                    }
                    echo "<td height='20' colspan='6'></td> ";
                    echo "<td height='20' colspan='2'  style='border-left: 2px black solid'></td> ";
                    for ($j = 1; $j <= 2; $j++) {
                        echo "<td height='20'></td>";
                    }
                    echo "<td height='20' colspan='6'></td>";
                    echo "</tr>";
                }
                ?>
            <tr>
                <?php
                    echo "<td height='20' colspan='2'></td> ";
                    for ($j = 1; $j <= 2; $j++) {
                      echo "<td height='20'></td>";
                    };
                ?>
                <td colspan="6"></td>
                <th align="CENTER" colspan="10" style="border-left: 2px black solid">DEFUNCIONES</th>
            </tr>
            <?php
                for ($i = 1; $i <= 6; $i++) {
                    echo "<tr>";
                    echo "<td height='20' colspan='2'></td> ";
                    for ($j = 1; $j <= 2; $j++) {
                        echo "<td height='20'></td>";
                    }
                    echo "<td height='20' colspan='6'></td> ";
                    echo "<td height='20' colspan='2' style='border-left: 2px black solid'></td> ";
                    for ($j = 1; $j <= 2; $j++) {
                        echo "<td height='20'></td>";
                    }
                    echo "<td height='20' colspan='6'></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        <h1></h1>
        <tr><td colspan="20" style="border-left: 2px white solid;border-right: 2px white solid"></td></tr>
        <Tbody>
            
            <TR align="CENTER">
                <th colspan="8" Width="340px">INGRESOS POR TRANFERENCIA</th>
                <TD width="120px" colspan="2" style="font-size: 12px">VIENEN DE</TD>
                <th colspan="8" Width="340px" style="border-left: 2px black solid">ALTAS POR TRANFERENCIAS</th>
                <TD width="120px" colspan="2" style="font-size: 12px">VAN A</TD>
            </TR>
            <?php
                for ($i = 1; $i <= 7; $i++) {
                    echo "<tr>";
                    echo "<td height='20' colspan='2'></td> ";
                    for ($j = 1; $j <= 2; $j++) {
                        echo "<td height='20'></td>";
                    }
                    echo "<td height='20' colspan='4'></td> ";
                    echo "<td height='20' colspan='2'></td> ";
                    echo "<td height='20' colspan='2' style='border-left: 2px black solid'></td> ";
                    for ($j = 1; $j <= 2; $j++) {
                        echo "<td height='20'></td>";
                    }
                    echo "<td height='20' colspan='4'></td> ";
                    echo "<td height='20' colspan='2'></td>";
                    echo "</tr>";
                }
            ?>
            
        </Tbody>
        <tr><td colspan="20" style="border-left: 2px white solid;border-right: 2px white solid"></td></tr>

        <tbody>
            <tr>
                <td colspan="10">IDENTIFICACION NUMERICA DE LAS CAMAS OCIUPADAS AL MOMENTO DE ENTREGAR ESTE INFORME</td>
                <?php
                    for ($j = 1; $j <= 10; $j++) {
                      echo "<td height='20' width='40px'></td>";
                    };
                ?>
            </tr>
            <TR>
                <?php
                    for ($j = 1; $j <= 20; $j++) {
                      echo "<td height='40px' width='40px'></td>";
                    };
                ?>
            </TR>
            <TR>
                <?php
                    for ($j = 1; $j <= 20; $j++) {
                      echo "<td height='40px'></td>";
                    };
                ?>
            </TR>
        </tbody>
        

    </table>
    
</body>
</div>
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
</html>