<!DOCTYPE html>
<html>
    <style> 
        table{border-collapse: collapse}
        thead{border-color: white;
                border-bottom-color: black}
        Th{vertical-align: bottom}
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
            margin-top: 20mm;
            margin-bottom: 5mm;
            box-sizing: border-box;}
        th{font-size: 12px;text-align: left;border: 1px black solid;height: 13px}
        
        .imagen-esquina {
            position: absolute;
            top: -10mm; /* Ajusta la distancia desde el borde superior (cambia 10mm según necesites) */
            left: 10mm; /* Ajusta la distancia desde el borde izquierdo (cambia 10mm según necesites) */
            /* Ajusta el tamaño de la imagen (cambia width y height según necesites) */
            width: 40px;
            height: 50px;
            }

            .imagen-esquina-derecha {
                position: absolute;
                top: -10mm; /* Ajusta la distancia desde el borde superior (cambia 10mm según necesites) */
                right: 10mm; /* Ajusta la distancia desde el borde derecho (cambia 10mm según necesites) */
                /* Ajusta el tamaño de la imagen (cambia width y height según necesites) */
                width: 40px;
                height: 50px;
            }

    </style>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
        <script src="{{ asset('node_modules/jspdf/dist/jspdf.umd.min.js') }}"></script>

    </head>
    <body>
        
        <div class="content">
            
        <div style="text-align: center;font-size:18px"><strong>COMPLEJO HOSPITALARIO.PNP.LNS</strong></div>
        <img src="/images/dirsapol.png" class="imagen-esquina">
        <img src="/images/dirsapol.png" class="imagen-esquina-derecha">

        <table align="center">
            <TR><th width="2100" style="border: 1px black solid; text-align:center; font-size: 17px">HOJA DE BALANCE HIDRICO</th></TR>
            <tr><th style="border: 1px white solid; height:5px"></th></tr>
        </table>
    
    <table>
        <tbody>
            <tr>
                <th colspan="5" style="text-align:center" width="1050px">INGRESOS</th>
                <th colspan="5" style="text-align:center" width="1050px">EGRESOS</th>
            </tr>
            <tr>
                <th width="150px">PESO</th>
                <th colspan="2">PI:</th>
                <th colspan="2">AO:</th>
                <th></th>
                <th style="text-align: center" width="50px">M</th>
                <th style="text-align: center" width="50px">T</th>
                <th style="text-align: center" width="50px">N</th>
                <th style="text-align: center" width="50px">TOTAL</th>
            </tr>
            <tr>
                <th></th>
                <th style="text-align: center" width="50px">M</th>
                <th style="text-align: center" width="50px">T</th>
                <th style="text-align: center" width="50px">N</th>
                <th style="text-align: center" width="50px">TOTAL</th>
                <th width="170px">DIURESIS</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>HIDRATACION</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>VOMITOS</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>INYECTABLES</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>DRENAJE ASPIRACIÓN</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>ASPIRACIÓN</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>HECES</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>ORAL</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>SNG</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>AGUA OXIGENACIÓN</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>PERDIDAS INSENSIBLES</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>TOTAL</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>TOTAL</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>BALANCE</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="2">BH 24 HORAS</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>FECHA:</th>
                <th colspan="4" rowspan="3">M</th>
                <th rowspan="3">T</th>
                <th colspan="4" rowspan="3">N</th>
            </tr>
            <tr align="left">
                <th>RESPONSABLE:</th>
            </tr>
            <TR></TR>
            <tr>
                <th colspan="3">APELLIDO PATERNO:</th>
                <th colspan="3">APELLIDO MATERNO:</th>
                <th colspan="4">NOMBRE:</th>
            </tr>
            <tr>
                <th>N.-CAMA:</th>
                <th colspan="4">EDAD:</th>
                <th >HC:</th>
                <th colspan="4">DNI:</th>
            </tr>
            <tr><td height="10px"></td></tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th colspan="5" style="text-align:center" width="1050px">INGRESOS</th>
                <th colspan="5" style="text-align:center" width="1050px">EGRESOS</th>
            </tr>
            <tr>
                <th width="150px">PESO</th>
                <th colspan="2">PI:</th>
                <th colspan="2">AO:</th>
                <th></th>
                <th style="text-align: center" width="50px">M</th>
                <th style="text-align: center" width="50px">T</th>
                <th style="text-align: center" width="50px">N</th>
                <th style="text-align: center" width="50px">TOTAL</th>
            </tr>
            <tr>
                <th></th>
                <th style="text-align: center" width="50px">M</th>
                <th style="text-align: center" width="50px">T</th>
                <th style="text-align: center" width="50px">N</th>
                <th style="text-align: center" width="50px">TOTAL</th>
                <th width="170px">DIURESIS</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>HIDRATACION</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>VOMITOS</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>INYECTABLES</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>DRENAJE ASPIRACIÓN</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>ASPIRACIÓN</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>HECES</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>ORAL</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>SNG</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>AGUA OXIGENACIÓN</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>PERDIDAS INSENSIBLES</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>TOTAL</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>TOTAL</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>BALANCE</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="2">BH 24 HORAS</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>FECHA:</th>
                <th colspan="4" rowspan="3">M</th>
                <th rowspan="3">T</th>
                <th colspan="4" rowspan="3">N</th>
            </tr>
            <tr align="left">
                <th>RESPONSABLE:</th>
            </tr>
            <TR></TR>
            <tr>
                <th colspan="3">APELLIDO PATERNO:</th>
                <th colspan="3">APELLIDO MATERNO:</th>
                <th colspan="4">NOMBRE:</th>
            </tr>
            <tr>
                <th>N.-CAMA:</th>
                <th colspan="4">EDAD:</th>
                <th >HC:</th>
                <th colspan="4">DNI:</th>
            </tr>
            <tr><td height="10px"></td></tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th colspan="5" style="text-align:center" width="1050px">INGRESOS</th>
                <th colspan="5" style="text-align:center" width="1050px">EGRESOS</th>
            </tr>
            <tr>
                <th width="150px">PESO</th>
                <th colspan="2">PI:</th>
                <th colspan="2">AO:</th>
                <th></th>
                <th style="text-align: center" width="50px">M</th>
                <th style="text-align: center" width="50px">T</th>
                <th style="text-align: center" width="50px">N</th>
                <th style="text-align: center" width="50px">TOTAL</th>
            </tr>
            <tr>
                <th></th>
                <th style="text-align: center" width="50px">M</th>
                <th style="text-align: center" width="50px">T</th>
                <th style="text-align: center" width="50px">N</th>
                <th style="text-align: center" width="50px">TOTAL</th>
                <th width="170px">DIURESIS</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>HIDRATACION</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>VOMITOS</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>INYECTABLES</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>DRENAJE ASPIRACIÓN</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>ASPIRACIÓN</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>HECES</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>ORAL</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>SNG</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>AGUA OXIGENACIÓN</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>PERDIDAS INSENSIBLES</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>TOTAL</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>TOTAL</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>BALANCE</th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="2">BH 24 HORAS</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr align="left">
                <th>FECHA:</th>
                <th colspan="4" rowspan="3">M</th>
                <th rowspan="3">T</th>
                <th colspan="4" rowspan="3">N</th>
            </tr>
            <tr align="left">
                <th>RESPONSABLE:</th>
            </tr>
            <TR></TR>
            <tr>
                <th colspan="3">APELLIDO PATERNO:</th>
                <th colspan="3">APELLIDO MATERNO:</th>
                <th colspan="4">NOMBRE:</th>
            </tr>
            <tr>
                <th>N.-CAMA:</th>
                <th colspan="4">EDAD:</th>
                <th >HC:</th>
                <th colspan="4">DNI:</th>
            </tr>
        </tbody>
    </table>
    </div>
    
        <div style="text-align: center">
            
            <button id="botonPDF" onclick="generarPDF()">Generar y Descargar PDF</button>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

        <script>
            /*function imprimirContenido() {
              // Oculta el botón antes de imprimir
              document.getElementById('botonPDF').style.display = 'none';
        
              const contenido = document.body.innerHTML;
              const estilos = obtenerEstilosCSS();
              const ventanaImpresion = window.open('', '_blank');
              ventanaImpresion.document.write('<html><head>' + estilos + '</head><body>');
              ventanaImpresion.document.write(contenido);
              ventanaImpresion.document.write('</body></html>');
              ventanaImpresion.document.close();
              ventanaImpresion.print();
              ventanaImpresion.close();
        
              // Restaura la visibilidad del botón después de imprimir
              document.getElementById('botonPDF').style.display = 'block';
            }
        
            function obtenerEstilosCSS() {
              // Obtiene los estilos CSS de la hoja de estilos principal y los devuelve como una cadena
              const estilos = Array.from(document.styleSheets)
                .filter(sheet => sheet.href === null || sheet.href.startsWith(window.location.origin))
                .map(sheet => Array.from(sheet.cssRules)
                  .map(rule => rule.cssText)
                  .join('\n'))
                .join('\n');
              return '<style>' + estilos + '</style>';
            }*/

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


          </script>
    </body>
</html>
</!DOCTYPE>