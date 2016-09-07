<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     * Controlador de Colecciones 
     * @author Camilo Quijano <camiloquijano31@hotmail.com> 
     * @date 06/09/2016 
     */
    class Collections extends CI_Controller {

        /**
         * Index de controlador Colecciones 
         * @author Camilo Quijano <camiloquijano31@hotmail.com> 
         * @date 06/09/2016 
         * @retun view 
         */
        public function index() {
            $this->load->view('collections/index');
        }

        /**
         * Crear Colección 
         * @author Camilo Quijano <camiloquijano31@hotmail.com> 
         * @date 06/09/2016 
         */
        public function newCollection() {
            print_R($_POST);
            $this->load->model('Collections/LogCollections', 'logCollections');

            $this->logCollections->newCollection($_POST);

            //$ = get_instance(); 
            //$this->load->model('Collections/LogCollections', 'logCollections'); 
            //echo json_encode($this->logCollections->getCollections()); 
        }

        /**
         * JSON listado de colecciones 
         * @author Camilo Quijano <camiloquijano31@hotmail.com> 
         * @date 06/09/2016 
         * @return Listado de Colecciones 
         */
        public function getCollections() {
            $this->load->model('Collections/LogCollections', 'logCollections');
            echo json_encode($this->logCollections->getCollections());
        }

        /**
         * Detalles de colección 
         * @author Camilo Quijano <camiloquijano31@hotmail.com> 
         * @date 06/09/2016 
         * @param int $id Id de colección 
         * @return array Info para generar detalles de colección 
         */
        public function getCollection($id) {
            $this->load->model('Collections/LogCollections', 'logCollections');

            echo json_encode(array(
                'details' => array(),
            ));
        }

    }
    