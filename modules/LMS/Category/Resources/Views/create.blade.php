<div class="card">
    <div class="card-body">
        <span class="fw-bold fs-5 mb-3">ایجاد دسته بندی</span>
        <form action="{{ route('permissions.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Input2" class="form-label">نقش کاربری</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="Input2">
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
                    @if(is_array(old('permissions')) && array_key_exists($row->name, old('permissions'))) checked @endif>
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
            <button type="submit" class="btn btn-primary mt-3">ایجاد نقش کاربری</button>
        </form>
    </div>
</div>
