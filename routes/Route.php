<?php
    namespace routes;
   
    class Route{

        private $_uri = array();
        private $_method = array();
        private $_logic;

        public function __construct(RouteLogic $_logic){
            $this->_logic = $_logic;
        }

        public function add($uri, $method = null){

            $this->_uri[] = $uri;
            if($method != null){
                $this->_method[] = $method;
                
            }
        }

        public function submit(){

            $uriParam = $_SERVER['REQUEST_URI'];
            $this->_logic->currentPage($uriParam, $this->_uri);
            $this->_logic->printClasses($uriParam, $this->_method);

        }

    }
?>