<x-Admin::AdminLayout>
    <x-slot name="title">
        - دسته بندی
    </x-slot>

    <div class="row">
        <div class="col-md-8">
            <div class="card rounded-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">عنوان دسته بندی</th>
                                <th scope="col">نامک دسته بندی</th>
                                <th scope="col">دسته والد</th>
                                <th scope="col">عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $row)
                                <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->slug }}</td>
                                    <td>{{ $row->getParentName() }}</td>
                                    <td class="text-center">
                                        <i class="fa-duotone fa-edit text-secondary"></i>
                                        <a onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash text-danger"></i></a>
                                        <form id="trash-{{$row->id}}" action="{{ route('categories.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card rounded-4">
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="Input1" class="form-label">عنوان دسته بندی</label>
                            <input type="text" class="form-control rounded-5 @error('name') is-invalid @enderror" name="name" id="Input1">
                            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Input2" class="form-label">نامک دسته بندی</label>
                            <input type="text" class="form-control rounded-5 @error('slug') is-invalid @enderror" name="slug" id="Input2">
                            @error('slug') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Select1" class="form-label">دسته والد</label>
                            <select class="form-select rounded-5 @error('parent_id') is-invalid @enderror" name="parent_id" id="Select1">
                                <option selected>انتخاب کنید ...</option>
                                <option value="">ندارد</option>
                                @foreach($categories as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('parent_id') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary rounded-5">ثبت دسته بندی</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-Admin::AdminLayout>
