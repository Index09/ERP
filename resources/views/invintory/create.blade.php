@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title  text-center text-success">المخازن  - اضافه</h1>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">اسم المخزن</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="ادخل اسم المخزن">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">العنوان</label>

                        <div class="form-group">
                            <input type="text" class="form-control" id="address" placeholder="ادخل العنوان">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">سجل تجارى رقم </label>
                        <div class="form-group">
                            <input type="textarea" class="form-control" id="tax_number" placeholder="ادخل رقم السجل ">
                        </div>
                    </div>               
                </div>
                <div class="form-footer mt-2 align-items-center">
                    <div class="col-md-9 align-items-center">
                        <button onclick="addbrunch()" class="btn btn-primary">اضافه</button>
                        <a href="/dashboard" class="btn btn-secondary">الرجوع</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>






<script>

function addbrunch(){

    let name = document.getElementById('name').value
    let address = document.getElementById('address').value
    let tax_number = document.getElementById('tax_number').value

let data = {name:name,address:address,tax_number:tax_number}

Insert(data,'/invintory_create')







}


</script>




@endsection