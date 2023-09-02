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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td class="text-center">
                                    <i class="fa-light fa-edit ms-2 text-secondary"></i>
                                    <i class="fa-light fa-trash text-danger"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <span class="fw-bold fs-5 mb-3">ایجاد دسته بندی</span>
                    <form>
                        <div class="mb-3">
                            <label for="Input1" class="form-label">نام دسته</label>
                            <input type="text" class="form-control" id="Input1">
                        </div>
                        <div class="mb-3">
                            <label for="Input2" class="form-label">نامک</label>
                            <input type="text" class="form-control" id="Input2">
                        </div>
                        <label for="Input3" class="form-label">دسته والد</label>
                        <select class="form-select mb-3" aria-label="Default select example" id="Input3">
                            <option selected>انتخاب ...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <button type="submit" class="btn btn-primary">ایجاد دسته جدید</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-Admin::AdminLayout>
