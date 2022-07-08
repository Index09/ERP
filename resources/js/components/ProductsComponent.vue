<template>
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="card cart">
            <div class="card-header">
                <h3 class="card-title text-success">المنتجات</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-vcenter">
                        <thead>
                            <tr class="border-top">
                                <th>المنتج</th>
                                <th>الاسم</th>
                                <th>الوصف</th>
                                <th>سعر الشراء</th>
                                <th>سعر البيع</th>
                                <th>اعدادات</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr v-for="(product,index) in products" :key=index>
                                <td>
                                    <div class="text-center">
                                        <img :src="'/images/products/' + product.picture" alt="" class="cart-img text-center">
                                    </div>
                                </td>
                                <td>{{product.name}}</td>
                                <td>{{product.disc}}</td>
                                <td class="fw-bold col-1">{{product.sell_price}}</td>
                                <td class="fw-bold col-1">{{product.buy_price}}</td>
                                <td style="col-2">
                                    <div class=" d-flex g-2">
                                        <a @click="setproduct_id(product.id,index)" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8" class="btn text-secondary bg-secondary-transparent btn-icon py-1 me-2"  data-bs-original-title="تعديل"><span class="bi fe fe-edit fs-16"></span></a>
                                        <a @click="setproduct_id(product.id,index)" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#delete_model" class="btn text-danger bg-danger-transparent btn-icon py-1"  data-bs-original-title="حذف"><span class="bi bi-trash fs-16"></span></a>
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
                               <button @click="product_delete()" data-bs-dismiss="modal"  class=" text-center btn btn-danger">حذف</button> 
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

        axios.get('/getproducts')
        .then(res => {
            this.products = res.data.products
        })
    },

    methods:{

        //delete product request

        product_delete:function(index){
            axios.post('/product_delete',{product_id:this.product_id})
           .then(res => {
               this.products.splice(index,1)

           })

        },
        setproduct_id(id,index){
            this.product_id = id
            this.index = index
        }

    },

    data(){
        return {
            products:[],
            product_id:0,
            index:0,
        }
    }




}

</script>
