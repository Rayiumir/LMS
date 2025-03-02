<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <figure class="imgLogo">
            تست
        </figure>
    </div>
    <div class="text-center p-3">
        <figure class="avatar">
            <img src="img/1.jpg" class="img-fluid" alt="">
        </figure>
        <div class="mt-3">
            <a href="" class="btn btn-secondary btn-sm rounded-3" title="ویرایش پروفایل"><i class="fa-duotone fa-gear"></i></a>
            <a href="{{ route('logout') }}" class="btn btn-danger btn-sm rounded-3" title="خروج"><i class="fa-duotone fa-sign-out"></i></a>
        </div>
    </div>
    <div class="mt-3 p-3">
        <div class="d-grid gep-3">
            @foreach(config('AdminConfig.menus', []) as $row)
                @php
                    // Check if the 'route' key exists
                    $baseRouteName = $row['route'] ?? null;

                    // If the 'route' key exists, check if the current route matches any of the expected routes
                    $isActive = $baseRouteName ? request()->routeIs([
                        "{$baseRouteName}.index",
                        "{$baseRouteName}.create",
                        "{$baseRouteName}.edit"
                    ]) : false;

                @endphp

                <a href="{{ $row['url'] ?? '#' }}"
                   type="button"
                   class="btn {{ $isActive ? 'btn-light text-start border-0 active' : 'btn-light text-start border-0' }} rounded-3 mb-2">
                    <i class="fa-duotone {{ $row['icon'] ?? '' }}"></i> {{ $row['title'] ?? '' }}
                </a>
            @endforeach
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->
