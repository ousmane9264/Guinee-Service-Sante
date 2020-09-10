<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Requests\CustomerRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Customer;
use Session;
use DateTime;
use Flashy;
session_start();


class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('inscription');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $this->validate($request, [
           'nom' => 'required|min:3',
           'prenom' => 'required|min:3',
           'phone' => ['required'],
           'email' => 'required|email|unique:customers',
           'password' => ['required','min:5'],
           'confirmation' => ['required'],
           'genre' => 'required'
           ]);


         //Verification de unicité de l'email
        $exit=Customer::where('email', request('email'))
                    ->orWhere('phone', request('phone'))
                    ->first();
        if(!empty($exit)){
            return back()
            ->withErrors([
                'email' => 'cet email existe déjà', 
                'phone' => 'Ce Numero de telephone existe déjà'])
            ->withInput();
        }



        $data = array();
        $data['nom'] = $request->nom;
        $data['prenom'] = $request->prenom;
        $data['genre'] = $request->genre;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['password'] = md5($request->password);
        $data['photo'] = $request->photo;
        $data['state']=$request->state;
        $data['created'] = Carbon::now();


        if($request->password==$request->confirmation){

            DB::table('customers')->insert($data);
            return back();
        }else{

             return back()

            ->withErrors([ 
                'password'=>'Les mot de passe ne sont pas identique!'])
            ->withInput();

           
        }

    }


// Authentification user

    public function Auth(Request $request)
    {
       
       // connect user

         $email = $request->email;

        $password = md5($request->password);
        $result = DB::table('customers')
            ->where('email',$email)
            ->where('password',$password)->first();
            if($result != null){
                //recuperation des information de l'utilisateur
                    Session::put('id_customer', $result->id_customer);
                    Session::put('nom', $result->nom);
                    Session::put('prenom', $result->prenom);
                    Session::put('email', $result->email);
                    Session::put('phone', $result->phone);
                    Session::put('photo', $result->photo);
                    Session::put('password', $result->password);
                    // Flashy::Info("vous etes connecté");
                     // session()->flash('message','Bienvenue!');
                    return Redirect::to('/connected_user');
                }else{

                        
                   return back()

            ->withErrors([ 
                'password'=>'Non connecte'])
            ->withInput();
                }

    }

// User authenticate

    public function user_authenticate(Request $request)
    {
        

        return view('authentified_users/user_auth');

    }

    // deconnect user
     public function deconnect()
     {
         
         auth()->logout();


        return redirect('/');
         
     }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
