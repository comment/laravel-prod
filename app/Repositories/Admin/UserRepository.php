<?php

namespace App\Repositories\Admin;

use App\Repositories\Interfaces\Admin\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function allUsers()
    {
        return User::latest()->paginate(10);
    }

    public function storeUser($data)
    {
        return User::create($data);
    }

    public function findUser($id)
    {
        return User::find($id);
    }

    public function updateUser($data, $id)
    {
        $category = User::where('id', $id)->first();
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->save();
    }

    public function destroyUser($id)
    {
        $category = User::find($id);
        $category->delete();
    }
}