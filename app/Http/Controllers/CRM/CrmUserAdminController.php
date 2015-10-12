<?php
namespace App\Http\Controllers\CRM;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\CrmRegisterUsers;

class CrmUserAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('not_staff', ['except' => 'getLogout']);
    }
    use CrmRegisterUsers, ThrottlesLogins;
    protected $redirectPath = "/crm/new_user/";

    /*
     *Cusomized Methods
     */
    /*
     * validator & create
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
//            'name' => 'required|max:255|unique:users',
//            'email' => 'required|email|max:255|unique:users',
//            'password' => 'required|confirmed|min:6',
            'tel' => 'required|unique:users',
            'vip_id' => 'required|unique:users',
        ]);
    }

    protected function create(array $data)
    {
        session()->flash('user_create_successfully', $data['tel'] . '用户注册成功!');
        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
            'password' => bcrypt('youzhishan2015'),
            'tel' => $data['tel'],
            'vip_id' => $data['vip_id'],
        ]);
    }




}
