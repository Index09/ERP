@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title  text-center text-success">الزيارات المنزليه - اضافه</h1>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-4 mb-0">
                        <label class="col-md-3 form-label">اسم طالب الزياره</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name1" placeholder="ادخل الاسم">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">رقم الهاتف</label>

                        <div class="form-group">
                            <input type="text" class="form-control" id="name2" placeholder="ادخل الرقم">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4 mb-0">
                        <label class="col-md-3 form-label">العنوان</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name1" placeholder="ادخل البريد">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">البريد الاليكترونى</label>

                        <div class="form-group">
                            <input type="text" class="form-control" id="name2" placeholder="العنوان">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4 mb-0">
                        <label class="col-md-3 form-label">الجنس</label>
                        <div class="form-group">
                            <select name="country" class="form-control form-select form-select select2" data-bs-placeholder="اختيار الجنس">
                                <option value="br">ذكر </option>
                                <option value="cz">انثى</option>
                                <option value="de">طفل</option>
                            </select>                        </div>
                    </div>
                    <div class="form-group col-md-2 mb-0">
                        <label style="margin-top: 10px" class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                            <span  class="custom-control-label">انشاء فاتوره</span>
                        </label>
                    </div>
                </div>
                <div class="form-footer mt-2 align-items-center">
                    <div class="col-md-9 align-items-center">
                        <button onclick="alert()" class="btn btn-primary">اضافه</button>
                        <a href="/dashboard" class="btn btn-secondary">الرجوع</a>
                    </div>
                  </div>
                
                </div>
                  <div style="margin-top:10px;margin-right: 30px !important" class="row">

                    <div  class="col-md-2 text-primary">
                        اختيار مريض مسبق
                    </div>
                    <div class="col-md-4">
                      <div  class="form-group">
                        <select name="patit" class="form-control form-select select2" data-bs-placeholder="Select Country">
                                <option value="br">محمد سيد</option>
                                <option value="cz">احمد</option>
                                <option value="de">احمد</option>
                                <option value="pl" >احمد</option>
                                <option value="pl" selected>اختر</option>
                            </select>
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