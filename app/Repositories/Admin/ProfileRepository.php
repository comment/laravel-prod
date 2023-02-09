<?php

namespace App\Repositories\Admin;

use App\Repositories\Interfaces\Admin\UserRepositoryInterface;
use App\Models\User;

class ProfileRepository implements ProfileRepositoryInterface
{

    public function allUsers(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return User::latest()->paginate(5);
    }

    public function storeUser($data): \Illuminate\Database\Eloquent\Model|User
    {
        return User::create($data);
    }

    public function findUser($id): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|array|User|null
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
