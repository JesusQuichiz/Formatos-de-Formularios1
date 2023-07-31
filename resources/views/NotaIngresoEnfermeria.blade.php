<!DOCTYPE html>
<html>
    
    <head> 
        <style>
            table{border-collapse: collapse;}
            /*tbody{border: 1px solid black;}
            h2{text-align: center}*/
            body{position: relative}
            @media print {
            @page {size: A4;margin: 0;}
            #planoCartesiano,
            .imagenCapturada {
            visibility: visible;
            width: 100%; /* Ajusta el ancho de la imagen capturada para que llene la página al imprimir */
            height: auto; /* Ajusta la altura de la imagen capturada para mantener la proporción */
          }
            }
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
            td{height: 15px;padding: 1px;font-size: 11.5px;/*border: 1px black solid;*/}
            th{font-size: 11.5px;text-align: left;/*border: 1px black solid;*/height: 15px;padding: 1px}
            td {
                border-top-width: 1px;
                border-bottom-width: 1px;
                }
            td.subrayado {
                border-bottom: 1px solid black;
                }
            td.lineapuntos{border-bottom: 1px dotted black}
            
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
            /*<?php for ($i=1; $i < 7; $i++) { 
                echo "<td>";echo $i;echo"</td>";
            }?>*/
            #planoCartesiano {
          width: 162px;
          height: 180px;
          position: relative;
          background-image: url('/images/persona.jpeg');
          background-size: 162px 180px;
        }
    
        .coordenada {
          position: absolute;
          width: 10px;
          height: 10px;
          border-radius: 50%;
          background-color: red;
          cursor: pointer;
        }
        
            
        </style>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>

        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    </head>
    <body>
    <div class="content">
    <table align="center" >
        <tr><th colspan="20" height="20px" align="left" style="font-size: 12px">DIRSAPOL HN PNP LNS</th><th colspan="20" height="20px" align="right" style="font-size: 12px">DEPARTAMENTO DE CUIDADOS INTENSIVOS</th></tr>
        <tr><th colspan="40" height="20px" style="text-align: center; font-size:14px">NOTA DE INGRESO DE ENFERMERÍA UCIG</th></tr>
        <tr><td width="10px"></td><th style="font-size: 12px" width="30px" colspan="2">Fecha:</th><td colspan="6" contenteditable="true" class="subrayado"></td><td height="20px"><td height="20px" width="20px"></td> <td height="20px" width="5px"></td><th colspan="2">Hora:</th><td colspan="4" contenteditable="true" class="subrayado"></td><th colspan="7">FAMILIAR RESPONSABLE-:</th><td colspan="15" contenteditable="true" class="subrayado"></td><td width="10px"></td></tr>
        <tr><td colspan="40" style="height: 10px"></td></tr>
        <tr><td></td><th colspan="8" style="font-size: 14px">Nombres y Apellidos:</th><td colspan="21" contenteditable="true" class="subrayado" style="font-size: 14px"></td><td colspan="4">N° HC:</td><td colspan="6" contenteditable="true" class="subrayado" style="font-size: 14px"></td><td></td></tr>
        <tr><td colspan="40" style="height: 5px"></td></tr>
        <tr><td></td><td colspan="2">Sexo:</td><td width="30px">M</td><td width="25px" style="border: 1px black solid;text-align:center" contenteditable="true">x</td><td></td><td width="25px">F</td><td></td><td style="border: 1px black solid; text-align:center" contenteditable="true"></td><td></td><td></td><td width="5px"></td><td colspan="2">Edad:</td><td contenteditable="true" class="subrayado" width="20px"> </td><td colspan="3">años</td><td colspan="2"></td><td colspan="2">Peso:</td><td contenteditable="true" class="subrayado"></td><td colspan="4">Kg.</td><td width="10px"></td><td colspan="2"></td><td colspan="3">Talla:</td><td colspan="2" contenteditable="true" class="subrayado" style="text-align: center"></td><td colspan="5">cm</td><td></td></tr>
        <tr><td></td><th colspan="6">Antecedentes:</th><td></td><td></td><td></td><th>HTA</th><td width="5px"></td><td width="18px"></td><td></td><td></td><th></th><td></td><th colspan="2" style="text-align: right">RAM</th><td colspan="20" contenteditable="true" class="subrayado" style="padding-left: 5px"></td><td></td><td></td></tr>
        <tr><td></td><th colspan="8" style="font-size: 10.5px">DIABETES MELLITUS:</th><td colspan="9" contenteditable="true" class="subrayado" style="padding-left: 5px"></td><th colspan="3">TRATAMIENTO</th><td colspan="17" contenteditable="true" class="subrayado"></td><td colspan="3"></td></tr>
        <tr><td colspan="40" style="height: 5px"></td></tr>
        <tr><td></td><th colspan="9" style="font-size: 10.5px">OTROS ANTECEDENTES:</th><td colspan="12" contenteditable="true" class="subrayado" style="padding-left: 5px"></td><td></td><th colspan="10">VACUNA PARA COVID-19</th><TD width="14px">Si</TD><td style="border: 1px black solid" width=20px align="center" contenteditable="true"></td><td width="18px"></td><td></td><TD style="padding-right: 2px" width="15px">No</TD><td style="border: 1px black solid" wifth="20px" align="center"  contenteditable="true"></td><td colspan="2"></td></tr>
        <TR><td></td><th colspan="17" style="font-size: 13.2px">Diagnóstico según orden de Hospitalización:</th><td colspan="23" contenteditable="true" class="subrayado"></TD></TR>
        <tr><td></td><td colspan="5">Ingresa por:</td><TD colspan="11"></TD><TD colspan="11">Condiciones de Ingreso:</TD><TD colspan="13">Acompañado por:</TD></tr>
        <tr><td></td><td colspan="5">-Emenrgencia</td><td></td><td></td><td style="border: 1px black solid" align="center" contenteditable="true"></td><td colspan="8"></td><td colspan="11"></td><td colspan="7" width="140px">Personal de Salud</td><td style="border: 1px black solid" align="center" contenteditable="true"></td><td colspan="5"></td></tr>
        <tr><td></td><td colspan="5">-Centro Qx</td><td></td><td></td><td style="border: 1px black solid" align="center" contenteditable="true"></td><td colspan="8"></td><td colspan="6">En camilla</td><td style="border: 1px black solid" width="30px" align="center" contenteditable="true"></td><td colspan="4"></td><td colspan="7">Familiar</td><td style="border: 1px black solid" align="center" contenteditable="true"></td><td colspan="5"></td></tr>
        <tr><td></td><td colspan="5">-Tranferencia</td><td></td><td></td><td style="border: 1px black solid" align="center" contenteditable="true"></td><td colspan="8"></td><td colspan="6">Silla de ruedas</td><td style="border: 1px black solid" align="center" contenteditable="true"></td><td colspan="4"></td><td colspan="7">Otros:</td><td style="border: 1px black solid" align="center" contenteditable="true"></td><td colspan="5"></td></tr>
        <tr><td></td><td width="20px" style="padding-left: 5px">de</td><td colspan="13" contenteditable="true" class="subrayado"></td><td></td><td width="4px"></td><td colspan="11"></td><td colspan="12" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><td colspan="50" height="20px"></td></tr>
        <tr><td style="border-top: 1px black solid;border-left: 1px black solid"></td><th colspan="15" style="border-top: 1px black solid;border-right: 1px black solid">FUNCIONES VITALES:</th><td></td><th colspan="11">ESTADO DE CONCIENCIA:</th><th colspan="12">FUNCION MOTORA:</th><td></td></tr>
        <tr><td style="border-left: 1px black solid"></td><td colspan="15" height="15px"  style="border-right: 1px black solid"></td><td></td><td colspan="24" height="15px"></td></tr>
        <tr><td style="border-left: 1px black solid"></td><th>PA</th><td></td><td colspan="4" contenteditable="true" class="subrayado" align="center"></td><td></td><th>FC</th><td></td><td colspan="4" contenteditable="true" class="subrayado" align="center"></td><td></td><td style="border-right: 1px black solid"></td><td></td><TD colspan="2">Despierto</TD><td width="16px" style="border: 1px black solid" contenteditable="true" align="center"></td><td width="5px"></td><td colspan="4">Somnoliento</td><td width="30px" style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="2"></td><td colspan="7">Conservada</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="5"></td></tr>
        <tr><td style="border-left: 1px black solid"></td><th colspan="15" height="15px"  style="border-right: 1px black solid"></th><td></td></tr>
        <tr><td style="border-left: 1px black solid"></td><td>FR</td><td></td><td colspan="4" contenteditable="true" class="subrayado" align="center"></td><td></td><th>T°</th><td></td><td colspan="4" contenteditable="true" class="subrayado" align="center"></td><td></td><td style="border-right: 1px black solid"></td><td></td><td colspan="2">Sopor</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td colspan="4">Coma</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="2"></td><td colspan="7">Alterada</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="5"></td></tr>
        <tr><td style="border-left: 1px black solid"></td><td colspan="15" height="15px"  style="border-right: 1px black solid"></td><td></td></tr>
        <tr><td style="border-left: 1px black solid"></td><th colspan="2">Sat.O2</th><td colspan="4" contenteditable="true" class="subrayado" align="center"></td><td></td><th colspan="2" style="font-size: 10px">PAM</th><td colspan="4" contenteditable="true" class="subrayado" align="center"></td><td></td><td style="border-right: 1px black solid"></td><td></td><td colspan="2">Glasgow</td><td colspan="9" contenteditable="true" class="subrayado"></td><td colspan="7">Postrado</td><td style="border: 1px black solid"  contenteditable="true" align="center"></td><td colspan="5"></td></tr>
        <tr><td style="border-left: 1px black solid;border-bottom: 1px black solid"></td><td colspan="15" height="15px" style="border-bottom: 1px black solid; border-right: 1px black solid"></td><td></td></tr>
        <tr><td></td><th colspan="15">PIEL:</th><TD></TD><th colspan="11">RESPIRATORIO:</th><th colspan="12">CARDIOLOGICO:</th><td></td></tr>
        <TR><TD></TD><TD colspan="2">Color:</TD><td></td><td></td><td></td><td colspan="10" rowspan="10" id="celda1"><div id="planoCartesianoContainer"><div id="planoCartesiano" onclick="agregarCoordenada(event)"></div></div></td><td></td><TD colspan="11">Duración:</TD><td colspan="12"></td><td></td></TR>
        <tr><td></td><td colspan="3">Cianótica</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td></td><td colspan="2">Normal</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td colspan="4">Bradipnea</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="2"></td><th colspan="3">Anticuag</th><td width="17px" style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td></td><th colspan="3">Arritmia</th><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="3"></td></tr>
        <tr><td></td><td colspan="3" height="20px"></td><td></td><td></td><td></td><td colspan="2">Taquipnea</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td colspan="4">Apnea</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="2"></td><th colspan="3">Bye Pass</th><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td></td><th colspan="3">FA</th><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="3"></td></tr>
        <tr><td></td><td colspan="3">Ictericia</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td></td><td colspan="2">Polipnea</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="8"></td><th colspan="4">Valvulopatía</th><td colspan="8" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><td colspan="3" height="20px"></td><td></td><td></td><td></td><td colspan="11"></td><th colspan="7">Portador Marcapaso</th><td colspan="5" contenteditable="true" class="subrayado"></th><td></td></tr>
        <tr><td></td><td colspan="3" height="20px"></td><td></td><td></td><td></td><td colspan="11">Secreciones Bronquiales:</td><td colspan="13"></td></tr>
        <tr><td></td><td colspan="3" height="20px"></td><td></td><td></td><td></td><td colspan="11"></td><th colspan="13">RENAL:</th></tr>
        <tr><td></td><td colspan="3" height="20px"></td><td></td><td></td><td></td><td colspan="2">Presente</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td width="10px"></td><td colspan="3">Ausente</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="2"></td><td colspan="7">Micción espontánea:</td><td>Si</td><td style="border: 1px black solid" width="16px" contenteditable="true" align="center"></td><td></td><td>No</td><td style="border: 1px black solid" width="22px" contenteditable="true" align="center"></td><td></td></tr>
        <tr><td></td><td colspan="3" height="20px"></td><td></td><td></td><td></td><td colspan="2">TOS</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="8"></td><td colspan="12">Sonda:</td><td></td></tr>
        <tr><td></td><td colspan="3" height="20px"></td><td></td><td></td><td></td><td colspan="11"></td><td colspan="7">Tratamiento Renal:</td><td colspan="5" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><td colspan="3">Edema:</td><td>Si</td><td></td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td></td><td></td><td>No</td><td></td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td></td>
            <td colspan="3"></td><td colspan="4">Oxigenoterapia:</td><td></td><td align="right">Si</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td align="right" width="20px">No</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td></td><td>HD</td><td colspan="11" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><td colspan="15" height="20px"></td><td></td><td colspan="11"></td><td>FAV</td><td colspan="11" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><td colspan="15" height="20px">Integridad:</td><td></td><td colspan="2">Ambú</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td></td><td>TET</td><td></td><td></td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td></td><td colspan="12"></td><td></td></tr>
        <tr><td></td><td colspan="3">Indemne</td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td></td><td></td><td></td><td colspan="3">Lesiones</td><td></td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="4"></td><td colspan="10" contenteditable="true" class="subrayado" align="center"></td><td></td><th colspan="8">Dispositivos invasivos:</th><TD>Si</TD><td style="border: 1px black solid" contenteditable="true" align="center"></td><TD width="20px" align="right">No</TD><td style="border: 1px black solid" width="18px" contenteditable="true" align="center"></td><td></td></tr>
        <tr><td></td><th height="20px">UPP</th><td colspan="14" contenteditable="true" class="subrayado"></td><td></td><td colspan="11"></td><td colspan="4">Via Periférica</td><td colspan="8" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><td colspan="15" height="20px"></td><td></td><td colspan="2">Otros</td><td colspan="8" contenteditable="true" class="subrayado"></td><td></td><td colspan="4">Via Central</td><td colspan="8" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><th colspan="15" height="20px">ABDOMEN:</th><td></td><td colspan="11"></td><td>Sondas:</td><td colspan="5" contenteditable="true" class="subrayado"></td><td colspan="4" style="font-size: 10.5px">SNG Gravedad</td><td colspan="2" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><td colspan="6">Blando depresible</td><td></td><td></td><td></td><td></td><td></td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="4"></td><td colspan="10" contenteditable="true" class="subrayado"></td><td></td><td colspan="2">Drenajes:</td><td colspan="10" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><td colspan="6">Distendido</td><td></td><td></td><td></td><td></td><td></td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="15"></td><td colspan="6">Catéter Alto Flujo:</td><td colspan="6" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><td colspan="6">Globuloso</td><td></td><td></td><td></td><td></td><td></td><td style="border: 1px black solid" contenteditable="true" align="center"></td><td colspan="15"></td><td colspan="5">Línea Arterial:</td><td colspan="7" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><td colspan="15" contenteditable="true" class="subrayado"></td><td></td><td colspan="11"></td><td colspan="12">Otros:</td><td></td></tr>
        <tr><td></td><td colspan="15" height="20px"></td><td></td><td colspan="11"></td><td colspan="12" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><th colspan="15" height="20px">-EVALUCION DE GRADO MALLAMPATY</th><td></td><td colspan="2"></td><th colspan="21">NOTAS DE ENFERMERIA:(Evolución) R/A VALORACION</th><td></td></tr>
        <tr><td height="50px"></td><td colspan="15" height="20px" colspan="2" rowspan="3"><img src="/images/mallamapati.jpg" class="imagencelda2"></td><td></td><td colspan="2"></td><td colspan="21" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td height="50px"></td><td colspan="2"></td><td></td><td colspan="21" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td height="50px"></td><td colspan="2"></td><td></td><td colspan="21" contenteditable="true" class="subrayado"></td><td></td></tr>
        <tr><td></td><th colspan="3" height="20px">MARCAR</th><td></td><th>I</th><TD></TD><TD></TD><th>II</th><TD></TD><th style="text-align: right">III</th><TD></TD><TD></TD><TD></TD><th>IV</th></tr>
        <tr><td colspan="8"></td><th colspan="11">BRAZALETE DE IDENTIFICACION:</th><TD colspan="2" style="border: 1px black solid" contenteditable="true" align="center"></TD><TD></TD><TD></TD><TD></TD><TD colspan="2" style="border: 1px black solid" contenteditable="true" align="center"></TD><th>RAM</th><TD></TD><TD width="40px" style="border: 1px black solid" contenteditable="true" align="center"></TD><th colspan="9">RIESGO DE CAIDAS</th><TD colspan="3"></TD></tr>
    </table>
