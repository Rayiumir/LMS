<x-Admin::AdminLayout>
    @section('styles')
        <style>
            .form-select {
                background-position: left .5rem center !important;
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
                                <th scope="col">نام دسته</th>
                                <th scope="col">نامک دسته</th>
                                <th scope="col">دسته والد</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $row)
                                <tr>
                                    <th scope="row">{{$row->id}}</th>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->slug}}</td>
                                    <td>{{$row->getParentAttribute()}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('category.edit', $row->id) }}"><i class="fa-light fa-edit ms-2 text-secondary"></i></a>
                                        <i class="fa-light fa-trash text-danger"></i>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('Categories::create')
        </div>
    </div>
</x-Admin::AdminLayout>
