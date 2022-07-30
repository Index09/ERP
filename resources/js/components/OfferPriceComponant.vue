<template>
  <div class="row">
    <div class="col-md-12 col-xl-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">عرض سعر</h3>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <input
              @input="getcustomer(customername)"
              v-model="customername"
              type="text"
              class="form-control form-group col-md-4 mb-0"
              placeholder="اسم العميل"
            />
            <ul class="bg-white ul-search">
              <li
                style="cursor: pointer"
                v-for="(customer, index) in customers"
                @click="updatecustomer(index)"
                :key="index"
                class="list-group-item"
              >
                {{ customer.name }}
              </li>
            </ul>
            <div class="input-group-text btn btn-primary">
              <i class="fe fe-search" aria-hidden="true"></i>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6 mb-0">
              <label class="col-md-6">رقم الهاتف</label>
              <input
                v-model="customer.phone"
                disabled
                type="text"
                class="form-control col-md-3"
                id="phone"
              />

              <div class="form-row"></div>
            </div>
            <div class="form-group col-md-6 mb-0">
              <label class="col-md-6">العنوان</label>
              <input
                v-model="customer.address"
                disabled
                type="text"
                class="form-control col-md-3"
                id="address"
              />
            </div>
          </div>

          <div class="col-xl-8">
            <div class="">
              <div class="card-header">
                <h3 class="card-title">المنتجات</h3>
              </div>
              <div class="card-body card">
                <div class="table-responsive">
                  <table
                    class="
                      table
                      border
                      text-nowrap text-md-nowrap
                      table-hover
                      mb-0
                    "
                  >
                    <thead>
                      <tr>
                        <th>اسم المنتج</th>
                        <th>باركود</th>
                        <th>الكميه</th>
                        <th>السعر الفردى</th>
                        <th>الكلى</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        v-for="(product, productIndex) in products"
                        :key="productIndex"
                      >
                        <td>
                          <input
                            @input="getProducts(product.name)"
                            placeholder="ادخل الاسم"
                            v-model="product.name"
                            type="text"
                            class="form-control"
                          />
                          <ul class="bg-white ul-search" style="">
                            <li
                              style="cursor: pointer"
                              v-for="(product, index) in productsSearch"
                              @click="UpdateProduct(index, productIndex)"
                              :key="index"
                              class="list-group-item"
                            >
                              {{ product.name }}
                            </li>
                          </ul>
                        </td>
                        <td>
                          <input
                            placeholder="مسح"
                            v-model="product.barcode"
                            type="text"
                            class="form-control"
                          />
                        </td>

                        <td>
                          <input
                            @input="calcoverall()"
                            placeholder="ادخل الكميه"
                            v-model="product.quantity"
                            type="text"
                            class="form-control"
                          />
                        </td>
                        <td>
                          <input
                            @input="calcoverall()"
                            placeholder="ادخل السعر الفردى"
                            v-model="product.sell_price"
                            type="text"
                            class="form-control"
                          />
                        </td>
                        <td>
                          <input
                            :value="
                              product.quantity * product.sell_price
                                ? product.quantity * product.sell_price
                                : 0
                            "
                            type="text"
                            class="form-control"
                          />
                        </td>
                        <td>
                          <button
                            @click="removeproduct(index)"
                            type="button"
                            class="btn btn-icon btn-danger"
                          >
                            <i class="fe fe-trash"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="form-footer col-lg-12">
                  <div class="col-md-3 align-items-center">
                    <button @click="addproduct()" class="btn btn-primary">
                      اضافه <span style="width: 16px">+</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-body card">
              <div class="table-responsive">
                <table
                  class="
                    table
                    border
                    text-nowrap text-md-nowrap
                    table-hover
                    mb-0
                  "
                >
                  <thead>
                    <tr>
                      <th>نسبه الخصم</th>
                      <th>الضريبه المضافه</th>
                      <th>الاجمالى</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input
                          @input="calcoverall()"
                          v-model="discount"
                          type="number"
                          min="0" max="100"
                          class="form-control"
                          placeholder="ادخل نسبه الخصم "
                        />
                      </td>
                      <td>
                        <input
                          @input="calcoverall()"
                          v-model="TaxPrecantage"
                          type="number"
                          class="form-control"
                          min="0" max="100"
                        />
                      </td>
                      <td>
                        <input
                          :value="overall ? overall:0"
                          disabled
                          type="text"
                          class="form-control"
                        />
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="form-footer mt-2">
              <div class="form-footer mt-2 align-items-center">
                <div class="col-md-9 align-items-center">
                  <button @click="savesellorder()" class="btn btn-primary">
                    حفظ
                  </button>
                  <a href="/home" class="btn btn-secondary">الرجوع</a>
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
  mounted() {},
  data() {
    return {
      products: [{}],
      productsSearch: [],
      customer: {id:null},
      customers: [],
      customername: "",
      overall: 0,
      discount: 0,
      TaxPrecantage: 14,
    };
  },
  computed: {
    
  },
  methods: {
    calcoverall() {

      this.overall = 0;
      this.products.forEach((product) => {
        this.overall += product.quantity * product.sell_price;
      });

      this.overall = this.overall -  (this.overall * (this.discount/100)) //applay  discount

      this.overall = this.overall +  (this.overall * (this.TaxPrecantage/100)) //applay taxes

      return this.overall ;
    },
    getProducts(productName) {
      if (productName.length > 4) {
        axios.get(`GetProductsSearch/?name=${productName}`, {}).then((res) => {
          this.productsSearch = res.data.products;
        });
      }
    },

    UpdateProduct(index, productIndex) {
      this.products[productIndex] = this.productsSearch[index];
      this.productsSearch = [];
    },

    addproduct: function () {
      this.products.push({});
    },
    removeproduct: function (index) {
      this.products.splice(index, 1);
    },

    getcustomer: function (customername) {
      if (customername.length > 4) {
        axios
          .get(
            `getcustomer?name=${customername}`,
          )
          .then((res) => {
            this.customers = res.data.customers;
          });
      }
    },
    updatecustomer(index) {
      this.customer = this.customers[index];
      this.customers = [];
      this.customername = this.customer.name;
    },
    savesellorder: function () {
      axios
        .post("/offerprice", {
          customer_id: this.customer.id,
          overall: this.overall,
          taxes: this.TaxPrecantage,
          discount: parseInt(this.discount),
          products: JSON.stringify(this.products),
        })
        .then((res) => {
       //   window.location.href = '/home'
        })
    },
  },
};
</script>
