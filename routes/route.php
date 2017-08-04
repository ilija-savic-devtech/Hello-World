<?php
    namespace routes;
   
    class Route{

        private $_uri = array();
        private $_method = array();
        private $_service;
        
        public function add($uri, $method = null){

            $this->_uri[] = $uri;
            if($method != null){
                $this->_method[] = $method;
                
            }
        }

        public function submit(){

            $uriParam = $_SERVER['REQUEST_URI'];
           
            if(in_array($uriParam, $this->_uri)){
                if($uriParam == "/"){
                        echo "This is Homepage<br>";
                    } else {
                    echo "This is " . ucfirst(trim($uriParam, "/")) . " page<br>";
                    }
                } else
                echo "Page does not exist<br>";
                
            

            foreach($this->_method as $key=>$value){
                if($uriParam == "/" && $key == 0){
                    echo "<pre>";
                    print_r($value);
                    echo "</pre>";
                } elseif ($uriParam == "/about" && $key == 1){
                    echo "<pre>";
                    print_r($value);
                    echo "</pre>";
                } elseif ($uriParam == "/contact" && $key == 2){
                    echo "<pre>";
                    print_r($value);
                    echo "</pre>";
                }
            }    
                
        }

    }
?>