<x-Admin::AdminLayout>
    @section('styles')
        <style>
            .form-select {
                background-position: left .5rem center !important;
            }
            .form-check .form-check-input {
                float: right;
                margin-right: 0;
                margin-top: 8px;
            }
            .form-check-label {
                margin-right: 30px;
            }
        </style>
    @endsection

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10px">شناسه</th>
                                <th scope="col">نقش کاربری</th>
                                <th scope="col">مجوزها</th>
                                <th scope="col">عملیات</th>
                            </tr>
                        </thead>
                        <tbody>

                                @foreach($roles as $row)
                                    <tr>
                                        <th scope="row">{{$row->id}}</th>
                                        <td>{{$row->name}}</td>
                                        <td>
                                            <ul>
                                                @foreach($row->permissions as $row)
                                                    <li>@lang($row->name)</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('permissions.edit', $row->id) }}"><i class="fa-light fa-edit ms-2 text-secondary"></i></a>
                                            <a href="{{ route('permissions.destroy', $row->id) }}" onclick="destroyPermission(event, '{{ route('permissions.destroy', $row->id) }}')"><i class="fa-light fa-trash text-danger"></i></a>
                                            <form action="{{ route('permissions.destroy', $row->id) }}" method="POST" id="destroy-permission-{{ $row->id }}">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('Permission::create')
        </div>
    </div>
    <x-slot name="scripts">
        <script>
            function destroyPermission(event, id) {
                event.preventDefault();
                document.getElementById('destroy-permission-' + id).submit();
            }
        </script>
    </x-slot>
</x-Admin::AdminLayout>
