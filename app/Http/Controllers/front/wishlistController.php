<?php

namespace App\Http\Controllers\front;

use Session;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repository\repoInterface;

class wishlistController extends Controller
{

    protected $repo;
    public function __construct(RepoInterface $repo){
        $this->repo = $repo;
    }


    public function index(){
       return $this->repo->index();
    }
    public function store($id){
        return $this->repo->store($id);
    }
    public function destroy($id){
        return $this->repo->destroy($id);
    }
}
