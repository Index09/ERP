@extends('layouts.app')



{{-- Content --}}
@section('content')

<div class="row">
    <div class="row ">
        <div class="col-10">
            <div class="row mx-0  py-3 bg-light">
                <!-- Top Section -->
                <!-- left card -->
                <div class="col-sm-4 ">
                    <div class="card  shadow  bg-body left-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-bolder"><h3>الطلبات </h3></span>
                                <button onclick="orderBasketClear()" class="rounded-pill close-icon">إعاده تعيين </button>
                            </div>
                            <hr class="mt-3 line ">
                            <ul id="orderlist" class="list-unstyled custom-scroll new-padding " dir="ltr">
                                <li class="d-flex justify-content-between alighn-items-center shadow-sm bg-body rounded-custom p-3 mb-2">
                                    <span> 
                                        <img src="assets/1.jpg" alt="" class="w-25 shadow-sm me-3 rounded">
                                        <span><h6 style="display: inline;" >مانجو</h6>
                                            <span class="text-danger  ms-5 p-2" >  1.99 ر.س </span>
                                    <span class=" btn btn-outline-primary mt-3 mx-3"> ملاحظات</span>
                                    </span>
                                    </span>
                                    <i class="fas fa-times-circle btn custom-btn"></i>
                                </li>
                            </ul>
                            <hr class="mt-0 line">
                            <ul class="list-unstyled  shadow-sm  bg-body rounded-custom p-2 mb-2">
                                <li class="d-flex justify-content-between alighn-items-center pt-3 ">
                                    <h6 class="pb-3 fw-bold">إجمالي الاصناف</h6>
                                    <span id="totalItems" class="card-text fw-bold text-danger">0</span>
                                </li>
                                <li class="d-flex justify-content-between alighn-items-center ">
                                    <h6 class="fw-bold">إجمالي المبلغ</h6>
                                    <p class="fw-bold text-danger"><span id="totalConst" class="card-text ">0.00</span> ر.س</p>
                                </li>
                            </ul>
                            <hr class="mt-5 line">
                            <ul class="nav nav-pills " style="margin-right: -37px; " id="pills-tab" role="tablist">

                                <li class="nav-item  w-100" role="presentation">
                                    <button class=" actibenav-link btn btn-lg btn-primary btn-lg w-100  rounded-custom mb-3 shadow " id="pills-checkout-tab" data-bs-toggle="pill" data-bs-target="#pills-checkout" type="button" role="tab" aria-controls="pills-checkout" aria-selected="false">دفع </button>
                                </li>
                            </ul>
                            <button class=" btn btn-lg text-primary btn-lg w-100 rounded-custom shadow" id="">إرجاع</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="d-flex justify-content-between mb-3">
                        <h4>رقم الطلب. #001</h4>
                        <h6>حي اليرموك </h6>
                        <small class="text-muted">اليوم ، 20 مارس 2021 ، 02:34 مساءً</small>
                    </div>
                    <!-- tap Header  -->
                    <div class="card mb-3  left-card">
                        <div class="card-body ">
                            <ul class="nav nav-pills  d-flex justify-content-evenly" id="pills-tab" role="tablist">
                                <li class="nav-item   " role="presentation">
                                    <button class="nav-link active  rounded-pill fw-bold" id="pills-meat-tab" data-bs-toggle="pill" data-bs-target="#pills-meat" type="button" role="tab" aria-controls="pills-meat" aria-selected="true" href="index.html"><i class="fas fa-home " ></i> الرئيسيه</button>
                                </li>
                                <li class="nav-item   " role="presentation">


                                    <!-- Button trigger modal -->

                                    <button type="button" class="btn rounded-pill  btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fas fa-lock" ></i> إقفال الورديه  </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content ">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <div class=" mb-3">
                                                            <p class="text-muted">اليوم ، 20 مارس 2021 ، 02:34 مساءً</p>
                                                        </div>
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col">
                                                        <div class="d-flex justify-content-between mb-3">
                                                            <p class="text-muted">اليوم من 08:00 صباحا</p>
                                                            <p class="text-muted">اليوم إلى 03:00 مساءً</p>
                                                        </div>
                                                        <hr class="mb-3 line">
                                                        <div class="col">
                                                            <div class="d-flex justify-content-evenly mb-3">
                                                                <h4 class="text-muted fw-bold">إجمالي الطلبات:</h4>
                                                                <h6 class="text-muted fw-bold">300</h6>
                                                            </div>
                                                            <hr class="mb-3 line">

                                                        </div>
                                                        <div class="col">
                                                            <div class="d-flex justify-content-evenly  mb-3">
                                                                <h4 class="text-muted fw-bold">إجمالي المبلغ:</h4>
                                                                <h6 class="text-muted fw-bold">$ 100.000</h6>
                                                            </div>
                                                            <hr class="mb-3 line">

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                                        <button type="button" class="btn btn-primary">حفظ التغييرات</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                </li>
                                <li class="nav-item   " role="presentation">
                                    <button class=" btn rounded-pill  btn-primary fw-bold" id="pills-setting-tab" data-bs-toggle="pill" data-bs-target="#pills-setting" type="button" role="tab" aria-controls="pills-setting" aria-selected="true"> <i class="fas fa-cog"></i> الإعدادات</button>
                                </li>

                            </ul>
                            </div>
                        </div>


                        <!-- Tap Content  -->
                        <div class="tab-content " id="pills-tabContent ">
                            <div class="tab-pane fade show active custom-body-scroll" id="pills-meat" role="tabpanel" aria-labelledby="pills-meat-tab">
                                <div class="row row-cols-1 row-cols-md-4 g-4">
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('لحم',  1.99, 'assets/7-2-meat-download-png-thumb.png');">
                                            <img draggable="false" src="assets/7-2-meat-download-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">لحم</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('لحم',  1.99, 'assets/7-2-meat-download-png-thumb.png');">
                                            <img draggable="false" src="assets/7-2-meat-download-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">لحم</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('لحم',  1.99, 'assets/7-2-meat-download-png-thumb.png');">
                                            <img draggable="false" src="assets/7-2-meat-download-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">لحم</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('لحم',  1.99, 'assets/7-2-meat-download-png-thumb.png');">
                                            <img draggable="false" src="assets/7-2-meat-download-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">لحم</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('لحم',  1.99, 'assets/7-2-meat-download-png-thumb.png');">
                                            <img draggable="false" src="assets/7-2-meat-download-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">لحم</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('لحم',  1.99, 'assets/7-2-meat-download-png-thumb.png');">
                                            <img draggable="false" src="assets/7-2-meat-download-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">لحم</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('لحم',  1.99, 'assets/7-2-meat-download-png-thumb.png');">
                                            <img draggable="false" src="assets/7-2-meat-download-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">لحم</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('لحم',  1.99, 'assets/7-2-meat-download-png-thumb.png');">
                                            <img draggable="false" src="assets/7-2-meat-download-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">لحم</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane fade show  custom-body-scroll" id="pills-coffee" role="tabpanel" aria-labelledby="pills-coffee-tab">
                                <div class="row row-cols-1 row-cols-md-4 g-4">
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('قهوه',  1.99, 'assets/4-2-coffee-beans-png-image-thumb.png');">
                                            <img draggable="false" src="assets/4-2-coffee-beans-png-image-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">قهوه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('قهوه',  1.99, 'assets/4-2-coffee-beans-png-image-thumb.png');">
                                            <img draggable="false" src="assets/4-2-coffee-beans-png-image-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">قهوه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('قهوه',  1.99, 'assets/4-2-coffee-beans-png-image-thumb.png');">
                                            <img draggable="false" src="assets/4-2-coffee-beans-png-image-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">قهوه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('قهوه',  1.99, 'assets/4-2-coffee-beans-png-image-thumb.png');">
                                            <img draggable="false" src="assets/4-2-coffee-beans-png-image-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">قهوه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('قهوه',  1.99, 'assets/4-2-coffee-beans-png-image-thumb.png');">
                                            <img draggable="false" src="assets/4-2-coffee-beans-png-image-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">قهوه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('قهوه',  1.99, 'assets/4-2-coffee-beans-png-image-thumb.png');">
                                            <img draggable="false" src="assets/4-2-coffee-beans-png-image-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">قهوه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('قهوه',  1.99, 'assets/4-2-coffee-beans-png-image-thumb.png');">
                                            <img draggable="false" src="assets/4-2-coffee-beans-png-image-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">قهوه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('قهوه',  1.99, 'assets/4-2-coffee-beans-png-image-thumb.png');">
                                            <img draggable="false" src="assets/4-2-coffee-beans-png-image-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">قهوه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="tab-pane fade show  custom-body-scroll" id="pills-fruits" role="tabpanel" aria-labelledby="pills-fruits-tab">
                                <div class="row row-cols-1 row-cols-md-4 g-4">
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('فاكهه',  1.99, 'assets/Junk-Food-PNG-Image.png');">
                                            <img draggable="false" src="assets/Junk-Food-PNG-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">فاكهه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('فاكهه',  1.99, 'assets/Junk-Food-PNG-Image.png');">
                                            <img draggable="false" src="assets/Junk-Food-PNG-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">فاكهه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('فاكهه',  1.99, 'assets/Junk-Food-PNG-Image.png');">
                                            <img draggable="false" src="assets/Junk-Food-PNG-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">فاكهه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('فاكهه',  1.99, 'assets/Junk-Food-PNG-Image.png');">
                                            <img draggable="false" src="assets/Junk-Food-PNG-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">فاكهه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('فاكهه',  1.99, 'assets/Junk-Food-PNG-Image.png');">
                                            <img draggable="false" src="assets/Junk-Food-PNG-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">فاكهه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('فاكهه',  1.99, 'assets/Junk-Food-PNG-Image.png');">
                                            <img draggable="false" src="assets/Junk-Food-PNG-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">فاكهه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('فاكهه',  1.99, 'assets/Junk-Food-PNG-Image.png');">
                                            <img draggable="false" src="assets/Junk-Food-PNG-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">فاكهه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('فاكهه',  1.99, 'assets/Junk-Food-PNG-Image.png');">
                                            <img draggable="false" src="assets/Junk-Food-PNG-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">فاكهه</h6>
                                                <p class="card-text fw-bold  "> 1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="tab-pane fade show  custom-body-scroll" id="pills-cheese" role="tabpanel" aria-labelledby="pills-cheese-tab">
                                <div class="row row-cols-1 row-cols-md-4 g-4">
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('جبن رومي',  1.99, 'assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png');">
                                            <img draggable="false" src="assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">جبن رومي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('جبن رومي',  1.99, 'assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png');">
                                            <img draggable="false" src="assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">جبن رومي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('جبن رومي',  1.99, 'assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png');">
                                            <img draggable="false" src="assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">جبن رومي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('جبن رومي',  1.99, 'assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png');">
                                            <img draggable="false" src="assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">جبن رومي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('جبن رومي',  1.99, 'assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png');">
                                            <img draggable="false" src="assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">جبن رومي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('جبن رومي',  1.99, 'assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png');">
                                            <img draggable="false" src="assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">جبن رومي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('جبن رومي',  1.99, 'assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png');">
                                            <img draggable="false" src="assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">جبن رومي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('جبن رومي',  1.99, 'assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png');">
                                            <img draggable="false" src="assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">جبن رومي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade show  custom-body-scroll" id="pills-milk" role="tabpanel" aria-labelledby="pills-milk-tab">
                                <div class="row row-cols-1 row-cols-md-4 g-4">
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('حليب',  1.99, 'assets/Almond-Milk-PNG-Pic.png');">
                                            <img draggable="false" src="assets/Almond-Milk-PNG-Pic.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">حليب</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('حليب',  1.99, 'assets/Almond-Milk-PNG-Pic.png');">
                                            <img draggable="false" src="assets/Almond-Milk-PNG-Pic.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">حليب</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('حليب',  1.99, 'assets/Almond-Milk-PNG-Pic.png');">
                                            <img draggable="false" src="assets/Almond-Milk-PNG-Pic.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">حليب</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('حليب',  1.99, 'assets/Almond-Milk-PNG-Pic.png');">
                                            <img draggable="false" src="assets/Almond-Milk-PNG-Pic.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">حليب</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('حليب',  1.99, 'assets/Almond-Milk-PNG-Pic.png');">
                                            <img draggable="false" src="assets/Almond-Milk-PNG-Pic.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">حليب</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('حليب',  1.99, 'assets/Almond-Milk-PNG-Pic.png');">
                                            <img draggable="false" src="assets/Almond-Milk-PNG-Pic.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">حليب</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('حليب',  1.99, 'assets/Almond-Milk-PNG-Pic.png');">
                                            <img draggable="false" src="assets/Almond-Milk-PNG-Pic.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">حليب</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('حليب',  1.99, 'assets/Almond-Milk-PNG-Pic.png');">
                                            <img draggable="false" src="assets/Almond-Milk-PNG-Pic.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">حليب</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane fade show  custom-body-scroll" id="pills-vegetables" role="tabpanel" aria-labelledby="pills-vegetables-tab">
                                <div class="row row-cols-1 row-cols-md-4 g-4">
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خضروات',  1.99, 'assets/10-2-healthy-food-png-thumb.png');">
                                            <img draggable="false" src="assets/10-2-healthy-food-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خضروات</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خضروات',  1.99, 'assets/10-2-healthy-food-png-thumb.png');">
                                            <img draggable="false" src="assets/10-2-healthy-food-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خضروات</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خضروات',  1.99, 'assets/10-2-healthy-food-png-thumb.png');">
                                            <img draggable="false" src="assets/10-2-healthy-food-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خضروات</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خضروات',  1.99, 'assets/10-2-healthy-food-png-thumb.png');">
                                            <img draggable="false" src="assets/10-2-healthy-food-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خضروات</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خضروات',  1.99, 'assets/10-2-healthy-food-png-thumb.png');">
                                            <img draggable="false" src="assets/10-2-healthy-food-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خضروات</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خضروات',  1.99, 'assets/10-2-healthy-food-png-thumb.png');">
                                            <img draggable="false" src="assets/10-2-healthy-food-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خضروات</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خضروات',  1.99, 'assets/10-2-healthy-food-png-thumb.png');">
                                            <img draggable="false" src="assets/10-2-healthy-food-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خضروات</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خضروات',  1.99, 'assets/10-2-healthy-food-png-thumb.png');">
                                            <img draggable="false" src="assets/10-2-healthy-food-png-thumb.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خضروات</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane fade show  custom-body-scroll" id="pills-fish" role="tabpanel" aria-labelledby="pills-fish-tab">
                                <div class="row row-cols-1 row-cols-md-4 g-4">
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('أسماك',  1.99, 'assets/Crunchy-Fried-Fish-PNG-File.png');">
                                            <img draggable="false" src="assets/Crunchy-Fried-Fish-PNG-File.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">أسماك</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('أسماك',  1.99, 'assets/Crunchy-Fried-Fish-PNG-File.png');">
                                            <img draggable="false" src="assets/Crunchy-Fried-Fish-PNG-File.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">أسماك</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('أسماك',  1.99, 'assets/Crunchy-Fried-Fish-PNG-File.png');">
                                            <img draggable="false" src="assets/Crunchy-Fried-Fish-PNG-File.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">أسماك</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('أسماك',  1.99, 'assets/Crunchy-Fried-Fish-PNG-File.png');">
                                            <img draggable="false" src="assets/Crunchy-Fried-Fish-PNG-File.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">أسماك</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('أسماك',  1.99, 'assets/Crunchy-Fried-Fish-PNG-File.png');">
                                            <img draggable="false" src="assets/Crunchy-Fried-Fish-PNG-File.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">أسماك</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('أسماك',  1.99, 'assets/Crunchy-Fried-Fish-PNG-File.png');">
                                            <img draggable="false" src="assets/Crunchy-Fried-Fish-PNG-File.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">أسماك</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('أسماك',  1.99, 'assets/Crunchy-Fried-Fish-PNG-File.png');">
                                            <img draggable="false" src="assets/Crunchy-Fried-Fish-PNG-File.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">أسماك</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('أسماك',  1.99, 'assets/Crunchy-Fried-Fish-PNG-File.png');">
                                            <img draggable="false" src="assets/Crunchy-Fried-Fish-PNG-File.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">أسماك</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade show  custom-body-scroll" id="pills-bread" role="tabpanel" aria-labelledby="pills-bread-tab">
                                <div class="row row-cols-1 row-cols-md-4 g-4">
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خبز فرنساوي',  1.99, 'assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png');">
                                            <img draggable="false" src="assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خبز فرنساوي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خبز فرنساوي',  1.99, 'assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png');">
                                            <img draggable="false" src="assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خبز فرنساوي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خبز فرنساوي',  1.99, 'assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png');">
                                            <img draggable="false" src="assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خبز فرنساوي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خبز فرنساوي',  1.99, 'assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png');">
                                            <img draggable="false" src="assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خبز فرنساوي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خبز فرنساوي',  1.99, 'assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png');">
                                            <img draggable="false" src="assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خبز فرنساوي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خبز فرنساوي',  1.99, 'assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png');">
                                            <img draggable="false" src="assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خبز فرنساوي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خبز فرنساوي',  1.99, 'assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png');">
                                            <img draggable="false" src="assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خبز فرنساوي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  ">
                                        <div class="card shadow  bg-body left-card pt-4" onclick="orderBasket('خبز فرنساوي',  1.99, 'assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png');">
                                            <img draggable="false" src="assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png" class="card-img-top" alt="...">
                                            <div class="card-body d-flex justify-content-between">
                                                <h6 class="card-title">خبز فرنساوي</h6>
                                                <p class="card-text fw-bold  ">1.99 ر.س </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Check out Section  -->
                            <div class="tab-pane fade custom-body-scroll " id="pills-checkout" role="tabpanel">
                                <div class="row mb-3">
                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">إسم العميل</label>
                                    <div class=" col-sm-8 ">
                                        <input type="text" class="text-center form-control form-control-lg" id="customername" placeholder="Order No. #001">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">إجمالي المدفوعات</label>
                                    <div class=" col-sm-8 ">
                                        <input type="number" class="rounded-pill text-center form-control form-control-lg" id="amount" placeholder="Total Amount" disabled>
                                    </div>
                                </div>
                                <div class="row  mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">طرق الدفع </label>
                                    <div class=" col-sm-8 ">
                                        <!-- Button trigger modal -->
                                        <button class="rounded-pill btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#amountcalculator">أدخل المبلغ المدفوع هنا!</button>
                                    </div>
                                </div>
                                <div class="row ">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">المبلغ الذي دفعه العميل</label>
                                    <div class=" col-sm-8 ">
                                        <input type="text" class=" rounded-pill text-center form-control form-control-lg " id="customername" placeholder="المبلغ" disabled>
                                    </div>
                                </div>
                                <div class="row  mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">تغيير</label>
                                    <div class=" col-sm-8 ">
                                        <input type="text" class=" rounded-pill text-center form-control form-control-lg" id="customername" placeholder="تغيير" disabled>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- payment Modal -->
                    <div class="modal fade" id="amountcalculator" tabindex="-1" aria-labelledby="amountcalculator" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content ">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="amountcalculator">برجاء إختيار طريقه الدفع</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ">
                                    <div class="container-fluid d-flex justify-content-center mt-5 mb-5">
                                        <div class="col-md-5 g-1"> <span>طرق الدفع</span>
                                            <div class="card">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="card">

                                                        <div class="card-header p-0" id="headingTwo">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                <div class="d-flex justify-content-center "> 
                                                                    <div>Paypal</div> 
                                                                    <div style="    margin-left: 328px;"><img src="assets/paypal.png" width="30"></div>
                                                                     
                                                                </div>
                                                    </button>
                                                            </h2>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                            <div class="card-body"> <input type="text" class="form-control" placeholder="Paypal email"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header p-0">
                                                            <h2 class="mb-0"> <button class="btn btn-light btn-block text-left p-3 rounded-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                <div class="d-flex align-items-center justify-content-between"> <span>Credit card</span>
                                                                    <div style="margin-left: 218px"; class="icons"> <img src="assets/mastercard.png" width="30"> <img src="assets/visa.png" width="30"> <img src="assets/strip.png" width="30"> </div>
                                                                </div>
                                                            </button> </h2>
                                                        </div>
                                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                            <div class="card-body payment-card-body"> <span class="font-weight-normal card-text">Card Number</span>
                                                                <div class="input"> <i class="fa fa-credit-card"></i> <input type="text" class="form-control" placeholder="0000 0000 0000 0000"> </div>
                                                                <div class="row mt-3 mb-3">
                                                                    <div class="col-md-6"> <span class="font-weight-normal card-text">Expiry Date</span>
                                                                        <div class="input"> <i class="fa fa-calendar"></i> <input type="text" class="form-control" placeholder="MM/YY"> </div>
                                                                    </div>
                                                                    <div class="col-md-6"> <span class="font-weight-normal card-text">CVC/CVV</span>
                                                                        <div class="input"> <i class="fa fa-lock"></i> <input type="text" class="form-control" placeholder="000"> </div>
                                                                    </div>
                                                                </div> <span class="text-muted certificate-text"><i class="fa fa-lock"></i> معاملتك مضمونة بشهادة ssl</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 ps-5">
                                            <h4>الملخص</h4>
                                            <div class="card">
                                                <div class="d-flex justify-content-between p-3">
                                                    <div class="d-flex flex-column">
                                                        <h6>الإجمالي <i class="fa fa-caret-right"></i></h6>
                                                        <div class="mt-1"> <sup class="super-price">9.99 ر.س</sup> </div>

                                                    </div>
                                                </div>
                                                <hr class="mt-0 line">
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="p-3"> <button class="btn btn-primary btn-block free-button w-100">دفع</button>
                                                    <div class="text-center w-100"> <a href="#">هل لديك كود خصم؟</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 catgery">
                <div class="card mb-3  left-card">
                    <div class="card-body ">
                        <ul class="nav nav-pills  " id="pills-tab" role="tablist">
                            <li class="nav-item   " role="presentation">
                                <button class="nav-link active  rounded-pill" id="pills-meat-tab" data-bs-toggle="pill" data-bs-target="#pills-meat" type="button" role="tab" aria-controls="pills-meat" aria-selected="true"> <img src="assets/7-2-meat-download-png-thumb.png" style="width: 40px;" alt=""> لحم</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link rounded-pill" id="pills-coffee-tab" data-bs-toggle="pill" data-bs-target="#pills-coffee" type="button" role="tab" aria-controls="pills-coffee" aria-selected="false"><img src="assets/4-2-coffee-beans-png-image-thumb.png" style="width: 40px;" alt=""> قهوه</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link rounded-pill" id="pills-fruits-tab" data-bs-toggle="pill" data-bs-target="#pills-fruits" type="button" role="tab" aria-controls="pills-fruits" aria-selected="false"><img src="assets/Junk-Food-PNG-Image.png" style="width: 40px;" alt=""> فاكهه</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link rounded-pill" id="pills-cheese-tab" data-bs-toggle="pill" data-bs-target="#pills-cheese" type="button" role="tab" aria-controls="pills-cheese" aria-selected="false"><img src="assets/158736-cheese-piece-slice-free-clipart-hd-thumb.png" style="width: 40px;" alt=""> جبن رومي</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link rounded-pill" id="pills-milk-tab" data-bs-toggle="pill" data-bs-target="#pills-milk" type="button" role="tab" aria-controls="pills-milk" aria-selected="false"><img src="assets/Almond-Milk-PNG-Pic.png" style="width: 40px;" alt=""> حليب</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link rounded-pill" id="pills-vegetables-tab" data-bs-toggle="pill" data-bs-target="#pills-vegetables" type="button" role="tab" aria-controls="pills-vegetables" aria-selected="false"><img src="assets/10-2-healthy-food-png-thumb.png" style="width: 40px;" alt=""> خضروات</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link rounded-pill" id="pills-fish-tab" data-bs-toggle="pill" data-bs-target="#pills-fish" type="button" role="tab" aria-controls="pills-fish" aria-selected="false"><img src="assets/Crunchy-Fried-Fish-PNG-File.png" style="width: 40px;" alt="">أسماك</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link rounded-pill" id="pills-bread-tab" data-bs-toggle="pill" data-bs-target="#pills-bread" type="button" role="tab" aria-controls="pills-bread" aria-selected="false"><img src="assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png" style="width: 40px;" alt=""> خبز فرنساوي</button>
                            </li>

                            <li class="nav-item " role="presentation">
                                <button class="nav-link rounded-pill" id="pills-milk-tab" data-bs-toggle="pill" data-bs-target="#pills-milk" type="button" role="tab" aria-controls="pills-milk" aria-selected="false"><img src="assets/Almond-Milk-PNG-Pic.png" style="width: 40px;" alt=""> حليب</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link rounded-pill" id="pills-vegetables-tab" data-bs-toggle="pill" data-bs-target="#pills-vegetables" type="button" role="tab" aria-controls="pills-vegetables" aria-selected="false"><img src="assets/10-2-healthy-food-png-thumb.png" style="width: 40px;" alt=""> خضروات</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link rounded-pill" id="pills-fish-tab" data-bs-toggle="pill" data-bs-target="#pills-fish" type="button" role="tab" aria-controls="pills-fish" aria-selected="false"><img src="assets/Crunchy-Fried-Fish-PNG-File.png" style="width: 40px;" alt="">أسماك</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link rounded-pill " id="pills-bread-tab" data-bs-toggle="pill" data-bs-target="#pills-bread" type="button" role="tab" aria-controls="pills-bread" aria-selected="false"><img src="assets/Vector-French-Bread-Basket-PNG-Transparent-Image.png" style="width: 40px;" alt=""> خبز فرنساوي</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- JS file -->
  
</div>

    
     

   



    





@endsection