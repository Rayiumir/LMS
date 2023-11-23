<x-Admin::AdminLayout>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h1 class="fs-4 fw-bold">ایجاد دوره</h1>

                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">عنوان دوره</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">عنوان انگلیسی دوره</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>

                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">ردیف دوره</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>

                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">قیمت دوره</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>

                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">درصد مدرس</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>

                    <div class="col-md-3">
                        <label for="select1" class="form-label">انتخاب مدرس دوره</label>
                        <select class="form-select" id="select1" aria-label="Default select example">
                            <option selected>انتخاب کنید ... </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="select1" class="form-label">نوع دوره</label>
                        <select class="form-select" id="select1" aria-label="Default select example">
                            <option selected>انتخاب کنید ... </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="select1" class="form-label">وضعیت دوره</label>
                        <select class="form-select" id="select1" aria-label="Default select example">
                            <option selected>انتخاب کنید ... </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="select1" class="form-label">دسته بندی</label>
                        <select class="form-select" id="select1" aria-label="Default select example">
                            <option selected>انتخاب کنید ... </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="select1" class="form-label">زیر دسته بندی</label>
                        <select class="form-select" id="select1" aria-label="Default select example">
                            <option selected>انتخاب کنید ... </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col-md-9">
                        <label for="inputPassword4" class="form-label">برچسب ها</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>

                    <div class="col-md-12">
                        <label for="formFile" class="form-label">تصویر شاخص</label>
                        <input class="form-control" type="file" id="formFile">

                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">توضیحات دوره</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">ثبت دوره</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-Admin::AdminLayout>
