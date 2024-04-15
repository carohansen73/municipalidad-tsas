<?php
class Modelo_tre extends CI_Model {
	
	public function __construct()
	{
        $this->load->database();
	}
	
	/************************************EVENTOS***************************************/
	
	public function get_event($mes = FALSE)
	{
        $this->db->order_by('orden', 'asc');
		$query = $this->db->get_where('tre_eventos', array('Mes' => $mes));	
        return $query->result_array();
	}

	public function get_mes($mes)
	{
        $query = $this->db->get_where('tre_calen_mes', array('id' => $mes));
        return $query->row_array();
	}

	public function get_venc($mes,$dia)
	{
        $query = $this->db->get_where('tre_calendario', array('mes' => $mes,'dia'=>$dia));
        return $query->result_array();
	}

	public function arreglo_venc($mes,$dias)
	{
		for ($i=1; $i<=$dias; $i++){
			$venc[$i]=$this->get_venc($mes,$i);
		}
		return $venc;
	}
    
	/************************************FIN DE EVENTOS***************************************/
	
	/************************************NOTICIAS*********************************************/
	public function get_noticia($noticia,$inicio,$cantidad) //pasar inicio y fin o cantidad de registros
	{
        $query = $this->db->order_by("fecha","DESC");
        $query = $this->db->order_by("id","DESC");
        if ($noticia=='destacadas') {
            $query = $this->db->get_where('tre_noticia', array('destacada' => '1'), $cantidad, $inicio);     
		}else{	
			$query = $this->db->get_where('tre_noticia', array('area' => $noticia), $cantidad, $inicio);     
		}
        return $query->result_array();
	}
	
	public function get_carousel($noticia)
	{
        $query = $this->db->get_where('tre_noticia', array('destacada' => $noticia ));
        return $query->result_array();
	}
	
	public function buscar_info($noticia)
	{
        $query = $this->db->get_where('tre_noticia', array('area' => $noticia));
        foreach ($query->result() as $row){
			return $row->id;
		};
	}
	
	public function get_detalle($noticia)
	{
        $query = $this->db->get_where('tre_noticia', array('id' => $noticia));
        return $query->result_array();
	}

	public function get_imagenes($noticia)
	{
        $query = $this->db->get_where('tre_noticia_img', array('id_noticia' => $noticia));
        return $query->result_array();
	}
	
	public function cant_noticias($area)
	{
        $query = $this->db->get_where('tre_noticia', array('area' => $area)); 
        return $query->num_rows();
	}
	
	/************************************FIN DE NOTICIAS*********************************************/
		
	public function get_videos($area)
	{
        $query = $this->db->get_where('tre_videos', array('area' => $area));
        return $query->result_array();
	}


	
	public function get_archivos($area)
	{
        $this->db->select('*');
		$this->db->from('tre_archivos');
		$this->db->where('area',$area);
		$this->db->order_by('fecha', 'desc');
		$query = $this->db->get();
        return $query->result_array();
	}
	
	public function comprobArchivoBoletin($tipo, $anio, $numero, $periodo){
		$this->db->select('*');
		$this->db->from('tre_boletin');
		$this->db->where('tipo',$tipo);
		$this->db->where('anio',$anio);
		$this->db->where('orden',$numero);
		$this->db->where('mes',$periodo);
		$query = $this->db->get();
		return $query->result_array();


	}
	public function get_archivos_avisos($area)
	{
        $this->db->select('*');
		$this->db->from('tre_archivos');
		$this->db->where('area',$area);
		$this->db->order_by('fecha', 'desc');
		$query = $this->db->get();
        return $query->result_array();
	}
	
	/*******REPORTE_ECONOMICO_FINANCIERO*********/
	public function get_archivos_ecofin($area)
	{
        $this->db->select('*');
		$this->db->from('tre_archivos');
		$this->db->where('area',$area);
		$this->db->order_by('periodo', 'desc');
		$this->db->order_by('titulo', 'asc');
		$query = $this->db->get();
        return $query->result_array();
	}

	public function get_archivos_nombre_arch($nombrearch)
	{
        // $this->db->select('*');
		// $this->db->from('tre_reportes_eco');
		// $this->db->where("nombre_arch LIKE '$nombrearch'");
		// $this->db->order_by('id', 'asc');
		$query = $this->db->get_where('tre_reportes_eco',array('nombre_arch' => $nombrearch));
        return $query->result_array();
	}
	
