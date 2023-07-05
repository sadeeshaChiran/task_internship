<?php

namespace App\Http\Livewire\SignInAndRegisterPage\SigninLayer;

use App\Models\User;
use domain\Facades\userFacade;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SigninLayer extends Component
{
    public
    $user,

    $email,
    $password
    ;


    public function mount()
    {
        $this->user = new User();

    }
    public function LoginLayer()
    {
        $this->validate([

            'email' =>'required|email',
            'password' =>'required|min:6|max:10|string',



        ]);

        $newUser =[

            'email' =>  $this->email,
            'password' =>  $this->password,

        ];

        $email = $newUser['email'];
        $password = $newUser['password'];




        $check_email = userFacade::check_email($email);

        if ($check_email) {

            $authUser = userFacade::check_password($password,$email);


            if ($authUser) {
                session()->flash('status', 'successfully.');
                Auth::login($authUser);

                return redirect()->intended('/');

            }else{
                session()->flash('erro', 'Password is not vailed.');
            }
        }else{

            session()->flash('erro', 'Email is not vailed.');
        }




    }


    public function render()
    {
        return view('pages.SignIn_AND_Register.components.Signin');
    }












}

