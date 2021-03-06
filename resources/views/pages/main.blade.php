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
                    <div class="panel-heading"><strong>????????????</strong></div>
                    <div class="pannel-body">
                        <p style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;??????, ????????????best recipe, ????????????????????????????????????</p>
                    </div>
                    <table class="table table-hover table-condensed">
                        <tr class="first"><th>??????</th><th>?????????</th><th></th></tr>
                        <tr><td>1</td><td>????????????</td><td><span class="badge">100</span></td></tr>
                        <tr><td>2</td><td>????????????</td><td><span class="badge">99</span></td></tr>
                        <tr><td>3</td><td>????????????</td><td><span class="badge">98</span></td></tr>
                    </table>
                </div>
        </div>

        <div id="hotest" class="col-md-3">
            <div class="panel panel-default" style="height:200px;">
                <div class="panel-heading"><strong>Top 5</strong></div>
                <div class="pannel-body">
                </div>
                <table class="table table-hover table-condensed">
                    <tr><td>1</td><td>?????????</td><td><span class="badge">1001</span></td></tr>
                    <tr><td>2</td><td>????????????</td><td><span class="badge">900</span></td></tr>
                    <tr><td>3</td><td>????????????</td><td><span class="badge">300</span></td></tr>
                    <tr><td>4</td><td>????????????</td><td><span class="badge">201</span></td></tr>
                    <tr><td>5</td><td>????????????</td><td><span class="badge">100</span></td></tr>
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
                        <div><strong style="line-height:30px;"><h5>?????????</h5></strong></div>
                        <button class="btn btn-xs search_small" style="background-color:green;color:white;">???</button>
                        <button class="btn btn-primary btn-xs search_small">???</button>
                        <button class="btn btn-warning btn-xs search_small">??????</button>
                        <button class="btn btn-default btn-xs search_small">??????</button>
                        <button class="btn btn-default btn-xs search_small">??????</button>
                        <button class="btn btn-primary btn-xs search_small">???</button>
                        <button class="btn btn-primary btn-xs search_small">???</button>
                        <button class="btn btn-primary btn-xs search_small">??????</button>
                        <button class="btn btn-primary btn-xs search_small">??????</button>
                        <button class="btn btn-primary btn-xs search_small">??????</button>
                        <button class="btn btn-primary btn-xs search_small">??????</button>
                        <button class="btn btn-primary btn-xs search_small">??????</button>
                    </div>
                </div>
            </div>
                    <br />
            <div class="row">
                <div class="col-md-12">
                    <div class="container" style="width:100%;">
                        <div><strong style="line-height:30px;"><h5>???????????????</h5></strong></div>
                            <button class="btn btn-xs search_large" style="background-color:green;color:white;">????????????</button>
                            <button class="btn btn-primary btn-xs search_large">?????????</button>
                            <button class="btn btn-warning btn-xs search_large">??????????????????</button>
                    </div>
                </div>
            </div>

                    <br />
            <div class="row">
                <div class="col-md-12">
                    <div class="container" style="width:100%;">
                        <select class="testfuck js-states form-control select2-hidden-accessible" style="width:64%;" multiple tabindex="-1" aria-hidden="true">
                            <option value="???">???</option>
                            <option value="???">???</option>
                            <option value="??????">??????</option>
                            <option value="??????">??????</option>
                            <option value="??????">??????</option>
                            <option value="???">???</option>
                            <option value="???">???</option>
                            <option value="??????">??????</option>
                            <option value="??????">??????</option>
                            <option value="??????">??????</option>
                            <option value="??????">??????</option>
                            <option value="??????">??????</option>
                            <option value="????????????">????????????</option>
                            <option value="?????????">?????????</option>
                            <option value="??????????????????">??????????????????</option>
                        </select>
                        <button class="btn btn-primary">??????</button>
                        <button class="clear_search btn btn-primary">??????</button>

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
                                <h5>????????????</h5>
                                <p><a style="line-height:100%;font-size:90%;" href="#" class="btn btn-danger" role="button">??????</a></p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="col-md-3">
            {{--<div id="map" class="map panel panel-danger">--}}
                {{--<div class="panel-heading">--}}
                    {{--???????????????--}}
                {{--</div>--}}
                {{--<img src="http://placehold.it/260x200" alt="map" />--}}
            {{--</div>--}}

            <div id="shopping_cart" class="orders panel panel-danger">
                <div class="panel-heading">
                    <img src="{{ asset('/images/icons/shopping_cart_general2.png') }}" style="margin-bottom:5px;" />
                    ?????????
                </div>
                <ul class="list-group">
                    <li class="list-group-item shopping-item">
                        <span>????????????</span>

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
                        <span style="font-weight:bold;">??????: </span>
                    </li>
                </ul>


            </div>
            <div class="submit">
                <button type="button" class="btn btn-danger pull-right">?????????</button>
            </div>


        </div>
    </div>







    @include('partials.footer')
@stop