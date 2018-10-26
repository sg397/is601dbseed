<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about', ['test' => 'test sunitha']);
    }
    public function profile()
    {

        //$user = User::find(2);
        //$user->name = 'Name Changed';
        //$user->save();
        //$user->delete();

       // $users = User::all();
$user = Auth::user();
$posts= $user->posts;
       /* $users = User::where('id', 1)
            ->orderBy('name', 'desc')
            ->take(10)
            ->get();
*/
        //dd($posts);

        return view('profile', ['posts' => $posts]);
    }
}
