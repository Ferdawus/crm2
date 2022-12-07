<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Add Customer
          </h3>
        </div>
      </div>
      <form action="" @submit.prevent="storeData()">
        <div class="row g-3 pt-4">
          <div class="col-md-3">
            <div class="mb-3">
              <label for="CustomerName" class="form-label text-white"
                >Customer Name</label
              >
              <input
                type="text"
                class="form-control form-sm"
                placeholder="Customer Name"
                v-model="form.customer_name"
              />
              <span v-if="errors.customer_name" class="text-white">{{
                errors.customer_name[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Phone" class="form-label text-white">Phone</label>
              <input
                type="text"
                class="form-control"
                placeholder="Phone"
                v-model="form.phone"
              />
              <span v-if="errors.phone" class="text-white">{{
                errors.phone[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Business Name" class="form-label text-white"
                >Business Name</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Business Name"
                v-model="form.business_name"
              />
              <span v-if="errors.business_name" class="text-white">{{
                errors.business_name[0]
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
              <label
                for="Alternative Contact Name"
                class="form-label text-white"
                >Alternative Contact Name</label
              >
              <input
                type="number"
                class="form-control"
                placeholder="Alternative Contact Name"
                v-model="form.alternative_contact_name"
              />
              <span v-if="errors.alternative_contact_name" class="text-white">{{
                errors.alternative_contact_name[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Alternative Number" class="form-label text-white"
                >Alternative Number</label
              >
              <input
                type="number"
                class="form-control"
                placeholder="Alternative Number"
                v-model="form.alternative_number"
              />
              <span v-if="errors.alternative_number" class="text-white">{{
                errors.alternative_number[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white"
                >Opening Balance</label
              >
              <input
                type="number"
                class="form-control py-3"
                placeholder="Opening Balance"
                v-model="form.opening_balance"
              />
              <span v-if="errors.opening_balance" class="text-white">{{
                errors.opening_balance[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="City" class="form-label text-white">City</label>
              <input
                type="text"
                class="form-control py-3"
                placeholder="City"
                v-model="form.city"
              />
              <span v-if="errors.city" class="text-white">{{
                errors.city[0]
              }}</span>
            </div>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Country" class="form-label text-white">Country</label>
              <input
                type="text"
                class="form-control"
                placeholder="Country"
                v-model="form.country"
              />
              <span v-if="errors.country" class="text-white">{{
                errors.country[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Facebook" class="form-label text-white"
                >Facebook</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Facebook"
                v-model="form.facebook"
              />
              <span v-if="errors.facebook" class="text-white">{{
                errors.facebook[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Other social Media" class="form-label text-white"
                >Other social Media</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Other social Media"
                v-model="form.other_social_media"
              />
              <span v-if="errors.other_social_media" class="text-white">{{
                errors.other_social_media[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Picture Attachment" class="form-label text-white"
                >Picture Attachment</label
              >
              <input
                type="file"
                class="form-control"
                placeholder="Picture Attachment"
              />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <div class="form-check form-check-lg">
              <input
                class="form-check-input"
                name="product_status"
                v-model="form.customer_status"
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
        <div class="pt-3">
          <!-- <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Add Customer"
          /> -->
          <v-btn
            :loading="loading[3]"
            :disabled="loading[3]"
            color="info"
            @click="storeData(3)"
          >
            Add New Customer
            <template v-slot:loader>
              <span class="custom-loader">
                <v-icon light>mdi-cached</v-icon>
              </span>
            </template>
          </v-btn>
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
        customer_name: "",
        phone: "",
        business_name: "",
        business_address: "",
        alternative_contact_name: "",
        alternative_number: "",
        city: "",
        country: "",
        facebook: "",
        other_social_media: "",
        opening_balance: "",
        picture_attachment: "",
        customer_status: 0,
      },
      errors: {},
    };
  },
  methods: {
    storeData(i) {
      this.loading[i] = true;
      setTimeout(() => (this.loading[i] = false), 3000);
      axios
        .post("/api/customer/", this.form, this.load)
        .then((res) => {
          console.log(res);
          if (res.status === 201) {
            this.form.customer_name = "";
            this.form.phone = "";
            this.form.business_name = "";
            this.form.alternative_contact_name = "";
            this.form.alternative_number = "";
            this.form.city = "";
            this.form.country = "";
            this.form.facebook = "";
            this.form.other_social_media = "";
            this.form.opening_balance = "";
            this.form.picture_attachment = "";
            this.form.customer_status = 0;
            this.errors = "";
          }
        })
        .catch((err) => {
          this.errors = err.response.data.errors;
          // console.error(err.response.data.errors);
        });
    },
  },
};
</script>
<style>
/* .btn_bg {
  background: linear-gradient(to right, #77a1d3 0%, #79cbca 51%, #77a1d3 100%);
} */
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