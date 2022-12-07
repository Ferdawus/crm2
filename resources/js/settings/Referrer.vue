<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Referrer settings
          </h3>
        </div>
      </div>
      <form action="" @submit.prevent="storeData()">
        <div class="row g-3 pt-4">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Referrer Name</label>
              <input
                type="text"
                class="form-control py-3"
                placeholder="Referrer Name"
                v-model="form.referrer_name"
              />
              <span v-if="errors.referrer_name" class="text-white">{{
                errors.referrer_name[0]
              }}</span>
            </div>
          </div>

          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Contact Number</label>
              <input
                type="text"
                class="form-control"
                placeholder="Contact Number"
                v-model="form.contact_number"
              />
              <span v-if="errors.contact_number" class="text-white">{{
                errors.contact_number[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white"
                >Alternative Number</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Alternative Number"
                v-model="form.alternative_number"
              />
              <span v-if="errors.alternative_number" class="text-white">{{
                errors.alternative_number[0]
              }}</span>
            </div>
          </div>
        </div>

        <div class="row g-3">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Address</label>
              <input
                type="text"
                class="form-control"
                placeholder="Address"
                v-model="form.address"
              />
              <span v-if="errors.address" class="text-white">{{
                errors.address[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Commission</label>
              <input
                type="text"
                class="form-control"
                placeholder="Commission"
                v-model="form.commission"
              />
              <span v-if="errors.commission" class="text-white">{{
                errors.commission[0]
              }}</span>
            </div>
          </div>
        </div>
        <div class="pt-3">
          <!-- <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Referrer"
          /> -->
          <v-btn
            :loading="loading[3]"
            :disabled="loading[3]"
            color="info"
            @click="storeData(3)"
          >
            Add New Referrer
            <template v-slot:loader>
              <span class="custom-loader">
                <v-icon light>mdi-cached</v-icon>
              </span>
            </template>
          </v-btn>
        </div>
      </form>
    </div>
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-12 text-white">
          <div class="card">
            <div class="card-header">All Referrer List</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Sl No</th>
                      <th scope="col">Referrer Name</th>
                      <th scope="col">Contact Number</th>
                      <th scope="col">Alternative Number</th>
                      <th scope="col">Address</th>
                      <th scope="col">Commission</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(referrere, index) in referreres" :key="index">
                      <th scope="row">{{ ++index }}</th>
                      <td>{{ referrere.referrer_name }}</td>
                      <td>{{ referrere.contact_number }}</td>
                      <td>{{ referrere.alternative_number }}</td>
                      <td>{{ referrere.address }}</td>
                      <td>{{ referrere.commission }}</td>
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
      referreres: [],
      loading: [],
      form: {
        referrer_name: "",
        contact_number: "",
        alternative_number: "",
        address: "",
        commission: "",
      },
      errors: {},
    };
  },
  methods: {
    storeData(i) {
      this.loading[i] = true;
      setTimeout(() => (this.loading[i] = false), 3000);
      axios
        .post("/api/referrer/", this.form)
        .then((res) => {
          console.log(res);
          if (res.status === 201) {
            this.fatchData();
            this.form.referrer_name = "";
            this.form.contact_number = "";
            this.form.alternative_number = "";
            this.form.address = "";
            this.form.commission = "";
            this.errors = "";
          }
        })
        .catch((err) => {
          this.errors = err.response.data.errors;
          console.error(err);
        });
    },
    fatchData() {
      axios
        .get("/api/referrer")
        .then((res) => {
          this.referreres = res.data.data;
          console.log(res.data.data);
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
<style>
.btn_bg {
  background: linear-gradient(to right, #77a1d3 0%, #79cbca 51%, #77a1d3 100%);
}
</style>