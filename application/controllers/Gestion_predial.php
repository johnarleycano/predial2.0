<?php
date_default_timezone_set('America/Bogota');

defined('BASEPATH') OR exit('El acceso directo a este archivo no está permitido');

/**
 * @author:     John Arley Cano Salinas
 * Fecha:       18 de abril de 2018
 * Programa:    Sistema Predial | Módulo de gestión predial
 *              Permite gestionar la información
 *              predial del sistema
 * Email:       johnarleycano@hotmail.com
 */
class Gestion_predial extends CI_Controller {
	/**
     * Función constructora de la clase. Se hereda el mismo constructor 
     * de la clase para evitar sobreescribirlo y de esa manera 
     * conservar el funcionamiento de controlador.
     */
    function __construct() {
        parent::__construct();

        // Carga de modelos
        $this->load->model(array('gestion_predial_model'));
    }

    /**
     * Interfaz inicial
     * 
     * @return [void]
     */
    function index()
    {
        $this->data['titulo'] = 'Gestión predial';
        $this->data['contenido_principal'] = 'gestion_predial/index';
        $this->load->view('core/template', $this->data);
    }

	/**
     * Interfaz para gestión de un predio
     * 
     * @return [void]
     */
	function predio()
	{
        $this->data['titulo'] = 'Gestionar predio';
        $this->data['contenido_principal'] = 'gestion_predial/predio';
        $this->load->view('core/template', $this->data);
	}

	/**
     * Carga de interfaces vía Ajax
     * 
     * @return [void]
     */
    function cargar_interfaz()
    {
        //Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
            $tipo = $this->input->post("tipo");

            switch ($tipo) {
                case "listado":
                    $this->load->view("gestion_predial/lista");
                break;

                case "opciones":
                    $this->load->view("gestion_predial/opciones");
                break;
            }
        } else {
            // Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
    }
}
/* Fin del archivo Gestion_Predial.php */
/* Ubicación: ./application/controllers/Gestion_Predial.php */