@extends('layouts.app')



{{-- Content --}}
@section('content')
<div class="addp">
<div class="row">
    <div class="col-xl-5 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">البيانات الاساسيه </h4>
            </div>
            <div class="card-body">
                <form class="form-horizontal">
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">الاسم بالعربى<span class="text-red">*</span></label>
                        <div class="col-md-9">
                            <input id='name' type="text" class="form-control" placeholder="ادخل الاسم">
                        </div>
                    </div>
                    
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">الاسم باللغه الانجليزيه</label>
                        <div class="col-md-9">
                            <input id='engname' class="form-control" type="tel" name='' placeholder="ادخل الاسم">
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">رقم الهويه<span class="text-red">*</span></label>
                        <div class="col-md-9">
                            <input id='identity' type="text" class="form-control" placeholder="ادخل رقم الهويه">
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">رقم الهاتف<span class="text-red">*</span></label>
                        <div class="col-md-9">
                            <input id='phone' type="text" class="form-control" placeholder="ادخل رقم الهاتف">
                        </div>
                    </div> 
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">البريد الاليكترونى</label>
                        <div class="col-md-9">
                            <input id='email' type="text" class="form-control" placeholder="ادخل البريد">
                        </div>
                    </div>
                   
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">الجنس<span class="text-red">*</span></label>
                        <div class="col-md-9">
                            <select id='gender' name="country" class="form-control form-select form-select select2" data-bs-placeholder="اختيار الجنس">
                                <option value="1">ذكر </option>
                                <option value="2">انثى</option>
                                <option value="3">طفل</option>
                            </select>
                        </div>
                    </div>
                    
                  
                    
                  
                    <div class="card-header">
                        <h4 class="card-title">البيانات الطبيه</h4>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">الامراض المزمنه</label>
                        <div class="col-md-9">
                            <input id='chr_diseases' type="text" class="form-control" placeholder="ادخل الامراض">
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">فصيله الدم</label>
                        <div class="col-md-9">
                            <input id='blood_type' type="text" class="form-control" placeholder="ادخل فصيله الدم">
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">الوزن</label>
                        <div class="col-md-9">
                            <input id='weight' type="text" class="form-control" placeholder="ادخل الوزن">
                        </div>
                    </div> 
                     <div class=" row mb-4">
                        <label class="col-md-3 form-label">الطول</label>
                        <div class="col-md-9">
                            <input id='height' type="text" class="form-control" placeholder="ادخل الطول">
                        </div>
                    </div>
                     <div class=" row mb-4">
                        <label class="col-md-3 form-label">العمر</label>
                        <div class="col-md-9">
                            <input id='age' type="text" class="form-control" placeholder="ادخل العمر">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">العنوان</h4>
            </div>
            <div class="card-body">
                <form class="form-horizontal">
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">الجنسيه<span class="text-red">*</span></label>
                        <div class="col-md-9">
                            <select id='country' name="country" class="form-control form-select form-select select2" data-bs-placeholder="اختيار الجنس">
                                <option value="1">سعودى </option>
                                <option value="2">اماراتى</option>
                                <option value="3">كويتى</option>
                            </select>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">العنوان </label>
                        <div class="col-md-9">
                            <input id='address' type="text" class="form-control" placeholder="ادخل العنوان">
                        </div>
                    </div>
                    
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">المدينه</label>
                        <div class="col-md-9">
                            <input class="form-control" id='city' type="tel" name='' placeholder="ادخل المدينه">
                        </div>
                        
                    </div>
                </form>
                <img src="{{asset('/images/doc.png')}}">
            </div>

        </div>
        <div class="col-md-9 align-items-center">
            <button onclick="addpatient()" class="btn btn-primary">اضافه</button>
            <button  class="btn btn-secondary">الرجوع</button>
        </div>
    </div>
  
</div>

    
     
  
</div>
   


<script>

    

function addpatient(){



    let name = document.getElementById('name').value
    let engname = document.getElementById('engname').value
    let identity = document.getElementById('identity').value
    let phone = document.getElementById('phone').value
    let email = document.getElementById('email').value
    let city = document.getElementById('city').value
    let address = document.getElementById('address').value
    let chr_diseases = document.getElementById('chr_diseases').value
    let weight = document.getElementById('weight').value
    let height = document.getElementById('height').value
    let country = document.getElementById('country').value
    let blood_type = document.getElementById('blood_type').value
    let age = document.getElementById('age').value
    let gender = document.getElementById('gender').value

 
    
    $.ajax({

       
        type: 'post',
        url: '/dashbord/patient_create',
        data: {
            name:name,
            engname:engname,
            identity:identity,
            phone:phone,
            email:email,
            city:city,
            address:address,
            chr_diseases:chr_diseases,
            weight:weight,
            country_id:country,
            blood_type:blood_type,
            gender:gender,
            height:height,
            age:age
        },
        dataType: 'json',
        success: function (data) {
            Swal.fire(
            'تم الاضافه',''
            ,
            'success'
            )

        window.setInterval(() => {

            window.location.href = '/dashboard'
            
        }, 1000);


        },
        error: function (data) {
            console.log(data);
        }
        });
}


     





</script>



@endsection