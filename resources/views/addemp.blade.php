@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title  text-center text-success">الموارد البشريه   - اضافه</h1>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label"> الاسم كامل </label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name1" placeholder="ادخل الاسم">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">الإقامة </label>

                        <div class="form-group">
                            <input type="text" class="form-control" id="name2" placeholder="ادخل الاقامه ">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">رقم الهوية </label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name1" placeholder="ادخل الرقم ">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">تاريخ انتهاء الهوية </label>

                        <div class="form-group col-md-4">
                            <input type="date" class="form-control" id="name2" placeholder="ادخل التاريخ">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">الحاله  الاجتماعيه </label>
                        <div class="form-group">
                            <input type="textarea" class="form-control" id="name1" placeholder="ادخل الحاله">
                        </div>
                    </div>
                    <div class="form-group col-md-4 mb-0">
                        <label class="col-md-3 form-label">الجنس</label>
                        <div class="form-group">
                            <select name="patit" class="form-control form-select select2" data-bs-placeholder="الجنس">
                                <option value="1">ذكر </option>
                                <option value="2">انثى</option>
                            </select> 
                        </div>
                    </div> 
                </div>
                <div class="form-footer mt-2 align-items-center">
                    <div class="col-md-9 align-items-center">
                        <button onclick="alert()" class="btn btn-primary">اضافه</button>
                        <a href="/dashboard" class="btn btn-secondary">الرجوع</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>




<script>

function alert(){
    Swal.fire(
  'تم الاضافه',''
 ,
  'success'
)
}

</script>




@endsection