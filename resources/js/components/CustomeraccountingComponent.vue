<template>
    <div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">حساب العملاء</h3>
            </div>
            <div class="card-body">
                <div class="input-group mb-8">
                    <input @input="getcustomer(customername)" v-model="customername" type="text" class="form-control form-group col-md-4 mb-0" placeholder="اسم العميل">
                     <ul class="bg-white ul-search"  >
                          <li style="cursor:pointer;"  v-for="(customer,index) in customers" @click="updatecustomer(index)" :key="index" class="list-group-item">{{customer.name}}</li>
                   </ul>
                    <div class="input-group-text btn btn-primary">
                        <i class="fe fe-search" aria-hidden="true"></i>
                    </div>
                </div>

              <!--cards -->
              <div class="row mt-2">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card bg-primary img-card box-primary-shadow">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <h2 class="mb-0 number-font">{{totalpurchase.length}}</h2>
                                    <p class="text-white mb-0">عدد المشتروات</p>
                                </div>
                                <div class="ms-auto"> <i class="fe fe-shopping-cart text-white fs-30 me-2 mt-2"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card bg-secondary img-card box-secondary-shadow">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <h2 class="mb-0 number-font">{{customer.payments_count}}</h2>
                                    <p class="text-white mb-0">عدد القساط</p>
                                </div>
                                <div class="ms-auto"> <a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#paymentsmodel" @click="getcustomerpayments()" ><i  class="fe fe-eye text-white fs-30 me-2 mt-2"></i> </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card  bg-success img-card box-success-shadow">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <h2 class="mb-0 number-font">{{totalpurchaseprice}}</h2>
                                    <p class="text-white mb-0">اجمالى المشتريات</p>
                                </div>
                                <div class="ms-auto"> <i class="fe fe-shopping-cart text-white fs-30 me-2 mt-2"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card bg-info img-card box-info-shadow">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <h2 class="mb-0 number-font">{{havetopay}}</h2>
                                    <p class="text-white mb-0">المبلغ المستحق منه</p>
                                </div>
                                <div class="ms-auto"> <i class="fe fe-credit-card text-white fs-30 me-2 mt-2"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>
            <div class="row mt-3" >
                <div class="card-header">
                    <h1 class="card-title  text-center text-primary">البيانات الشخصيه</h1>
                </div>
                <div class="table-responsive col-12 ">
                    <table class="table border text-nowrap text-md-nowrap table-hover">
                        <thead>
                            <tr>
                                <th>الاسم بالكامل</th>
                                <th>رقم الهاتف</th>
                                <th>العنوان</th>
                                <th>تاريخ الاضافه</th>
                                <th>اعدادات</th>

                            </tr>
                        </thead>
                        <tbody>
                         <tr > 
                            <td >{{customer.name}}</td>
                            <td>{{customer.phone}}</td>
                            <td>{{customer.address}}</td>
                            <td>{{customer.created_at | moment("dddd, MMMM Do YYYY - h:mm:ss a")}}</td>

                            <td v-if="customer.id">
                                <button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
                                <button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-edit"></i></button>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>  
            </div>
            <div class="row " >
                <div class="card-header">
                    <h1 class="card-title  text-center text-primary">المشتريات</h1>
                </div>
                <div class="table-responsive col-12 ">
                    <table class="table border text-nowrap text-md-nowrap table-hover  ">
                        <thead>
                            <tr>
                                <th>اسم المنتجات</th>
                                <th>العدد </th>
                                <th>السعر الفردى</th>
                                <th>الاجمالى</th>
                                <th>تاريخ الشراء</th>
                                <th>اعدادات</th>
                            </tr>
                        </thead>
                        <tbody>
                         <tr v-for="item in totalpurchase " :key=item.id> 
                            <td>{{item.name}}</td>
                            <td>{{item.quantity}}</td>
                            <td>{{item.price}}</td>
                            <td>{{item.price * item.quantity}}</td>
                            <td>{{item.date | moment("dddd, MMMM Do YYYY - h:mm:ss a")}}</td>
                            <td>
                                <button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
                                <button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-edit"></i></button>
                                <button type="button" class="btn btn-icon  btn-vimeo"><i class="fe fe-eye"></i></button>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>  
            </div>

            <!-- ROW CLOSED -->    
            </div>
        </div>
    </div>
    <!-- Model to display payments of customer -->
    <div class="modal fade" id="paymentsmodel" >
    <div class="modal-dialog modal-xl text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title text center">{{  ' قساط '+  customer.name }}</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div v-if="!loaded" class="card-body">
                         <div class="dimmer active">
                                <div class="spinner1">
                                         <div class="double-bounce1"></div>
                                         <div class="double-bounce2"></div>
                                 </div>
                           </div>
                </div>
                <div v-if="loaded" class="table-responsive col-12 ">
                    <table class="table border text-nowrap text-md-nowrap table-hover  ">
                        <thead>
                            <tr>
                                <th>رقم القسط</th>
                                <th>القيمه  </th>
                                <th>تاريخ الدفع</th>
                                <th>الحاله</th>
                                <th>تحصيل </th>
                            </tr>
                        </thead>
                        <tbody>
                         <tr v-for="(payment,index) in payments " :key=payment.id> 
                            <td>{{index + 1}}</td>
                            <td>{{payment.value}}</td>
                            <td>{{payment.payat | moment("dddd, MMMM Do YYYY") }}</td>
                            <td  style="color:white">
                             <span v-if="payment.is_paied" class="badge bg-success badge-sm  me-1 mb-1 mt-1">تم الدفع</span>
                             <span v-if="!payment.is_paied && today > payment.payat  " class="badge bg-danger badge-sm  me-1 mb-1 mt-1">متاخر</span>
                             <span v-if="!payment.is_paied && today < payment.payat " class="badge bg-info badge-sm  me-1 mb-1 mt-1">مازال</span>
                            </td>
                            <td>
                                <button v-if="!payment.is_paied"  @click="payment_pay(payment)" type="button" class="btn btn-icon  btn-vimeo"><i class="fe fe-credit-card"></i></button>
                                <button v-if="payment.is_paied"  disabled @click="payment_pay(payment)" type="button" class="btn btn-icon  btn-vimeo"><i class="fe fe-credit-card"></i></button>

                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

                <pagination :align='aligen' :data="laraveldata" @pagination-change-page="getcustomerpayments"></pagination>




            </div>
        
        </div>
    </div>
