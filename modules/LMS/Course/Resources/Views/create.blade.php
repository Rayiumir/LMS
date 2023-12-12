<x-Admin::AdminLayout>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h1 class="fs-4 fw-bold">ایجاد دوره</h1>

                <form class="row g-3" action="{{ route('course.store') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="input1" class="form-label">عنوان دوره</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="input1" required>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="input2" class="form-label">عنوان انگلیسی دوره</label>
                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="input2" required>
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="input3" class="form-label">ردیف دوره</label>
                        <input type="text" name="priority" class="form-control @error('priority') is-invalid @enderror" id="input3" required>
                        @error('priority')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="input4" class="form-label">قیمت دوره</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="input4" required>
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="input5" class="form-label">درصد مدرس</label>
                        <input type="text" name="percent" class="form-control @error('percent') is-invalid @enderror" id="input5" required>
                        @error('percent')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="select1" class="form-label">انتخاب مدرس دوره</label>
                        <select class="form-select @error('teacher_id') is-invalid @enderror" name="teacher_id" id="select1" aria-label="Default select example" required>
                            <option selected>انتخاب کنید ... </option>
                            @foreach($teachers as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                        </select>
                        @error('teacher_id')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="select2" class="form-label">نوع دوره</label>
                        <select class="form-select @error('type') is-invalid @enderror" name="type" id="select2" aria-label="Default select example" required>
                            <option selected>انتخاب کنید ... </option>
                            <option value="cash">نقدی</option>
                            <option value="free">رایگان</option>
                        </select>
                        @error('type')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="select3" class="form-label">وضعیت دوره</label>
                        <select class="form-select @error('status') is-invalid @enderror" name="status" id="select3" aria-label="Default select example" required>
                            <option selected>انتخاب کنید ... </option>
                            <option value="completed">تکمیل شده</option>
                            <option value="not-completed">در حال برگزاری</option>
                            <option value="lock">قفل شده</option>
                        </select>
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="select4" class="form-label">دسته بندی</label>
                        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="select4" aria-label="Default select example" required>
                            <option selected>انتخاب کنید ... </option>
                            @foreach($categories as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="formFile" class="form-label">تصویر شاخص</label>
                        <input class="form-control @error('attachment') is-invalid @enderror" name="attachment" type="file" id="formFile" required>
                        @error('attachment')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Textarea1" class="form-label">توضیحات دوره</label>
                        <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="Textarea1" rows="3" required></textarea>
                        @error('body')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">ثبت دوره</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-Admin::AdminLayout>
