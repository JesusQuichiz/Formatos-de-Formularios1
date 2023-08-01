<!DOCTYPE html>
<html>
    <style>
        table{border-collapse: collapse;}
        /*tbody{border: 1px solid black;}
        h2{text-align: center}*/
        /*tbody{border: 1px solid black;}*/
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
            width: 85%;
            height: 90%;
            margin: 15mm;
            margin-top: 25mm;
            margin-bottom: 15mm;
            box-sizing: border-box;}
        td{height: 20px;padding: 1px;font-size: 13px;/*border: 1px black solid;*/}
        th{font-size: 13px;text-align: left;/*border: 1px black solid;*/height: 20px;padding: 1px}
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
    <head >
        <table><th style="font-size: 10px">HOSPITAL NACIONAL PNP.LNS</th></table>
        <h3 align="center">FORMATO DE REGISTRO Y REPORTE DE INCIDENTES</h3><h3 align="center">Y EFECTOS ADVERSOS</h3></head>
    <body>
        
    <table align="center">
        <TR><td colspan="20" height="20px"></td></TR><TR><td colspan="20" height="20px"></td></TR>
        <tr><th colspan="8">FECHA DE NOTIFICACION: _____________</th><TD colspan="3"></TD><TD colspan="7">SERVICIO: __________________________</TD></tr>
        <TR><td colspan="20" height="20px"></td></TR>
        <TR><th colspan="20">PERSONAL QUE NOTIFICA:</th></TR>
        <TR><td colspan="20" height="20px"></td></TR>
        <TR><TD width="20px" style="border: 3px black solid"></TD><td width="100px">Médico</td><td width="20px" style="border: 3px black solid"></td><td colspan="8">No Médico (especificar)_________________</td>
            <td width="20px"></td><td width="20px" style="border: 3px black solid"></td><td colspan="5">Estudiate (especificar) ____________</td>
        </TR>
        <TR><td colspan="20" height="20px"></td></TR>
        <TR><th colspan="20">NOMBRES Y APELLIDOS DEL PACIENTE: _____________________________________________________________</th></TR>
        <TR><td colspan="20" height="20px"></td></TR>
        <tr><td colspan="2">EDAD: ________</td><TD></TD><TD width="20px"></TD><TD width="60px">SEXO:</TD><TD>M</TD><TD width="20px" style="border: 3px black solid"></TD><TD WIDTH="20px"></TD><TD width="20px">F</TD><TD width="20px" style="border: 3px black solid"></TD><td></td>
            <TD colspan="7">N° HISTORIA CLÍNICA: ______________</TD>
        </tr>
        <TR><td colspan="20" height="20px"></td></TR>
        <tr><td style="font-size: 13px">DX:</td><td colspan="20">________________________________________________________________________________________________</td></tr>
        <tr><td></td><td colspan="20">________________________________________________________________________________________________</td></tr>
        <TR><td colspan="20" height="20px"></td></TR>
        <tr><TD width="20px" style="border: 3px black solid"></TD><th>INCIDENTE</th><td colspan="5" rowspan="4" style="font-size: 15.5px" WIDTH="100px">Es una cirdunstancia que podria haber ocacionado un daño innecesario a un paciente.</td><td></td>
            <td></td><td width="20px" style="border: 3px black solid"></td><th width="60px" align="right">EFECTO</th> <td></td><td rowspan="4" colspan="2" style="font-size: 15px" WIDTH="100px">Es una cirdunstancia que podria haber ocacionado un daño innecesario a un paciente.</td>
            <td></td><td style="border-left: 2px black solid; border-top:2px black solid"></td><th>LEVE</th><TD width="20px" style="border: 3px black solid">
        </tr>
        <TR>
            <TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><th>ADVERSO</th><td></td><td style="border-bottom: 2px black solid"></td><td style="border-left: 2px black solid"></td><th>MODERADO</th><TD width="20px" style="border: 3px black solid">
        </TR>
        <TR>
            <TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><td></td><td></td><td></td><td style="border-left: 2px black solid"></td><th>GRAVE</th><TD width="20px" style="border: 3px black solid">
        </TR>
        <TR>
            <TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><td></td><td></td><td></td><td style="border-left: 2px black solid; border-bottom:2px black solid"></td><th>FUERTE</th><TD width="20px" style="border: 3px black solid">
        </TR>
        <TR><td colspan="20" height="20px"></td></TR>
        <TR><td colspan="20" height="20px"></td></TR>
        <tr><th colspan="7">FECHA DE SUCESO: ________________</th><TD></TD><TD></TD><TD></TD><th colspan="5">HORA: ______________</th></tr>
        <TR><td colspan="20" height="20px"></td></TR>
        <?php
        for ($i=1; $i <= 10; $i++) { 
            echo "<tr><td colspan='20'>____________________________________________________________________________________________________</td></tr>";
        }
        ?>
        <TR><td colspan="20" height="20px"></td></TR><TR><td colspan="20" height="20px"></td></TR><TR><td colspan="20" height="20px" style="text-align: right">FIRMA Y SELLO DEL NOTIFICADOR</td></TR><TR><td colspan="20" height="20px"></td></TR>
        <TR><td colspan="20" height="20px"></td></TR><TR><td colspan="20" height="20px"></td></TR>
    </table>
    </body>
    </div>
    <div class="content">
    <body>
    <table align="center">
        <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
        <tr><th colspan="4">FECHA DE REUNIÓN: ___________________</th><th colspan="6">HORA: _______________</th></tr>
        <TR><td colspan="20" style="height: 3px"></td></TR>
        <TR><th colspan="10">PERSONAL CONVOCADO A REUNIÓN PARA EL ANÁLISIS:</th></TR>
        <TR><td colspan="20" style="height: 5px"></td></TR>
        <TR><TD colspan="4">1. ________________________________________</TD><TD WIDTH="25px"></TD><TD colspan="6">3. ______________________________________________</TD></TR>
        <TR><TD colspan="4">2. ________________________________________</TD><TD></TD><TD colspan="6">4. ______________________________________________</TD></TR>
        <TR><td colspan="20" height="20px"></td></TR>
        <tr><th colspan="20">ANÁLISIS DE CAUSAS:</th></tr>
        <TR><td colspan="20">(Identifique la acciones inseguras y factores contributivos)</td></TR>
        <TR><td colspan="20" style="height: 1px"></td></TR>
        <?php
        for ($i=1; $i <= 4; $i++) { 
            echo "<tr><td colspan='20'>____________________________________________________________________________________________________</td></tr>";
        }
        ?>
        <TR><td colspan="20" height="20px"></td></TR>
        <tr><th colspan="20">CATEGORÍA DEL INCIDENTE O EVENTO ADVERSO (relacionado con):</th></tr>
        <TR><td colspan="20" style="height: 5px"></td></TR>
        <tr><td width="10px"></td><TD width="20px" style="border: 1px black solid"></TD><td width="5px"></td><td style="font-size: 14px">Administración clínica</td>
            <td></td><TD width="20px" style="border: 1px black solid"></td><td width="5px"></td><td style="font-size: 14px" colspan="5">Administración de oxígeno o gases medicinales</td></tr>
        <tr><td width="10px"></td><TD width="20px" style="border: 1px black solid"></TD><td width="5px"></td><td style="font-size: 14px">Procesos o procedimientos asistenciales</td>
            <td></td><TD width="20px" style="border: 1px black solid"></td><td width="5px"></td><td style="font-size: 14px" colspan="5">Dispositivos y equipos médicos</td></tr>
        <tr><td width="10px"></td><TD width="20px" style="border: 1px black solid"></TD><td width="5px"></td><td style="font-size: 14px">Errores en la documentación</td>
            <td></td><TD width="20px" style="border: 1px black solid"></td><td width="5px"></td><td style="font-size: 14px" colspan="5">Comportamiento del personal</td></tr>
        <tr><td width="10px"></td><TD width="20px" style="border: 1px black solid"></TD><td width="5px"></td><td style="font-size: 14px">Infección asociada a la atención sanitaria</td>
            <td></td><TD width="20px" style="border: 1px black solid"></td><td width="5px"></td><td style="font-size: 14px" colspan="5">Comportamiento del paciente</td></tr>
        <tr><td width="10px"></td><TD width="20px" style="border: 1px black solid"></TD><td width="5px"></td><td style="font-size: 14px">Medicación o su administración</td>
            <td></td><TD width="20px" style="border: 1px black solid"></td><td width="5px"></td><td style="font-size: 14px" colspan="5">Accidentes del paciente</td></tr>
        <tr><td width="10px"></td><TD width="20px" style="border: 1px black solid"></TD><td width="5px"></td><td style="font-size: 14px">Sangre o sus derivados</td>
            <td></td><TD width="20px" style="border: 1px black solid"></td><td width="5px"></td><td style="font-size: 14px"colspan="5">Infraestructura</td></tr>
        <tr><td width="10px"></td><TD width="20px" style="border: 1px black solid"></TD><td width="5px"></td><td style="font-size: 14px">Nutrición</td>
            <td></td><TD width="20px" style="border: 1px black solid"></td><td width="5px"></td><td style="font-size: 14px" colspan="5">Recursos/gestión del establecimiento</td></tr>
        
        <TR><td colspan="20" height="20px"></td></TR><TR><td colspan="20" style="height: 10px"></td></TR>
        <tr><th colspan="20">PLAN DE MEJORA:</th></tr>
        <td colspan="20" style="height: 5px"></td></TR>
        <TR><TD></TD><th colspan="3">ACCIONES CORRECTIVAS:</th><td></td><td></td><td></td><th colspan="6" width="350px" style="text-align: right">IMPLEMENTADAS</th></TR>
        <tr><td height="20px"></td><td>1.</td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="25px" style="border: 1px black solid" rowspan="2"></td><td width="50px"></td></tr>
        <tr><td height="20px"></td><td></td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="50px"></td></tr>
        <tr><td height="20px"></td><td>2.</td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="25px" style="border: 1px black solid" rowspan="2"></td><td width="50px"></td></tr>
        <tr><td height="20px"></td><td></td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="50px"></td></tr>
        <tr><td height="20px"></td><td>3.</td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="25px" style="border: 1px black solid" rowspan="2"></td><td width="50px"></td></tr>
        <tr><td height="20px"></td><td></td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="50px"></td></tr>
        <TR><td colspan="20" height="20px"></td></TR>
        <TR><TD></TD><th colspan="3">ACCIONES PREVENTIVAS:</th><td></td><td></td><td></td><TD colspan="6"></TD></TR>
        <tr><td height="20px"></td><td>1.</td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="25px" style="border: 1px black solid" rowspan="2"></td><td width="50px"></td></tr>
        <tr><td height="20px"></td><td></td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="50px"></td></tr>
        <tr><td height="20px"></td><td>2.</td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="25px" style="border: 1px black solid" rowspan="2"></td><td width="50px"></td></tr>
        <tr><td height="20px"></td><td></td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="50px"></td></tr>
        <tr><td height="20px"></td><td>3.</td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="25px" style="border: 1px black solid" rowspan="2"></td><td width="50px"></td></tr>
        <tr><td height="20px"></td><td></td><td colspan="6">____________________________________________________________________</td><td width="50px"></td><td width="50px"></td></tr>
        <TR><td colspan="20" style="height: 15px"></td></TR>
        <TR><th colspan="20">VERIFICACIÓN DE EFECTIVIDAD DEL PLAN DE MEJORA:</th></TR>
        <TR><td colspan="20" style="height: 5px"></td></TR>
        <?php
        for ($i=1; $i <= 2; $i++) { 
            echo "<tr><td colspan='20'>____________________________________________________________________________________________________</td></tr>";
        }
        ?>
        <TR><td colspan="20" height="20px"></td></TR>
        <TR><th colspan="20">FECHA DE VERIFICACIÓN: ___________________</th></TR>
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