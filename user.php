<?php
    include_once 'account.php';

    if(!isset($_SESSION)) { 
        session_start(); 
    }

    class User implements Account{
        private $fullName;
        private $email;
        private $password;
        private $city;
        private $image;
        private $inputPass;
        private $newPass;

        //private $profileUrl;
        

        public function __construct(){ 
            $this->fullName = "";
            $this->email = "";  
            $this->password = "";  
            $this->inputPass = "";  
            $this->city = "";  
            $this->newpass = "";        
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

        public function setinputPass($pass){
            $this->inputPass = $pass;
        }

        public function getinputPass(){
            return $this->inputPass;
        }

        public function setCity($city){
            $this->city = $city;
        }

        public function getCity(){
            return $this->city;
        }

        public function setImage($img){
            $this->image= $img;
        }

        public function getImage(){
            return $this->image;
        }

        public function setNewPass($newPass){
            $this->newPass= $newPass;
        }

        public function getNewPass(){
            return $this->newPass;
        }
       
        public function register ($pdo) {
            
            $file_name = $this->image['name'];
            $file_tmp_location = $this->image['tmp_name'];
            $file_path = "images/";

            move_uploaded_file($file_tmp_location, $file_path.$file_name);

            try{
                //prepare a querry
                $stm = $pdo->prepare("INSERT INTO registrationdetails (name_user, Email, City, user_password, ProfilePic ) VALUES(?,?,?,?,?)");
                $stm->execute([$this->fullName,$this->email,$this->city,$this->inputPass,$file_name]);
                $stm = null;
                return "Registration was successful";
            }catch (PDOException $ex){
                return $ex->getMessage();
                //in production return a generic message, but log the specific
            }

            //factor out the profile picture. 
        }
        public function login($pdo) {
            try {
                $stmt = $pdo->prepare("SELECT user_password FROM registrationdetails WHERE Email = ?");
                $stmt->execute([$this->email]);
                $result = $stmt->fetch();
                $this->password = $result['user_password'];
                //echo $this->password."<br>";
                    //echo $this->inputPass;
                if (password_verify($this->inputPass, $this->password)) {
                    
                    $stmt = $pdo->prepare("SELECT * FROM registrationdetails WHERE Email = ? AND user_password = ?");
                    $stmt->execute([$this->email, $this->password]);
                    $result = $stmt->fetch();
                    $stmt = null;
                return $result;
                } else {
                    echo 'Invalid password.';
                }
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }

        
        public function changePassword($pdo) {
            try {
                $stmt = $pdo->prepare("UPDATE registrationdetails SET user_password = ? WHERE UserID = ? AND user_password = ?");
                $stmt->execute([$this->newPass, $_SESSION['user_id'], $this->password]);
                $result = $stmt->fetch();
                $stmt = null;
                return "User Password has been changed";
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        public function logout ($pdo){
            session_destroy();
        }
    } 

?>