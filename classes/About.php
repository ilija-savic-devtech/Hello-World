<?php
    namespace classes;
    class About{
        private $companyName;
        private $description;

        /**
         * @return mixed
         */
        public function getCompanyName()
        {
            return "Company name: " . $this->companyName . "<br>";
        }

        /**
         * @param mixed $companyName
         */
        public function setCompanyName($companyName)
        {
            $this->companyName = $companyName;
        }

        /**
         * @return mixed
         */
        public function getDescription()
        {
            return "Description: " . $this->description . "<br>";
        }

        /**
         * @param mixed $description
         */
        public function setDescription($description)
        {
            $this->description = $description;
        }



    }
?>