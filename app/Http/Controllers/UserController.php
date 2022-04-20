<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){

    }
    public function index(){
        return 'Danh sách';
    }
    //lấy chuyên mục theo id
    public function getUser($id){

    }
}