	/*******REPORTE_ECONOMICO_FINANCIERO NOE*********/
	public function get_archivos_ecofin_bug($filtro)
	{
        $this->db->select('*');
		$this->db->from('tre_reportes_eco');
		$this->db->where($filtro);
		$this->db->order_by('id', 'asc');
		$query = $this->db->get();
        return $query->result_array();
	}


	/*******INSERTAR REPORTE_ECONOMICO_FINANCIERO*********/
	public function set_archivos_boletin ($archivo,$periodo,$anio, $tipo, $resolucion, $desc, $titulo) {
		/*
			campos a usar: titulo, periodo, anio, sector (siempre es palacio), nombre_arch, descripcion y fecha (que seria la fecha de carga)
		*/
	
		$data = array(
		   'nombre' => $archivo,
		   'mes' => $periodo,
		   'anio' => $anio, 
		   'titulo' => $titulo,
		   'tipo' => $tipo,
		   'descripcion'=>$desc,
		   'orden' =>  $resolucion
		);
		$this->db->insert('tre_boletin', $data); 
		return $this->db->insert_id();
	}
	
	public function set_archivos_reporte ($titulo,$periodo,$anio,$archivo,$desc,$fecha) {
		/*
			campos a usar: titulo, periodo, anio, sector (siempre es palacio), nombre_arch, descripcion y fecha (que seria la fecha de carga)
		*/
		$data = array(
		   'titulo' => $titulo,
		   'periodo' => $periodo,
		   'anio' => $anio, 
		   'sector' => 'palacio',
		   'nombre_arch' => $archivo,
		   'descripcion'=>$desc,
		   'fecha' =>  $fecha
		);
		$this->db->insert('tre_reportes_eco', $data); 
		return $this->db->insert_id();
	}
	/**AÑOS_REPORTE_ECONOMICO_FINANCIERO**/
	public function get_anios_eco()
	{
        $this->db->select('anio');
        $this->db->distinct();
        $this->db->order_by("anio", "desc"); 
        $query = $this->db->get('tre_reportes_eco');
        
        return $query->result_array();
	}
	/**TRIMESTRE_REPORTE_ECONOMICO_FINANCIERO**/
	public function get_periodo_eco()
	{
        $this->db->select('periodo');
        $this->db->distinct();
        $this->db->order_by("periodo", "desc"); 
        $query = $this->db->get('tre_reportes_eco');
        
        return $query->result_array();
	}
	/**REPORTES_ECONOMICOS_FINANCIERO**/
	public function get_reporte_eco($ani,$area,$per)
	{
        $this->db->order_by('periodo');
        $query = $this->db->get_where('tre_reportes_eco', array('anio'=>$ani,'area'=>$area,'periodo'=>$per));
        //muestra las consultas
        //$this->output->enable_profiler(TRUE);
        return $query->result_array();
	}
	/************************************BOLETIN OFICIAL*********************************************/	
	public function get_anios_boletin()
	{
        $this->db->select('anio');
        $this->db->distinct();
        $this->db->order_by("anio", "desc"); 
        $query = $this->db->get('tre_boletin');       
        return $query->result_array();
	}
	
