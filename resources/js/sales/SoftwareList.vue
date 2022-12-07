<template lang="">
    <div>
        <div class="container pt-5">
           <div class="row">
                <div class="col-md-12 text-white">
                <div class="card">
                    <div class="card-header">
                       Software Details
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                <!-- <th>Sl</th> -->
                                <th scope="col">Soft_Nm</th>
                                <th scope="col">Ins_Id</th>
                                <th scope="col">Password</th>
                                <th scope="col">Ht_At</th>
                                <th scope="col">Ht_By</th>
                                <th scope="col">User_Id</th>
                                <th scope="col">Ins_Dt</th>
                                <th scope="col">Re_Title</th>
                                <th scope="col">Re_Qnt</th>
                                <th scope="col">Re_Am</th>
                                <th scope="col">Re_Str_Dt</th>
                                <th scope="col">Url</th>
                                <th scope="col">Status</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(list,index) in software_lists" :key="index">
                                    <!-- <th scope="row">{{ ++index }}</th> -->
                                    <td>{{ list.software_name }}</td>
                                    <td>{{ list.software_installation_id}}</td>
                                    <td>{{ list.software_password }}</td>
                                    <td>{{ list.hosting_name}}</td>
                                    <td>{{ list.software_hosted_by}}</td>
                                    <td>{{ list.software_user_id}}</td>
                                    <td>{{ list.installation_date}}</td>
                                    <td>{{ list.software_recurring_title}}</td>
                                    <td>{{ list.software_recurring_quantity}}</td>
                                    <td>{{ list.software_recurring_amount}}</td>
                                    <td>{{ list.software_recurring_starting_date	}}</td>
                                    <td>{{ list.software_url	}}</td>
                                    <td>
                                      <span v-if="list.software_status === 1 "><b class="text-success">Active</b></span>
                                      <span v-if="list.software_status === 0 "><b class="text-warning">Inactive</b></span>
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
      software_lists: [],
    };
  },
  methods: {
    fatchData() {
      axios
        .get("/api/sales/software/list")
        .then((res) => {
          this.software_lists = res.data.data;
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