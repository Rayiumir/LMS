<x-Admin::AdminLayout>
    @section('styles')
        <style>
            .form-select {
                background-position: left .5rem center !important;
            }
        </style>
    @endsection
    <x-slot name="breadcrumb">
        <li class="me-2"><a href="#" class="text-decoration-none">ویرایش دسته بندی</a></li>
    </x-slot>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-body">
                    <span class="fw-bold fs-5 mb-3">به روز رسانی دسته </span>
                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="Input1" class="form-label">نام دسته</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="Input1" value="{{$category->name}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Input2" class="form-label">نامک</label>
                            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="Input2" value="{{$category->slug}}">
                            @error('slug')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </div>
                        <label for="Input3" class="form-label">دسته والد</label>
                        <select class="form-select mb-3 @error('parent_id') is-invalid @enderror" aria-label="Default select example" id="Input3" name="parent_id">
                            <option selected>انتخاب ...</option>
                            @foreach($categories as $rowItem)
                                <option value="{{$rowItem->id}}" @if($rowItem->id === $category->parent_id) selected @endif>{{$rowItem->name}}</option>
                            @endforeach
                        </select>
                        @error('parent_id')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                        @enderror
                        <button type="submit" class="btn btn-primary">به روز رسانی دسته</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-Admin::AdminLayout>
