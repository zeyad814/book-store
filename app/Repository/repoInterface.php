<?php
namespace App\Repository;


interface RepoInterface
{
    public function index();
    public function store($id);
    public function destroy($id);
}
