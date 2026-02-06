<?php
namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Application;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {	
        $users = User::select('users.*')->whereHas('roles', function($q){ 
            $q->where('roles.name','driver');
        })->get();
        $applications = Application::all(); 
        $sliders = Slider::all(); 
        return view('admin.dashboard.index',compact('users','applications','sliders'));

    }
}

