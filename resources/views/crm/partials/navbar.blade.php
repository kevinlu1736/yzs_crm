{{-- navbar --}}
<nav class="navbar navbar-inverse" id="crm_navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#crm_nav_links" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Best Recipe</a>
        </div>

        <div class="collapse navbar-collapse" id="crm_nav_links">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url("/crm/orders") }}">点单</a>
                </li>
                <li>
                    <a href="{{ url("/crm/new_user") }}">会员注册</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    @if(Auth::check())
                        <a href="{{ url("crm/logout") }}" class="crm_logout">登出 {{Auth::user()->name }}</a>
                    @else
                        <a href="{{ url("crm/login") }}" >登录</a>
                    @endif
                </li>

            </ul>
        </div>


    </div>

</nav>