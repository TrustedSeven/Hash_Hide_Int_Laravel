<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $new_items = array();
        foreach(User::query()->get()->toArray() as $item){

            if(is_int($item["id"])){

                unset($item["id"]);
                array_push($new_items, $item);
            }

        }

        // $users = User::all();
        var_dump($new_items);die;

        return view('welcome');
    }
}
?>
