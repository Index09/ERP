@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title  text-center text-success">المنتجات  - اضافه</h1>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">اسم المنتج</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="ادخل اسم المخزن">
                        </div>
                    </div>
                 
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-0">
                        <label class="col-md-3 form-label">الوصف </label>
                        <div class="form-group">
                            <textarea class="form-control" id="disc" placeholder="ادخل رقم السجل "> </textarea>
                        </div>
                    </div>               
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3 mb-0">
                        <label class="col-md-6 form-label">سعر الشراء </label>
                        <div class="form-group">
                            <input type="number" class="form-control" id="sell_price" placeholder="ادخل سعر الشراء ">
                        </div>
                    </div> 
                    <div class="form-group col-md-3 mb-0">
                        <label class="col-md-6 form-label">سعر البيع </label>
                        <div class="form-group">
                            <input type="number" class="form-control" id="buy_price" placeholder="ادخل سعر البيع">
                        </div>
                    </div>               
                </div>
                <div class="form-footer mt-2 align-items-center">
                    <div class="col-md-9 align-items-center">
                        <button onclick="addproduct()" class="btn btn-primary">اضافه</button>
                        <a href="/home" class="btn btn-secondary">الرجوع</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>






<script>

function addproduct(){

    let name = document.getElementById('name').value
    let disc = document.getElementById('disc').value
    let sell_price = document.getElementById('sell_price').value
    let buy_price = document.getElementById('buy_price').value

    let data = {name:name,disc:disc,sell_price:sell_price,buy_price:buy_price}

Insert(data,'/product_create')







}


</script>




@endsection