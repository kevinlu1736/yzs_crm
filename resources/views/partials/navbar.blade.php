{{--NavBar--}}
<nav class="navbar navbar-default" id="nav">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_links" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Best Recipe</a>
        </div>
        <div class="collapse navbar-collapse" id="nav_links">
            <ul class="nav navbar-nav" id="nav_links_left">
                <li><a href="{{ url('/') }}">首页</a></li>
                <li><a href="#">我的订单</a></li>
                <li><a href="{{ url('/auth/register') }}">注册会员</a></li>
                <li><a href="#">新品推荐</a></li>
                <li><a href="#">加入我们</a></li>

            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group" id="nav_form_div">
                    <input type="text" class="form-control" placeholder="直接订餐，输入名字..." id="searchDish" />
                    <button type="submit" class="navButton btn btn-primary"> <span class="glyphicon glyphicon-search"></span></button>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    @if(Auth::user())
                        <a href="#" class="dropdown-toggle my_acc" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-home"></span>
                            &nbsp;{{ Auth::user()->name }}&nbsp;的账户&nbsp;
                            <strong class="caret"></strong>
                        </a>
                    @else
                        <a href="{{ url("/auth/login") }}" class="login">
                            &nbsp;用户登陆&nbsp;
                            {{--                        {{ Auth::user() }}--}}
                            <span class="glyphicon glyphicon-off"></span>
                        </a>
                    @endif
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;我的订单</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-flash"></span>&nbsp;&nbsp;催单</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;账户信息更新</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;账户设置</a>
                        </li>
                        <li>
                            <a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;登出</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</nav>
