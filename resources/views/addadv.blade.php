@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title  text-center text-success">المعلنيين - اضافه</h1>
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
                        <label class="col-md-3 form-label">العنوان</label>

                        <div class="form-group">
                            <input type="text" class="form-control" id="address" placeholder="العنوان">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">النسبه</label>
                        <div class="form-group">
                            <input max="100" type="number" class="form-control" id="percentage" placeholder="ادخل النسبه" >
                        </div>
                    </div>
                </div>
                <div class="form-footer mt-2 align-items-center">
                    <div class="col-md-9 align-items-center">
                        <button onclick="addadv()" class="btn btn-primary">اضافه</button>
                        <a href="/dashboard" class="btn btn-secondary">الرجوع</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>




<script>

function addadv(){



let name = document.getElementById('name').value
let phone = document.getElementById('phone').value
let email = document.getElementById('email').value
let address = document.getElementById('address').value
let percentage = document.getElementById('percentage').value

let data = {name:name,phone:phone,email:email,address:address,percentage:percentage}



Insert(data,'/dashbord/advertiser_create')



}

</script>



@endsection