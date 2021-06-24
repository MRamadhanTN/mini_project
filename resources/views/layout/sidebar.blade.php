@php
    $current_path = '/' . request()->path();

    $dashboard = [
        'title' => 'Dashboard',
        'url' =>'/admin/dashboard',
        'icon' => 'bi bi-grid-fill'

    ];

    $user = [
        'title' => 'Users',
        'url' => '#',
        'icon' => 'bi bi-person-fill',
        'childerns' => [
            [
            'title' => 'Liset Users',
            'url' => '/admin/users'
            ],
            [
            'title' => 'Create User',
            'url' => '/admin/users/create'
            ],
        ]
    ];

    $article = [
        'title' => 'Articles',
        'url' => '#',
        'icon' => 'bi bi-border-width',
        'childerns' => [
            [
            'title' => 'Liset Articles',
            'url' => '/admin/articles'
            ],
            [
            'title' => 'Create Article',
            'url' => '/admin/articles/create'
            ],
        ]

    ];

    $categories = [
        'title' => 'Categories',
        'url' => '#',
        'icon' => 'bi bi-grid-fill',
        'childerns' => [
            [
            'title' => 'Liset Categories',
            'url' => '/admin/categories'
            ],
            [
            'title' => 'Create Categories',
            'url' => '/admin/categories/create'
            ],
        ]
    ];

    $menus = [$dashboard, $user , $article, $categories];


@endphp
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="/dist/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-title">Menu</li>

                @foreach ($menus as $menu)
                    {{-- isset() mengecek ada atau nggak suatu data kalau ada true kalo tidak false --}}
                    @if (isset($menu['childerns']))


                    @php
                        $isActive = false;

                        foreach ($menu['childerns'] as $child) {
                            if ($child['url'] == $current_path) {
                                $isActive = true;
                            };
                        }
                    @endphp

                        <li class="sidebar-item  has-sub {{ $isActive ? 'active' : '' }}">
                            <a href="{{ $menu['url'] }}" class='sidebar-link'>
                                <i class="{{ $menu['icon'] }}"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                            <ul class="submenu {{ $current_path ? 'active' : '' }}">
                                @foreach ($menu['childerns'] as $item)
                                    <li class="submenu-item ">
                                        <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </li>
                    @else
                        <li class="sidebar-item @yield('active1')">
                            <a href="{{ $menu['url'] }}" class='sidebar-link'>
                                <i class="{{ $menu['icon'] }}"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach

                        <li class="sidebar-item">
                            <a action="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="sidebar-link btn btn-danger text-dark">
                                <i class="bi bi-box-arrow-left text-dark"></i>
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                {{-- <li class="sidebar-item @yield('active2')">
                    <a href="/articles" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Articles</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('active3')">
                    <a href="/categories" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('active4')">
                    <a href="/users" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Users</span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
