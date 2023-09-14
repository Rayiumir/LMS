<div class="card">
    <div class="card-body">
        <span class="fw-bold fs-5 mb-3">ایجاد دسته بندی</span>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Input2" class="form-label">نقش کاربری</label>
                <input type="text" name="" class="form-control @error('') is-invalid @enderror" id="Input2">
                @error('')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <label for="Input3" class="form-label">مجوزها</label>
            <select class="form-select mb-3 @error('') is-invalid @enderror" aria-label="Default select example" id="Input3" name="">
                <option selected disabled>انتخاب ...</option>

                    <option value=""></option>

            </select>
            @error('')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button type="submit" class="btn btn-primary">ایجاد نقش کاربری</button>
        </form>
    </div>
</div>
