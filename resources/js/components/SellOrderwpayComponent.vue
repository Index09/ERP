<template>
  
<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">امر بيع -تقسيط</h3>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input @input="getcustomer(customername)" v-model="customername" type="text" class="form-control form-group col-md-4 mb-0" placeholder="اسم العميل">
                     <ul class="bg-white ul-search" >
                          <li style="cursor:pointer;"  v-for="(customer,index) in customers" @click="updatecustomer(index)" :key="index" class="list-group-item">{{customer.name}}</li>
                   </ul>
                    <div class="input-group-text btn btn-primary">
                        <i class="fe fe-search" aria-hidden="true"></i>
                    </div>
                   
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-5 mb-0">
                        <label class="col-md-6 ">رقم الهاتف</label>
                        <input v-model="customer.phone"  disabled type="text" class="form-control col-md-3 " id="phone" >

                        <div class="form-row">
                        </div>
                    </div>
                    <div class="form-group col-md-5 mb-0">
                        <label class="col-md-6 ">العنوان</label>
                        <input v-model="customer.address"  disabled type="text" class="form-control col-md-3" id="address" >

                    
                    </div>
                 
                 
                </div>

                <div class=" col-xl-8">
                    <div class="">
                        <div class="card-header">
                            <h3 class="card-title">المنتجات </h3>
                        </div>
                        <div class="card-body card ">
                            <div class="table-responsive ">
                                <table class="table border text-nowrap text-md-nowrap table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>اسم المنتج</th>
                                            <th>الكميه</th>
                                            <th>السعر الفردى</th>
                                            <th>الكلى</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                     <tr v-for="(product,index) in products " :key=product.id> 

                                            <td><input placeholder="ادخل الاسم" v-model="product.name" type="text" class="form-control"></td>
                                            <td><input @input="calcoverall()" placeholder="ادخل الكميه" v-model="product.quantity" type="text" class="form-control"></td>
                                            <td><input @input="calcoverall()" placeholder="ادخل السعر الفردى" v-model="product.price" type="text" class="form-control"></td>
                                            <td><input  :value="product.quantity * product.price  ?  product.quantity * product.price:0 " type="text" class="form-control"></td>
                                            <td><button @click="removeproduct(index)"  type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button></td>
                                        </tr>
                           
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-footer  col-lg-12">
                                <div class="col-md-3 align-items-center">
                                    <button @click="addproduct()" class="btn btn-primary">اضافه <span style="width: 16px; ">+</span></button>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    

                    <div class="card-body card ">
                          <div class="table-responsive ">
                            <table class="table border text-nowrap text-md-nowrap  mb-0">
                                <thead>
                                    <tr>
                                        <th>المقدم</th>
                                        <th>نسبه التقسيط</th>
                                        <th>عدد الشهور</th>
                             
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr > 
                                        <td><input v-model="paied" type="text" class="form-control" placeholder="ادخل المدفوع"></td>
                                        <td><input v-model ='packagesetting.precantage' type="number" class="form-control" max=100></td>
                                        <td><input v-model="months"  type="number" class="form-control" max=100></td>
                                        
                                    </tr>
                         
                                </tbody>
                            </table>
                        </div>
                          <div class="table-responsive ">
                            <table class="table border text-nowrap text-md-nowrap text-center  mb-0">
                                <thead>
                                    <tr>
                                   
                                        <th>الكلى </th>
                                        <th>الباقى</th>
                                        <th>قيمه القسط الشهرى</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr > 
        
                                        <td>{{overall}} </td>
                                        <td>{{overall - paied ? (overall - paied) + (overall - paied) * packagesetting.precantage/100 :0 }}</td>
                                        <td>{{Math.floor((( overall - paied) + (overall - paied) * packagesetting.precantage/100) / this.months ) }} </td>
                                        
                                    </tr>
                         
                                </tbody>
                            </table>
                        </div>

                    </div>
                      <div class="form-footer mt-2">
                            <div class="form-footer mt-2 align-items-center">
                            <div class="col-md-9 align-items-center">
                                <button @click="savesellorder()" class="btn btn-primary">حفظ</button>
                                <a href="/dashboard" class="btn btn-secondary">الرجوع</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</template>

<script>
    export default {
    
        mounted() {

            // get package  ->settings       

            axios.get('/getpackagesetting',)
            .then(res => {
                console.log(res)
                this.packagesetting = res.data.setting


            })

        },
        data(){
            return {

                products:[{}],
                customer:{},
                customers:[],
                customername:'',
                overall:0,
                paied:'',
                packagesetting:{},
                months:12
            }
        },

        methods:{
            addproduct:function(){
                this.products.push({})
            },
            removeproduct:function(index){
                this.products.splice(index,1)

            },

            getcustomer:function(customername){

                if(customername.length > 4){
                
                axios.post('getcustomer',
                
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
            },
            calcoverall:function(){
                this.overall = 0
                this.products.forEach((product) => {
            

                  this.overall += product.quantity * product.price
                });

               




            },
            savesellorder:function(){

            
                axios.post('/sellorderwapy_create',

                {
                    customer_id:this.customer.id,
                    overall:this.overall,
                    paied:this.paied,
                    products:JSON.stringify(this.products),
                    months:this.months,
                    precantage: this.packagesetting.precantage


                }
             
                
                
                
                )
                .then(res => {
                    
            Swal.fire(
            'تم الاضافه',''
            ,
            'success'
            )
            window.setInterval(() => {

             //   window.location.href = '/home'
             console.log(res.data)
                
            }, 1000);
            
            })
                .catch(err => {
                    console.error(err); 
                })
            }
        }
      
    }
</script>
