<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(){
        $users = $this->repository->getList();
        return view('list', compact('users'));
    }

    public function getAdd() {
        return view('news_create');
    }

    public function postAdd(Request $request){
        $data = $request->all();
        unset($data['password_confirmation']);
        unset($data['_token']);
        $data['created_at'] = date('Y-m-d H:i:s');
        if($this->repository->store($data)){
            return redirect()->route('user.index');
        }
        return back()->withInput($request->all());
       $request->validate([
            'mail_address'=>'required|min:6|max:50|email',
            'password'=>'required|string|min:6|max:50',
            'password_confirmation'=>'required|same:password',
            'name'=>'required|string|max:255',
            'address'=>'string|max:255',
            'phone'=>'required|digits_between:0,15'
        ],[
            'mail_address.required'=>'Vui lòng nhập email của bạn',
            'mail_address.min'=>'Email phải lớn hơn 6 và nhỏ hơn 50 kí tự',
            'mail_address.max'=>'Email phải lớn hơn 6 và nhỏ hơn 50 kí tự',
            'mail_address.email'=>'Vui lòng nhập chính xác email',
            'password.required'=>'Vui lòng nhập mật khẩu của bạn',
            'password.min'=>'Password phải lớn hơn 6 và nhỏ hơn 50 kí tự',
            'password.max'=>'Password phải lớn hơn 6 và nhỏ hơn 50 kí tự',
            'password_confirmation.required'=>'Vui lòng nhập mật khẩu của bạn',
            'password_confirmation.same'=>'Mật khẩu không khớp',
        ]);

    }

    public function test()
    {
        dd(1);
    }
}
