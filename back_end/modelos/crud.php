<?php
   interface CRUD{
    
        public function crear();
        public function actualizar();
        public function borrar();
        
        public function leer_todos();
        public function leer_uno_id();
        public function leer_varios_campo();
        public function leer_clave_correo_cliente();
        public function leer_clave_correo_empleado();
        
   }
    ?>