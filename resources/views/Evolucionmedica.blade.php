<!DOCTYPE html>
<html>
    <style>
        table{border-collapse: collapse;}
        tbody{border: 2px solid black;}table{border-collapse: collapse;}
        /*tbody{border: 1px solid black;}
        h2{text-align: center}*/
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
            width: 85%;
            height: 90%;
            margin: 15mm;
            margin-top: 15mm;
            margin-bottom: 10mm;
            box-sizing: border-box;}
        td{height: 17px;padding: 1px;font-size: 13.3px;/*border: 1px black solid;*/}
        th{font-size: 13.3px;text-align: left;/*border: 1px black solid;*/height: 17px;padding: 1px}
        td {
            border-top-width: 1px;
            border-bottom-width: 1px;
            }
        
        .imagencelda{width: 140px;
            height: 150px;}
        .imagencelda2{
            position: relative;
            padding-bottom: 3px;
            padding-top: 5px;
            width: 220px;
            height: 60px;
            left: 8mm}
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
    <table>
        <tbody>
            <tr><td colspan="3" align="right" style="top: 0; font-size: 12px">CIRUGÍA DE EMERGENCIA</td> <td></td></tr>
            <tr>
                <td width="10"></td><td colspan="2" align="center" style="font-size: 20px">ECOLUCIÓN MÉDICA - HOSPITALIZACIÓN</td><td width="10"></td>
            </tr>
            <tr>
                <td></td><td colspan="2" align="center">En cada evolución, debe asignarse:</td><td></td>
            </tr>
            <tr>
                <td colspan="4" height="10px"></td>
            </tr>
            <tr>
                <td style="border-right: 2px black solid"></td><td style="border-top: 2px black solid">1. Fecha, hora y día de atención.</td><td style="border-top: 2px black solid ;border-right: 2px black solid">5. Apreciacón objetiva/interpretación exámenes auxiliares y</td><td></td>
            </tr>
            <tr>
                <td></td><td style="border-left: 2px black solid">2. Datos del paciente y problemas/diagnósticos planteados.</td><td style="border-right: 2px black solid"> complementarios.</td><td></td>
            </tr>
            <tr>
                <td></td><td style="border-left: 2px black solid">3. Apreciacón subjetiva.</td><td style="border-right: 2px black solid">6. Plan de trabajo.</td><td ></td>
            </tr>
            <tr>
                <td></td><td style="border-left: 2px black solid">4. Examen Clínico.</td><td style="border-right: 2px black solid">7. Datos del interno y sello del médico responsable que</td><td></td>
            </tr>
            <tr>
                <td></td><td style="border-bottom: 2px black solid ;border-left: 2px black solid"></td><td style="border-bottom: 2px black solid; border-right: 2px black solid"> brinda la visita</td><td></td>
            </tr>
            <tr><td height="5px"></td></tr>
            <?php
                for ($i=1; $i < 40; $i++) {
                    echo "<tr>
                            <td></td><td height='20px' colspan='2'>___________________________________________________________________________________________________</td><td></td>
                        </tr>";
                }
            ?>
            <tr>
                <td colspan="4" height='20px'></td>
            </tr>
        </tbody>
    </table>
    <table border="2px" style="text-align: center">
        <td width="160px" height="30px">Apellidos y Nombres</td><td width="372px"></td><td width="50px">Cama</td><td width="62px"></td><td width="60px">HC N°</td><td width="102px"></td>
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