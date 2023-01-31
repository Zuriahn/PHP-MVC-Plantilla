<?php

    class ModelUsuario{

        private static $procedureName = "sp_Usuarios";
        private $id_user;
        private $user_email;
        private $user_name;
        private $first_name;
        private $last_name;
        private $user_password;
        private $rol;
        private $user_date;
        private $gender;
        private $private;
        private $last_login;

        public function __construct(){}

        public function getUsers(){
            $Data = [];
            try{
                $statement = ConnectionDB::Connect()->prepare(('SELECT * FROM USUARIOS'));

                $success = $statement->execute();

                if($success){
                    $result = $statement->fetchAll();

                    if($result != false){

                        foreach($result as $value){
                            $User = new self();
                            $User->setId_user($value['id_user']);
                            $User->setUser_email($value['user_email']);
                            $User->setUser_name($value['user_name']);
                            $User->setFirst_name($value['first_name']);
                            $User->setLast_name($value['last_name']);
                            $User->setUser_password($value['user_password']);
                            $User->setRol($value['rol']);
                            $User->setUser_date($value['user_date']);
                            $User->setGender($value['gender']);
                            $User->setPrivate($value['private']);
                            $User->setLast_login($value['last_login']);
                            $Data[] = $User;
                        }
                    }
                }
            }catch(Exception $e){
                
            }

            return $Data;
        }

        public function insertUser($data_request){
            $result = true;
            $option = 'insert';

            $statement = ConnectionDB::Connect()->prepare('CALL '.self::$procedureName.'(:Opcion, :sp_id_user, :sp_user_email, :sp_user_name, :sp_first_name, :sp_last_name, :sp_user_password, :sp_rol, :sp_user_date, :sp_gender, :sp_private, null)');

            $statement->bindParam(':Opcion', $option, PDO::PARAM_STR);
            $statement->bindParam(':sp_id_user', $data_request['id_user'], PDO::PARAM_STR);
            $statement->bindParam(':sp_user_email', $data_request['user_email'], PDO::PARAM_STR);
            $statement->bindParam(':sp_user_name', $data_request['user_name'], PDO::PARAM_STR);
            $statement->bindParam(':sp_first_name', $data_request['first_name'], PDO::PARAM_STR);
            $statement->bindParam(':sp_last_name', $data_request['last_name'], PDO::PARAM_STR);
            $statement->bindParam(':sp_user_password', $data_request['user_password'], PDO::PARAM_STR);
            $statement->bindParam(':sp_rol', $data_request['rol'], PDO::PARAM_BOOL);
            $statement->bindParam(':sp_user_date', $data_request['user_date'], PDO::PARAM_STR);
            $statement->bindParam(':sp_gender', $data_request['gender'], PDO::PARAM_BOOL);
            $statement->bindParam(':sp_private', $data_request['private'], PDO::PARAM_BOOL);

            try{

               $statement->execute();

            }catch(Exception $e){
                echo $e;
                $result = false;
            }

            return $result;
        }

        //METODOS GET Y SET

        public function getId_user(){
            return $this->id_user;
        }
    
        public function setId_user($id_user){
            $this->id_user = $id_user;
        }

        public function getUser_email(){
            return $this->user_email;
        }
    
        public function setUser_email($user_email){
            $this->user_email = $user_email;
        }

        public function getUser_name(){
            return $this->user_name;
        }
    
        public function setUser_name($user_name){
            $this->user_name = $user_name;
        }

        public function getFirst_name(){
            return $this->first_name;
        }
    
        public function setFirst_name($first_name){
            $this->first_name = $first_name;
        }

        public function getLast_name(){
            return $this->last_name;
        }
    
        public function setLast_name($last_name){
            $this->last_name = $last_name;
        }

        public function getUser_password(){
            return $this->user_password;
        }
    
        public function setUser_password($user_password){
            $this->user_password = $user_password;
        }

        public function getRol(){
            return $this->rol;
        }
    
        public function setRol($rol){
            $this->rol = $rol;
        }

        public function getUser_date(){
            return $this->user_date;
        }
    
        public function setUser_date($user_date){
            $this->user_date = $user_date;
        }

        public function getGender(){
            return $this->gender;
        }
    
        public function setGender($gender){
            $this->gender = $gender;
        }

        public function getPrivate(){
            return $this->private;
        }
    
        public function setPrivate($private){
            $this->private = $private;
        }

        public function getLast_login(){
            return $this->last_login;
        }
    
        public function setLast_login($last_login){
            $this->last_login = $last_login;
        }
    

    }