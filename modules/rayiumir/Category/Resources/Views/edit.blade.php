<x-Admin::AdminLayout>
    <x-slot name="title">
        - ویرایش دسته بندی
    </x-slot>

    <div class="col-md-4 offset-4">
        <div class="card rounded-4">
            <div class="card-body">
                <form action="{{ route('categories.update', $category->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="Input1" class="form-label">عنوان دسته بندی</label>
                        <input type="text" class="form-control rounded-5 @error('name') is-invalid @enderror" name="name" id="Input1" value="{{ $category->name }}">
                        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input2" class="form-label">نامک دسته بندی</label>
                        <input type="text" class="form-control rounded-5 @error('slug') is-invalid @enderror" name="slug" id="Input2" value="{{ $category->slug }}">
                        @error('slug') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Select1" class="form-label">دسته والد</label>
                        <select class="form-select rounded-5 @error('parent_id') is-invalid @enderror" name="parent_id" id="Select1">
                            <option selected>انتخاب کنید ...</option>
                            <option value="">ندارد</option>
                            @foreach($categories as $row)
                                <option value="{{ $row->id }}" @if($row->id === $category->parent_id) selected @endif>{{ $row->name }}</option>
                            @endforeach
                        </select>
                        @error('parent_id') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5">ثبت دسته بندی</button>
                </form>
            </div>
        </div>
    </div>
</x-Admin::AdminLayout>
