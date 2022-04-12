@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">المورديين - اضافه</h3>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">الاسم</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="ادخل الاسم">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">رقم الهاتف</label>

                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" placeholder="ادخل الرقم">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">البريد الاليكترونى</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="ادخل البريد">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">المدينه</label>

                        <div class="form-group">
                            <input type="text" class="form-control" id="address" placeholder="المدينه">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">العنوان</label>

                        <div class="form-group">
                            <input type="text" class="form-control" id="country" placeholder="العنوان">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">الرقم القومى</label>

                        <div class="form-group">
                            <input type="text" class="form-control" id="naid" placeholder="الرقم القومى ان وجد">
                        </div>
                    </div>
                </div>
                <div class="form-footer mt-2">
                    <div class="col-md-9 align-items-center">
                        <button onclick="addcustomer()" class="btn btn-primary">اضافه</button>
                        <a href="/home" class="btn btn-secondary">الرجوع</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>




<script>

function addcustomer(){



let name = document.getElementById('name').value
let phone = document.getElementById('phone').value
let email = document.getElementById('email').value
let address = document.getElementById('address').value
let country = document.getElementById('country').value
let naid = document.getElementById('naid').value




$.ajax({

   
    type: 'post',
    url: '/supplier_create',
    data: {
        name:name,
        phone:phone,
        email:email,
        address:address,
        country:country,
        naid:naid,
        
  
    },
    dataType: 'json',
    success: function (data) {
            Swal.fire(
            'تم الاضافه',''
            ,
            'success'
            )

        window.setInterval(() => {

            window.location.href = '/home'
            
        }, 1000);


    },
    error: function (data) {
        console.log(data);
    }
    });
}


 
</script>




@endsection