<template lang="">
    <div>
        <div class="container pt-5">
           <div class="row">
                <div class="col-md-12 text-white">
                <div class="card">
                    <div class="card-header">
                       WebSite Details
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th scope="col">Web_category</th>
                                  <th scope="col">Ins_Id</th>
                                  <th scope="col">Ht_By</th>
                                  <th scope="col">Ht_At</th>
                                  <th scope="col">CP_Id</th>
                                  <th scope="col">Password</th>
                                  <th scope="col">Dm_Pr_By</th>
                                  <th scope="col">Re_Title</th>
                                  <th scope="col">Re_Qnt</th>
                                  <th scope="col">Re_Am</th>
                                  <th scope="col">Re_Str_Dt</th>
                                  <th scope="col">Url</th>
                                  <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(list,index) in website_lists" :key="index">
                                    <td>{{ list.website_category }}</td>
                                    <td>{{ list.website_installation_id }}</td>
                                    <td>{{ list.hosted_by }}</td>
                                    <td>{{ list.hosting_name }}</td>
                                    <td>{{ list.cPanel_id }}</td>
                                    <td>{{ list.website_password }}</td>
                                    <td>{{ list.domain_purchased_by }}</td>
                                    <td>{{ list.website_recurring_title }}</td>
                                    <td>{{ list.website_recurring_quantity }}</td>
                                    <td>{{ list.website_recurring_amount }}</td>
                                    <td>{{ list.website_recurring_starting_date }}</td>
                                    <td>{{ list.website_url }}</td>
                                    <td> 
                                      <span v-if="list.website_status === 1 ">
                                        <b class="text-success">Active</b></span>
                                      <span v-if="list.website_status === 0 ">
                                        <b class="text-warning">Inactive</b></span>
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
      website_lists: [],
    };
  },
  methods: {
    fatchData() {
      axios
        .get("/api/sales/website/list")
        .then((res) => {
          this.website_lists = res.data.data;
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