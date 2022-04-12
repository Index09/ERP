@extends('layouts.app')



{{-- Content --}}
@section('content')
<div class="row">

    <h2>
        المرضى

      
    </h1>

</div>

<div class="row">
    <div class="col-sm-12 col-xl-12 col-md-12 col-lg-8">
        <div class="card">
            <div class="card-body text-center">
                <h6 class=""><span class="text-primary"><i class="fe fe-file-text mx-2 fs-20 text-primary-shadow"></i></span>عدد المرضى</h6>
                <h3 class="text-dark counter mt-0 mb-3 number-font">{{count($patients)}}</h3>
                <div class="progress h-1 mt-0 mb-2">
                    <div class="progress-bar progress-bar-striped bg-primary" style="width: 70%;" role="progressbar"></div>
                </div>
                <div class="row mt-4">
                    <div class="col text-center"> <span class="text-muted">ذكور</span>
                        <h4 class="fw-normal mt-2 mb-0 number-font1">{{$patients->male}}</h4>
                    </div>
                    <div class="col text-center"> <span class="text-muted">ايناث</span>
                        <h4 class="fw-normal mt-2 mb-0 number-font2">{{$patients->female}}</h4>
                    </div>
                    <div class="col text-center"> <span class="text-muted">اطفال</span>
                        <h4 class="fw-normal mt-2 mb-0 number-font3">{{$patients->child}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="main-header-center ms-3 d-none d-lg-block">
        <input class="form-control" placeholder="بحث عن نتائج" type="search">
    </div>
    <button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-search"></i></button>
</div>


    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center">بيانات المرضى</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">الاسم</th>
                                    <th class="border-bottom-0">العنوان</th>
                                    <th class="border-bottom-0">عدد التحاليل</th>
                                    <th class="border-bottom-0">رقم الهاتف</th>
                                    <th class="border-bottom-0">النوع</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($patients as $patient )
                                    
                               
                                <tr>
                                    <td>{{$patient->name}}</td>
                                    <td>{{$patient->address}}</td>
                                    <td class="text-primary"> <a href="/paint/">{{5}}</a></td>
                                    <td>{{$patient->phone}}</td>
                                    @php if($patient->gender == 1){
                                    $patient->gender = 'ذكر';
                                    }elseif ( $patient->gender ==2) {
                                    $patient->gender = 'انثى';     
                                    }else {
                                    $patient->gender = 'طفل';     
                                    }
                                    
                                    
                                    
                                    @endphp
                                    <td><span class="tag tag-blue">{{$patient->gender}} </span></td>

                                 
                                
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   
</div>

<div class="row">


    <div class="flex-xxl-column-reverse">
        <a href="/patient" class="btn btn-primary">  اضافه جديد</a>
        <button class="btn btn-secondary">الرجوع</button>
    </div>

</div>


@endsection