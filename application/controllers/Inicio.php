<?php
date_default_timezone_set('America/Bogota');

defined('BASEPATH') OR exit('El acceso directo a este archivo no está permitido');

/**
 * @author:     John Arley Cano Salinas
 * Fecha:       17 de abril de 2018
 * Programa:    Sistema Predial | Módulo inicial
 *              Permite visualizar el resumen o estado de 
 *              los predios del sistema por cada proyecto
 * Email:       johnarleycano@hotmail.com
 */
class Inicio extends CI_Controller {
	/**
     * Función constructora de la clase. Se hereda el mismo constructor 
     * de la clase para evitar sobreescribirlo y de esa manera 
     * conservar el funcionamiento de controlador.
     */
    function __construct() {
        parent::__construct();
    }

    /**
     * Interfaz inicial de inicio
     * 
     * @return [void]
     */
	function index()
	{
        $this->data['titulo'] = 'Inicio';
        $this->data['contenido_principal'] = 'inicio/index';
        $this->load->view('core/template', $this->data);
	}
}
/* Fin del archivo Inicio.php */
/* Ubicación: ./application/controllers/Inicio.php */
