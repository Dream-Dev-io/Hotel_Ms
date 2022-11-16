<?php
namespace  App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Yajra\Datatables\Datatables;


class  RoleController  extends  Controller
{
	public function index(Request $request)
    {

        if ($request->ajax()) {

            $roles = Role::all();

            return Datatables::of($roles)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a style="font-family: \'Source Serif Pro\', serif;" href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-outline-success  editRole py-2 mr-4"> <i class="mdi mdi-pencil-box-outline mr-1"></i>Edit</a>';

                           $btn = $btn.' <a href="javascript:void(0)" style="font-family: \'Source Serif Pro\', serif;" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-outline-danger deleteRole py-2 mr-4" ><i class="mdi mdi-delete mr-1 "></i>Delete</a>';

                           $btn = $btn.' <a href="javascript:void(0)" style="font-family: \'Source Serif Pro\', serif;" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-outline-info assignPermission py-2" ><i class="mdi mdi-wrench  "></i>Assign</a>' ;

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('backend.pages.roles.index');
    }



    public function store(Request $request)
    {
		$request->validate(['name'=> 'required|min:3']);
        Role::updateOrCreate([
                    'id' => $request->role_id
                ],
                [
                    'name' => $request->name,
                ]);
        return response()->json(['success'=>'Permission saved successfully.']);
    }



    public function edit($id)
    {
        $role = Role::find($id);
        return response()->json($role);
    }


    public function destroy($id)
    {
        Role::find($id)->delete();

        return response()->json(['success'=>'Product deleted successfully.']);
    }


    public  function showAssign(Role  $role)
	{
		$permissions  =  Permission::all();
		return  view('backend.pages.roles.assign',compact('role','permissions'));
	}


	public function givePermission(Request $request,Role $role)
    {
        if($role->hasPermissionTo($request->permission)){
        Alert::warning('Permission Exists', "$request->permission has been already exists!");

            return back();
        }
        $role->givePermissionTo($request->permission);
        Alert::success('Permission Added Successfully', "The permission '$request->permission' added");
        return back();
    }

    public function revokePermission(Role $role,Permission $permission){
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            Alert::success('Remove permission',"The permission '$permission->name' has been removed from $role->name");
            return back();
        }
    }

}
