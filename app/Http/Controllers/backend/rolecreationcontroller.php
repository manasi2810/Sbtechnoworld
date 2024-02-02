<?php 

namespace App\Http\Controllers\backend; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
class rolecreationcontroller extends Controller
{
    public function index()
    {   
        return view('admin.rolecreation.index');
    }
    public function create()
    {   
        return view('admin.rolecreation.create');
    } 
    public function store(Request $request)  
        {   
            $request->validate([  
                'name' => ['required',], 
            ]);
            $data = new Role;  
            $data->name =  $request->name;  
            $data->pincode = $request->pincode;  
            $data->save();  
            return redirect('/rolecreation'); 
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
