<?php
    namespace routes;

    class RouteLogic{

        public static function currentPage($uriParam, $uri = array()){

            if(in_array($uriParam, $uri)){
                if($uriParam == "/"){
                    echo "This is Homepage<br>";
                } else {
                    echo "This is " . ucfirst(trim($uriParam, "/")) . " page<br>";
                }
            } else
                echo "Page does not exist<br>";
        }

        public static function printClasses($uriParam, $method = array()){
            foreach($method as $key=>$value){
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

        public static function test(){
            echo "sdfsdfdsf";
        }
}
?>