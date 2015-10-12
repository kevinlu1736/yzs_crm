@extends('layouts.master')

@section('content')

    {{--body_content--}}
    @include('partials.top')

    @include('partials.navbar')

    {{--Carousel and Login Status--}}
    <div class="row" id="carousel_loginstatus">
        <div class="col-md-9" id="carousel_container">
            <div id="carousel_main" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel_main" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel_main" data-slide-to="1"></li>
                    <li data-target="#carousel_main" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active" style="height:200px;">
                        <img src="" alt="first">
                        <div class="carousel-caption">
                            <h3>The 1st slide</h3>
                            <p>1st content here to describe the adv</p>
                        </div>
                    </div>
                    <div class="item " style="height:200px;">
                        <img src="" alt="second">
                        <div class="carousel-caption">
                            <h3>The 2nd slide</h3>
                            <p>2nd content here to describe the adv</p>
                        </div>
                    </div>
                    <div class="item" style="height:200px;">
                        <img src="" alt="third">
                        <div class="carousel-caption">
                            <h3>The 3rd slide</h3>
                            <p>3rd content here to describe the adv</p>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#carousel_main" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel_main" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <div id="favorite" class="col-md-3" style="display:none;">
                <div class="panel panel-default" >
                    <div class="panel-heading"><strong>我的最爱</strong></div>
                    <div class="pannel-body">
                        <p style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;帅锅, 欢迎来到best recipe, 今天特价套餐是椒盐排条。</p>
                    </div>
                    <table class="table table-hover table-condensed">
                        <tr class="first"><th>排名</th><th>套餐名</th><th></th></tr>
                        <tr><td>1</td><td>鱼香肉丝</td><td><span class="badge">100</span></td></tr>
                        <tr><td>2</td><td>椒盐排条</td><td><span class="badge">99</span></td></tr>
                        <tr><td>3</td><td>红烧大排</td><td><span class="badge">98</span></td></tr>
                    </table>
                </div>
        </div>

        <div id="hotest" class="col-md-3">
            <div class="panel panel-default" style="height:200px;">
                <div class="panel-heading"><strong>Top 5</strong></div>
                <div class="pannel-body">
                </div>
                <table class="table table-hover table-condensed">
                    <tr><td>1</td><td>椒香鱼</td><td><span class="badge">1001</span></td></tr>
                    <tr><td>2</td><td>鱼香肉丝</td><td><span class="badge">900</span></td></tr>
                    <tr><td>3</td><td>椒盐排条</td><td><span class="badge">300</span></td></tr>
                    <tr><td>4</td><td>红烧大排</td><td><span class="badge">201</span></td></tr>
                    <tr><td>5</td><td>鱼香肉丝</td><td><span class="badge">100</span></td></tr>
                </table>
            </div>
        </div>
    </div>

    {{--Search Engine and Orders --}}
    <div class="row" id="search_orders">
        <div class="col-md-9">
            <div class="row" >
                <div class="col-md-12" style="border: 1px solid gainsboro;">
            <div class="row">
                <div class="col-md-12">
                    <div class="container"  style="width:100%;">
                        <br />
                        <div><strong style="line-height:30px;"><h5>口味：</h5></strong></div>
                        <button class="btn btn-xs search_small" style="background-color:green;color:white;">辣</button>
                        <button class="btn btn-primary btn-xs search_small">甜</button>
                        <button class="btn btn-warning btn-xs search_small">红烧</button>
                        <button class="btn btn-default btn-xs search_small">清蒸</button>
                        <button class="btn btn-default btn-xs search_small">清淡</button>
                        <button class="btn btn-primary btn-xs search_small">酱</button>
                        <button class="btn btn-primary btn-xs search_small">炒</button>
                        <button class="btn btn-primary btn-xs search_small">酸辣</button>
                        <button class="btn btn-primary btn-xs search_small">酸甜</button>
                        <button class="btn btn-primary btn-xs search_small">甜辣</button>
                        <button class="btn btn-primary btn-xs search_small">椒盐</button>
                        <button class="btn btn-primary btn-xs search_small">香辣</button>
                    </div>
                </div>
            </div>
                    <br />
            <div class="row">
                <div class="col-md-12">
                    <div class="container" style="width:100%;">
                        <div><strong style="line-height:30px;"><h5>套餐类型：</h5></strong></div>
                            <button class="btn btn-xs search_large" style="background-color:green;color:white;">商务套餐</button>
                            <button class="btn btn-primary btn-xs search_large">盖浇饭</button>
                            <button class="btn btn-warning btn-xs search_large">高端商务套餐</button>
                    </div>
                </div>
            </div>

                    <br />
            <div class="row">
                <div class="col-md-12">
                    <div class="container" style="width:100%;">
                        <select class="testfuck js-states form-control select2-hidden-accessible" style="width:64%;" multiple tabindex="-1" aria-hidden="true">
                            <option value="辣">辣</option>
                            <option value="甜">甜</option>
                            <option value="红烧">红烧</option>
                            <option value="清蒸">清蒸</option>
                            <option value="清淡">清淡</option>
                            <option value="酱">酱</option>
                            <option value="炒">炒</option>
                            <option value="酸辣">酸辣</option>
                            <option value="酸甜">酸甜</option>
                            <option value="甜辣">甜辣</option>
                            <option value="椒盐">椒盐</option>
                            <option value="香辣">香辣</option>
                            <option value="商务套餐">商务套餐</option>
                            <option value="盖浇饭">盖浇饭</option>
                            <option value="高端商务套餐">高端商务套餐</option>
                        </select>
                        <button class="btn btn-primary">搜索</button>
                        <button class="clear_search btn btn-primary">清除</button>

                    </div>
                </div>
            </div>
                    <br />

                    </div>
            </div>
            <div class="row" style="margin-top:10px;border:1px solid gainsboro;padding-top:15px;">
                @for($i=0;$i<8;$i++)
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail">
                            <img src="http://placehold.it/180x160" alt="">
                            <div class="caption" style="text-align:center;">
                                <h5>青椒肉丝</h5>
                                <p><a style="line-height:100%;font-size:90%;" href="#" class="btn btn-danger" role="button">购买</a></p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="col-md-3">
            {{--<div id="map" class="map panel panel-danger">--}}
                {{--<div class="panel-heading">--}}
                    {{--我们的位置--}}
                {{--</div>--}}
                {{--<img src="http://placehold.it/260x200" alt="map" />--}}
            {{--</div>--}}

            <div id="shopping_cart" class="orders panel panel-danger">
                <div class="panel-heading">
                    <img src="{{ asset('/images/icons/shopping_cart_general2.png') }}" style="margin-bottom:5px;" />
                    购物车
                </div>
                <ul class="list-group">
                    <li class="list-group-item shopping-item">
                        <span>红烧鱼头</span>

                        <div class="price">
                            &nbsp;&times;&nbsp;22.5
                        </div>
                        <div class="amount">
                            <a class="qty-minus" href="javascript:void(0);">-</a>
                            <input type="text" class="qty" name="quality" value="50" />
                            <a class="qty-plus" href="javascript:void(0);">+</a>
                        </div >
                    </li>

                    <li class="list-group-item shopping-item">

                        <div class="total-price">
                            &nbsp;&nbsp;&nbsp;&nbsp;22.5
                        </div>
                        <span style="font-weight:bold;">总价: </span>
                    </li>
                </ul>


            </div>
            <div class="submit">
                <button type="button" class="btn btn-danger pull-right">去结算</button>
            </div>


        </div>
    </div>







    @include('partials.footer')
@stop