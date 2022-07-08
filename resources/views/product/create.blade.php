@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title  text-center text-success">المنتجات  - اضافه</h1>
            </div>
            <div class="card-body">
                <form id="myform" enctype="multipart/form-data">
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
                    <div class="form-group col-md-3 mb-0">
                        <label class="col-md-6 form-label">صوره المنتج </label>
                        <div class="form-group">
                            <input id='product_image' class="form-control" type="file">             
                        </div>
                    </div>  
                </div>
                <div class="form-footer mt-2 align-items-center">
                 </form>
                    <div class="col-md-9 align-items-center">
                        <button id='btnSendData'  class="btn btn-primary">اضافه</button>
                        <a href="/home" class="btn btn-secondary">الرجوع</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>





<script>

// function addproduct(){

//     let name = document.getElementById('name').value
//     let disc = document.getElementById('disc').value
//     let sell_price = document.getElementById('sell_price').value
//     let buy_price = document.getElementById('buy_price').value

//     let data = {name:name,disc:disc,sell_price:sell_price,buy_price:buy_price}

// Insert(data,'/product_create')



$(document).on('click','#btnSendData',function (event) {
    event.preventDefault();
   
    var formData = new FormData();
    let name = document.getElementById('name').value
    let disc = document.getElementById('disc').value
    let sell_price = document.getElementById('sell_price').value
    let buy_price = document.getElementById('buy_price').value
    formData.append('name',name);
    formData.append('disc',disc);
    formData.append('sell_price',sell_price);
    formData.append('buy_price',buy_price);
    formData.append('product_image', document.getElementById("product_image").files[0]);

    
    $.ajax({
        url: "/product",
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            window.location.href = '/productview'
        },
      
    });

});








</script>




@endsection