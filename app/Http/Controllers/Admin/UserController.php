<?php
namespace  App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\Datatables\Datatables;



class  UserController  extends  Controller
{

	public function index(Request $request)
    {

        if ($request->ajax()) {

            $users= User::all();


            return Datatables::of($users)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = ' <a href="javascript:void(0)" style="font-family: \'Source Serif Pro\', serif;" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-outline-warning roleUser py-2 mr-4" ><i class="mdi mdi-wrench  "></i>Assign Roles & Permission</a>';

                           $btn = $btn.' <a href="javascript:void(0)" style="font-family: \'Source Serif Pro\', serif;" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-outline-danger deleteUser py-2 " ><i class="mdi mdi-delete mr-1 "></i>Delete</a>' ;

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('backend.pages.users.index');
    }







    public function store(Request $request)
    {
        User::updateOrCreate([
                    'id' => $request->user_id
                ],
                [
                    'name' => $request->name,
                    'email'=>$request->email
                ]);
        return response()->json(['success'=>'User saved successfully.']);
    }


    public function destroy($id)
    {
        $user = User::find($id);
        if($user->hasRole('Admin')){

        return response()->json(['status'=> 'warning' ,'message'=>'Admin role cannot be deleted.']);

        }

        $user->delete();

        return response()->json(['success'=>'User deleted successfully.']);
    }


    public function show(User $user){
        $roles = Role::all();
        $permissions = Permission::all();
        return view('backend.pages.users.role',compact('user','roles','permissions'));
    }





	public  function  assignRole(Request  $request,User  $user)
	{
		if($user->hasRole($request->role)){
			Alert::warning('Role Exists', "$request->role has been already exists!");
			return  back();
		}
		$user->assignRole($request->role);
		Alert::success('Role Added Successfully', "'$request->role' added");
		return  back();
	}



	public  function  removeRole(User  $user,Role  $role){
		if($user->hasRole($role)){
			$user->removeRole($role);
			Alert::success('Remove Role',"The permission '$role->name' has been removed from $user->name");
			return  back();
		}
	}



	public  function  givePermission(Request  $request,User  $user)
	{
		if($user->hasPermissionTo($request->permission)){
			Alert::warning('Permission Exists', "$request->permission has been already exists!");
			return  back();
		}
		$user->givePermissionTo($request->permission);
		Alert::success('Permission Added Successfully', "The permission '$request->permission' added");
		return  back();
	}



	public  function  revokePermission(User  $user,Permission  $permission){
		if($user->hasPermissionTo($permission)){
			$user->revokePermissionTo($permission);
			Alert::success('Remove permission',"The permission '$permission->name' has been removed from $user->name");
			return  back();
		}
	}



	// public  function  destroy(User  $user){
	// 	if($user->hasRole('Admin')){
	// 		Alert::warning('Cannot Delete',"Because You are an admin !");
	// 		return  back();
	// 	}
	// 	$user->delete();
	// 	return  back()->with('status',"$user->name has been deleted");
	// }

}
