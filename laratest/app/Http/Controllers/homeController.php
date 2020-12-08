<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Validator;

class homeController extends Controller
{

    function index(Request $req){
    	/*$data = ['id'=> 123, 'name'=> 'alamin'];
    	return view('home.index', $data);*/

    	/*return view('home.index')
    			->with('id', '1234')
    			->with('name', 'xyz');*/

    	/*return view('home.index')
    			->withId('1234')
    			->withName('xyz');*/

/*    	$v = view('home.index');
    	$v->withId('123');
    	$v->withName('alamin');
   		return $v;*/

        $id = 123;
        $name = $req->session()->get('username');
        return view('home.index', compact('id', 'name'));
    	
    }

    public function create(){
        return view('home.create');
    }

    public function store(UserRequest $req){
        
       /* $validation = Validator::make($req->all(), [
            'name' => 'required|min:3',
            'email'=> 'required',
            'cgpa' => 'required'
        ]);

        if($validation->fails()){
            return redirect()
                    ->route('home.create')
                    ->with('errors', $validation->errors())
                    ->withInput();

            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
        }*/


       /* $this->validate($req, [
            'name' => 'required|min:3',
            'email'=> 'required',
            'cgpa' => 'required'
        ])->validate();*/


        /*$req->validate([
            'name' => 'required|min:3',
            'email'=> 'required',
            'cgpa' => 'required'
        ])->validate();*/

        return redirect('/userlist');
    }

    public function userlist(){
        $users  = $this->getUserlist();
        return view('home.userlist')->with('users', $users);
    }

    public function show($id){
        //$user = $id
        //return view('home.show')->with('user', $user);
    }

    public function edit($id){
        //$user = $id
        //return view('home.show')->with('user', $user);
    }

    public function update($id){
        //$user = $id
        //return view('home.show')->with('user', $user);
    }

    public function delete($id){
        //$user = $id
        //return view('home.show')->with('user', $user);
    }

    public function destroy($id){
        //$user = $id
        //return view('home.show')->with('user', $user);
    }

    private function getUserlist(){
        return [
            ['id'=> 1, 'name'=>'xyz', 'email'=>'xyz@aiub.edu', 'cgpa'=>4],
            ['id'=> 2, 'name'=>'abc', 'email'=>'abc@aiub.edu', 'cgpa'=>3],
            ['id'=> 3, 'name'=>'asd', 'email'=>'asd@aiub.edu', 'cgpa'=>3.5],
            ['id'=> 4, 'name'=>'pqr', 'email'=>'pqr@aiub.edu', 'cgpa'=>2.4],
            ['id'=> 5, 'name'=>'alamin', 'email'=>'alamin@aiub.edu', 'cgpa'=>1.2]
        ];
    }
}
