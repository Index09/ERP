@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title  text-center text-primary">التحاليل الفرعيه - اضافه</h1>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">الاسم  <span class="text-red">*</span></label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name1" placeholder="ادخل ">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">التحليل الرئيسى<span class="text-red">*</span></label>

                        <div class="form-group">
                            <select name="patit" class="form-control form-select select2" data-bs-placeholder="التحليل الرئيسى">
                                <option value="br">ذكر </option>
                                <option value="cz">انثى</option>
                                <option selected value="cz">اختر</option>
                            </select> 
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">الوحده <span class="text-red">*</span></label>
                        <div class="form-group">
                            <input type="textarea" class="form-control" id="name1" placeholder="ادخل الوحده">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8 mb-0">
                        <label class="col-md-8 form-label">من -الى <span class="text-red">*</span></label>
                        <div class="form-group">
                            <div class="col-lg-6 mt-8">
                                <input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
                            </div>                        </div>
                    </div>
                </div>
              
            </div>
        </div>
         </div>
            <div class="form-row">
                <div class="form-group col-md-12 mb-0">
                <div class="card-header">
            <h1 class="card-title  text-center text-primary">المعدلات الطبيعيه</h1>
             </div>  
             </div>
    </div>
   

        
    </div>
    <div class="form-row">
        <div class="form-group col-md-6 mb-0">
            <label class="col-md-8 form-label">ذكر<span class="text-red">*</span></label>
            <div class="form-group">
                <div class="col-lg-6 mt-2">
                    <input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
                </div>                        </div>
        </div>
        <div class="form-group col-md-6 mb-0">
            <label class="col-md-8 form-label">انثى<span class="text-red">*</span></label>
            <div class="form-group">
                <div class="col-lg-6 mt-2">
                    <input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
                </div>                        </div>
        </div>
        <div class="form-group col-md-6 mb-0">
            <label class="col-md-8 form-label">طفل<span class="text-red">*</span></label>
            <div class="form-group">
                <div class="col-lg-6 mt-2">
                    <input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
                </div>                        </div>
        </div>
    </div>
    <div class="form-footer mt-2 align-items-center" style="text-align: center">
        <div class="col-md-9 align-items-center">
            <button onclick="alert()" class="btn btn-primary">اضافه</button>
            <a href="/dashboard" class="btn btn-secondary">الرجوع</a>
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