</div>

</body>

  <!-- Elemento para mostrar la imagen capturada -->
  <img id="imagenCapturada" style="display: none;" />
 
<footer><div style="text-align: center">
    

    <button id="botonPDF" onclick="convertirImagenYGenerarPDF()">Generar y Descargar PDF</button>
</div></footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>


    <Script>
        
       
       
        function agregarCoordenada(event) {
      const celda = document.getElementById('celda1');
      const x = event.clientX - celda.offsetLeft+100;
      const y = event.clientY - celda.offsetTop+680;

      const coordenada = document.createElement('div');
      coordenada.className = 'coordenada';
      coordenada.style.left = (x - 4) + 'px';
      coordenada.style.top = (y - 4) + 'px';
      celda.appendChild(coordenada);

      // Captura el contenido de la celda y establece la imagen capturada
      html2canvas(celda).then(function (canvas) {
        const imgData = canvas.toDataURL('image/jpeg');

        // Eliminamos el plano cartesiano anterior
        const planoAnterior = celda.querySelector('.planoCartesiano');
        if (planoAnterior) {
          planoAnterior.remove();
        }

        // Creamos un nuevo plano cartesiano con la imagen capturada
        const nuevoPlanoCartesiano = document.createElement('div');
        nuevoPlanoCartesiano.className = 'planoCartesiano';
        nuevoPlanoCartesiano.style.backgroundImage = `url(${imgData})`;
        nuevoPlanoCartesiano.onclick = (event) => agregarCoordenada(event);

        // Agregamos el nuevo plano cartesiano a la celda
        celda.appendChild(nuevoPlanoCartesiano);
      });
    }
    
    async function capturarContenidoCelda(celdaId) {
        
      const celda = document.getElementById(celdaId);

       //Oculta el botón temporalmente para la versión de impresión
      document.querySelector('button').style.visibility = 'hidden';

      // Captura el contenido de la celda y conviértelo en una imagen
      html2canvas(celda).then(function (canvas) {
        const imgData = canvas.toDataURL('image/png');
        const imagenCapturada = document.getElementById('imagenCapturada');
        imagenCapturada.src = imgData;
        imagenCapturada.style.display = 'block';

        // Reemplaza el contenido de la celda con la nueva imagen
        celda.innerHTML = '';
        celda.appendChild(imagenCapturada);

        // Vuelve a mostrar el botón después de capturar la imagen
        document.querySelector('button').style.visibility = 'visible';
      });
    }
        
    async function generarPDF() {
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
        imagenes[i].style.display = 'visible';
      }
    }
    
    async function convertirImagenYGenerarPDF() {
    await capturarContenidoCelda('celda1'); // Esperar a que la captura de la celda se complete
    setTimeout(generarPDF, 100); // Esperar a que se genere el PDF después de capturar la celda
  }

  
    
    </Script>
</html>