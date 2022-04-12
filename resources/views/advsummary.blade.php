@extends('layouts.app')

@section('content')





<div class="page-header">
    <h1 class="page-title text-primary">احصائيات المعلن</h1>
    <div>
      
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">معلومات اساسيه</h3>
            </div>
            <div class="card-body">
                <div class="expanel expanel-default">
                    <div class="expanel-body">
                        <div class="row">
                            <div class="col-md-6">

                                <h3>شركه سيد</h3>
                            </div>
                            <div class="col-md-6">

                                <h4>النسبه :     <span class="text-red"> %10</span>
                            </h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="card-order">
                    <!-- <h6 class="mb-2">Orders</h6> -->
                    <h2 class="text-end"><i class="fe fe-shopping-cart icon-size mdi mdi-currency-usd float-start text-primary text-primary-shadow border-solid border-primary brround p-3"></i><span>$7,543</span></h2>
                    <p class="mb-0 pt-5">عدد المرضى<span class="float-end">45</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-1">
       
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="card-widget">
                    <!-- <h6 class="mb-2">Total Profit</h6> -->
                    <h2 class="text-end"><i class="fe fe-bar-chart-2 mdi mdi-currency-usd float-start text-primary text-primary-shadow border-solid border-primary brround p-3"></i><span>$2,987</span></h2>
                    <p class="mb-0 pt-5">الارباح<span class="float-end">450</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group col-md-6 mb-0">
                        <label style="" class="col-md-12 form-label"> الرابط  <a href="javascript:void(0)" style="margin-right: 5px" class="btn-sm btn-outline-default">نسخ</a>
                        </label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name1" value='google.com' placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-1">
       
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-6">
                   كود  Qr
                    </div>
                    <div class="col-sm-6 ">
                      <img src="{{asset('/images/qr.png')}}" alt="">
                    </div>
                </div>
                </div>
            </div>
        </div>
</div>

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">المرضى</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">الاسم</th>
                                <th class="wd-20p border-bottom-0">رقم الهاتف </th>
                                <th class="wd-15p border-bottom-0">تاريخ التسجيل</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>محمد</td>
                                <td>45645</td>
                                <td>13/4/2022</td>

                            </tr>
                    
                        </tbody>
                    </table>
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