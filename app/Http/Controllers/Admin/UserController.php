<?php



namespace App\Http\Controllers\Admin;



use Hash;

use Validator;

use App\Models\Role;

use App\Models\User;

use App\Models\VideoCall;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class UserController extends Controller

{

	public function edit(Request $request , $id)

    {   

        $user = User::find(1);

        if( $request->isMethod('post') && $request->ajax()){



            $messages = [

                // 'first_name.required'   => 'First name field is required!',

                // 'last_name.required'    => 'Las name field is required!',

                'password.required'        => 'Password field is required!',

                // 'phone.required'        => 'Phone field is required!',

            ];

            $validator = Validator::make($request->all(), [

                // 'first_name'    => 'required',

                // 'last_name'     => 'required',

                'password'         => 'required',

                // 'phone'         => 'required', 

            ]);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);            

            } 

           

            // $user->email                = $request->email;

            if(trim($request->password) !=''){

                $user->password    = Hash::make($request->password);

            }   

            $user->save();



            $user->roles()->sync(1);

        

            return response()->json([

                    'success'       => true,

                    'data'          => [],

                    'message'       => 'Admin password has been updated.',

                'redirect_url'  => url('admin/logout'),

            ]);

    

        }

        return view('admin.users.edit',compact('user'));

    }

    public function videoCallMeetings(){

        $videocalls = VideoCall::paginate(100);

        return view('admin.users.videoCallMeetings',compact('videocalls'));
    }

}