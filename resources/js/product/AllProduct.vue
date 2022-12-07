<template lang="">
    <div>
        <div class="container pt-5">
           <div class="row">
                <div class="col-md-12 text-white">
                <div class="card">
                    <div class="card-header">
                        All Product List
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">category_name</th>
                                <th scope="col">product_name</th>
                                <th scope="col">business_address</th>
                                <th scope="col">code</th>
                                <th scope="col">selling_price</th>
                                <th scope="col">unit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(product,index) in products" :key="index">
                                    <th scope="row">{{ ++index }}</th>
                                    <td>{{ product.category_name }}</td>
                                    <td>{{ product.product_name }}</td>
                                    <td>{{ product.business_address}}</td>
                                    <td>{{ product.code}}</td>
                                    <td>{{ product.selling_price}}</td>
                                    <td>{{ product.unit}}</td>
                                </tr>
                            </tbody>
                           </table>
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
  data() {
    return {
      products: [],
    };
  },
  methods: {
    fachData() {
      axios
        .get("/api/product")
        .then((res) => {
          this.products = res.data.data;
          console.log(res.data);
        })
        .catch((err) => {
          console.error(err);
        });
    },
  },
  mounted() {
    this.fachData();
  },
};
</script>
<style lang="">
</style>