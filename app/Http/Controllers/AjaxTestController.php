<?php

namespace App\Http\Controllers;


use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class AjaxTestController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $permissions  =  Permission::all();

            return Datatables::of($permissions)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a style="font-family: \'Source Serif Pro\', serif;" href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-outline-success  editPermission py-2 mr-4"> <i class="mdi mdi-pencil-box-outline mr-1"></i>Edit</a>';

                           $btn = $btn.' <a href="javascript:void(0)" style="font-family: \'Source Serif Pro\', serif;" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-outline-danger deletePermission py-2 mr-4" ><i class="mdi mdi-delete mr-1 "></i>Delete</a>';

                           $btn = $btn.' <a href="javascript:void(0)" style="font-family: \'Source Serif Pro\', serif;" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-outline-info assignRole py-2" ><i class="mdi mdi-wrench  "></i>Assign</a>' ;

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('backend.pages.permissions.index');
    }



    public function store(Request $request)
    {
		$request->validate(['name'=> 'required|min:3']);
        Permission::updateOrCreate([
                    'id' => $request->permission_id
                ],
                [
                    'name' => $request->name,
                ]);
        return response()->json(['success'=>'Permission saved successfully.']);
    }



    public function edit($id)
    {
        $permission = Permission::find($id);
        return response()->json($permission);
    }


    public function destroy($id)
    {
        Permission::find($id)->delete();

        return response()->json(['success'=>'Product deleted successfully.']);
    }


    public  function showAssign(Permission  $permission)
	{
		$roles  =  Role::all();
        $arr = ['danger','primary','success','warning','info'];
		return  view('backend.pages.permissions.assign',compact('permission','roles','arr'));
	}

	public  function  assignRole(Request  $request,Permission  $permission)
	{
		if($permission->hasRole($request->role)){
			Alert::warning('Role Exists', "$request->role has been already exists!");
			return  back();
		}
		$permission->assignRole($request->role);
		// Alert::success('Role Added Successfully', "'$request->role' added");

        return response()->json(['success'=>'Role added successfully.']);

		// return  back();
	}


	public  function  removeRole(Permission  $permission,Role  $role)
	{
		if($permission->hasRole($role)){
			$permission->removeRole($role);
			 Alert::success('Remove Role',"The permission $role->name has been removed from $permission->name");
			return  back();
		}
	}
}
