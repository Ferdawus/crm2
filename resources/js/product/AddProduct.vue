<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Add Product
          </h3>
        </div>
      </div>
      <form action="" @submit.prevent="storeData()">
        <div class="row g-3 pt-4">
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Product Name" class="form-label text-white"
                >Product Name</label
              >
              <input
                type="text"
                class="form-control py-3"
                placeholder="Product Name"
                v-model="form.product_name"
              />
              <span v-if="errors.product_name" class="text-white">{{
                errors.product_name[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Category Name</label>
              <select
                class="form-select form-control"
                aria-label=".form-select-sm example"
                v-model="form.category_name"
              >
                <option selected>Category Select</option>
                <option
                  v-for="(category, index) in categories"
                  :key="index"
                  :value="category.id"
                >
                  {{ category.category_name }}
                </option>
              </select>
              <span v-if="errors.category_name" class="text-white">{{
                errors.category_name[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Code" class="form-label text-white">Code</label>
              <input
                type="text"
                class="form-control"
                placeholder="Code"
                v-model="form.code"
              />
              <span v-if="errors.code" class="text-white">{{
                errors.code[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Business Address" class="form-label text-white"
                >Business Address</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Business Address"
                v-model="form.business_address"
              />
              <span v-if="errors.business_address" class="text-white">{{
                errors.business_address[0]
              }}</span>
            </div>
          </div>
        </div>

        <div class="row g-3">
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Selling Price</label>
              <input
                type="number"
                class="form-control"
                placeholder="Selling Price"
                v-model="form.selling_price"
              />
              <span v-if="errors.selling_price" class="text-white">{{
                errors.selling_price[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Unit</label>
              <input
                type="number"
                class="form-control"
                placeholder="Unit"
                v-model="form.unit"
              />
              <span v-if="errors.unit" class="text-white">{{
                errors.unit[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Blank</label>
              <input
                type="text"
                class="form-control py-3"
                placeholder="Blank"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Blank</label>
              <input
                type="text"
                class="form-control py-3"
                placeholder="Blank"
              />
            </div>
          </div>
        </div>
        <div class="row pb-2">
          <div class="col-3">
            <div class="form-check form-check-lg">
              <input
                class="form-check-input"
                name="product_status"
                v-model="form.product_status"
                type="checkbox"
                value="1"
                id="flexCheckDefault"
              />
              <label class="form-check-label text-white" for="flexCheckDefault">
                Status
              </label>
            </div>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-md-12">
            <div class="mb-3">
              <label for="" class="form-label text-white"
                >Product Description</label
              >
              <textarea
                class="form-control"
                placeholder="Product Description"
                rows="3"
                v-model="form.product_description"
              ></textarea>
              <span v-if="errors.product_description" class="text-white">{{
                errors.product_description[0]
              }}</span>
            </div>
          </div>
        </div>
        <div class="pt-3">
          <v-btn
            :loading="loading[3]"
            :disabled="loading[3]"
            color="info"
            @click="storeData(3)"
          >
            Add New Product
            <template v-slot:loader>
              <span class="custom-loader">
                <v-icon light>mdi-cached</v-icon>
              </span>
            </template>
          </v-btn>
          <!-- <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Add Product"
          /> -->
        </div>
      </form>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      loading: [],
      form: {
        category_name: "",
        product_name: "",
        code: "",
        business_address: "",
        selling_price: "",
        unit: "",
        product_description: "",
        product_status: 0,
      },
      categories: [],
      errors: {},
    };
  },
  methods: {
    getCategoriesAll() {
      axios
        .get("/api/category")
        .then((res) => {
          this.categories = res.data.data;
          // console.log(res.data.data);
        })
        .catch((err) => {
          console.error(err);
        });
    },
    storeData(i) {
      this.loading[i] = true;
      setTimeout(() => (this.loading[i] = false), 3000);
      axios
        .post("/api/product/", this.form)
        .then((res) => {
          console.log(res);
          if (res.status === 201) {
            this.form.category_name = "";
            this.form.product_name = "";
            this.form.code = "";
            this.form.business_address = "";
            this.form.selling_price = "";
            this.form.unit = "";
            this.form.product_description = "";
            this.form.product_status = 0;
          }
        })
        .catch((err) => {
          this.errors = err.response.data.errors;
          console.error(err);
        });
    },
  },
  mounted() {
    this.getCategoriesAll();
  },
};
</script>
<style>
.btn_bg {
  background: linear-gradient(to right, #77a1d3 0%, #79cbca 51%, #77a1d3 100%);
}
.custom-loader {
  animation: loader 1s infinite;
  display: flex;
}
@-moz-keyframes loader {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes loader {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}
@-o-keyframes loader {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}
@keyframes loader {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}
</style>