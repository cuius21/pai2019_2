<?php
require_once 'AppController.php';
require_once __DIR__.'/../model/User.php';
require_once __DIR__.'/../model/UserMapper.php';

class SecurityController extends AppController{
    public function __construct(){
        parent::__construct();
    }
    public function login(){
        //$user = new User('alek@gmail.com', 'admin', 'Juzio', 'Parowka');

        $mapper = new UserMapper();
        $user = null;

        if ($this->isPost()) {

            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $mapper->getUser($email);

            if (!$user) {
                return $this->render('login', ['messages' => ['User with this email does not exist!']]);
            }

            if ($user->getPassword() !== $password) {
                return $this->render('login', ['messages' => ['Wrong password!']]);
            }

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=home");
        }

        $this->render('login');
    }
    public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('register', ['messages' => ['You have been successfully logged out!']]);
    }
    public function register(){
        $mapper = new UserMapper();
        $user = null;
        if ($this->isPost()) {
            //VALIDATE INPUTS
            $validationFailed = false;
            $messages[] = null;
            if(preg_match('/[^A-Za-z]/', $_POST['name'])) {
                $validationFailed = true;
                array_push($messages, 'The name should only consist of letters ('.$_POST['name'].' is wrong!)');
            }
            if(preg_match('/[^A-Za-z]/', $_POST['surname'])) {
                $validationFailed = true;
                array_push($messages, 'The surname should only consist of letters ('.$_POST['surname'].' is wrong!)');
            }
            if(!preg_match('/[^@]+@[^\.]+\..+/', $_POST['email'])) {
                $validationFailed = true;
                array_push($messages, 'The email provided is valid ('.$_POST['email'].' is wrong!)');
            }
            if($validationFailed) {
                return $this->render('register', ['messages' => $messages]);
            }
            //VALIDATE IF EMAIL IS UNIQUE
            $user = $mapper->getUser($_POST['email']);
            if(!($user->getEmail() == null) && !($user->getEmail() == '')) {
                return $this->render('register', ['messages' => ['This email has already been used!']]);
            }
            //ADD USER TO DATABASE
            $mapper->addUser($_POST['name'], $_POST['surname'], $_POST['email'], ($_POST['password']));
            return $this->render('home', ['messages' => ['Your account has been registered!']]);
        }
        $this->render('register');
    }
    public function home(){
        $this->render('home');
    }
    public function team(){
        $this->render('team');
    }
    public function player(){
        $this->render('player');
    }
    public function settings(){
        $this->render('settings');
    }
}
