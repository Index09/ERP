{{-- Extends layout --}}
@extends('layouts.app')



{{-- Content --}}
@section('content')



 <!-- ROW OPEN -->
 <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
        <div class="card widgets-cards bg-primary box-primary-shadow">
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.62" data-thickness="6" data-bs-color="#3c5998">
                    <div class="chart-circle-value text-white">70%</div>
                </div>
                <div class="wrp text-wrapper text-white p-3">
                    <p class="mt-0">{{number_format(auth()->user()->orderpackage->cash)}}</p>
                    <p class="mt-1 mb-0">الرصيد                    <a  data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8" type="button" class="btn btn-icon  btn-primary"><i class="fe fe-plus"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
        <div class="card widgets-cards bg-success box-success-shadow">
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.37" data-thickness="6" data-bs-color="#0e8c79">
                    <div class="chart-circle-value text-white">17%</div>
                </div>
                <div class="wrp text-wrapper text-white p-3">
                    <p class="mt-0">30</p>
                    <p class=" mt-1 mb-0">الايرادات</p>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
        <div class="card widgets-cards bg-warning box-warning-shadow">
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.42" data-thickness="6" data-bs-color="#c68806">
                    <div class="chart-circle-value text-white">42%</div>
                </div>
                <div class="wrp text-wrapper text-white p-3">
                    <p class="mt-0">457</p>
                    <p class=" mt-1 mb-0">الارباح</p>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-12 col-md-6 col-lg-6  col-xl-3">
        <div class="card widgets-cards bg-danger box-danger-shadow">
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="chart-circle chart-circle-sm ms-3 mt-1" data-value="0.42" data-thickness="6" data-bs-color="#c21a1a">
                    <div class="chart-circle-value text-white">37%</div>
                </div>
                <div class="wrp text-wrapper text-white p-3">
                    <p class="mt-0">345</p>
                    <p class=" mt-1 mb-0">التكاليف</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <h6 class=""><span class="text-primary"><i class="fe fe-file-text mx-2 fs-20 text-primary-shadow"></i></span>عدد الاقساط</h6>
                <h3 class="text-dark counter mt-0 mb-3 number-font">7,896</h3>
                <div class="progress h-1 mt-0 mb-2">
                    <div class="progress-bar progress-bar-striped bg-primary" style="width: 70%;" role="progressbar"></div>
                </div>
                <div class="row mt-4">
                    <div class="col text-center"> <span class="text-muted">مدفوع</span>
                        <h4 class="fw-normal mt-2 mb-0 number-font1">8</h4>
                    </div>
                    <div class="col text-center"> <span class="text-muted">متأخر</span>
                        <h4 class="fw-normal mt-2 mb-0 number-font2">23</h4>
                    </div>
                    <div class="col text-center"> <span class="text-muted">مازال</span>
                        <h4 class="fw-normal mt-2 mb-0 number-font3">31</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4 col-md-6 col-lg-6">
        <div class="card overflow-hidden">
            <div class="card-body text-center">
                <h6 class=""><span class="text-success"><i class="fe fe-award mx-2 fs-20 text-success-shadow"></i></span>عدد المبيعات</h6>
                <h3 class="text-dark counter mt-0 mb-3 number-font">1,567</h3>
                <div class="progress h-1 mt-0 mb-2">
                    <div class="progress-bar progress-bar-striped  bg-success" style="width: 60%;" role="progressbar"></div>
                </div>
                <div class="row mt-4">
                    <div class="col text-center"> <span class="text-muted">كاش </span>
                        <h4 class="fw-normal mt-2 mb-0 number-font1">5</h4>
                    </div>
                    <div class="col text-center"> <span class="text-muted">قسط</span>
                        <h4 class="fw-normal mt-2 mb-0 number-font1">20</h4>
                    </div>
                    
                </div>
            </div>
        </div>
</div>

<div class="col-sm-6 col-xl-4 col-md-6 col-lg-6">
    <div class="card overflow-hidden">
        <div class="card-body text-center">
            <h6 class=""><span class="text-secondary"><i class="fe fe-users mx-2 fs-20 text-secondary-shadow"></i></span>عدد المشتريات</h6>
            <h3 class="text-dark counter mt-0 mb-3 number-font">2,897</h3>
            <div class="progress h-1 mt-0 mb-2">
                <div class="progress-bar progress-bar-striped  bg-secondary" style="width: 50%;" role="progressbar"></div>
            </div>
            <div class="row mt-4">
                <div class="col text-center"> <span class="text-muted">ذكور</span>
                    <h4 class="fw-normal mt-2 mb-0 number-font1">378</h4>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- ROW CLOSED -->
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">المرضى</h3>
            </div>
            <div class="card-body">
                <div id="chart-employment" class="chartsh"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">الارباح</h3>
            </div>
            <div class="card-body">
                <div id="chart-sracked" class="chartsh"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">اخر خمس مرضى</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table border text-nowrap text-md-nowrap table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>معرف رقم</th>
                                <th>الاسم</th>
                                <th>المهنه</th>
                                <th>المرتب</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>احمد سيد</td>
                                <td>خبير</td>
                                <td>574</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>احمد سيد</td>
                                <td>خبير</td>
                                <td>574</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>احمد سيد</td>
                                <td>خبير</td>
                                <td>574</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>احمد سيد</td>
                                <td>خبير</td>
                                <td>574</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>احمد سيد</td>
                                <td>خبير</td>
                                <td>574</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">اكثر خمس موظفين كفاءه</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table border text-nowrap text-md-nowrap table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>معرف رقم</th>
                                <th>الاسم</th>
                                <th>المهنه</th>
                                <th>المرتب</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>احمد سيد</td>
                                <td>خبير</td>
                                <td>574</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>احمد سيد</td>
                                <td>خبير</td>
                                <td>574</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>احمد سيد</td>
                                <td>خبير</td>
                                <td>574</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>احمد سيد</td>
                                <td>خبير</td>
                                <td>574</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>احمد سيد</td>
                                <td>خبير</td>
                                <td>574</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

  <!-- MODAL EFFECTS -->
  <div class="modal fade" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">اضافه رصيد</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <label class="col-md-3 form-label">قيمه الرصيد</label>
                <div class="col-md-9">
                    <input id='cash' type="text" class="form-control" placeholder="ادخل الرصيد">
                </div>
                <label class="col-md-3 form-label">كلمه المرور</label>

                <div class="col-md-9">
                    <input id='password' type="password" class="form-control" placeholder="ادخل كلمه المرور">
                </div>
            </div>
            <div  class="text-center modal-footer text-center">
                <button onclick="addcash()" class=" text-center btn btn-primary">اضافه</button> <button class="btn btn-light" data-bs-dismiss="modal">الغاء</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modaldemo85">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">رساله</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <h3 id='msgbody1'></h3>
            </div>
            <div  class="text-center modal-footer text-center">
                <button onclick="addcash()" class=" text-center btn btn-primary">اضافه</button> <button class="btn btn-light" data-bs-dismiss="modal">الغاء</button>
            </div>
        </div>
    </div>
</div>



<script>

    

function addcash(){
    

    let cash = document.getElementById('cash').value
    let password = document.getElementById('password').value

    let data = {cash:cash,password:password}

    
Insert(data,'/addcash')



}





</script>







@endsection