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
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-body">
                    <span class="fw-bold fs-5 mb-3">به روز رسانی دسته </span>
                    <form action="{{ route('permissions.update', $roles->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" value="{{ $roles->id }}">
                        <div class="mb-3">
                            <label for="Input2" class="form-label">نقش کاربری</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="Input2" value="{{$roles->name}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <label for="Input3" class="form-label">انتخاب مجوزها</label>
                        @foreach($permissions as $row)
                            <div class="form-check">
                                <input class="form-check-input" name="permissions[{{$row->name}}]" type="checkbox"
                                       value="{{$row->name}}"
                                       id="flexCheckDefault"
                                       @if($roles->hasPermissionTo($row->name)) checked @endif>
                                <label class="form-check-label" for="flexCheckDefault">
                                    @lang($row->name)
                                </label>
                            </div>
                        @endforeach
                        @error('permissions')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-primary">به روز رسانی دسترسی</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-Admin::AdminLayout>
