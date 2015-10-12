<?php
namespace App\Http\Controllers\CRM;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Session\Store;
use App\Models\Dish;
use App\Models\Order;
use App\User;
use Illuminate\Support\Facades\Auth;

class CrmOrdersController extends Controller
{

    public function __construct()
    {
        $this->middleware('not_staff', ['except' => 'getLogout']);
    }
    public function displayOrder()
    {
        $combo = Dish::where('type','中式快餐')->get();
        $single = Dish::where('type', '盖浇饭')->get();
        $dish = Dish::where('type', '外带菜')->get();
        return view('crm.pages.order', compact('combo', 'single', 'dish'));
    }

    public function order(Request $request){
        //lack of user id
        //one to many insert
        $user = User::where('vip_id', (int)$request->input('user_id'))->firstOrFail();
        $order = new Order;
        $order->staff_id = Auth::user()->id;
        $order = $user->orders()->save($order);

        //many to many insert
        $data = $request->input('data');
        foreach($data as $d){
            //clear 0 pty item
            if((int)$d['qty']<1){
                unset($d);
                continue;
            }
            $dish = Dish::where('id', $d['dishId'])->first();
            //insert into order_dish
            $order->dishes()->attach($dish->id, ['qty'=>$d['qty']]);
        }
        return '订单生成成功!';
    }


}
