<template>
    

<div class="container-fluid">
        <div class="container">
            <div   style="color: #092477;" class="title-bill text-center">
                <h5 style="font-weight:600"> امر بيع</h5>
                <h5 style="font-weight:600">Sell Order</h5>
            </div>
            <div  style="color: #092477;" class="row justify-content-between">
                <div class="col-md-3">
                    <div class="qr mt-5">
                        <img src="/qr.png" alt="qr">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="invoice-content mt-5">

                        <div class="invoice-data-iss  d-flex justify-content-between">
                            <div>تاريخ امر البيع :</div>
                            <div>{{sellorder.created_at | moment("dddd, MMMM Do YYYY") }}</div>
                            <div dir="ltr">{{sellorder.created_at| moment("dddd, MMMM Do YYYY") }}</div>
                            <div dir="ltr">Sell Order date : </div>
                        </div>

                        <div class="invoice-data-supply mt-5 d-flex justify-content-between">
                            <div>رقم امر البيع : </div>
                            <div>{{sellorder.id}}</div>
                            <div dir="ltr">{{sellorder.id}}</div>
                            <div dir="ltr">Code Of order : </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <table class="table table-bordered">
                    <thead class="main-bill-thead">
                        <tr>
                            <th scope="col">العميل</th>
                            <th scope="col"></th>
                            <th scope="col"></th>

                            <th scope="col" class="text-start">Customer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>الاسم :</td>
                            <td>{{sellorder.customer.name}}</td>
                            <td>{{sellorder.customer.name}}</td>
                            <td class="text-start">: name</td>
                        </tr>
          
                        <tr>
                            <td>البلد :</td>
                            <td>{{sellorder.customer.country}}</td>
                            <td>{{sellorder.customer.country}}</td>
                            <td class="text-start"> : Country</td>
                        </tr>
                       <tr>
                            <td> العنوان :</td>
                            <td>{{sellorder.customer.address}}</td>
                            <td>{{sellorder.customer.address}}</td>
                            <td class="text-start"> : Address </td>
                        </tr>

                        <tr>
                            <td> رقم الهاتف :</td>
                            <td>{{sellorder.customer.phone}}</td>
                            <td>{{sellorder.customer.phone}}</td>
                            <td class="text-start"> : Phone No </td>
                        </tr>
                   
                    </tbody>
                </table>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="title-table">
                        <div class="row">
                            <div class="col-6">
                                <h5> عناصر امر البيع :</h5>

                            </div>
                            <div class="col-6 text-start">
                                <h5> : Sell rder items </h5>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
              <div class="row">
                <div class="col-12">
                    <table class="table table-bordered">

                        <thead>
                            <tr style="background-color: #F0E3CA; ">

                                 <th>
                                    Nature of goods<br /> or services <br> تفاصيل السلعة <br> أو الخدمة
                                </th>
                                <th>
                                    Quantity <br /> الكمية
                                </th>
                                <th>
                                    Unit Price<br /> سعر الوحدة
                                </th>
                                <th>
                                   Total<br /> الاجمالى
                                </th>

                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr   v-for="(item,index) in sellorder.sellorder_items" :key="index" >
                                <td>{{item.name }}</td>
                                <td>{{item.quantity }}</td>
                                <td>{{item.price}}</td>
                                <td>{{ item.quantity * item.price}}</td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row mt-5 mb-5">
                <div class="col-12 mt-5">
                    <table class="table table-bordered">
                        <thead class="main-bill-thead">
                            <tr>
                                <th scope="col">اجمالي المبلغ</th>
                                <th scope="col">{{sellorder.overall}}</th>
                                <th scope="col">{{sellorder.overall}}</th>
                                <th scope="col" class="text-start">Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>المدفوع</td>
                               <td>{{sellorder.paied}}</td>

                                <td>{{sellorder.paied}}</td>
                                <td class="text-start">Paied</td>
                            </tr>

                            <tr>
                                <td>الباقى</td>
                                <td>{{sellorder.overall - sellorder.paied}}</td>
                            
                                <td>{{sellorder.overall - sellorder.paied}}</td>
                                <td class="text-start">dept</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>











        </div>
    </div>




</template>

<script>
export default {

    mounted(){

      




        },

    props: ['sellorder'],

    data:function(){

        return {


            x:50
        }

    }
}

    
    

</script>
<style  scoped>

#app > nav {
    display: none !important;
}
body > div > div > div > div > div.col-lg-auto.col-1.p-0 > div {
    display: none !important;
}
body {
    font-family: 'Cairo', sans-serif;
    color: #092477;
}

.title-bill {
    padding-top: 20px;
}

.invoice-number,
.invoice-data-iss,
.invoice-data-supply {
    border: 1px solid #000;
    border-radius: 5px;
    line-height: 40px;
}

.invoice-number>div,
.invoice-data-iss>div,
.invoice-data-supply>div {
    flex: 1;
    margin: 10px;
    height: 100%;
    margin: 0 10px 0 10px;
    font-weight: bold;
}

.invoice-number>div:not(:last-child),
.invoice-data-iss>div:not(:last-child),
.invoice-data-supply>div:not(:last-child) {
    border-left: 1px solid;
    padding-left: 15px;
}

.title-table {
    padding: 5px 7px 3px 7px;
    border-radius: 5px;
    background-color: #102051;
    color: #fff;
}

.main-bill-thead tr {
    background-color: #102051 !important;
}

.main-bill-thead tr th {
    color: #fff;
}


/* bill two */

.title-name-seller,
.title-idress-seller,
.date {
    border-radius: 7px;
    border: 1px solid;
    margin-bottom: 20px;
    padding: 5px;
}

.title-name-seller {
    width: 250px;
    margin-right: 45px;
    background-color: #102051;
    color: #fff;
}

.title-idress-seller {
    width: 350px;
    margin: auto;
    color: #fff;
    background-color: #102051;
}

.date {
    width: 200px;
    padding: 7px;
    vertical-align: middle;
    color: #092477;
}

.date h5 {
    font-weight: 600;
}

table {
    border-radius: 10px !important;
    border-collapse: collapse !important;
}

table th,
table td {
    color: #092477;
}

.table-bill-two thead th {
    border-bottom: 1px dashed #ccc !important;
}

.table-bill-two tfoot td,
.table-bill-two tbody td {
    text-indent: 14px;
}

.table-bill-two tbody td {
    border-bottom: 1px dashed #ccc !important;
}

.tax {
    border: 1px solid;
    border-radius: 5px;
    padding: 10px;
    line-height: 2;
}

.tax h6 {
    display: inline-block;
    font-weight: bold;
}

.tax h6:first-child {
    width: 80%;
}

.tax h6:last-child {
    width: 10%;
    margin-right: 56px;
}

.qr {
    border: 1px solid;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 30px;
    width: 200px;
}

.qr img {
    display: inline-block;
    width: 90%;
    max-width: 90%;
    max-height: 90%;
    height: 95%;
}

.headr {
    padding-top: 18px;
    display: flex;
    justify-content: space-between;
}

.headr h6 {
    margin-bottom: 6px;
    font-size: 18px;
}

.headr p {
    margin-bottom: 4px;
    font-size: 14px;
}

.description .date {
    margin-right: 130px;
    width: 80%;
    padding-bottom: 10px;
}


table thead th {
        vertical-align: top !important;
}




</style>