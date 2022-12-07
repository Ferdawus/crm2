<template lang="">
    <div>
        <div class="container pt-5">
           <div class="row">
                <div class="col-md-12 text-white">
                <div class="card">
                    <div class="card-header">
                        All Customer List
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Business Name</th>
                                <th scope="col">Business Address</th>
                                <th scope="col">City</th>
                                <th scope="col">Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(customer,index) in customers" :key="index">
                                    <th scope="row">{{ ++index }}</th>
                                    <td>{{ customer.customer_name }}</td>
                                    <td>{{ customer.phone }}</td>
                                    <td>{{ customer.business_name }}</td>
                                    <td>{{ customer.business_address }}</td>
                                    <td>{{ customer.city }}</td>
                                    <td>{{ customer.country }}</td>
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
      customers: [],
    };
  },
  mounted() {
    this.fatchData();
  },
  methods: {
    fatchData() {
      axios
        .get("/api/customer")
        .then((res) => {
          console.log(res.data.data);
          this.customers = res.data.data;
        })
        .catch((err) => {
          console.error(err);
        });
    },
  },
};
</script>
<style lang="">
</style>