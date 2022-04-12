@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title  text-center text-success">التحاليل  - نوع تحليل جديد</h1>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">الاسم العام <span class="text-red">*</span></label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name1" placeholder="ادخل الاسم">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">الاسم المختصر<span class="text-red">*</span></label>

                        <div class="form-group">
                            <input type="text" class="form-control" id="name2" placeholder="ادخل الاسم">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">الكود <span class="text-red">*</span></label>
                        <div class="form-group">
                            <input type="textarea" class="form-control" id="name1" placeholder="ادخل الكود">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">وصف </label>
                        <div class="form-group">
                            <input type="textarea" class="form-control" id="name1" placeholder="ادخل وصف ان وجد">
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-0">
                            <label class="col-md-3 form-label">السعر <span class="text-red">*</span> </label>
                            <div class="form-group">
                                <input type="number" class="form-control" id="name1" placeholder="ادخل السعر">
                            </div>
                        </div>
                        <div class="form-group col-md-6 mb-0">
                            <label class="col-md-3 form-label">سعر التأمين </label>
                            <div class="form-group">
                                <input type="number" class="form-control" id="name1" placeholder="ادخل سعر التأمين">
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