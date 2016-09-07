<?php

    /**
     * Modelo lógico de de Colecciones 
     * @author Camilo Quijano <camiloquijano31@hotmail.com> 
     * @date 06/09/2016 
     */
    class LogCollections extends CI_Model {

        /**
         * Constructor de Modelo lógico de de Colecciones 
         * @author Camilo Quijano <camiloquijano31@hotmail.com> 
         * @date 06/09/2016 
         */
        public function __construct() {
            parent::__construct();
            $this->load->model('Collections/DbCollections', 'dbCollections');
        }

        /**
         * Consultar colecciones 
         * @author Camilo Quijano <camiloquijano31@hotmail.com> 
         * @date 06/09/2016 
         * @param array $Where Arreglo de campos a filtrar 
         * @return array listado de coincidencias 
         */
        public function getCollections($Where = array()) {
            return $this->dbCollections->getCollections($Where);
        }

        /**
         * Procesar Formulario de Crear colección 
         * @author Camilo Quijano <camiloquijano31@hotmail.com> 
         * @date 06/09/2016 
         * @param array $Request Arreglo de petición del formulario title|tcid 
         * @return array listado de coincidencias 
         */
        public function newCollection($Request) {
            return $this->dbCollections->newCollection(array(
                    'nombre' => $Request['title'],
                    'tipoColeccion_id' => $Request['tcid'],
            ));
        }

    }

?>