<?php
class Organigrama extends CI_Controller {
    function index()
    {
    /*$this->load->helper('url');*/
    $this->load->view('Organigrama');
    }
    
function act_datos()
{	 $area=$this->input->post('area');
/*------------------------------------------------*/
	if ($area=='intendente'){
		$data["titulo"] = "Intendente";
		$data["subtitulo"] = "Dr. Pablo Humberto Garate";
		$data["cuerpo"] = "<p>Dirigir los destinos del partido de Tres Arroyos significa asumir cada día la responsabilidad de construir su futuro.</p>
							<p>Cada obra que se emprende, cada proyecto que nace, cada decisión que se asume, tiene siempre, como único destinatario y como único beneficiario a todos y cada uno de los tresarroyenses.</p>
							<p>Hoy nuestra ciudad es mejor, mas linda, mas pujante y mas importante que hace algunos años, y eso es gracias a ustedes. A ustedes que con su trabajo diario moldean el porvenir, a estedes que con sus críticas o sus opiniones, nos ayudan a mejorar, a ustedes, que eligen día tras día Tres Arroyos como su lugar en el mundo.</p>
							<p>Cada vez que recorro las calles de nuestra ciudad, cada vez que observo sus campos, sus industrias, sus comercios, cada vez que alguien en algún lugar del país elogia nuestra patria chica, siento un inmenso orgullo de haber nacido, crecido y vivido en esta noble tierra. A los tresarroyenses nos sobran los motivos para sentirnos orgullosos de nuestra ciudad. Porque hemos sabido, con trabajo incansable y apostando al futuro, hacer crecer un pueblo.</p>
							<p>En honor a nuestros ancestros, en beneficio para nosotros, y en grandeza para nuestros hijos. Gracias a todos por darme la fuerza necesaria para que el trabajo diario rinda sus frutos, gracias por acompañarme en este camino, que nos conduce, sin dudas, hacia un futuro promisorio.</p>";
		}
	elseif ($area=='privada')	
			{$data["titulo"] = "Secretaría Privada";
			$data["subtitulo"] = "María Luján Landeyro";
			$data["dir"]="Av. Rivadavia Nº 1";
			$data["mail"] = "sec.privada@tresarroyos.gov.ar";
			$data["telefono"] = "(02983)-439281";}
	elseif ($area=='letrada')	
			{$data["titulo"] = "Asesoría Letrada";
			$data["subtitulo"] = "Dr. Horacio Eduardo Hid";
			$data["dir"]="Av. Rivadavia Nº 1, Primer piso";
			$data["mail"] = "asuntoslegales@tresarroyos.gov.ar - asesorialetrada@tresarroyos.gov.ar - asesorialetrada2@tresarroyos.gov.ar";
			$data["telefono"] = "(02983)-439274";}	
	elseif ($area=='entes')	
			{$data["titulo"] = "Entes Descentralizados";

			$data["cuerpo"]="<p><strong>Centro Municip&aacute;l de Salud</strong><br />
								El Centro Municipal de Salud deberá regirse bajo los principios básicos de gratuidad, 
								universalidad, igualdad y equidad de las prestaciones asistenciales, sanitarias y hospitalarias. 
								La gratuidad estará garantizada para aquellas personas que no posean cobertura social y/o recursos económicos 
								para afrontar su costo, y deberá darse.</p>
								<p><h5>A cargo de: <small>Emiliano Martín Capandegui</small></h5><h5>Domicilio: <small>Av. 1° Junta N° 400</small></h5>
								<h5>Teléfonos:</h5>
								<ul>
								<li>EMERGENCIAS: 107</li>
								<li>Admisión: 439404</li>
								<li>Compras: 439229</li>
								<li>Conmutador: 439400</li>
								<li>Conmutador-auxiliar: 439401</li>
								<li>Emergencias-mesa de entradas: 439213</li>
								<li>Emergencias: 439436</li>
								</ul></p>
								<p><strong>Dirección de Vialidad Rural</strong><br />
								Este organismo tiene por finalidad la conservación y mejorado de la Red Vial de caminos tierra, y la construcción
								y conservación de Obras Hídricas del Partido de Tres arroyos.</p>
								<h5>A cargo de: <small>Martín José Maldonado</small></h5> <h5>Dirección: <small>Av. Guemes 630 </small></h5><h5>Teléfono: <small>(02983)-433338 </small></h5>
								<p><strong>Claromecó</strong><br /><h5>Delegado:<small>Javier Alejandro Rens</small></h5><h5>Dirección:<small> 28 e/ 9 y 11</small></h5><h5>Telefono:<small> (02982)-480001</small></h5></p>";
								
			}	
/*--------------------------------------------------*/			
	elseif ($area=='gabinete')
			{$data["titulo"] = "Jefatura de Gabinete";
			$data["subtitulo"] = "Julio Sebastián Federico";
			$data["cuerpo"]="<p>La Jefatura de Gabinete tiene por funciones asistir al Intendente en la planificación, coordinación y ejecución de las políticas del gobierno municipal. Fortalecer los vínculos institucionales con las organizaciones intermedias de la comunidad con el fin de conducir acciones comunitarias, y colaborar para la realización de sus proyectos.
							</p>";
			$data["telefono"]="(02983)-439210";
			$data["dir"] ="Av. Rivadavia Nº 1";
			/*--$data["mail"] = "privada1@tresa.mun.gba.gov.ar o secgobierno@tresarroyos.gov.ar
            ";--*/}
	elseif ($area=='omic')	
			{$data["titulo"] = "Oficina de Información al Consumidor (OMIC)";
			$data["subtitulo"] = "Abog. Franco Pegue";
			$data["dir"]="Av. Moreno 245";
			$data["telefono"]="(02983)-439319";
			$data["mail"] = "omic@tresarroyos.gov.ar";
			}
	elseif ($area=='escri')	
				{$data["titulo"] = "Escrituraciones Sociales";
				$data["subtitulo"] = "Dr. Federico Brandán";
				$data["dir"]="Av. Moreno 245";
				$data["telefono"]="(02983)-439308";
				$data["mail"] = "escrituraciones@tresarroyos.gov.ar";
				}
	elseif ($area=='aero')	
				{$data["titulo"] = 'Aeródromo Público Provincial de Tres Arroyos "Teniente Ricardo Volponi"';
				$data["subtitulo"] = "Agustin Rubiños";
				$data["dir"]="Ruta Nacional N° 3, KM. 499";
				$data["telefono"]="(02983)-548624";
				}		
	elseif ($area=='mesa')	
				{$data["titulo"] = "Despacho General";
				$data["subtitulo"] = "Adriana E. Liva";
				$data["dir"]="Av. Rivadavia Nº 1";
				$data["telefono"]="(02983)-439214";
				$data["mail"] = "despacho@tresarroyos.gov.ar";
				}

	elseif ($area=='faltas')	
				{$data["titulo"] = "Juzgados de Faltas";
				$data["subtitulo"] = " Jose M. Martinez Hurtado";
				$data["cuerpo"]="El Juzgado N° 2 está a cargo del Dr. José M. Martínez Hurtado";
                $data["dir"]="Sadi Carnot N°446";
				$data["telefono"]="(02983)-422818 o 422916";
				$data["mail"] = "faltas@tresarroyos.gov.ar";
				}			
	elseif ($area=='rrhh')	
				{$data["titulo"] = "Departamento de Recursos Humanos de la Administración Central";
				$data["subtitulo"] = "Alfredo Fabian Linares";
				$data["dir"]="Av. Rivadavia Nº 1";
				$data["telefono"]="(02983)-439257";
				$data["mail"] = "rrhh@tresarroyos.gov.ar o recursoshumanos@tresa.mun.gba.gov.ar";
				}				
	elseif ($area=='cresta')	
				{$data["titulo"] = "Centro Regional de Estudios Superiores Tres Arroyos (CRESTA)";
				$data["subtitulo"] = "Ing. Francisco Javier Genisio";
				/*$data["mail"]= "gabriela.hoffmann@cresta.edu.ar";*/
				$data["dir"]="Maipu Nº 274";
				$data["telefono"]="(02983)-430131";
				}	
	elseif ($area=='juventud')	
				{$data["titulo"] = "Dirección de Politicas de la Juventud";
				$data["subtitulo"] = "Lic. Julian Luis Tornini";
				$data["mail"]=  "direccionjuventudtsas@gmail.com";
				$data["dir"]="Brandsen N° 181";
				$data["telefono"]="(02983)-456538";
				}
	elseif ($area=='puntodigital')	
				{$data["titulo"] = "Punto Digital";
				$data["subtitulo"] = "Lic. Leonela Scarabotti";
				$data["mail"]=  "tresarroyos@puntodigital.gob.ar";
				$data["dir"]="Brandsen N° 181";
				$data["telefono"]="(02983)-456538";
				}
	elseif ($area=='museo')	
				{$data["titulo"] = "Museo Municipal José A. Mulazzi";
				$data["subtitulo"] = "Marcos Martinez";
				$data["dir"]="Av. San Martin Nº 323";
				$data["telefono"]="(02983)-434555";
				$data['mail']="museotarroyos@gmail.com";
				$data["cuerpo"]="Página web <a href='https://museomulazzi.tresarroyos.gov.ar/' target='_blank'>museomulazzi.tresarroyos.gov.ar</a> ";
				}					
	elseif ($area=='deporte')	
				{$data["titulo"] = "Dirección de Deportes";
				$data["subtitulo"] = "Prof. Facundo Liebana";
				$data["dir"]="La rioja 99 - Polideportivo";
				$data["telefono"]="(02983)- 423811 O al whatsapp 2983 - 15509201";
				$data["mail"]="deportes@tresarroyos.gov.ar";
				}						
	elseif ($area=='delegaciones')	
				{$data["titulo"] = "Delegaciones";
				$data["cuerpo"]="<h5> Orense</h5><p>Delegado: Julian Ezequiel Pérez Olivero<br />Dirección: 9 de Julio 56 <br />Telefono: (02982)-420042</p>
								 <h5>Reta</h5><p>Delegado: Diego Alejandro Zyncenko<br />Dirección: 29 e/ 50 y 52 <br />Telefono: (02983)-490012</p>
								 <h5>San Francisco de Bellocq</h5><p>Delegado: Marcos Ezequiel Taboada<br />Dirección: Girado 663 <br />Telefono: (02982)-497036</p>
								 <h5>Micaela Cascallares</h5><p>Delegado: Ernesto Palacio<br />Dirección: 9 de Julio y España <br />Telefono: (02983)-498013</p>
								 <h5>Copetonas</h5><p>Delegado: Juan Sergio R. Baldini<br />Dirección: Av. San Martin y Pedro - Eugenio Aramburu 287<br />Telefono: (02983)-497039</p>";
				}		
				
								/* <h5>Copetonas</h5><p>Delegado: Mariano Hernandez<br />Dirección: Av. San Martin y Pedro - Eugenio Aramburu 287<br />Telefono: (02983)-497039</p>*/
	elseif ($area=='cultura')	
				{$data["titulo"] = "Dirección de Cultura";
				$data["subtitulo"] = "Martin Rodriguez Blanco";
				$data["dir"]="Av. Ituzaingó Nº 320";
				$data["telefono"]="(02983)-425513";           /* anterior 431603*/
				$data["mail"]="cultura@tresarroyos.gov.ar";
				}	
	elseif ($area=='cntrocultural')	
					{$data["titulo"] = "Centro Cultural";
					$data["subtitulo"] = "Noemi Rivas";
					$data["dir"]="Av. Ituzaingó Nº 320";
					$data["telefono"]="(02983)-425513";
					$data["mail"]="cultura@tresarroyos.gov.ar";
					}				
   
/*--------------------------------------------------*/						
	elseif ($area=='hacienda')
			{$data["titulo"] = "Secretaría de Hacienda";
			$data["subtitulo"] = "Dr. Sergio Alberto Garcimu&ntilde;o";
			$data["cuerpo"]="Esta secretaría es la encargada de administrar los recursos económicos del municipio a través del Control de Gestión Presupuestaria tanto de ingresos como de egresos.
							Tiene a su cargo la administración interna de la economía municipal. <br />
							Autoriza los egresos de los dineros públicos, verificando los pasos administrativos y legales que corresponden para los mismos. <br />
							Planifica la actividad económica y financiera.";
			$data["mail"] = "hacienda@tresarroyos.gov.ar";
			$data["telefono"] = "(02983)-439211";	
			$data["dir"]="Av. Rivadavia Nº 1";}
	elseif ($area=='secgobierno')	
				{$data["titulo"] = "Sub Secretario de Gobierno";
				$data["subtitulo"] = "Santiago Garate";
				$data["mail"]=  "";
				$data["dir"]="Av. Rivadavia N°1";
				$data["telefono"]="(02983)-439211";
				}
	 elseif ($area=='tributarias')	
				{$data["titulo"] = "Dirección de Politicas Tributarias";
				$data["subtitulo"] = "Maria Victoria Garrido";
				$data["dir"]="Av. Moreno Nº 245";
				$data["telefono"]="(02983)-439381";
				/*$data["mail"]="sanchez.ariel@tresarroyos.gov.ar";*/
                }
   elseif ($area=='subhaci')	
				{$data["titulo"] = "Dirección de Hacienda y Finanzas";
				$data["subtitulo"] = "Cr. Federico Daniel Morales";
				$data["dir"]="Av. Rivadavia Nº 1";
				$data["telefono"]="(02983)-439248";
				$data["mail"]="direccion.hacienda@tresarroyos.gov.ar";
                }            
    elseif ($area=='sistemas')
				{$data["titulo"] = "Subdirección de Servicios Informáticos";
				$data["subtitulo"] = "Ing. Betina Elias";
				$data["mail"] = "computos@tresarroyos.gov.ar";
				$data["telefono"] = "(02983)-439253/254/255";
				$data["dir"]="Av. Rivadavia Nº 1";}
	elseif ($area=='computos')
				{$data["titulo"] = "Centro de Cómputos";
				$data["subtitulo"] = "Ing. Betina Elias";
				$data["mail"] = "computos@tresarroyos.gov.ar";
				$data["telefono"] = "(02983)-439253/254/255";
				$data["dir"]="Av. Rivadavia Nº 1";}
    /*elseif ($area=='atencion')
				{$data["titulo"] = "Atención Presencial, Remota y Logistica";
				$data["subtitulo"] = " ";
				$data["mail"] = " reclamos@tresarroyos.gov.ar ";
				$data["telefono"] = "02983-439302/303/304/305 o 0800-666-4244";
				$data["dir"]="Av. Moreno Nº 245";}*/
	/*elseif ($area=='comunic')
				{$data["titulo"] = "Subcentro de Comunicaciones";
				$data["subtitulo"] = "Ariel Sanchez";
				$data["mail"] = "subcom@tresa.mun.gba.gov.ar";
				$data["telefono"] = "(02983)-439201";
				$data["dir"]="Av. Rivadavia Nº 1";}*/
	elseif ($area=='catastro')
				{$data["titulo"] = "Departamento de Catastro";
				$data["subtitulo"] = "Agr. Mariano Cafaro";
				$data["mail"] = "catastro@tresa.mun.gba.gov.ar";
				$data["telefono"] = "(02983)-439312/313";
				$data["dir"]="Castelli Nº 625";}
	elseif ($area=='recau')
				{$data["titulo"] = "Subdirección de Recaudación";
				$data["subtitulo"] = "";
				$data["mail"] = "rentas@tresa.mun.gba.gov.ar";
				$data["telefono"] = "(02983)-439380";
				$data["dir"]="Av. Moreno Nº 245";}
   /* elseif ($area=='subfisca')
				{$data["titulo"] = "Subdirección de Cobranzas y Fiscalización";
				$data["subtitulo"] = "";
				$data["mail"] = " ";
				$data["telefono"] = "";
				$data["dir"]="Av. Moreno Nº 245";}*/
	elseif ($area=='prensa')
				{$data["titulo"] = "Coordinación de Comunicación Institucional";
				$data["subtitulo"] = "Santiago Garate";
				$data["mail"] = "tresarroyosprensa@gmail.com, prensa@tresarroyos.gov.ar";
				$data["telefono"] = "(02983)-439215";
				$data["dir"]="Av. Rivadavia Nº 1";}	
	elseif ($area=='comercio')	
				{$data["titulo"] = "Oficina de Industria y Comercio";
				$data["subtitulo"] = "Federico José Pedone";
				$data["dir"]="Av. Moreno Nº 245";
				$data["telefono"]="(02983)-439370";
				$data["mail"] = "comercio@tresarroyos.gov.ar - industriaycomercio@tresarroyos.gov.ar";
				}				
	elseif ($area=='guias')
				{$data["titulo"] = "Guías, Marcas y Señales";
				$data["subtitulo"] = "Olga Torres";
				$data["mail"] = "ofguias@tresa.mun.gba.gov.ar";
				$data["telefono"] = "(02983)-425835";
				$data["dir"]="Pellegrini Nº 17";}			
	elseif ($area=='udip')
				{$data["titulo"] = "Automotores";
				$data["subtitulo"] = "Fernanda Garcia";
				$data["mail"] = "rodados@tresa.gov.ar o automotores@tresarroyos.gov.ar";
				$data["telefono"] = "(02983)-439312/315";
				$data["dir"]="Av. Moreno Nº 245";}			
	elseif ($area=='tesoreria')
				{$data["titulo"] = "Tesorería";
				$data["subtitulo"] = "Cra. Claudia Beatriz Perez";
				$data["mail"] = "tesoreria@tresarroyos.gov.ar";
				$data["telefono"] = "(02983)-439240";
				$data["dir"]="Av. Rivadavia Nº 1";}	
	elseif ($area=='subtesoreria')
				{$data["titulo"] = "Sub-Tesorería";
				$data["subtitulo"] = "Daiana Morales";
				$data["mail"] = "tesoreria1@tresarroyos.gov.ar";
				$data["telefono"] = "(02983)-439317";
				$data["dir"]="Av. Moreno Nº 245";}					
	elseif ($area=='compras')
				{$data["titulo"] = "Compras y Suministros";
				$data["subtitulo"] = "Julia Ines Svarre";
				$data["mail"] = "jefe.compras@tresarroyos.gov.ar - licitaciones.compras@tresarroyos.gov.ar - facturacion.compras@tresarroyos.gov.ar";
				$data["telefono"] = "(02983)-439229";
				$data["dir"]="Av. Rivadavia Nº 1";}		
	elseif ($area=='cont')
				{$data["titulo"] = "Contaduría";
				$data["subtitulo"] = "Cr. Carlos Maria Bayugar";
				$data["mail"] = "cbayugar@tresarroyos.gov.ar";
				$data["telefono"] = "(02983)-439220";
				$data["dir"]="Av. Rivadavia Nº 1";}		
	/*elseif ($area=='fisc')
				{$data["titulo"] = "Fiscalización";
				$data["subtitulo"] = "";
				$data["mail"] = "fiscalizacion@tresa.mun.gba.gov.ar";
				$data["telefono"] = "(02983)-439306/307";
				$data["dir"]="Av. Moreno Nº 245";}	*/	
    /*elseif ($area=='gestion')
				{$data["titulo"] = "Gestión de Cobranzas";
				$data["subtitulo"] = " ";
				$data["mail"] = "gestioncobranzas@tresarroyos.gov.ar";
				$data["telefono"] = "2983-439308/309";
				$data["dir"]="Av. Moreno Nº 245";}*/
/*--------------------------------------------------*/					
elseif ($area=='opub')
			{$data["titulo"] = "Secretaría de Planeamiento Urbano";
			$data["subtitulo"] = "Arq. Paola M. Salerno";
			$data["cuerpo"]="Es función de esta Secretaría coordinar diferentes tareas y áreas de trabajo para el desarrollo integral de obras tendientes a mejorar nuestro hábitat urbano.";
			/*$data["mail"] = "??@tresa.mun.gba.gov.ar";*/
			$data["telefono"] = "(02983)-433168 Int. 111";
			$data["dir"]="Castelli Nº 625";							
			}
elseif ($area=='cem')
			{$data["titulo"] = "Cementerio";
			$data["subtitulo"] = "Luis Juarez";
			$data["mail"] = "cementerio@tresa.mun.gba.gov.ar";
			$data["telefono"] = "(02983)-432566";
			$data["dir"]="Av. Guemes Nº 2000";			
			}
elseif ($area=='osan')
			{$data["titulo"] = "Departamento de Obras Sanitarias";
			$data["subtitulo"] = "Luis Alberto Juárez";
			$data["mail"] = "sanitarias@tresarroyos.gov.ar - sanitariasreclamos@tresarroyos.gov.ar";
			$data["telefono"] = "(02983)-432550 (Reclamos: 02983-15615867)";
			$data["dir"]="L. N. Alem Nº 2500";			
			}
elseif ($area=='surb')
			{$data["titulo"] = "Servicios Urbanos";
			$data["subtitulo"] = "Jose Moro";
			$data["telefono"] = "(02983)-433168 Int. 117";
			$data["dir"]="Castelli Nº 625";			
			}
elseif ($area=='paseos')
			{$data["titulo"] = "Departamento de Paseos Públicos";
			$data["subtitulo"] = "Silvio Damian Almeira";
			/*$data["mail"] = "paseospublicos@tresa.mun.gba.gov.ar";*/
			$data["telefono"] = "(02983)-433168 Int. 117";
			$data["dir"]="Castelli Nº 625";			
			}
elseif ($area=='opart')
			{$data["titulo"] = "Obras Particulares";
			$data["subtitulo"] = "Arq. Julio Gonzalez";
			/*$data["mail"] = "obrasparticulares@tresa.mun.gba.gov.ar";*/
			$data["telefono"] = "(02983)-433168 Int. 116";
			$data["dir"]="Castelli Nº 625";			
			}
elseif ($area=='planea')
			{$data["titulo"] = "División Estudios y Proyecto/Planeamiento";
			$data["subtitulo"] = "Arq. Diego Dannunzio";
			/*$data["mail"] = "planeamientososp@tresa.mun.gba.gov.ar";*/
			$data["telefono"] = "(02983)-433168 Int. 122";
			$data["dir"]="Castelli Nº 625";			
			}
elseif ($area=='elect')
			{$data["titulo"] = "Departamento de Electrotécnica";
			$data["subtitulo"] = "Bernabe Mameo";
			/*$data["mail"] = "electrotecnica@tresa.mun.gba.gov.ar";*/
			$data["telefono"] = "(02983)-433168 Int. 113";
			$data["dir"]="Castelli Nº 625";			
			}			
/*--------------------------------------------------*/					
	elseif ($area=='segu')
			{$data["titulo"] = "Secretaría de Seguridad";
			$data["subtitulo"] = "Dr. Juan Eduardo Apolonio S.";
			$data["cuerpo"]="Desde el momento en que se creó la Secretaría de Seguridad (año 2004), dentro del marco de la ley 13.210, la misma ha dirigido la mayor parte de los controles urbanos dentro del ámbito de la Municipalidad de Tres Arroyos, así como también se ha pasado a tener injerencia en aspectos funcionales de la Policia Comunal, realizando aportes económicos así como también gestionando elementos de logística para la fuerza policial.";
			$data["mail"] = "seguridad@tresarroyos.gov.ar";
			$data["telefono"] = "(02983)-422131";
			$data["dir"]="Castelli Nº 745";			
			}
elseif ($area=='transito')
			{$data["titulo"] = "Dirección General de Coordinación Operativa";
			$data["subtitulo"] = "Martin Legarreta";
			$data["mail"] = "seguridad@tresarroyos.gov.ar";
			$data["telefono"] = "(02983)-431555";
			$data["dir"]="Castelli Nº 745";	
			}
elseif ($area=='transitoAdmin')
			{$data["titulo"] = "Dirección General de Coordinación Administrativa";
			$data["subtitulo"] = "Dra. María Paz López Peralta";
			$data["mail"] = "seguridad@tresarroyos.gov.ar";
			$data["telefono"] = "(02983) 431555";
			$data["dir"]="Castelli Nº 745";	
			}
elseif ($area=='poli')
			{$data["titulo"] = "Policia Comunal";
			$data["subtitulo"] = ".....";
			$data["mail"] = "....";
			$data["telefono"] = "....";
			$data["dir"]="...";			
			}			
elseif ($area=='terminal')
			{$data["titulo"] = "Terminal de Omnibus";
			$data["subtitulo"] = "Guillermo Caso";
			$data["mail"] = "....";
			$data["telefono"] = "(02983)-432535 ";
			$data["dir"]="Av. San Martin y Av. Almafuerte";			
			}	
elseif ($area=='defensa')
			{$data["titulo"] = "Defensa Civil";
			$data["subtitulo"] = "Fabián Almirón";
			$data["mail"] = "....";
			$data["telefono"] = "(02983)-431555 ";
			$data["dir"]="Castelli Nº 745";			
			}
elseif ($area=='inspectores')
			{$data["titulo"] = "Cuerpo de Inspectores";
			$data["subtitulo"] = "Masciarelli Carlos";
			$data["mail"] = "seguridad@tresaarroyos.gov.ar";
			$data["telefono"] = "(02983)-431555 ";
			$data["dir"]="Castelli Nº 745";			
			}
elseif ($area=='patrulla')
			{$data["titulo"] = "Patrulla Urbana";
			$data["subtitulo"] = "Nelson Hugo Tumini";
			$data["mail"] = "....";
			$data["telefono"] = "(02983)-431555 ";
			$data["dir"]="Castelli Nº 745";			
			}
elseif ($area=='monitoreo')
			{$data["titulo"] = "Centro de Monitoreo";
			$data["subtitulo"] = "Encargado Damián Moscato";
			$data["mail"] = "monitoreo@tresarroyos.gov.ar";
			$data["telefono"] = "Tel. 02983 – 420910/431015";
			$data["dir"]="Castelli N° 745";			
			}			
elseif ($area=='medido')
			{$data["titulo"] = "Estacionamiento Medido";
			$data["subtitulo"] = "Silvana Cinalli";
			$data["mail"] = "....";
			$data["telefono"] = "(02983)-431555 ";
			$data["dir"]="Castelli Nº 745";			
			}			
elseif ($area=='exposiciones')
			{$data["titulo"] = "Exposiciones Civiles";
			$data["subtitulo"] = " ";
			$data["mail"] = "...";
			$data["telefono"] = "(02983)-431555 ";
			$data["dir"]="Castelli Nº 745";			
			}
elseif ($area=='licencia')
			{$data["titulo"] = "Licencia de Conducir";
			$data["subtitulo"] = "Roberto Fernández";
			$data["mail"] = "licencia@tresarroyos.gov.ar";
			$data["telefono"] = "(02983)-431555 ";
			$data["dir"]="Castelli Nº 745";			
			}
elseif ($area=='transporte')
			{$data["titulo"] = "Transporte";
			$data["subtitulo"] = "...";
			$data["mail"] = "....";
			$data["telefono"] = "(02983)-431555 ";
			$data["dir"]="Castelli Nº 745";			
			}			
/*--------------------------------------------------*/		
	elseif ($area=='produc')
			{$data["titulo"] = "Secretaría de Desarrollo Económico, Ciencia y Tecnología";
			$data["subtitulo"] = "Cr. Alberto Guillermo Rossotti";
			$data["mail"] = "desarrolloeconomico@tresarroyos.gov.ar";
			$data["telefono"] = "(02983) - 439200 Int. 244";
			$data["dir"]="Av. Rivadavia Nº1";			
			$data["cuerpo"]="Desde la Secretaría de Desarrollo Económico, Ciencia y Tecnología de la Municipalidad de Tres Arroyos trabajamos para contribuir al desarrollo del Distrito.
			<ul>
				<li>Fomentando la cultura emprendedora local.</li>
				<li>Acompañando las actividades económicas generadoras de riqueza y empleo.</li>
				<li>Impulsando el desarrollo de parques industriales y unidades modulares productivas.</li>
				<li>Fortaleciendo los sectores productivos, de servicios y comerciales.</li>
				<li>Contribuyendo a la planificación estratégica del Distrito.</li>
				<li>Estimulando los vínculos institucionales y asociativos.</li>
				<li>Incorporando la mejora continua para una atención de calidad.</li>
			</ul>
			<strong>Áreas de trabajo</strong><br/>
			<ul>
				<li>Parque Industrial, Parque de Servicios Agrícolas, Unidades Modulares Productivas. <small>E-mail: parques@tresarroyos.gov.ar</small></li>
				<li>Empresas y Emprendedores. <small>E-mail: empresas@tresarroyos.gov.ar</small></li>
				<li>FOMEPRO. <small>E-mail: fomepro@tresarroyos.gov.ar</small></li>
				<li>Administración. <small>E-mail: admindesarrollo@tresarroyos.gov.ar</small></li>
				<li><a href='http://www.prodesta.org.ar/' target = '_blank'> PRODESTA.</a></li>
				<li><a href='http://www.adptresarroyos.org.ar/' target = '_blank'> Agencia de Desarrollo Productivo</a></li>
				</ul>
				<br/><br/>"	
			;			
			}
	elseif ($area=='parque')
			{$data["titulo"] = "Parque Industrial";
			$data["subtitulo"] = "Héctor Ricardo Ravella";
			$data["mail"] = "produindustria@tresarroyos.gov.ar";
			$data["telefono"] = "(02983) - 433168 Int. 130";
			$data["dir"]="Ruta Nacional N° 3, en el km. 496";			
			}
	elseif ($area=='turismo')
			{$data["titulo"] = "Dirección de Turismo";
			$data["subtitulo"] = "Pablo Esteban Ledesma";
			$data["mail"] = "turismo@tresarroyos.gov.ar - adminturismo@tresarroyos.gov.ar - tresarroyosturismo@gmail.com";
			$data["telefono"] = "(2983) - 458996";
			$data["dir"]="Brandsen Nº 181";			
			}
	elseif ($area=='adp')
			{$data["titulo"] = "Agencia de Desarrollo Productivo";
			$data["subtitulo"] = "Lic. Marilín Zijlstra";
			$data["mail"] = "adp@tresarroyos.gov.ar";
			$data["telefono"] = "(02983) - 439250";
			$data["dir"]="Av. Rivadavia Nº1";			
			}			
/*--------------------------------------------------*/	
	elseif ($area=='medio')
			{$data["titulo"] = "Subsecretaría de Gestión Ambiental";
			$data["subtitulo"] = "Aldo Gabriel Francia";
			$data["cuerpo"]="A partir de la necesidad de jerarquizar el área de Medio Ambiente, se crea una Secretaría de Gestión Ambiental en el mes Enero de 2013 tendiente a formular y ejecutar acciones para el logro de la sustentabilidad social, económica y ecológica del distrito, 
							diseñar y desarrollar planes, programas y acciones que promuevan la participación y el mejoramiento ambiental, controlar y fiscalizar el desarrollo de las distintas actividades antrópicas, en todo lo relativo a la evaluación y prevención de los procesos de 
							deterioro ambiental, desarrollar un sistema de relaciones endógenas y exógenas de nivel local, regional, provincial y nacional, que posibilite la participación, el consenso y la capacitación y elaborar propuestas y ejecutar planes, programas y proyectos 
							vinculados al ordenamiento ambiental. ";
			$data["mail"] = "gestionambiental@tresarroyos.gov.ar";
			$data["telefono"] = "(02983)-15648571";
			$data["dir"]="Av. Guemes Nº 630";			
			}
	elseif ($area=='brom')
			{$data["titulo"] = "Dirección de Higiene Veterinaria y Bromatologia";
			$data["subtitulo"] = "Ing. Eliana Rossi";
			$data["mail"] = "bromatologia@tresarroyos.gov.ar";
			$data["telefono"] = "(02983)-433690";
			$data["dir"]="Pedro N. Carrera Nº 810";			
			}		
/*--------------------------------------------------*/		
	elseif ($area=='social')
			{$data["titulo"] = "Secretaría de Desarrollo Social";
			$data["subtitulo"] = "Dr. Martín Esteban Garate";
			$data["cuerpo"]="Trabajamos en la reconstrucción de los niveles de vida y proyectos de los grupos más vulnerables. La mejor calidad de vida no lo garantiza un Estado proveedor de bienes materiales, sino aquel que promueve la potencialidad de sus ciudadanos, con educación y capacitación, favoreciendo la promoción y prevención, con participación y compromiso. Si la intervención social se convierte en asistencialismo, no podemos pensar en una sociedad desarrollada. El abordaje implica: <br /> 
							<ul>
								<li>Trabajo en red</li>
								<li>Fortalecimiento familiar</li>
								<li>Promoción del autovalimiento</li>
								<li>Atención en situación de crisis</li>
							</ul>";
			$data["mail"] = "sdstresarroyos@gmail.com";
			$data["telefono"] = "(02983)-430476";
			$data["dir"]="Domingo Vásquez Nº 476";			
			}
	elseif ($area=='casamujer')
			{$data["titulo"] = "Direccion de Mujeres, genero y diversidad";
			$data["subtitulo"] = "Delfina Manuela Espinal";
			$data["cuerpo"]="Trabajamos en los siguientes Programas: <br /> 
							<ul>
								<li>Programa Casa de la Mujer 'Guillermina Cirone'.</li>
								<li>Programa de Sensibilización y capacitación.</li>
								<li>Programa nuevas masculinidades.</li>
								<li>Programa emprendiendo en territorio.</li>
							</ul>";
			$data["mail"] = "direcciongenerotsas@gmail.com";
			$data["telefono"] = "(02983)15457092 - Guardia 24 horas";
			$data["dir"]="Domingo Vásquez Nº 476";			
			}		
	elseif ($area=='viviendas')
			{$data["titulo"] = "Emergencia Habitacional";
			$data["subtitulo"] = "Arq. Cristian Casablanca";
			$data["mail"] = "emergenciahabitacional@tresarroyos.gov.ar";
			$data["telefono"] = "(02983) 430470 Int. 310";
			$data["dir"]="Domingo Vásquez Nº 476";			
			}			
	elseif ($area=='nines')
			{$data["titulo"] = "Niñez, Adolescencia y Familia";
			$data["subtitulo"] = "Victoria Grin";
			$data["mail"] = "sds@tresarroyos.gov.ar";
			$data["telefono"] = "(02983) 430470";
			$data["dir"]="Domingo Vásquez Nº 476";			
			}	
	elseif ($area=='empleo')
			{$data["titulo"] = "Oficina de Empleo y Capacitación";
			$data["subtitulo"] = "Lic. Mauro Daddario";
			$data["mail"] = "empleo@tresarroyos.gov.ar - adminempleo@ tresarroyos.gov.ar";
			$data["telefono"] = "(02983) 422284";
			$data["dir"]="Pedro N. Carrera N° 940";			
			}	
	elseif ($area=='ips')
			{$data["titulo"] = "IPS";
			$data["subtitulo"] = "Claudia Mendoza";
			$data["mail"] = "";
			$data["telefono"] = "(02983) 430470 Int. 303";
			$data["dir"]="Domingo Vásquez Nº 476";			
			}			
	elseif ($area=='accion')
			{$data["titulo"] = "Dirección de Acción Social";
			$data["subtitulo"] = "Dra. María Paz López Peralta";
			$data["cuerpo"]="Tenemos los siguientes programas a cargo:
				<ul>
					<li>Área de Soluciones Habitacionales.</li>
					<li>Casa Taller.</li>
					<li>Área de Discapacidad: Coordinador Mariano Panizzo.</li>
					<li>Programa de Prevención en Adicciones: Coordinadora Lic. Celina Mackena.</li>
					<li>Servicio Local: Coordinador Doc. Zwaal Facundo.
						<ul>
						   <li>Programa Envión.</li>
						   <li>Programa Puentes en la Infancia.</li>
						   <li>Operadores Socios Familiares.</li>
						   <li>Fortalecimiento Familiar.</li>
						   <li>Autonomía Adolescente.</li>
						   <li>Proyecto Acompañamiento a la Crianza.</li> 
						</ul>
				   </li>
				</ul>";
			$data["mail"] = "sds@tresarroyos.gov.ar";
			$data["telefono"] = "(02983) 430470 Int. 302";
			$data["dir"]="Domingo Vásquez Nº 476";			
			}
/*--------------------------------------------------*/					
    elseif ($area=='salud')
			{$data["titulo"] = "Secretaría de Salud y Prevención";
			$data["subtitulo"] = "Dr. María Mercedes Moreno";
			$data["cuerpo"]="Para mas informacion podes acceder al sitio web del <a href='http://www.centrodesaludtsas.com.ar/' target='_blank'>Centro de Salud</a> ";
			$data["mail"] = "secprevys@centrodesaludtsas.com.ar";
			$data["telefono"] = "(02983)-439271";
			$data["dir"]="Av. Rivadavia Nº 1";							
			}			
	elseif ($area=='hcd')
			{$data["titulo"] = "Honorable Concejo Deliberante";
			$data["subtitulo"] = "Presidente Mara Redivo";
			$data["cuerpo"]="<p>Para mas información podrá acceder al sitio <a href='http://hcd.tresarroyos.gov.ar/' target='_blank'>aquí</a> y conocer los aspectos fundamentales del Honorable Concejo Deliberante de Tres Arroyos,
sus integrantes, legislación vigente, presupuesto anual del H.C.D., la ley orgánica, reglamento interno, entre otros tópicos. Podrá también dejarnos sus inquietudes y consultas.
							</p>";
			$data["telefono"]="(02983)-439282/262";
			$data["dir"] ="Av. Rivadavia Nº 1 - 1º Piso";
			$data["mail"] = "shcd2@tresarroyos.gov.ar o shcd@tresarroyos.gov.ar";
	}
	elseif ($area=='mv')
			{$data["titulo"] = "Bloque Movimiento Vecinal";
			$data["subtitulo"] = "Nickel Werner - Paula Di Stefano - Lucas Matias Carrozzi - Maria Claudia Diez - Maria Victoria Larriesta Garcia - Marcelo Daniel Leon ";
			$data["cuerpo"]="";
			$data["mail"] = "bloquemv@gmail.com";
			$data["telefono"] = "(02983)-439223";
			$data["dir"]="Av. Rivadavia Nº 1 - 1º Piso";							
	}
	/*elseif ($area=='ajus')
			{$data["titulo"] = "Bloque Alternativa por la Justicia Social (A.JU.S.)";
			$data["subtitulo"] = "Sebastián Suhit";
			$data["cuerpo"]="";
			$data["mail"] = "ssuhit@gmail.com";
			$data["telefono"] = "(02983)-439263";
			$data["dir"]="Av. Rivadavia Nº 1 - 1º Piso";							
	}*/
	elseif ($area=='cambiemos')
			{$data["titulo"] = "Bloque Juntos por el Cambio";
			$data["subtitulo"] = "Daiana M. De Grazia - Ana Soledad Cadenas - Carlos Paulino Avila - Enrique C. Groenenberg  - Marisa Mabel Marioli - Cristian Alejandro Ruiz ";
			$data["cuerpo"]="";
			/*$data["mail"] = "bloquecambiemostsas@gmail.com";*/
			$data["telefono"] = "(02983)-439201";
			$data["dir"]="Av. Rivadavia Nº 1 - 1º Piso";							
	}
	elseif ($area=='libertad')
			{$data["titulo"] = "Bloque Libertad Avanza";
			$data["subtitulo"] = "Gustavo Moller";
			$data["cuerpo"]="";
			/*$data["mail"] = "bloquecambiemostsas@gmail.com";*/
			$data["telefono"] = "(02983)-439262";
			$data["dir"]="Av. Rivadavia Nº 1 - 1º Piso";							
	}
	elseif ($area=='union')
			{$data["titulo"] = "Bloque Unión por la Patria";
			$data["subtitulo"] = "Mara Vanina Redivo - Alejandro Daniel Barragán - Carla Adriana Moreno - Paola Gisela Acu&ntilde;a - Adolfo Antonio Olivera - Facundo Elgart ";
			$data["cuerpo"]="";
			/*$data["mail"] = "bloquecambiemostsas@gmail.com";*/
			$data["telefono"] = "(02983)-439262";
			$data["dir"]="Av. Rivadavia Nº 1 - 1º Piso";							
	}
	/*elseif ($area=='renovador')
			{$data["titulo"] = "Bloque de Todos ";
			$data["subtitulo"] = "Graciela Callegari - Martín Esteban Garate - Julio Federico - Juan Eduardo Jesus Gutierrez - Facundo Elgart - Paola Maria Salerno";
			$data["cuerpo"]="";
			$data["mail"] = "fr@tresarroyos.gov.ar";
			$data["telefono"] = "(02983)-439264";
			$data["dir"]="Av. Rivadavia Nº 1 - 1º Piso";						
	}*/	
	/*elseif ($area=='pj')
			{$data["titulo"] = "Bloque Frente para la Victoria - P.J.";
			$data["subtitulo"] = "Mercedes Moreno";
			$data["cuerpo"]="";
			$data["mail"] = "bloquefpvpjtresarroyos@gmail.com";
			$data["telefono"] = "(02983)-439285";
			$data["dir"]="Av. Rivadavia Nº 1 - 1º Piso";							
	}
	elseif ($area=='peronismo')
			{$data["titulo"] = "Bloque Peronismo Renovador";
			$data["subtitulo"] = "Matias Fhurer";
			$data["cuerpo"]="";
			$data["mail"] = "matiasfhurer@hotmail.com";
			/*$data["telefono"] = "(02983)-439285";
			$data["dir"]="Av. Rivadavia Nº 1 - 1º Piso";							
	}
	elseif ($area=='uciudadana')
			{$data["titulo"] = "Bloque Unidad Ciudadana";
			$data["subtitulo"] = "Martín Garrido - Tatiana Lescano";
			$data["cuerpo"]="";
			$data["mail"] = "unidadciudadana.3arroyos@gmail.com";
			$data["telefono"] = "(02983)-439222";
			$data["dir"]="Av. Rivadavia Nº 1 - 1º Piso";							
	}*/
/*--------------------------------------------------*/		
//carga la vista pasandole los datos por parametro
$this->load->view('Area_detalle',$data);
}



}

?>