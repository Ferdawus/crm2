<template lang="">
    <div>
        <div class="container pt-5">
           <div class="row">
                <div class="col-md-12 text-white">
                <div class="card">
                    <div class="card-header">
                        All Sales List
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Business Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Referrer Name</th>
                                <th scope="col">Product/Serviice Details</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(sale,index) in sales" :key="index">
                                    <th scope="row">{{ ++index }}</th>
                                    <td>{{ sale.customer_name }}</td>
                                    <td>{{ sale.customer_id }}</td>
                                    <td>{{ sale.business_name }}</td>
                                    <td>{{ sale.date }}</td>
                                    <td>{{ sale.referrer_name }}</td>
                                    <td class="text-center">
                                      <router-link :to="{ name: 'sales.website.list' }"><span v-if="sale.website == 1" class="text-white"> website </span></router-link>
                                      <router-link :to="{ name: 'sales.software.list'}"><span v-if="sale.software == 1" class="text-white"> software </span></router-link>
                                    </td>
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
      sales: [],
    };
  },
  methods: {
    fatchData() {
      axios
        .get("/api/sales")
        .then((res) => {
          this.sales = res.data.data;
          // console.log(res.data.data);
        })
        .catch((err) => {
          console.error(err);
        });
    },
  },
  mounted() {
    this.fatchData();
  },
};
</script>
<style lang="">
</style>