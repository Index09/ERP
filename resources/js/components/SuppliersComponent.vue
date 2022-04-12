<template>
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="card cart">
            <div class="card-header">
                <h3 class="card-title text-success">المورديين</h3>
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
                                <th class="col-2">تاريخ الاضافه</th>
                                <th>اعدادات</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr v-for="(supplier,index) in suppliers" :key=index>
                                <td>{{supplier.name}}</td>
                                <td>{{supplier.address}}</td>
                                <td>{{supplier.phone}}</td>      
                                <td>{{0}}</td>       
                                <td>{{supplier.purchaseorder_sum_overall ?  customer.purchaseorder_sum_overall:0}}</td>       
                                <td>{{supplier.created_at | moment("dddd , MMMM Do YYYY")}}</td>       
                                <td style="col-2">
                                    <div class=" d-flex g-2">
                                        <a @click="setsupplierdata(supplier)"  data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8" class="btn text-secondary bg-secondary-transparent btn-icon py-1 me-2"  data-bs-original-title="تعديل"><span class="bi fe fe-edit fs-16"></span></a>
                                        <a @click="setsupplier_id(supplier.id,index)"  data-bs-effect="effect-scale" data-bs-toggle="modal" href="#delete_model" class="btn text-danger bg-danger-transparent btn-icon py-1"  data-bs-original-title="حذف"><span class="bi bi-trash fs-16"></span></a>
                                    </div>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

            <pagination :align='aligen' :data="laraveldata" @pagination-change-page="getsuppliers"></pagination>

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
                    <input v-model="supplier_object.name"  type="text" class="form-control">
                </div>
                  <label class="col-md-3 form-label">العنوان</label>
                <div class="col-md-9">
                    <input v-model="supplier_object.address"  type="text" class="form-control" >
                </div>
                  <label class="col-md-3 form-label">رقم الهاتف</label>
                <div class="col-md-9">
                    <input v-model="supplier_object.phone"  type="text" class="form-control">
                </div>
                <label class="col-md-3 form-label">الرقم القومى </label>
                <div class="col-md-9">
                    <input v-model="supplier_object.naid"  type="text" class="form-control">
                </div>
            </div>
            <div  class="text-center modal-footer text-center">
                <button @click="supplier_update()"  class=" text-center btn btn-primary">تعديل</button> <button class="btn btn-light" data-bs-dismiss="modal">الغاء</button>
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
                               <button @click="supplier_delete()" data-bs-dismiss="modal"  class=" text-center btn btn-danger">حذف</button> 
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

        this.getsuppliers();

        
    },

    data(){
        return {
            suppliers:[],
            supplier_id:0,
            supplier_object:{},
            index:0,
            laraveldata:{},
            aligen:'center',
        }
    },

    

    methods:{

        //delete csusomer   request

        customer_delete:function(index){
            axios.post('/supplier_delete',{supplier_id:this.supplier_id})
           .then(res => {
               this.suppliers.splice(index,1)

           })

        },
        supplier_update:function(index){
            axios.post('/supplier_update',{supplier: JSON.stringify(this.supplier_object)})
           .then(res => {
                Swal.fire(
                    'تم التعديل',''
                    ,
                    'success'
            )

               

           })

        },
        setinvintory_id(id,index,){
            this.supplier_id = id
            this.index = index
            
        },
        setcustomerdata:function(supplier){
            this.supplier_object = supplier;

        },

        getsuppliers:function(page = 1){
            axios.get('/getsuppliers?page=' + page)
            .then(res => {
            this.suppliers = res.data.suppliers.data
            this.laraveldata =res.data.suppliers

        })
        }

    },

    




}

</script>
