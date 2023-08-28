<!DOCTYPE html>
<html>
    <head>
        <style>
            body{position: relative;}
            @media print {
                @page {
                size: A3;
                margin: 0;}
            }

            html, body {
                height: 420mm;
                width: 297mm;
                margin: 0;
                padding: 0;
            }
      
            .content {
                width: 96.5%;
                height: 99%;
                margin-left: 5mm;
                margin-top: 5mm;
                box-sizing: content-box;
                
            }
            
            table{border-collapse: collapse;}
            td{font-size: 10.3px;height: 11px; padding: 0%; border: 1px black solid}
            /*tbody{border: 1px solid black;}*/
            th{text-align: center;font-size: 9.3px;height: 11px; padding: 0%; border: 1px black solid}
            .vertical-text {
                writing-mode: vertical-rl;
                text-orientation: upright;
                white-space: nowrap;
            }
            .vertical-text-container {
                display: flex;
                flex-direction: row;
            }
            .rotated-text {transform: rotate(-90deg);white-space: nowrap;max-width: 20px;}
            #planoCartesiano {
                width: 100%;
                height: 100%;
                position: relative;
                background-image: url('/images/persona.jpeg');
                background-size: 100% 100%;
            }
          
            .coordenada {
                position:absolute;
                width: 15px;
                height: 15px;
                border-radius: 50%;
                background-color: red;
                cursor:pointer;
            }
              
              
            /*.imagencelda{width: 140px;
                height: 150px;}
            .imagencelda2{
                position: relative;
                padding-bottom: 3px;
                padding-top: 5px;
                width: 220px;
                height: 60px;
                left: 8mm}*/
      
      
        /* Aquí puedes agregar tus estilos personalizados para el contenido del documento */
      
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
      
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    </head>
    <body>
        <div class="content">
            <table>
                <tr>
                    <th colspan="2" width="280px">VALORACION DE ENFERMERIA POR PATRONES FUNCIONALES</th>
                    <th width="30px" style="border-left: 2px black solid;border-top: 2px black solid">M</th>
                    <th width="30px" style="border-top: 2px black solid">T</th>
                    <th width="30px" style="border-right: 2px black solid;border-top: 2px black solid">N</th>
                    <th width="280px" colspan="2">VALORACION DE ENFERMERIA POR PATRONES FUNCIONALES</th>
                    <th width="30px" style="border-left: 2px black solid;border-top: 2px black solid">M</th>
                    <th width="30px" style="border-top: 2px black solid">T</th>
                    <th width="30px" style="border-right: 2px black solid;border-top: 2px black solid">N</th>
                </tr>
                <tr></tr>
                <tr>
                    <th colspan="5" style="border: 2px black solid">1 PATRÓN: PERCEPCIÓN MANEJO DE LA SALUD.</th>
                    <th colspan="5" style="border: 2px black solid">4 PATRÓN Actividad y Ejercicio</th>
                </tr>
                <tr>
                    <th rowspan="6" class="rotated-text" width="30px" style="border: 2px black solid"><div class="vertical-text-container">Procedimientos</div><div class="vertical-text-container">Invasivos</div></th>
                    <td width="160px">Procedimientos Invasivos: SI( ) No( )</td>
                    <td style="border-left: 2px solid black"><td></td><td></td>
                    <td rowspan="6" width="40px" style="border: 2px black solid">Actividad Ejrcicio</td><td width="180px">Conservada(_) Inestable(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>CVC</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Activo(_) Hipoactivo(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Cateter Venoso Periferico</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Postrado.</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Linea Arterial</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Contracturado.</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Drenes:</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Flacidez(_) Hemiplejia(_)</td><td></td><td></td><td></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Hemiparesia(_) Cuadriplejia(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <th rowspan="9" class="rotated-text" style="border: 2px black solid"><div class="vertical-text-container">Integridad</div><div class="vertical-text-container">de la piel</div></th>
                    <td>Flebitis CVP</td>
                    <td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td rowspan="3" style="border: 2px black solid">Tono</td><td>Normal</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>LPP: I( ) II( ) III( ) IV( )</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Hipotónico</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>DAI: Si( ) No( )</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Hipertónico.</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Hematoma( ) Equimosis( )</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td rowspan="6" style="border: 2px black solid">Perfusión</td><td>Llenado capilar ..... Seg.</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Lesiones por Venupunsión Si( ) No( )</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Cianosis: Periférica (_) Central (_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Insición Quirurgica Si( ) No( )</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Frialdad distal</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Normotermia</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Isquemia(_) Necrosis(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Hipertermia</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Otros</td><td></td><td></td><td></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td>Hipotermia</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <th colspan="5" style="border: 2px black solid"></th>
                    <td rowspan="16" style="border: 2px black solid">Respuesta Cardiovascular Pulmonares</td>
                    <td>Pulso Apical</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td colspan="2">EVA: 1 - 10</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Pulso Periférico: Radial</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td colspan="2">Dolor: Agudo ( ) Crónico ( )</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Pedio.</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Localizacion</td><td></td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Poplíteo</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td colspan="2">Nauseas: Si( ) No( )</td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>Ritmo Cardiaco</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <th colspan="5" style="border: 2px black solid">CURACIÓN DE LPP</th>
                    <td>Arritmias</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <th rowspan="7" style="border: 2px black solid">Usa</th><td rowspan="2">Apósitos Primarios (Alginato de Ca / Apósito de Plata) Si( ) No( )</td>
                    <td rowspan="2" style="border-left: 2px solid black"></td><td rowspan="2"></td><td rowspan="2"></td>
                    <td>Ritmo Sinusal</td><td></td><td></td><td></td>
                </tr>
                <tr><td>Ingurgitación Yugular</td><td></td><td></td><td></td></tr>
                <tr>
                    <td rowspan="2">Apósitos Secundarios / Apósitos Especiales Si( ) No( )</td>
                    <td rowspan="2" style="border-left: 2px solid black"></td><td rowspan="2"></td><td rowspan="2"></td>
                    <td>Enfisema</td><td></td><td></td><td></td>
                </tr>
                <tr><td>Marcapaso Transitorio.</td><td></td><td></td><td></td></tr>
                <tr>
                    <td rowspan="3">Productos de barrera (Cavilon / Bpantenhe / Polvo brava) Si( ) No( )</td>
                    <td rowspan="3" style="border-left: 2px solid black"></td><td rowspan="3"></td><td rowspan="3"></td>
                    <td>Marcapaso definitivo</td><td></td><td></td><td></td>
                </tr>
                <tr><td>Edema si(_) no(_) (localización)</td><td></td><td></td><td></td></tr>
                <tr><td>Várices</td><td></td><td></td><td></td></tr>
                <tr>
                    <th colspan="2" style="border: 2px black solid">Insumos Utilizados</th><td></td><td></td><td></td>
                    <td>Herida Operat. torax</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <th rowspan="8" style="border: 2px black solid">Día Anterior</th><td></td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>EKG</td><td></td><td></td><td></td>
                </tr>
                
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> <td></td><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td rowspan="3" style="border: 2px black solid">Soporte Hemodinamico</td><td>Vasodilatador: Si(_) No(_)</td><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> <td>Inotropico Si(_) No(_)</td><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> <td>Nitratos EV Si(_) No(_)</td><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> 
                    <td rowspan="5" style="border: 2px black solid">Apoyo Vent.</td><td>Canula Nasal</td><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> <td>Mascara de Venturi</td><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> <td>Mascara de Reservorio</td><td></td><td></td><td></td></tr>
                
                <tr>
                    <th rowspan="8" style="border: 2px black solid">Día Actual</th><td></td><td style="border-left: 2px solid black"></td><td></td><td></td>
                    <td>V. Mecanica No Invasiva</td><td></td><td></td><td></td>
                </tr>
                
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> <td>V. Mecanica Invasiva</td><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> <th colspan="2" style="border: 2px black solid">5 PATRÓN: Sueño Descanso</th><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> 
                    <td rowspan="4" style="border: 2px black solid">Reposo Sueño</td><td>Sueño tranquilo</td><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> <td>Interrumpido</td><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> <td>Delirio. Insomnio</td><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> <td>Usa Medicamentos</td><td></td><td></td><td></td></tr>
                <tr><td></td><td style="border-left: 2px solid black"></td><td></td><td></td> <th colspan="5" style="border: 2px black solid">6 PATRÓN: Cognitivo Perceptual</th></tr>

                <tr>
                    <th colspan="5" rowspan="2" style="border: 2px black solid">2 PATRÓN - Nutricional Metabólico</th>
                    <td rowspan="3" style="border: 2px black solid">Pupilas</td><td>Isocoricas</td><td></td><td></td><td></td>
                </tr>
                <tr><td>Discoricas</td><td></td><td></td><td></td></tr>
                <tr>
                    <td colspan="2">Dificultad para deglutir</td><td></td><td></td><td></td>
                    <td>Mioticas (_) No Evaluables (_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td colspan="2">Incapacidad para absorber</td><td></td><td></td><td></td>
                    <td rowspan="3" style="border: 2px black solid">Deterioro Sensorial</td><td>Ninguno (_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td colspan="2">SNG (_) SOG (_) SNY (_) SNG a Gravedad (_)</td><td></td><td></td><td></td>
                    <td>Visual Si(_) No(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td colspan="2">NPO (_) Tolerancia Oral (_) Via Oral (_)</td><td></td><td></td><td></td>
                    <td>Auditiva Si(_) No(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td colspan="2">NPT (___) Nutriente Enteral (__)</td><td></td><td></td><td></td>
                    <td rowspan="3" style="border: 2px black solid">Deterioro Sensorial (Repetido)</td><td>Ninguno (_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td colspan="2">Apetito Normal (_) Vómito (_) Nauseas (_)</td><td></td><td></td><td></td>
                    <td>Visual Si(_) No(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td colspan="2">Dentadura Completa (_) Incompleta (_) Prótesis (_)</td><td></td><td></td><td></td>
                    <td>Auditiva Si(_) No(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td rowspan="3" style="border: 2px black solid">Monitoreo Metabólico</td><td>Monitoreo de Glicemia</td><td></td><td></td><td></td>
                    <td rowspan="7" style="border: 2px black solid">Signos Meningeos</td><td rowspan="2">Ausentes</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Administración de insulina</td><td></td><td></td><td></td>
                    <td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td>
                    <td rowspan="2">Rigidez de Nuca Si(_) No(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td rowspan="4" style="border: 2px black solid">Abdomen</td><td>Blando (_) Depresible (_)</td><td></td><td></td><td></td>
                    <td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Distend. (_) Globulado (_) Doloroso(_)</td><td></td><td></td><td></td>
                    <td rowspan="2">Babinski Si(_) No(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Drenaje:------Caracteristica.</td><td></td><td></td><td></td>
                    <td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>RHA Presentes (_) Ausentes (_)</td><td></td><td></td><td></td>
                    <td>Convulsiones Si(_) No(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td rowspan="4" style="border: 2px black solid">Residuo Gastrico</td><td>Si (_) No (_)</td><td></td><td></td><td></td>
                    <td rowspan="3" style="border: 2px black solid">Estado de Conciencia.</td><td>Glasgow</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Volumen: </td><td></td><td></td><td></td>
                    <td>Rass</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Mucoso (_) Bilioso (_) Hemático (_)</td><td></td><td></td><td></td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Sanguinolento (_) Porráceo (_)</td><td></td><td></td><td></td>
                    <td rowspan="5" style="border: 2px black solid">Comunicación</td><td>Normal</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td rowspan="3" style="border: 2px black solid">Piel y Mucosas</td><td>Sign. de Pliegue (_) Hidratada (_)</td><td></td><td></td><td></td>
                    <td>Evasivo</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Seca (_) Pálida (_) Sudorosa (_)</td><td></td><td></td><td></td>
                    <td>Gestos</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Fría (_) Caliente (_) Tibia (_)</td><td></td><td></td><td></td>
                    <td>No se Comunica</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td rowspan="2" style="border: 2px black solid">Edema</td><td>Si + (_) ++ (_) +++ (_) ++++ (_)</td><td></td><td></td><td></td>
                    <td>Escritura</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Seca (_) Pálida (_) Sudorosa (_)</td><td></td><td></td><td></td>
                    <td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <th colspan="5" rowspan="2" style="border: 2px black solid">3 PATRÓN Eliminación</th>
                    <th colspan="5" style="border: 2px black solid">7 PATRÓN: Autopercepción - Autoconcepto</th>
                </tr>
                <tr><td colspan="2">Apatía(_) Ansiedad(_)</td><td></td><td></td><td></td></tr>
                <tr>
                    <td rowspan="2" style="border: 2px black solid">Urinario</td><td>Oliguria (_) Poliuria (_) Anuria (_)</td><td></td><td></td><td></td>
                    <td colspan="2">Desesperanza(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Hematuria (_) Colurica (_) Clara (_)</td><td></td><td></td><td></td>
                    <td colspan="2">Autoestima.</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td rowspan="5" style="border: 2px black solid">Fución Gatrointes.</td><td>Diarrea: Frecuencia (_)</td><td></td><td></td><td></td>
                    <td colspan="2">Agresivo</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Ostomias: Colostomia</td><td></td><td></td><td></td>
                    <th colspan="5" style="border: 2px black solid">8 PATRÓN: Rol - Relaciones</th>
                </tr>
                <tr>
                    <td>Otros:</td><td></td><td></td><td></td>
                    <td colspan="2">Rol que desempeña en la Familia</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Estreñimiento: Si(_) No(_) Días: </td><td></td><td></td><td></td>
                    <td colspan="2">Conflicto faamiliar: Si(_) No(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Rectorragia(_) Melenas(_)</td><td></td><td></td><td></td>
                    <th colspan="5" style="border: 2px black solid">9 PATRON: Sexualidad - Reproducción</th>
                </tr>
                <tr>
                    <td rowspan="12" style="border: 2px black solid">Respiratorio</td><td>TET / TQT</td><td></td><td></td><td></td>
                    <td colspan="2">Estado Civil: Soltero(_) Casado(_) Viudo(_) Divorciado(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Ruidos: MV (_) Disminuidos (_)</td><td></td><td></td><td></td>
                    <td colspan="2">Hijos (_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Ausent.(_) Esterto.(_) Crepitos (_)</td><td></td><td></td><td></td>
                    <th colspan="5" style="border: 2px black solid">10 PATRÓN: Adaptación - Tolerancia al Estrés</th>
                </tr>
                <tr>
                    <td>Sibilantes(_) Roncant.(_) Claros(_)</td><td></td><td></td><td></td>
                    <td rowspan="3" style="border: 2px black solid">Respuesta al Estrés</td><td>Tranquilo(_) Agresivo(_) Triste(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Secrecio. Traquebronquiales:</td><td></td><td></td><td></td>
                    <td>Labil (_) Preocupado (_) Temeroso(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Densas(_) Fluidas.(_)</td><td></td><td></td><td></td>
                    <td>Nervioso (_) Irritable (_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Transparentes(_) Claras(_)</td><td></td><td></td><td></td>
                    <td colspan="2">Actitud Frente al Tratamiento Negativo(_) Positivo(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Amarillas (_) Purulentas (_)</td><td></td><td></td><td></td>
                    <td colspan="2">Adaptacion Hospitalaria: Si(_) No(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Hemáticas(_) Serohemáticas(_)</td><td></td><td></td><td></td>
                    <th colspan="5" style="border: 2px black solid">11 Patron: Valores - Creencias</th>
                </tr>
                <tr>
                    <td>Abundantes(_) Escasas(_)</td><td></td><td></td><td></td>
                    <td colspan="2">Religión: Católico(_) Evangelico(_) No Profeza(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Drenaje Pleural: D (_) I (_)</td><td></td><td></td><td></td>
                    <td colspan="2">Restricciones Religiosas: Si(_) No(_)</td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>Hemático(_) Serohemático(_)</td><td></td><td></td><td></td>
                    <td colspan="2">Solicita visita del Sacerdote.</td><td></td><td></td><td></td>
                </tr>
            </table>
            <div style="text-align: center">
                <button id="botonPDF" onclick="generarPDF()">Generar y Descargar PDF</button>
            </div>
        </div>
        
        
        
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
    
    <body>
        <div class="content">
            <table style="border: 2px black solid">
                <tr><th colspan="19" width="1102" style="border: 2px black solid">PROCESO DE ATENCION DE ENFERMERIA</th></tr>
                <tr style="border: 2px black solid">
                    <th width="215px">Diagnosticos de Enfermeria</th><th width="12px" style="border-left: 2px black solid">M</th><th width="12px">T</th><th width="12px" style="border-right: 2px black solid">N</th>
                    <th colspan="2">Objetivos NOC Valorar según escala de LIKERT 1 - 5</th><th width="12px" style="border-left: 2px black solid">M</th><th width="12px">T</th><th width="12px" style="border-right: 2px black solid">N</th>
                    <th colspan="2">Intervenciones NIC</th><th width="12px" style="border-left: 2px black solid">M</th><th width="12px">T</th><th width="12px" style="border-right: 2px black solid">N</th>
                    <th colspan="2">Resultados NOC Valorar según escala de LIKERT 1 - 5</th><th width="12px" style="border-left: 2px black solid">M</th><th width="12px">T</th><th width="12px" style="border-right: 2px black solid">N</th>
                </tr>
                <tr>
                    <th rowspan="2">Riesdo de deterioro de Integridad cutanea</th><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td rowspan="3" align="center" width="20px">1101</td><td rowspan="3" width="207px">Integridad tisular: piel y membranas mucosas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td rowspan="3" align="center">3520</td><td rowspan="3" width="199px">Cuidados de ulceras por presion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td rowspan="3" align="center" width="20px">1101</td><td rowspan="3">Integridad tisular: piel y membranas mucosas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td>Inmovilidad fisica</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <th>Deterioro de la integridad cutanea</th><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0204</td><td>Consecuencias de la inmovilidad</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3500</td><td>manejo de presiones: usp de colchon neumatico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0204</td><td>Consecuencias de la inmovilidad</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Humedad</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1004</td><td>Estado nutricional</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0840</td><td>Cambio de posicion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1004</td><td>Estado nutricional</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Hidratacion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1902</td><td>Control del riesgo</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0840</td><td>Vigilancia de la piel</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1902</td><td>Control del riesgo</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Nutricion inadecuada</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1615</td><td>Autocuidado de las ostomias</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1120</td><td>Terapia nutricional</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1615</td><td>Autocuidado de las ostomias</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td>Factores mecanicos: fuerza de cizallamiento, presion, sujecion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0020</td><td>fomento de ejercicio</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <th>Desequilibrio nutricional: inferior a las necesidades corporales</th><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1009</td><td>Estado Nutricional: ingestión de nutrientes</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0480</td><td>cuidados de la ostomia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1104</td><td>Manejo de la Nutricion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Ingesra diaria insuficiente</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2080</td><td>Manejo de liquidos/electrolitos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Incapacidad: ingerir, digerir y absorber nutrientes</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4130</td><td>Monitorización de liquidos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Incremento de las demandas metabólicas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1160</td><td>Monitorización nutricional</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Factores Biologicos</td><td rowspan="2" style="border-left: 2px black solid"></td><td rowspan="2"></td><td rowspan="2" style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid" rowspan="2"></td>
                    <td>1120</td><td>Terapia nutricional</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td>
                    <td>1200</td><td>Administracionde nutricion parenteral total (ppt)</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td rowspan="2"></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1056</td><td>Alimentacion enteral por sonda</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0840</td><td>Cambio de posición</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <th>Deterioro del intercambio gaseoso</th><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0402</td><td>Intercambio gaseoso adecuado</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3350</td><td>Monitorizacion respiratoria</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0402</td><td>Intercambio gaseoso adecuado</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Cambios en la menbrana alveolo capilar</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3140</td><td>Manejo de la via aerea</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Desequilibrio ventilacion perfusion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3320</td><td>Oxigenoterapia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3300</td><td>Ventilacion Mecanica</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3180</td><td>Manejo de las vias aereas artificiales</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <th>Limpieza ineficaz de via aéreas R/C</th><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0410</td><td>Estado Respiratorio: Permeabilidad de vías aereas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3160</td><td>Aspiracion de las vías aéreas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0410</td><td>Estado Respiratorio: Permeabilidad de vías aereas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Retención de secresiones</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0403</td><td>Estado respiratorio: Ventilacion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0840</td><td>Cambio de pisición</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0403</td><td>Estado respiratorio: Ventilacion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Espasmo de la via aerea</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1918</td><td>Control de aspiracion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3140</td><td>Manejo de la vía aérea</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1918</td><td>Control de aspiracion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Via aerea artificial</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3300</td><td>Manejo de la ventilacion mecanica: invasiva</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Disfuncion neuromuscular</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3180</td><td>Manejo de las vias aereas artificiales.</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3250</td><td>Mejora de la tos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <th>Riesgo de perfusión tisular cerebral ineficaz</th><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>909</td><td>Estado Neurológico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2620</td><td>Monitorizacion Neurológica.</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>909</td><td>Estado Neurológico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Alteracion de la oxigenacion a nivel cerebral</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>90901</td><td>90901 Conciencia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2590</td><td>Mejora de la perfusión cerebral.</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>90901</td><td>90901 Conciencia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Tumor cerebral</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>90908</td><td>90908 Tamaño pupilar</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2260</td><td>Manejo de la sedación.</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>90908</td><td>90908 Tamaño pupilar</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>IMA</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>90909</td><td>90909 Reactividad pupilar</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2660</td><td>Manejo de ataques convulsivos.</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>90909</td><td>90909 Reactividad pupilar</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Aneurisma cerebral</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>90915</td><td>Cefaleas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2540</td><td>Tratamiento edema cerebral</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>90915</td><td>Cefaleas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>HTA</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td>Hipercolesterolemia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <th>Disminución de Gasto Cardiaco</th><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0400</td><td>Efectividad de la bomba cardiaca</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4210</td><td>Monitorizacion Hemodinamica invasiva.</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0400</td><td>Efectividad de la bomba cardiaca</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Alteracion de la contractibilidad</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0401</td><td>Estado circulatorio</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2300</td><td>Administracion de medicamentos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0401</td><td>Estado circulatorio</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Alteracion de la frecuencia cardiaca</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0414</td><td>Estado cardiopulmonar</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2007</td><td>Manejo de Electrolitos: Hipopotasemia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0414</td><td>Estado cardiopulmonar</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Alteraciones de la postcarga</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2000</td><td>Manejo de electrolitos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Alteracion de la precarga</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>6140</td><td>Manejo de parada cardiorespiatoria</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Alteracion del ritmo cardicaco</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4120</td><td>Manejo de liquidos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Alteracion del volumen de eyccion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1910</td><td>Manejo de equilibrio ácido basico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4250</td><td>Manejo de shock</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>6680</td><td>Monitorizacion de signos vitales</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4030</td><td>Administracion de Hemoderivados</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4210</td><td>Monitorizacion Hemodinamica</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4090</td><td>Manejo de arritmia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>RIESGO DE INFECCION</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1924</td><td>Control de riego: proceso infeccioso</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>6540</td><td>Control de infecciones</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1924</td><td>Control de riego: proceso infeccioso</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Procedimientos invasivos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4220</td><td>Cuidados del cvc</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td rowspan="3">Disminución de la hemoglobina inmunodepresión. Leucopenia.</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>6610</td><td>Identificacion de riesgos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3660</td><td>Cuidados de las heridas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3520</td><td>Cuidados de ulceras por presión</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2380</td><td>Manejo de la medicación</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1160</td><td>Monitorización Nutricional</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3540</td><td>Cuidados de ulceras por presión</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1876</td><td>Cuidados del catéter urinario</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1874</td><td>Cuidados de la sonda</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1872</td><td>Cuidados del drenaje toráxico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>DEFICIT DE VOLUMEN DE LIQUIDOS</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0601</td><td>Equilibrio Hidrico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4200</td><td>Terapia Intravenosa</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0601</td><td>Equilibrio Hidrico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Compromiso de los mecanismos reguladores</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0602</td><td>Hidratacion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4180</td><td>Manejo de hipovolemia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0602</td><td>Hidratacion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4140</td><td>Reposicion de los liquidos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Riesgo de nivel de glicemia inestable</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2300</td><td>Nivel de glicemia estable</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2120</td><td>Manejo de la hiperglicemia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2300</td><td>Nivel de glicemia estable</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Compromiso de los mecanismos reguladores</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2130</td><td>Manejo de la hipoglucemia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Disfuncion hepatica</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td>Hipertermia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1922</td><td>Control de riesgo de hipertemia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1380</td><td>Aplicación del calor o fria</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1922</td><td>Control de riesgo de hipertemia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Incremento de la taza metabólica</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3740</td><td>Tratamiento de la fiebre</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Proceso infeccioso</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1610</td><td>Baño</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>6680</td><td>Monitorizacion de signos vitales</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2380</td><td>Manejo de la medicación</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <th>Respuesta ventilatoria disfuncional al destete</th><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0412</td><td>Respuesta a la ventilacion mecanica del Adulto</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3310</td><td>Destete de la ventilacion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0412</td><td>Respuesta a la ventilacion mecanica del Adulto</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Disfuncion del diafragma adquirida un la unidad de cuidados intensivos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3390</td><td>Ayuda a la ventilacion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Enfermedades Neuromusculares</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3350</td><td>Monitorizacion Respiratoria</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>6482</td><td>Manejo ambiental: confort</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3304</td><td>Manejo de la ventilacion mecánica: Prevencion</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3180</td><td>Manejo de las vias aéreas artificiales</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3270</td><td>Desintubacion Endotraqueal</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <th>Riesgo de disminucion de la perfusion tisular cardiaca</th><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0401</td><td>Estado circulatorio:</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4046</td><td>Cuidados cardiacos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0401</td><td>Estado circulatorio:</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Taponamiento cardiaco</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40101</td><td>Presion Arterial Sistólica</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4150</td><td>4150 Regulacion Hemodinámica</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40101</td><td>Presion Arterial Sistólica</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Hipertensión</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40104</td><td>PAM</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4104</td><td>4104 Cuidados embolismo pulmonar</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40104</td><td>PAM</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Hipovolemia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40105</td><td>PVC</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4210</td><td>4210 Manejo Hemodinámico Invasivo</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40105</td><td>PVC</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40102</td><td>Edema periférico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4254</td><td>Manejo del shock cardiaco / vasogénico / hipovolémico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40102</td><td>Edema periférico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40140</td><td>Gasto Urinario</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4254</td><td>Manejo del shock</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40140</td><td>Gasto Urinario</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>405</td><td>Perfusíon tisular cardiaca</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4030</td><td>Manejo de productos sanguíneos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>405</td><td>Perfusíon tisular cardiaca</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40501</td><td>Fracción de eyección</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40501</td><td>Fracción de eyección</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40521</td><td>Taquicardia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40521</td><td>Taquicardia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40522</td><td>Bradicardia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40522</td><td>Bradicardia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Riesgo de shock</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0416</td><td>Perfusión tisular: celular</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4030</td><td>Administracion de hemoderivados</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0416</td><td>Perfusión tisular: celular</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Hipotensión</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0419</td><td>Severidad del shock: Hipovolémica</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>6540</td><td>Control de infecciones</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0419</td><td>Severidad del shock: Hipovolémica</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Hipovolemia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0421</td><td>Severidad del shock: Séptico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4020</td><td>Disminución de la hemorragia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0421</td><td>Severidad del shock: Séptico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Infección</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0420</td><td>Severidad del shock: Neurogénico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4180</td><td>Manejo de la Hipovolemia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0420</td><td>Severidad del shock: Neurogénico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Sepsis</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0418</td><td>Severidad del shock: Cardiogénico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4120</td><td>Manejo de Liquidos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0418</td><td>Severidad del shock: Cardiogénico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Sindrome de respuesta inflamatoria</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0401</td><td>Estado Circulatorio</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4140</td><td>Reposicion de Liquidos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0401</td><td>Estado Circulatorio</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Hipoxia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>02114</td><td>Severidad de la hipotensión</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2130</td><td>Manejo de la Hipoglicemia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>02114</td><td>Severidad de la hipotensión</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0413</td><td>Severidad de perdida de sangre</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>6680</td><td>Monitorización de signos vitales</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0413</td><td>Severidad de perdida de sangre</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4260</td><td>Prevención del Shock</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Dolor</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1605</td><td>Control del dolor</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>6482</td><td>Manejo ambiental: confort</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1605</td><td>Control del dolor</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Factores biológicos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2102</td><td>Nivel del dolor</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2380</td><td>Manejo de la medicación</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2102</td><td>Nivel del dolor</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2210</td><td>Administracion de analgésicos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <th>Patron respiratorio ineficaz</th><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0403</td><td>Estado repiratorio: ventilación</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3160</td><td>Aspiración de la vías aéreas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0403</td><td>Estado repiratorio: ventilación</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Fatiga de musculos respiratorios</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40301</td><td>Frecuencia respiratoria</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3350</td><td>Monitorización respiratoria</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40301</td><td>Frecuencia respiratoria</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Deterioro musculo esquelético</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40302</td><td>Ritmo respiratorio</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>3320</td><td>Oxigenoterapia</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40302</td><td>Ritmo respiratorio</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Disfunción neuromuscular E/P Hiperventilación (_)</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40309</td><td>Disfuncion de los musculos respiratorios</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>7690</td><td>Interpretacion de los datos de laboratorios</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40309</td><td>Disfuncion de los musculos respiratorios</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Hiperventilacion (_) Disnea (_)</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40326</td><td>Hallazgos en la radiografía del tórax</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>40326</td><td>Hallazgos en la radiografía del tórax</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Uso de mos musculos accesorios respiratorios</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0410</td><td>Estado respiratorio: Permeabilidad de las vías aéreas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0410</td><td>Estado respiratorio: Permeabilidad de las vías aéreas</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Triaje sub costal</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>41007</td><td>Ruidos respiratorios: patológicos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>41007</td><td>Ruidos respiratorios: patológicos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>41012</td><td>Capacidad de eliminar secreciones</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>41012</td><td>Capacidad de eliminar secreciones</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>201011</td><td>Vías aéreas permeables</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>201011</td><td>Vías aéreas permeables</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>EXCESO DE VOLUMEN DE LIQUIDOS</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0601</td><td>Equilibrio Hidrico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4130</td><td>Monitorizacion de Liquidos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0601</td><td>Equilibrio Hidrico</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Compromiso de los mecanismos reguladores</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>600</td><td>Equilibrio electrolítico y ácido-base</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>580</td><td>Sondaje vesical</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>600</td><td>Equilibrio electrolítico y ácido-base</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Disfuncion renal</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2020</td><td>Monitorizacion de Electrolitos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>2080</td><td>Manejo de liquidos / electrolitos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr style="border-bottom: 2px black solid">
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4210</td><td>Monitorizacion hemodinámica</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Estreñimiento</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1015</td><td>Función Gastrointestinal</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>450</td><td>Manejo del estreñimiento / impactación fecal</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>1015</td><td>Función Gastrointestinal</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Debilidad de los musculos abdominales</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0501</td><td>Eliminacion Intestinal</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>466</td><td>Administración de enema</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0501</td><td>Eliminacion Intestinal</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Disminución de la movilidad intestinal</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0500</td><td>Continencia Intestinal</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>4120</td><td>Manejo de líquidos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td>0500</td><td>Continencia Intestinal</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Ingesta insuficiente de fibra</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td>Ingesta insuficiente de líquidos</td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                <tr>
                    <td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                    <td></td><td></td><td style="border-left: 2px black solid"></td><td></td><td style="border-right: 2px black solid"></td>
                </tr>
                

            </table>
        </div>
    </body>
</html>