<?php
   namespace classes;
    class Contact{
        private $phone;
        private $adress;


        /**
         * @return mixed
         */
        public function getPhone()
        {
            return "Phone number: ". $this->phone . "<br>";
        }

        /**
         * @param mixed $phone
         */
        public function setPhone($phone)
        {
            $this->phone = $phone;
        }

        /**
         * @return mixed
         */
        public function getAdress()
        {
            return "Adress: ".$this->adress."<br>";
        }

        /**
         * @param mixed $adress
         */
        public function setAdress($adress)
        {
            $this->adress = $adress;
        }


    }
?>