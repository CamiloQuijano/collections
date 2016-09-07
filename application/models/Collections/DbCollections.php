<?php

    class DbCollections extends CI_Model {

        public function __construct() {
            parent::__construct();
        }

        /**
         * Consultar colecciones 
         * @author Camilo Quijano <camiloquijano31@hotmail.com> 
         * @date 06/09/2016 
         * @param array $Where Arreglo de campos a filtrar 
         * @return array listado de coincidencias 
         */
        public function getCollections($Where = array()) {
            if ($Where) { $this->db->where($Where); } 

            $query = $this->db
                ->select('c.id, c.nombre, tc.nombre nombreCategoria')
                ->join('tipoColeccion tc', 'tc.id = c.tipoColeccion_id')
                ->get('coleccion c');
            return $query->result_array();
        }

        /**
         * Crear colección 
         * @author Camilo Quijano <camiloquijano31@hotmail.com> 
         * @date 06/09/2016 
         * @param array $Collection Arreglo de info de colección nombre|tipoColeccion_id 
         * @return int Id de registro creado 
         */
        public function newCollection($Collection) {
            $query = $this->db->insert('coleccion', $Collection);
            return $this->db->insert_id();
        }

    }

?>