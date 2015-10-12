@extends('crm/layouts/master')

@section('content')
    @include('crm.partials.navbar')
    <div class="row">
        <div class="container">
            <div class="col-md-8" id="crm_dishes">
                <ul class="nav nav-tabs">
                    <li role="presentation"><a href="javascript:void(0)">中式快餐</a></li>
                    <li role="presentation"><a href="javascript:void(0)">盖浇饭</a></li>
                    <li role="presentation"><a href="javascript:void(0)">外带菜</a></li>

                </ul>

                <div class="dishes">
                    <div type="{{$combo[0]->type}}" class="dish_frame">
                        @foreach($combo as $c)
                            <div class="col-md-2 col-xs-6 col-sm-3" style="padding:5px;" >
                                <button type="button" price="{{$c->price}}" dishId="{{$c->id}}" class="btn btn-primary dish">{{$c->name}}</button>
                            </div>

                        @endforeach
                    </div>

                    <div type="{{$single[0]->type}}" class="dish_frame">
                        @foreach($single as $s)
                            <div class="col-md-2 col-xs-6 col-sm-3" style="padding:5px;" >
                                <button type="button" price="{{$s->price}}" dishId="{{$s->id}}" class="btn btn-primary dish">{{$s->name}}</button>
                            </div>
                        @endforeach
                    </div>

                    <div type="{{$dish[0]->type}}" class="dish_frame">
                        @foreach($dish as $d)
                            <div class="col-md-2 col-xs-6 col-sm-3" style="padding:5px;" >
                                <button type="button" price="{{$d->price}}" dishId="{{$d->id}}" class="btn btn-primary dish">{{$d->name}}</button>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="pagination_frame">
                    <ul class="pagination" >
                        {{--<li class="disabled">--}}
                        <li>
                            <a href="javascript:void(0)" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li {{--class="active"--}}><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)">4</a></li>
                        <li><a href="javascript:void(0)">5</a></li>
                        <li>
                            <a href="javascript:void(0)" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="submit_frame" style="border:1px solid #ddd;">
                    <form class="form-horizontal submit_order_form" action="/crm/orders" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="order_user_id">User-ID:&nbsp;</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control order_user_id" id="order_user_id" placeholder="鼠标点到这里等待用户刷卡...">
                            </div>
                            {{--&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary">用户输入密码</button>--}}
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label class="control-label col-sm-2" for="order_password">Password:&nbsp;</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<input type="password" class="form-control order_password" id="order_password" placeholder="鼠标点到这里等待用户输入密码...">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pts">Pts:&nbsp;</label>
                            <div class="col-sm-10">
                                <div  id="pts" class="pts form-control">0</div>
                            </div>

                        </div>
                    </form>

                    {{--<div>--}}
                        {{--<span>用户积分:&nbsp;</span>--}}
                    {{--</div>--}}
                    {{--<br/>--}}
                    <div class="order_submit_btn"  >
                        <button type="submit" class=" btn btn-primary">提交订单</button>
                    </div>

                </div>
            </div>

            <div class="col-md-4" id="crm_cart">
                <div class="panel panel-primary cart">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        &nbsp;购物车
                        <a class="clear_cart pull-right" href="#"><span class="glyphicon glyphicon-remove-circle"></span>&nbsp;清空购物车</a>
                    </div>
                    <ul class="list-group">
                        {{--@for($i=0;$i<13;$i++)--}}
                            {{--<li class="list-group-item shopping-item">--}}
                                {{--<span>红烧鱼头</span>--}}
                                {{--<div class="price">&nbsp;&times;&nbsp;22.5</div>--}}
                                {{--<div class="amount">--}}
                                    {{--<a class="qty-minus" href="javascript:void(0);">-</a>--}}
                                    {{--<input type="text" class="qty" name="quality" value="1">--}}
                                    {{--<a class="qty-plus" href="javascript:void(0);">+</a>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endfor--}}
                        <li class="list-group-item shopping-item">
                            <div class="total-price">
                                {{--&nbsp;&nbsp;&nbsp;&nbsp;--}}0 元
                            </div>
                            <span style="font-weight:bold;">总价: </span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="col-md-1"></div>
            <div class="col-md-6" >

            </div>


        </div>
    </div>

    @include('crm.partials.footer')


@stop
