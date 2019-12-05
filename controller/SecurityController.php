<?php
require_once 'AppController.php';
require_once __DIR__.'/../model/User.php';

class SecurityController extends AppController{
    public function login(){
        $user = new User('alek@gmail.com', 'admin', 'Juzio', 'Parowka');
        
        if ($this->isPost()) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($user->getEmail() !== $email) {
                return $this->render('register', ['messages' => ['User with this email does not exist!']]);
            }

            if ($user->getPassword() !== $password) {
                return $this->render('register', ['messages' => ['Wrong password!']]);
            }

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=home");
        }

        $this->render('register');
    }
    public function home(){
        $this->render('home');
    }
    public function team(){
        $this->render('team');
    }
}
