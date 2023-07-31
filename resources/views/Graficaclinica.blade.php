<!DOCTYPE html>
<html>
    <style>
        table{border-collapse: collapse;}
        tbody{border: 1px solid black;}
        h2{text-align: center}
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
            margin-top: 10mm;
            margin-bottom: 5mm;
            box-sizing: border-box;}
        td{height: 14px;padding: 0px;font-size: 13px;border: 1px black solid;}
        th{font-size: 11.5px;text-align: center;border: 1px black solid;height: 14px;padding: 1px}
        td {
            border-top-width: 1px;
            border-bottom-width: 1px;
            }
        
        .imagen-esquina {
            position: absolute;
            top: -3mm; /* Ajusta la distancia desde el borde superior (cambia 10mm según necesites) */
            left: 10mm; /* Ajusta la distancia desde el borde izquierdo (cambia 10mm según necesites) */
            /* Ajusta el tamaño de la imagen (cambia width y height según necesites) */
            width: 40px;
            height: 50px;
            }

        .imagen-esquina-derecha {
            position: absolute;
            top: -3mm; /* Ajusta la distancia desde el borde superior (cambia 10mm según necesites) */
            right: 10mm; /* Ajusta la distancia desde el borde derecho (cambia 10mm según necesites) */
            /* Ajusta el tamaño de la imagen (cambia width y height según necesites) */
            width: 40px;
            height: 50px;
        }
    </style>
    <body>
        <div class="content">
        <img src="/images/dirsapol.png" class="imagen-esquina">
        <img src="/images/dirsapol.png" class="imagen-esquina-derecha">
   
    <h2>GRÁFICA CLÍNICA</h2>
    <table align="center">
        <tbody  align='center'>
            <tr>
                <th colspan="4" style="text-align: left">FECHA</th><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>";}?>
            </tr>
            <tr>
                <th colspan="4" style="text-align: left">DIAS HOSPITALARIOS</th><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>";}?>
            </tr>
            <tr>
                <th colspan="4" style="text-align: left">DIAS POST OPERACIÓN</th><?php for ($i=1; $i <= 9; $i++) { echo "<td colspan='3' style='border-left: 2px black solid'></td>";}?>
            </tr>
            <TR>
                <th width="50">RESP</th>
                <Th width="50">PULSO</Th>
                <Th width="50">PA</Th>
                <Th width="50">TEMP</Th>
                <?php for ($i=1; $i <= 9; $i++) { echo "<td style='border-left: 2px black solid' width='25'>M</td><td width='25'>T</td><td width='25'>N</td>";}?>
            </TR>
            <?php
                $j=200;
                $x=300;
                for ($i=1; $i <= 6; $i++) {
                    if ($i==6) {
                        echo "<TR>";
                        echo "<td style='border-bottom: 2px black solid'></td>";
                        echo "<td style='border-bottom: 2px black solid'>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td style='border-bottom: 2px black solid'></td>";
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid; border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td>";}
                        echo "</TR>";
                    } else {
                        echo "<TR>";
                        echo "<td></td>";
                        echo "<td>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td></td>";
                        if ($i==1) {
                            echo "<th rowspan='6' style='border-bottom: 2px black solid;text-aling:center'>41</th>";
                        }
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid'></td><td></td><td></td>";}
                        echo "</TR>";
                    }
                }
                for ($i=1; $i <= 5; $i++) {
                    if ($i==5) {
                        echo "<TR>";
                        echo "<td style='border-bottom: 2px black solid'></td>";
                        echo "<td style='border-bottom: 2px black solid'>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td style='border-bottom: 2px black solid'></td>";
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid; border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td>";}
                        echo "</TR>";
                    } else {
                        echo "<TR>";
                        echo "<td></td>";
                        echo "<td>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td></td>";
                        if ($i==1) {
                            echo "<th rowspan='5' style='border-bottom: 2px black solid;text-aling:center'>40</th>";
                        }
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid'></td><td></td><td></td>";}
                        echo "</TR>";
                    }
                }
                for ($i=1; $i <= 5; $i++) {
                    if ($i==5) {
                        echo "<TR>";
                        echo "<td style='border-bottom: 2px black solid'></td>";
                        echo "<td style='border-bottom: 2px black solid'>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td style='border-bottom: 2px black solid'>";
                        echo $x;
                        $x=$x-20;
                        echo "</td>";
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid; border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td>";}
                        echo "</TR>";
                    } else {
                        echo "<TR>";
                        echo "<td></td>";
                        echo "<td>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td>";
                        echo $x;
                        $x=$x-20;
                        echo "</td>";
                        if ($i==1) {
                            echo "<th rowspan='5' style='border-bottom: 2px black solid;text-aling:center'>39</th>";
                        }
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid'></td><td></td><td></td>";}
                        echo "</TR>";
                    }
                }
                for ($i=1; $i <= 5; $i++) {
                    if ($i==5) {
                        echo "<TR>";
                        echo "<td style='border-bottom: 2px black solid'></td>";
                        echo "<td style='border-bottom: 2px black solid'>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td style='border-bottom: 2px black solid'>";
                        echo $x;
                        $x=$x-20;
                        echo "</td>";
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid; border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td>";}
                        echo "</TR>";
                    } else {
                        echo "<TR>";
                        echo "<td></td>";
                        echo "<td>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td>";
                        echo $x;
                        $x=$x-20;
                        echo "</td>";
                        if ($i==1) {
                            echo "<th rowspan='5' style='border-bottom: 2px black solid;text-aling:center'>38</th>";
                        }
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid'></td><td></td><td></td>";}
                        echo "</TR>";
                    }
                }
                $c=65;
                for ($i=1; $i <= 5; $i++) {
                    if ($i==5) {
                        echo "<TR style='vertical-align: bottom'>";
                        echo "<td>";
                        if ($i>=1) {
                            echo $c;
                            $c=$c-5;
                        }    
                        echo "</td>";
                        echo "<td>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td>";
                        echo $x;
                        $x=$x-20;
                        echo "</td>";
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid; border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td>";}
                        echo "</TR>";
                    } else {
                        echo "<TR>";
                        echo "<td>";
                        if ($i>=2) {
                            echo $c;
                            $c=$c-5;
                        }
                        echo "</td>";
                        echo "<td>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td>";
                        echo $x;
                        $x=$x-20;
                        echo "</td>";
                        if ($i==1) {
                            echo "<th rowspan='5' style='border-bottom: 2px black solid;text-aling:center'>37</th>";
                        }
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid'></td><td></td><td></td>";}
                        echo "</TR>";
                    }
                }
                for ($i=1; $i <= 5; $i++) {
                    if ($i==5) {
                        echo "<TR>";
                        echo "<td style='border-bottom: 2px black solid'>";
                        echo $c;
                        $c=$c-5;    
                        echo "</td>";
                        echo "<td style='border-bottom: 2px black solid'>";
                        echo $j;
                        $j=$j-10;
                        echo "</td>";
                        echo "<td style='border-bottom: 2px black solid'>";
                        if ($x>=0) {
                            echo $x;
                            $x=$x-20;
                        }
                        echo "</td>";
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid; border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td><td style='border-bottom: 2px black solid'></td>";}
                        echo "</TR>";
                    } else {
                        echo "<TR>";
                        echo "<td>";
                        echo $c;
                        $c=$c-5;
                        echo "</td>";
                        echo "<td>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td>";
                        if ($x>=0) {
                            echo $x;
                            $x=$x-20;
                        }
                        echo "</td>";
                        if ($i==1) {
                            echo "<th rowspan='5' style='border-bottom: 2px black solid'>36</th>";
                        }
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid'></td><td></td><td></td>";}
                        echo "</TR>";
                    }
                }
                for ($i=1; $i <= 3; $i++) {
                    if ($i==3) {
                        echo "<TR>";
                        echo "<td>";
                        echo $c;
                        $c=$c-5;    
                        echo "</td>";
                        echo "<td>";
                        echo $j;
                        $j=$j-5;
                        echo "</td>";
                        echo "<td>";
                        echo "</td>";
                        echo "<td></td>";
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid'></td><td></td><td></td>";}
                        echo "</TR>";
                    } else {
                        echo "<TR>";
                        echo "<td>";
                        echo $c;
                        $c=$c-5;
                        echo "</td>";
                        echo "<td>";
                        echo $j;
                        $j=$j-10;
                        echo "</td>";
                        echo "<td>";
                        echo "</td>";
                        if ($i==1) {
                            echo "<th style='text-aling:center'>35.5</th>";
                        }elseif ($i==2) {
                            echo "<th style='text-aling:center'>35</th>";
                        }else{
                            echo "<td></td>";
                        }
                        for ($z=1; $z <= 9; $z++) { echo "<td style='border-left: 2px black solid'></td><td></td><td></td>";}
                        echo "</TR>";
                    }
                }
            ?>
            <tr>
                <td colspan="31" style="border-left: 1px white solid;border-right: 1px white solid;height:8px"></td>
            </tr>
            <tr><th colspan="4" style="text-align: left;font-size: 12px">PESO</th><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><th colspan="4" style="text-align: left">CATANEMIA</th><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><th colspan="2" style="text-align: left">DIURESIS</th><td colspan="2">M</td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><td colspan="2"></td><td colspan="2">T</td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><td colspan="2"></td><td colspan="2">N</td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><th colspan="2"></th><th colspan="2">TOTAL</th><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3' style='border:2px black solid'></td>";}?></tr>
            <tr><th colspan="2" style="text-align: left">DEPOSICION</th><td colspan="2">M</td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><td colspan="2"></td><td colspan="2">T</td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><td colspan="2"></td><td colspan="2">N</td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><th colspan="2"></th><th colspan="2">TOTAL</th><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3' style='border:2px black solid'></td>";}?></tr>
            <tr><th colspan="2" style="text-align: left">DRENAJE</th><td colspan="2">M</td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><td colspan="2"></td><td colspan="2">T</td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><td colspan="2"></td><td colspan="2">N</td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><th colspan="2"></th><th colspan="2" >TOTAL</th><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3' style='border:2px black solid'></td>";}?></tr>
            <tr><td colspan="2" ></td><td colspan="2"></td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><td colspan="2"></td><td colspan="2"></td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><td colspan="2"></td><td colspan="2"></td><?php for ($i=1; $i <=9; $i++) { echo "<td colspan='3'></td>";}?></tr>
            <tr><th style="text-align: center" colspan="13">NOMBRES Y APELLIDOS</th><Th style="text-align: center" colspan="7">SALA</Th><Th style="text-align: center" colspan="4">N°CAMA</Th><Th style="text-align: center" colspan="7" style="font-size: 14px">N° HISTORIA CLINICA</Th></tr>
            <tr><td colspan="13" style="height: 25px"></td><TD colspan="7"></TD><TD colspan="4"></TD><TD colspan="7"></TD></tr>
            
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
</html>