<!DOCTYPE html>
<html>
    <style>
        table{border-collapse: collapse;}
        
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
            width: 90%;
            height: 90%;
            margin: 10mm;
            margin-top: 15mm;
            margin-bottom: 10mm;
            box-sizing: border-box;}
        td{height: 20px;padding: 1px;font-size: 14px;/*border: 1px black solid;*/}
        th{font-size: 14px;text-align: left;/*border: 1px black solid;*/height: 20px;padding: 1px}
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
        <Tbody>
            <TR><th colspan="6" align="CENTER" style="font-size: 17px;text-align:center">EVOLUCIÓ DE ENFERMERIA</th></TR>
            <tr><td></td></tr>
            <TR><TD width="10px"></TD><th>N° HC:</th><TD width="250px">_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </TD><th>Apellido Paterno:</th><td>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </td><td width="10px"></td></TR>
            <TR><TD></TD><th>DNI:</th><TD>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </TD><th>Apellido Materno:</th><td>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </td><td></td></TR>
            <TR><TD></TD><th>Servicio:</th><TD>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </TD><th>Nombres:</th><td>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </td><td></td></TR>
            <TR><TD></TD><th>N° Cama:</th><TD>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </TD><th>Clase:</th><td>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </td><td></td></TR>
            <?php
                for ($i=1; $i < 40; $i++) {
                    echo "<tr>
                            <td></td><td style='font-size: 10px' colspan='4'>_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _</td><td></td>
                        </tr>";
                }
            ?>
        </Tbody>
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