<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Add Hosting
          </h3>
        </div>
      </div>
      <form action="" @submit.prevent="storeData()">
        <div class="row g-3 pt-4">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="Category Name" class="form-label text-white"
                >Hosting Name</label
              >
              <input
                type="text"
                class="form-control py-3"
                placeholder="Category Name"
                v-model="form.hosting_name"
              />
              <span v-if="errors.hosting_name" class="text-white">{{
                errors.hosting_name[0]
              }}</span>
            </div>
          </div>
        </div>

        <div class="row g-3">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="" class="form-label text-white"> Description</label>
              <textarea
                class="form-control"
                placeholder="Description .........."
                rows="3"
                v-model="form.description"
              ></textarea>
              <span v-if="errors.description" class="text-white">{{
                errors.description[0]
              }}</span>
            </div>
          </div>
        </div>
        <div class="pt-3">
          <!-- <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Add New Hosting"
          /> -->
          <v-btn
            :loading="loading[3]"
            :disabled="loading[3]"
            color="info"
            @click="storeData(3)"
          >
            Add New Hosting
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
                      <th scope="col">Hosting Name</th>
                      <th scope="col">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(host, index) in hosting" :key="index">
                      <th scope="row">{{ ++index }}</th>
                      <td>{{ host.hosting_name }}</td>
                      <td>{{ host.description }}</td>
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
      loading: [],
      hosting: [],
      form: {
        hosting_name: "",
        description: "",
      },
      errors: {},
    };
  },
  methods: {
    storeData(i) {
      this.loading[i] = true;
      setTimeout(() => (this.loading[i] = false), 3000);
      axios
        .post("/api/hosting/", this.form)
        .then((res) => {
          console.log(res);
          if (res.status === 201) {
            this.fatchData();
            this.form.hosting_name = "";
            this.form.description = "";
          }
        })
        .catch((err) => {
          this.errors = err.response.data.errors;
          console.error(err);
        });
    },
    fatchData() {
      axios
        .get("/api/hosting/")
        .then((res) => {
          this.hosting = res.data.data;
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