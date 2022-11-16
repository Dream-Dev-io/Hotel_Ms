<?php
namespace  App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class  UserController  extends  Controller
{

	public  function  index(){
		$users=  User::all();
		return  view('admin.users.index',compact('users'))->with('no', 1);
	}



	public  function  show(User  $user){
		$roles  =  Role::all();
		$permissions  =  Permission::all();
		return  view('admin.users.role',compact('user','roles','permissions'));
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



	public  function  destroy(User  $user){
		if($user->hasRole('Admin')){
			Alert::warning('Cannot Delete',"Because You are an admin !");
			return  back();
		}
		$user->delete();
		return  back()->with('status',"$user->name has been deleted");
	}

}
