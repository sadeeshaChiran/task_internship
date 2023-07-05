<?php
namespace App\Http\Livewire\SignInAndRegisterPage\RegisterLayer ;


use App\Models\User;
use domain\Facades\userFacade;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterLayer extends Component
{

    use WithFileUploads;

    public
        $user,
        $fName,
        $lName,
        $email,
        $number,
        $dob,
        $image,
        $password,
        $repassword,
        $description;


    public function mount()
    {
        $this->user = new User();
    }
    public function SigninLayer()
    {
        $this->validate([

            'fName' => 'required',
            'lName' => 'required',
            'email' => 'required|email|unique:users,email',
            'number' => 'required|numeric|digits:10',
            'dob' => 'required',
            'image' => 'required|image',
            'password' => 'required|min:6|max:10',
            'repassword' => 'required|same:password',
            'description' => 'required',





        ]);


        $path = $this->image->store('public/images');



        $newUser = [

            'fName' => $this->fName,
            'lName' => $this->lName,
            'email' => $this->email,
            'number' => $this->number,
            'dob' => $this->dob,
            'image' => $path,
            'password' => $this->password,
            'description' => $this->description



        ];





        userFacade::store($newUser);




        session()->flash('status', 'Signin successfully.');

        // set Auth
        $authUser = userFacade::check_password($this->password,$this->email);
        Auth::login($authUser);
        // ---------------


        return redirect()->intended('/');
    }
    public function render()
    {
        return view('pages.SignIn_AND_Register.components.Register');
    }



}
