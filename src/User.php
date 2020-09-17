<?php 
namespace userApp;

    class User{
        public $name;
        public $email;
        public $role;

    public function showProfile(){
    $data[] = $this->name;
    $data[] = $this->email;
    $data[] = $this->role;

    return $data;
    }
}
