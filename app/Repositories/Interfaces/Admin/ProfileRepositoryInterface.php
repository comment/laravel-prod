<?php
namespace App\Repositories\Interfaces\Admin;

Interface ProfileRepositoryInterface{

    public function allUsers();
    public function storeUser($data);
    public function findUser($id);
    public function updateUser($data, $id);
    public function destroyUser($id);
}
