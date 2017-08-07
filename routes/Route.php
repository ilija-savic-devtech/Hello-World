<?php
    namespace routes;
   
    class Route{

        private $_uri = array();
        private $_method = array();

        public function add($uri, $method = null){

            $this->_uri[] = $uri;
            if($method != null){
                $this->_method[] = $method;
                
            }
        }

        public function submit(){

            $uriParam = $_SERVER['REQUEST_URI'];
            RouteLogic::currentPage($uriParam, $this->_uri);
            RouteLogic::printClasses($uriParam, $this->_method);

        }

    }
?>