<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">میزکار ارکیده</div>
    <div style="width: 250px">
        <div class="p-3">
            <div class="d-grid gap-2">
                @foreach(config('sidebar.items') as $sidebarItem)
                    <a href="{{$sidebarItem['url']}}" type="button" class="btn btn-light border-0 text-end"><i class="fa-light {{$sidebarItem['icon']}}"></i> {{$sidebarItem['title']}} </a>
                @endforeach
            </div>

            <details class="js-list mt-2 mb-2">
                <summary class="title js-title"> مقالات <span class="icon"></span></summary>
                <div class="content js-content">
                    <ul>
                        <li><a href="#" class="text-decoration-none text-dark">مقالات</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">ایجاد نوشته</a></li>
                    </ul>
                </div>
            </details>

            <details class="js-list mt-2 mb-2">
                <summary class="title js-title"> مقالات <span class="icon"></span></summary>
                <div class="content js-content">
                    <ul>
                        <li><a href="#" class="text-decoration-none text-dark">مقالات</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">ایجاد نوشته</a></li>
                    </ul>
                </div>
            </details>

        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->
