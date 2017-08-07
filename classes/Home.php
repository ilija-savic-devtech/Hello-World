<?php
    namespace classes;
    class Home{
        private $greetMessage;

        /**
         * @return mixed
         */
        public function getGreetMessage()
        {
            return "Greetings message: " . $this->greetMessage . "<br>";
        }

        /**
         * @param mixed $greetMessage
         */
        public function setGreetMessage($greetMessage)
        {
            $this->greetMessage = $greetMessage;
        }



    }
?>