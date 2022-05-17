<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function store($_data){
        return DB::table('user')->insert($_data);
    }

    public function getList(){
        return $this->model->orderBy('id', 'DESC')->paginate(10);
    }
}
