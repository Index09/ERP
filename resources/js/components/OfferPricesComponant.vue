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
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card bg-primary img-card box-primary-shadow">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <h2 class="mb-0 number-font">{{total}}</h2>
                                    <p class="text-white mb-0">اجمالى عدد عروض الاسعار</p>
                                </div>
                                <div class="ms-auto"> <i class="fe fe-shopping-cart text-white fs-30 me-2 mt-2"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card bg-secondary img-card box-secondary-shadow">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="text-white">
                                    <h2 class="mb-0 number-font">{{totalvalue}}</h2>
                                    <p class="text-white mb-0">اجمالى قيمه عروض الاسعار </p>
                                </div>
                                <div class="ms-auto"> <a data-bs-effect="effect-scale" data-bs-toggle="modal" href="#paymentsmodel" ><i  class="fe fe-eye text-white fs-30 me-2 mt-2"></i> </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>
        </div>
        <div class="raw">
            <div class="card-header">
                                        <h3 class="card-title text-center text-blue">عروض الاسعار</h3>
                                    </div>
            <div class="table-responsive">
                <table class="table table-vcenter ">
                    <thead>
                        <tr class="border-top">
                            <th>اسم العميل</th>
                            <th>اجمالى قيمه عرض السعر</th>
                            <th>عدد المنتجات</th>
                            <th>تاريخ</th>
                            <th>فاتوره </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr  v-for="(offerprice,index) in offerprices" :key="index">
                            <td>{{}}</td>
                            <td>{{offerprice.overall}}</td>
                            <td>{{offerprice.sellorder_items_sum_quantity}}</td>      
                            <td>{{offerprice.created_at | moment("dddd, Do MMMM YYYY - h:mm:ss a")}}</td>    
     
                            <td>
                                <button @click="print(offerprice.id)" type="button" class="btn btn-icon  btn-vimeo"><i class="fe fe-eye"></i></button>
                            </td>  
                        </tr>
                    </tbody>
                </table>
                      <pagination :align='aligen' :data="laraveldata" @pagination-change-page="getsellorders"></pagination>

            </div>

        </div>
    </div>
</div>




</div>

</template>


<script>

 
export default {

    

    mounted(){

        this.getOfferPrices();
        
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

            window.open('/offerprice/' + id)
        },


        sellorder_delete:function(index){
            let id = this.offerprices[index].id
            axios.delete(`/sellorder/${id}`,)
           .then(res => {
               this.sellorders.splice(index,1)

           })
        },

        setcustomerdata:function(customer){
            this.customer_object = customer;
        },

        getOfferPrices:function(page = 1){
            axios.get('/getofferprices?page=' + page)
            .then(res => {
            this.offerprices = res.data.offerprices.data
            this.laraveldata =res.data.offerprices
          //  this.total = res.data.offerprices.total
            this.totalvalue = res.data.sum
        })
        }

    },

    




}

</script>