</div>
</div>  
</template>

<script>

    export default {

        
        mounted() {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0');
            var yyyy = today.getFullYear();

            this.today = yyyy + '-' + mm + '-' + dd;
          
        },
        data(){
            return {
                customer:{payments_count:0},
                customers:[],
                customername:'',
                sellorders:[{}],
                totalpurchaseprice:0,
                totalpurchase:[],
                havetopay:0,
                loaded:false,
                payments:[],
                today:'',
                laraveldata:{},
                aligen:'center'
            }
        },

       









        methods:{
              payment_pay:function(payment){
                  axios.post('/payment_pay',{payment_id:payment.id})
                  .then(res => {
                      payment.is_paied = 1;

                  })
                  

              },
              getcustomer:function(customername){

                if(customername.length > 4){
                
                axios.post('/getcustomer',
                
                {customername:customername}
                )
                .then(res => {
                    
                    this.customers = res.data.customers;
                    
                })
            }
            },
            updatecustomer(index){
                this.customer = this.customers[index]
                this.customers = []
                this.customername =   this.customer.name
                let paied = 0;
                //Get sellorders  
                this.totalpurchaseprice = 0
                axios.get('/getsellorders/' + this.customer.id,{})
                .then(res => {
                    this.sellorders = res.data.sellorder
                    this.sellorders.forEach((sellorder) => {
                       this.totalpurchaseprice += sellorder.overall
                       paied  += sellorder.paied
                       sellorder.sellorder_items.forEach((item) =>{
                           item.date = sellorder.created_at
                           this.totalpurchase.push(item)
                       }) 
                    })

                    this.havetopay =  this.totalpurchaseprice - paied
                })
                .catch(err => {
                    console.error(err); 
                })
            },

            getcustomerpayments:function(page = 1){
                axios.get('/getcustomerpayments/' + this.customer.id + '?page=' + page)
                .then(res => {
                    this.payments = res.data.payments.data
                    this.laraveldata =res.data.payments
                   window.setInterval(() => {
                       this.loaded = true
                }, 1000);
                })
                
            }
        }

    }
</script>
