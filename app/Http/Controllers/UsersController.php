<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Task;

class UsersController extends Controller
{
    public function index(){
        $users=User::paginate(10);
        return view('users.index',[
            'users'=>$users,]);
    }
    public function show($id){
        $user=User::find($id);
        return view('users.show',
        ['user'=>$user,]);
    }
     public function destroy($id){
         
        // $id = ユーザーid
        //tasksテーブルから $id のuser_id を持っているタスクを削除する
        $task = Task::where('user_id', '=', $id)->delete();
                $user=User::find($id);
        $user->delete();
       return redirect('/');
    }
}
