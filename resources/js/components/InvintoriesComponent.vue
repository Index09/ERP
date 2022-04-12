<template>
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="card cart">
            <div class="card-header">
                <h3 class="card-title text-success">المخازن</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-vcenter">
                        <thead>
                            <tr class="border-top">
                                <th>الاسم</th>
                                <th>العنوان</th>
                                <th>رقم السجل التجارى</th>
                                <th class="">عدد المنتجات</th>

                                <th>اعدادات</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr v-for="(invintory,index) in invintories" :key=index>
                                <td>{{invintory.name}}</td>
                                <td>{{invintory.address}}</td>
                                <td>{{invintory.tax_number}}</td>      
                                <td>{{invintory.invintory_items_sum_quantity}}</td>       
                                <td style="col-2">
                                    <div class=" d-flex g-2">
                                        <a @click="setinvintory_id(invintory.id,index)" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8" class="btn text-secondary bg-secondary-transparent btn-icon py-1 me-2"  data-bs-original-title="تعديل"><span class="bi fe fe-edit fs-16"></span></a>
                                        <a @click="setinvintory_id(invintory.id,index)" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#delete_model" class="btn text-danger bg-danger-transparent btn-icon py-1"  data-bs-original-title="حذف"><span class="bi bi-trash fs-16"></span></a>
                                    </div>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">اضافه رصيد</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
               
            </div>
            <div  class="text-center modal-footer text-center">
                <button  class=" text-center btn btn-primary">تعديل</button> <button class="btn btn-light" data-bs-dismiss="modal">الغاء</button>
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
                               <button @click="invintory_delete()" data-bs-dismiss="modal"  class=" text-center btn btn-danger">حذف</button> 
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

        //Get Products

        axios.get('/getinvintories')
        .then(res => {
            this.invintories = res.data.invintories
        })
    },

    methods:{

        //delete invintory request

        invintory_delete:function(index){
            axios.post('/invintory_delete',{invintory_id:this.invintory_id})
           .then(res => {
               this.invintories.splice(index,1)

           })

        },
        setinvintory_id(id,index){
            this.invintory_id = id
            this.index = index
            console.log(id + 'das' + index)
        }

    },

    data(){
        return {
            invintories:[],
            invintory_id:0,
            index:0,
        }
    }




}

</script>
