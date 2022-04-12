<template>
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="card cart">
            <div class="card-header">
                <h3 class="card-title text-success">العملاء</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-vcenter ">
                        <thead>
                            <tr class="border-top">
                                <th>الاسم</th>
                                <th>العنوان</th>
                                <th>رقم الهاتف</th>
                                <th class="col-1" >عدد المشتريات</th>
                                <th class="col-2">اجمالى قيمه المشتريات</th>
                                <th class="">عدد الاقساط</th>
                                <th class="col-2">تاريخ الاضافه</th>
                                <th>اعدادات</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr v-for="(customer,index) in customers" :key=index>
                                <td>{{customer.name}}</td>
                                <td>{{customer.address}}</td>
                                <td>{{customer.phone}}</td>      
                                <td>{{customer.sellorders_count}}</td>       
                                <td>{{customer.sellorders_sum_overall ?  customer.sellorders_sum_overall:0}}</td>       
                                <td>{{customer.payments_count}}</td>       
                                <td>{{customer.created_at | moment("dddd , MMMM Do YYYY")}}</td>       
                                <td style="col-2">
                                    <div class=" d-flex g-2">
                                        <a @click="setcustomerdata(customer)"  data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8" class="btn text-secondary bg-secondary-transparent btn-icon py-1 me-2"  data-bs-original-title="تعديل"><span class="bi fe fe-edit fs-16"></span></a>
                                        <a @click="setcustomer_id(customer.id,index)"  data-bs-effect="effect-scale" data-bs-toggle="modal" href="#delete_model" class="btn text-danger bg-danger-transparent btn-icon py-1"  data-bs-original-title="حذف"><span class="bi bi-trash fs-16"></span></a>
                                    </div>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

            <pagination :align='aligen' :data="laraveldata" @pagination-change-page="getcustomers"></pagination>

    </div>

    <div class="modal fade" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">تعديل بيانات عميل</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                    <label  class="col-md-3 form-label">الاسم</label>
                <div class="col-md-9">
                    <input v-model="customer_object.name"  type="text" class="form-control">
                </div>
                  <label class="col-md-3 form-label">العنوان</label>
                <div class="col-md-9">
                    <input v-model="customer_object.address"  type="text" class="form-control" >
                </div>
                  <label class="col-md-3 form-label">رقم الهاتف</label>
                <div class="col-md-9">
                    <input v-model="customer_object.phone"  type="text" class="form-control">
                </div>
                <label class="col-md-3 form-label">الرقم القومى </label>
                <div class="col-md-9">
                    <input v-model="customer_object.naid"  type="text" class="form-control">
                </div>
            </div>
            <div  class="text-center modal-footer text-center">
                <button @click="customer_update()"  class=" text-center btn btn-primary">تعديل</button> <button class="btn btn-light" data-bs-dismiss="modal">الغاء</button>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="delete_model">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">هل انت متأكد من حذف المنتج ؟</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                               <button @click="customer_delete()" data-bs-dismiss="modal"  class=" text-center btn btn-danger">حذف</button> 
                               <button class="btn btn-light" data-bs-dismiss="modal">الغاء</button>

            </div>
        
        </div>
    </div>
</div>
</div>
</template>

<script>

export default {

    mounted(){

        this.getcustomers();

        
    },

    data(){
        return {
            customers:[],
            customer_id:0,
            customer_object:{},
            index:0,
            laraveldata:{},
            aligen:'center',
        }
    },

    

    methods:{

        //delete csusomer   request

        customer_delete:function(index){
            axios.post('/customer_delete',{customer_id:this.customer_id})
           .then(res => {
               this.customers.splice(index,1)

           })

        },
        customer_update:function(index){
            axios.post('/customer_update',{customer: JSON.stringify(this.customer_object)})
           .then(res => {
                Swal.fire(
                    'تم التعديل',''
                    ,
                    'success'
            )

               

           })

        },
        setinvintory_id(id,index,){
            this.customer_id = id
            this.index = index
            
        },
        setcustomerdata:function(customer){
            this.customer_object = customer;

        },

        getcustomers:function(page = 1){
            axios.get('/getcustomers?page=' + page)
            .then(res => {
            this.customers = res.data.customers.data
            this.laraveldata =res.data.customers

        })
        }

    },

    




}

</script>
