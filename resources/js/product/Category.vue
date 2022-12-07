<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Add Category
          </h3>
        </div>
      </div>
      <form action="" @submit.prevent="storeData()">
        <div class="row g-3 pt-4">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="Category Name" class="form-label text-white"
                >Category Name</label
              >
              <input
                type="text"
                class="form-control py-3"
                placeholder="Category Name"
                v-model="form.category_name"
              />
              <span v-if="errors.category_name" class="text-white">{{
                errors.category_name[0]
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
            value="Add New Category"
          /> -->
          <v-btn
            :loading="loading[3]"
            :disabled="loading[3]"
            color="info"
            @click="storeData(3)"
          >
            Add New Category
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
            <div class="card-header">All Category List</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Sl No</th>
                      <th scope="col">Category Name</th>
                      <th scope="col">Dascription</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(category, index) in categories" :key="index">
                      <th scope="row">{{ ++index }}</th>
                      <td>{{ category.category_name }}</td>
                      <td>{{ category.description }}</td>
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
      categories: [],
      form: {
        category_name: "",
        description: "",
      },
      errors: {},
    };
  },
  mounted() {
    this.fatchData();
  },
  methods: {
    storeData(i) {
      this.loading[i] = true;
      setTimeout(() => (this.loading[i] = false), 3000);
      axios
        .post("/api/category/", this.form)
        .then((res) => {
          console.log(res);
          if (res.status === 201) {
            this.fatchData();
            this.form.category_name = "";
            this.form.description = "";
            this.errors = "";
          }
        })
        .catch((err) => {
          console.error(err);
          this.errors = err.response.data.errors;
        });
    },

    fatchData() {
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