	public function obtener_resultados_boletin($filtro){
		// obtengo los resultados del filtro de los archivos que quiero ver del boletin oficial
		$this->db->select('*');
		$this->db->from('tre_boletin');
		$this->db->where($filtro);
        $this->db->order_by("orden", "asc"); 
        $query = $this->db->get();
		return $query->result_array();
	}
	public function ver_usuario($usuario){
		$this->db->select('*');
		$this->db->from('tre_usuarios');
		$this->db->where('nombre',$usuario);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function obtener_resultados_ordenanza_des($filtro, $des){
		// obtengo los resultados del filtro de los archivos que quiero ver del boletin oficial
		$this->db->select('*');
		$this->db->from('tre_boletin');
		$this->db->where($filtro);
		$this->db->like('descripcion', $des);
        $this->db->order_by("orden", "asc"); 
        $query = $this->db->get();
		return $query->result_array();
	}
	/************************************FIN DE BOLETIN OFICIAL****************************************/ 	
	public function get_anios_sit()
	{
        $this->db->select('anio');
        $this->db->distinct();
        $this->db->order_by("anio", "desc"); 
        $query = $this->db->get('tre_situacion');
        
        return $query->result_array();
	}
	
	public function get_anios_repor()
	{
        $this->db->select('anio');
        $this->db->distinct();
        $this->db->order_by("anio", "desc"); 
        $query = $this->db->get('tre_reportes_eco');
        
        return $query->result_array();
	}
	
	public function get_situacion($ani,$area)
	{
        $this->db->order_by('periodo');
        $query = $this->db->get_where('tre_situacion', array('anio'=>$ani,'area'=>$area));
        //muestra las consultas
        //$this->output->enable_profiler(TRUE);
        return $query->result_array();
	}	
	public function ins_captcha ($time,$ip,$text)
	{
        $data = array(
           'captcha_time' => $time ,
           'ip' => $ip ,
           'word' => strtoupper($text) 
		);
        $this->db->insert('tre_captcha', $data); 
	}
	
	public function buscar_captcha ($ip,$text)
	{
		// Primero, borrar las captchas viejas
        $expiration = time()-1800; // Límite de media hora
        $this->db->delete('tre_captcha', array('captcha_time <' => $expiration)); 
        
        // Luego, ver si existe un captcha:
        $query = $this->db->get_where('tre_captcha', array('word'=>strtoupper($text),'ip'=>$ip, 'captcha_time >'=>$expiration));
        
        if ($query->num_rows() == 0)
        {
			return FALSE;	
		}else{
			return TRUE;
		}
	
	}
	
	/******************************************TRAMITES***************************************/
	public function get_tramites_x_tema($id){
		$query = $this->db->get_where('tre_tramites', array('tema' => $id));
		return $query->result_array();
	}	
	
	public function get_tramites_x_sec($id){
		$query = $this->db->get_where('tre_tramites', array('secretaria' => $id));
		return $query->result_array();
	}	
	
	public function get_tramite($id_tram){
		$query = $this->db->get_where('tre_tramites', array('id_tramites' => $id_tram));
		return $query->row_array();
	}
	
	public function get_requisitos($id_tram){
		$this->db->order_by("numero","asc");
		$query = $this->db->get_where('tre_requisitos', array('tramite' => $id_tram));
		return $query->result_array();
	}	
	
	public function get_costos($id_tram){
		$query = $this->db->get_where('tre_costo', array('tramite_costo' => $id_tram));
		return $query->result_array();
	}
	
	/******************************************FIN DE TRAMITES***************************************/
	
	public function get_formularios($id_tram){
		$query = $this->db->get_where('tre_formularios', array('tramite_formu' => $id_tram));
		return $query->result_array();
	}
	
	/************************************TERMINAL*********************************************/
	
	public function get_ciudad()
	{
        $query = $this->db->get_where('tre_ciudad', array('id !=' => '1'));
        return $query->result_array();
	}

	public function get_ciudad_x($ciudad)
	{
        $query = $this->db->get_where('tre_ciudad', array('id' => $ciudad));
        
        return $query->result_array();
	}

	public function get_viaje($dia, $destino)
	{
        $this->db->distinct();
        $this->db->select ('tre_hora.nombre as hora, tre_dia.nombre as dia, tre_empresa.nombre as empresa, tre_viaje.id, tre_viaje.id_ciudad_destino, 
                            tre_ciudad.nombre as destino,  tre_ciudad.nombre as origen');
        $this->db->from ('tre_viaje');
        if ($dia !='1'){ 
            $dias="(tre_dia_viaje.id_dia= '1' or tre_dia_viaje.id_dia=$dia)";
            $this->db->where($dias);
        }
            
        $viajes=("(tre_viaje.id_ciudad_destino= $destino or tre_intermedia.id_ciudad= $destino)");
        $this->db->where($viajes);	

        $this->db->join('tre_ciudad','tre_viaje.id_ciudad_destino=tre_ciudad.id');
        $this->db->join('tre_empresa','tre_empresa.id=tre_viaje.id_empresa');
        $this->db->join('tre_hora','tre_hora.id=tre_viaje.id_hora');
        $this->db->join('tre_dia_viaje','tre_dia_viaje.id_viaje=tre_viaje.id');
        $this->db->join('tre_dia','tre_dia_viaje.id_dia=tre_dia.id');
        $this->db->join('tre_intermedia','tre_viaje.id=tre_intermedia.id_viaje');
        
        $this->db->order_by('tre_hora.nombre asc, tre_dia.id asc');
        $query=$this->db->get();
        //$this->output->enable_profiler(TRUE);
        return $query->result_array();
	}

	public function cant_viajes($dia, $destino)
	{
        $this->db->distinct();
        $this->db->select ('tre_hora.nombre as hora, tre_dia.nombre as dia, tre_empresa.nombre as empresa, tre_viaje.id, tre_viaje.id_ciudad_destino, 
                            tre_ciudad.nombre as destino,  tre_ciudad.nombre as origen');
        $this->db->from ('tre_viaje');
        
        if ($dia !='1'){ 
            $dias="(tre_dia_viaje.id_dia= '1' or tre_dia_viaje.id_dia=$dia)";
            $this->db->where($dias);
        }
        $viajes=("(tre_viaje.id_ciudad_destino= $destino or tre_intermedia.id_ciudad= $destino)");
        $this->db->where($viajes);

        $this->db->join('tre_ciudad','tre_viaje.id_ciudad_destino=tre_ciudad.id');
        $this->db->join('tre_empresa','tre_empresa.id=tre_viaje.id_empresa');
        $this->db->join('tre_hora','tre_hora.id=tre_viaje.id_hora');
        $this->db->join('tre_dia_viaje','tre_dia_viaje.id_viaje=tre_viaje.id');
        $this->db->join('tre_dia','tre_dia_viaje.id_dia=tre_dia.id');

        $this->db->join('tre_intermedia','tre_viaje.id=tre_intermedia.id_viaje');
        $query=$this->db->get();
        return $query->num_rows();
	}

	public function get_intermedia($id_viaje)
	{
        $query = $this->db->get_where('tre_intermedia', array('id_viaje' => $id_viaje)); 
        return $query->result_array();
	}

	public function cant_intermedia($id_viaje)
	{
        $query = $this->db->get_where('tre_intermedia', array('id_viaje' => $id_viaje)); 
        return $query->num_rows();
	}

	public function get_intermedia_viaje($id_viaje)
	{
        $query = $this->db->get_where('tre_viaje', array('id' => $id_viaje)); 
        return $query->result_array();
	}

	public function get_hora($id_hora)
	{
        $this->db->select ('tre_hora.nombre as hora');
        $query = $this->db->get_where('tre_hora', array('id' => $id_hora)); 
        return $query->result_array();
	}

	/************************************FIN TERMINAL******************************************/
	
	public function ins_acreditacion ($medio,$nombres,$apellido,$dni,$mail,$tel_medio,$tel_cel) {
		// guarda las acreditaciones de prensa para la fiesta del trigo
		$data = array(
		   'medio' => $medio,
		   'nombres' => $nombres,
		   'apellido' => $apellido, 
		   'dni' => $dni,
		   'mail' => $mail,
		   'telefono_medio'=>$tel_medio,
		   'telefono_cel' => $tel_cel,
		   'fecha' =>  date("Y-m-d H:i:s")
		);
		$this->db->insert('acreditacion_prensa', $data); 
	}
	
		public function ins_acreditacion_3r ($nombres,$apellido,$dni,$mail,$tel) {
		// guarda las acreditaciones de gestion ambiental 3R
		$data = array(
		   'nombres' => $nombres,
		   'apellido' => $apellido, 
		   'dni' => $dni,
		   'mail' => $mail,
		   'telefono' => $tel,
		   'fecha' =>  date("Y-m-d H:i:s")
		);
		$this->db->insert('acreditacion_3r', $data); 
	}
	
	
	
	public function inscribir_a_evento($data_e){
		// inscribe la persona para participar del evento elegido
		$this->db->insert('tre_eventos_dep', $data_e);
        // retorno el id de la ultima insercion ingresada
        //return $this->db->insert_id();
	}
	
	public function registrar_encuesta($data_encuesta){
		// ingresa los datos de la encuesta de motos por ruidos jejejeje o nose que no lo tienen definido
		$this->db->insert('tre_encuesta', $data_encuesta);
		// retorno el id de la ultima insercion ingresada
        return $this->db->insert_id(); 
	}
	
	/************************************BECAS*********************************/
	
	public function preinscribir_a_becas($data){
		// inscribe la persona para participar del concurso de becas
		$this->db->insert('tre_becas', $data);
        // retorno el id de la ultima insercion ingresada
        return $this->db->insert_id();
	}
	
	public function obtener_preinscriptos(){
		// obtengo todos los estudiantes que estan inscriptos hasta el momento
		$this->db->select('*');
		$this->db->from('tre_becas');
		$this->db->where('b_fecha_rb');
        $this->db->order_by("b_apellido", "asc"); 
		$this->db->order_by("b_nombre", "asc"); 
        $query = $this->db->get();
		return $query->result_array();
	}
	
	/************************************FIN DE BECAS*********************************/
	
	/****************************INICIO INSERT CAPACITACION DEPORTE**********************/
	
	public function ins_capacitacion_depo($data_cd) {
		// guarda los anotados para la capacitacion de deporte
		$this->db->insert('tre_capacitacion', $data_cd); 
		return $this->db->insert_id();
	}
	
	/******************************FIN INSERT CAPACITACION DEPORTE************************/
	
	/******************************INICIO INSERT MAYOR CONTRIBUYENTE************************/
	
	public function ins_mayor_contribuyente($data_cm) {
		//guarda los anotados para mayor contribuyente
		$this->db->insert('tre_mayor_contribuyente', $data_cm); 
		return $this->db->insert_id();
	}
	
	/******************************FIN INSERT MAYOR CONTRIBUYENTE************************/
	
	public function registrar_votacion($data_vot){
		// registra la votacion de los espectaculos que elige la gente para el proximo año
		$this->db->insert('tre_votacion_ftrigo', $data_vot);
        // retorno el id de la ultima insercion ingresada
        return $this->db->insert_id();
	}

	public function obtener_maquinarias_registradas(){
		// obtengo las maquinas pulverizadoras registradas hasta el momento
		$this->db->select('*');
        $this->db->from('tre_reg_maquinas');
		$this->db->order_by('nro_oblea', 'asc'); 
        $query = $this->db->get();
		return $query->result();
	}
	/*******************************Licitaciones******************************************/
	public function get_licitacion_lista()
	{
        $this->db->select('*');
		$this->db->from('tre_licitacion');
		$this->db->where('fecha_desde <=',date('Y-m-d'));
		$this->db->where('fecha_hasta >=',date('Y-m-d'));
		$this->db->order_by('Id', 'desc');
		$query = $this->db->get();
        return $query->result_array();
	}
	public function get_licitacion($id)
	{
        $this->db->select('*');
		$this->db->from('tre_licitacion');
		$this->db->where('Id =',$id);
		$query = $this->db->get();
        return $query->result_array();
	}
	public function get_lic_consultas($id_lic)
	{
        $this->db->select('*');
		$this->db->from('tre_licitacion_preguntas`');
		$this->db->where('Id_lic',$id_lic);
		$this->db->where('Visible',TRUE);
		$query = $this->db->get();
        return $query->result_array();
	}
	public function ins_lic_consulta ($id_lic,$texto) {
		// guarda las acreditaciones de gestion ambiental 3R
		$data = array(
		   'Id_lic' => $id_lic,
		   'pregunta' => $texto, 
		   'respuesta' => '',
		   'Visible' => FALSE,
		);
		$this->db->insert('tre_licitacion_preguntas', $data); 
	}


	/*******SORTEO D ELA CORVINA NEGRA -CARO*********/
	public function get_datos_sorteo($filtro){
		$this->db->select('*');
		$this->db->from('tre_sorteo');
		$this->db->where($filtro);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_max_nro_inscripcion_sorteo(){
		$this->db->select('MAX(nro_inscripcion) AS max');
		$this->db->from('tre_sorteo');
		$query = $this->db->get();

		foreach ($query->result() as $row){
			return $row->max;
		};
		
	}

	public function nueva_inscripcion_sorteo($dni, $numero){
		$this->db->set('nro_inscripcion', $numero);
		$this->db->where('nro_doc', $dni);
		$this->db->update('tre_sorteo');
		return $this->db->affected_rows();

		
	}
}


?>