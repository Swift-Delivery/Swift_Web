<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li{{$menu_active==1? ' class=active':''}}><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Kateqoriyalar</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Yeni kateqoriya əlavə edin</a></li>
                <li><a href="{{route('category.index')}}">Kateqoriya siyahısı</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Məhsullar</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Yeni məhsullar əlavə edin</a></li>
                <li><a href="{{route('product.index')}}">Məhsulların siyahısı</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Kuponlar</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">Yeni kupon əlavə edin</a></li>
                <li><a href="{{route('coupon.index')}}">Kuponların siyahısı</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->