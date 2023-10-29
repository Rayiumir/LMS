<div class="card">
    <div class="card-body">
        <span class="fw-bold fs-5 mb-3">ایجاد دسته بندی</span>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Input1" class="form-label">نام دسته</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="Input1">
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Input2" class="form-label">نامک</label>
                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="Input2">
                @error('slug')
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <label for="Input3" class="form-label">دسته والد</label>
            <select class="form-select mb-3 @error('parent_id') is-invalid @enderror" aria-label="Default select example" id="Input3" name="parent_id">
                <option selected disabled>انتخاب ...</option>
                @foreach($categories as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
            </select>
            @error('parent_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">ایجاد دسته جدید</button>
            </div>
        </form>
    </div>
</div>
