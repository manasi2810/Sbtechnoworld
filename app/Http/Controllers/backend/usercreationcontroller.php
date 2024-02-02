<?php 

namespace App\Http\Controllers\backend; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class usercreationcontroller extends Controller
{
    public function index()
        {   
            return view('admin.usercreation.index');
        }

    public function create()
        {   
            return view('admin.usercreation.create');
        }   

    public function show($id)
        {
           // 
        } 

    public function store(Request $request)  
        {   
            $request->validate([  
                'name' => ['required',], 
            ]);
            $data = new User;  
            $data->name =  $request->name; 
            $data->email =  $request->email; 
            $data->address = $request->address; 
            $data->password = Hash::make($request['password']);
            $data->phoneno = $request->phoneno; 
            $data->pincode = $request->pincode;  
            $data->save();  
            return redirect('/usercreation'); 
        }  

    public function edit($id)
        {
            //
        }

    public function update(Request $request, $id)
        {
           // 
        }

    public function destroy($id)
        {
           // 
        }

}
