<?php
namespace App\Repositories\Interfaces\Admin;

Interface UserRepositoryInterface{

    public function allUsers();
    public function storeUser($data);
    public function findUser($id);
    public function updateUser($data, $id);
    public function destroyUser($id);
}
