
<template lang="">
    <div>
        <div class="container pt-5">
           <div class="row">
                <div class="col-md-12 text-white">
                <div class="card">
                    <div class="card-header">
                        All Supplier List
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">Supplier Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Business Name</th>
                                <th scope="col">Business Address</th>
                                <th scope="col">City</th>
                                <th scope="col">Country</th>
                                <th scope="col">Opening Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(supplier,index) in suppliers" :key="index">
                                    <th scope="row">{{ ++index }}</th>
                                    <td>{{ supplier.supplier_name }}</td>
                                    <td>{{ supplier.phone }}</td>
                                    <td>{{ supplier.business_name }}</td>
                                    <td>{{ supplier.business_address }}</td>
                                    <td>{{ supplier.city }}</td>
                                    <td>{{ supplier.country }}</td>
                                    <td>{{ supplier.opening_balance }}</td>
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
      suppliers: [],
    };
  },
  mounted() {
    this.fatchData();
  },
  methods: {
    fatchData() {
      axios
        .get("/api/supplier")
        .then((res) => {
          this.suppliers = res.data.data;
          console.log(res.data.data);
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