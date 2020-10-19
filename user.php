<?php
    include_once './account.php';
    class User implements Account{
        private $fullName;
        private $email;
        private $password;
        private $city;
        //private $profileUrl;
        

        public function __construct(){       
        }

        //getters and setter
        public function setFullName($fn){
            $this->fullName = $fn;
        }

        public function getFullName(){
            return $this->fullName;
        }

        public function setEmail($em){
            $this->email = $em;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPassword($pass){
            $this->password = $pass;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setCity($city){
            $this->city = $city;
        }

        public function getCity(){
            return $this->city;
        }

        
        public function register ($pdo) {
            //has the password
            $hashedPassword = password_hash($this->getPassword(), PASSWORD_DEFAULT);
            //prepare a statement
            try{
                //prepare a querry
                $stm = $pdo->prepare("insert into user (full_name, email, password, city) values(?,?,?,?)");
                $stm->execute([$this->getFullName(),$this->getEmail(),$hashedPassword,$this->getCity()]);
                $stm = null;
                return "Registration was succesiful";
            }catch (PDOException $ex){
                return $ex->getMessage();
                //in production return a generic message, but log the specific
            }

            //factor out the profile picture. 
        }
        public function login($pdo) {

        }
        public function changePassword($pdo) {

        }
        public function logout ($pdo){

        }
    } 

?>