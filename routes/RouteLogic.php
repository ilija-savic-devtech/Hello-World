<?php
    namespace routes;


    use classes\About;
    use classes\Contact;
    use classes\Home;

    class RouteLogic{

        public function currentPage($uriParam, $uri = array()){

            if(in_array($uriParam, $uri)){
                if($uriParam == "/"){
                    echo "This is Homepage<br>";
                } else {
                    echo "This is " . ucfirst(trim($uriParam, "/")) . " page<br>";
                }
            } else
                echo "Page does not exist<br>";
        }

        public function printClasses($uriParam, $method = array()){
            foreach($method as $key=>$value){
                if($uriParam == "/" && $key == 0){
                    $home = new Home();
                    $home = $value;
                    echo $home->getGreetMessage();
                } elseif ($uriParam == "/about" && $key == 1){
                   $about = new About();
                   $about = $value;
                   echo $about->getCompanyName();
                   echo $about->getDescription();
                } elseif ($uriParam == "/contact" && $key == 2){
                   $contact = new Contact();
                   $contact = $value;
                   echo $contact->getPhone();
                   echo $contact->getAdress();
                }
            }
        }

        public function test(){
            echo "sdfsdfdsf";
        }
}
?>