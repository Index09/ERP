<template>
    <div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">المبيعات</h3>
            </div>
            <div class="card-body">
          

              <!--cards -->
              <div class="row mt-2">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="card bg-primary img-card box-primary-shadow">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <h2 class="mb-0 number-font">{{total}}</h2>
                                    <p class="text-white mb-0">اجمالى عدد المبيعات</p>
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
                                    <h2 class="mb-0 number-font">{{totalvalue}}</h2>
                                    <p class="text-white mb-0">اجمالى قيمه عدد المبيعات</p>
                                </div>
                                <div class="ms-auto"> <a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#paymentsmodel" ><i  class="fe fe-eye text-white fs-30 me-2 mt-2"></i> </a></div>
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
                                    <h2 class="mb-0 number-font">{{latsmonthtotal}}</h2>
                                    <p class="text-white mb-0">مبيعات اخر شهر</p>
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
                                    <h2 class="mb-0 number-font">{{latsmonthtotalvalue}}</h2>
                                    <p class="text-white mb-0">اجمالى مبيعات اخر شهر</p>
                                </div>
                                <div class="ms-auto"> <i class="fe fe-credit-card text-white fs-30 me-2 mt-2"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>

            <!-- ROW CLOSED -->    
        </div>
    

                     <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title text-center text-blue">اجمالى مبيعات السنادى</h3>
                                    </div>
                                     <div class="card-body">
                                        <div class="chart-container">
                                            <div id='chart'></div>
                                        </div>
                                    </div>
                                </div>
        <div class="raw">
            <div class="card-header">
                                        <h3 class="card-title text-center text-blue">المبيعات</h3>
                                    </div>
            <div class="table-responsive">
                <table class="table table-vcenter ">
                    <thead>
                        <tr class="border-top">
                            <th>اسم العميل</th>
                            <th>اجمالى قيمه امر البيع</th>
                            <th>عدد المنتجات</th>
                            <th>تاريخ امر البيع</th>
                            <th>المبلغ المتبقى</th>
                            <th>فاتوره - تحصيل</th>
    
                        </tr>
                    </thead>
                    <tbody>

                        <tr  v-for="(sellorder,index) in sellorders" :key="index">
                            <td>{{sellorder.customer.name}}</td>
                            <td>{{sellorder.overall}}</td>
                            <td>{{sellorder.sellorder_items_sum_quantity}}</td>      
                            <td>{{sellorder.created_at | moment("dddd, MMMM Do YYYY - h:mm:ss a")}}</td>    
                            <td>{{sellorder.overall - sellorder.paied }}</td>    
                            <td>
                                <button @click="print(sellorder.id)" type="button" class="btn btn-icon  btn-vimeo"><i class="fe fe-eye"></i></button>
                                <button @click ='setsellorder(sellorder)' data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8" type="button" class="btn btn-icon  btn-vimeo"><i class="fe fe-credit-card"></i></button>

                            </td>  
                        </tr>
                    </tbody>
                </table>
                      <pagination :align='aligen' :data="laraveldata" @pagination-change-page="getsellorders"></pagination>

            </div>

        </div>
    </div>
</div>
    <div class="modal fade" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">تحصيل باقى فاتوره امر بيع</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                          <label class="col-md-3 form-label">قيمه التحصيل</label>
                <div class="col-md-9">
                    <input v-model="cashvalue" id='cash' :max='this.sellorder.overall - this.sellorder.paied ' type="number" class="form-control" placeholder="ادخل قيمه التحصيل">
                </div>
               
            </div>
            <div  class="text-center modal-footer text-center">
                <button @click="sellordergetcash()"  class=" text-center btn btn-primary">تحصيل</button> <button id='hidemodel' class="btn btn-light" data-bs-dismiss="modal">الغاء</button>
            </div>
        </div>
    </div>
</div>



</div>

</template>


<script>

 
export default {

    

    mounted(){

        this.getsellorders();

         axios.get('/getmonthsells')
        .then(res => {

           this.monthssells = res.data.sellsmonths

           this.monthssells.forEach((sell)=>{
           this.monthssellsarray.push(sell.sells)
           })
           var options = {
          series: [{
            name: "المبيعات",
            data:  this.monthssellsarray
        }],
          chart: {
          height: 400,
          type: 'line',
          zoom: {
            enabled: true
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        title: {
          text: 'اجمالى مبيعات سنه 2022',
          align: 'center'
        },
        grid: {
          row: {
            colors: ['transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'اغسطس', 'سبتمبر','اكتوبر','نوفمبر','ديسمبر'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        })
       
        

        
            

        
    },

    data(){
        return {
            sellorders:[],
            sellorder_id:0,
            sellorder_object:{},
            sellorder:{},
            index:0,
            laraveldata:{},
            aligen:'center',
            total:0,
            totalvalue:0,
            latsmonthtotal:0,
            latsmonthtotalvalue:0,
            monthssells:[],
            monthssellsarray:[],
            cashvalue:0
        }
    },

    

    methods:{

        print:function(id){

            window.open('/sellorder/' + id)
        },

        setsellorder:function(sellorder){
            this.sellorder = sellorder
        },
        
        sellordergetcash:function(){

            axios.post('sellordergetcash',{id:this.sellorder.id,cash:this.cashvalue})
            .then(res => {
                this.sellorder.overall -= this.cashvalue
                window.$("#hidemodel").click(); 
            })
            
        },

        //delete csusomer   request

        sellorder_delete:function(index){
            axios.post('/sellorder_delete',{sellorder_id:this.sellorder_id})
           .then(res => {
               this.sellorders.splice(index,1)

           })

        },

        setinvintory_id(id,index,){
            this.customer_id = id
            this.index = index
            
        },
        setcustomerdata:function(customer){
            this.customer_object = customer;

        },

        getsellorders:function(page = 1){
            axios.get('/getsellorders?page=' + page)
            .then(res => {
            this.sellorders = res.data.sellorders.data
            this.laraveldata =res.data.sellorders
            this.total = res.data.sellorders.total
            this.totalvalue = res.data.sum
            this.latsmonthtotal = res.data.lastmonthtotal
            this.latsmonthtotalvalue = res.data.lastmonthtotalvalue
            

        })
        }

    },

    




}

</script>
