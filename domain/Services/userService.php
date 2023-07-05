<?php

namespace domain\Services;

use App\Models\User;






class userService
{
    protected $user;
    // protected $subtast;


    public function __construct()
    {
        $this->user = new User();
    }



    public function store($data)
    {

        return $this->user->create($data);
    }

    public function check_email($email)
    {


        return $this->user->check_email($email);
    }

    public function check_password($password, $email)
    {

        return $this->user->check_password($password, $email);
    }
}
