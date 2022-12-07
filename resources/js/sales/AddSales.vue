<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Add Sales
          </h3>
        </div>
      </div>
      <form action="" @submit.prevent="storeData()">
        <div class="row g-3 pt-4">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Customer Name</label>
              <select
                class="form-select form-control"
                aria-label="Default select example"
                v-model="form.customer_name"
              >
                <option selected>Select Customer Name</option>
                <option
                  v-for="(customer, index) in customers"
                  :key="index"
                  :value="customer.id"
                >
                  {{ customer.customer_name }}
                </option>
              </select>
              <span v-if="errors.customer_name" class="text-white">{{
                errors.customer_name[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="from-label text-white">Customer ID</label>
              <input
                type="number"
                class="form-control"
                placeholder="Customer ID"
                v-model="form.customer_id"
              />
              <span v-if="errors.customer_id" class="text-white">{{
                errors.customer_id[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-4">
            <label for="" class="from-label text-white">Business Name</label>
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
        <div class="row g-3">
          <div class="col-md-4">
            <div class="mb-">
              <label for="" class="form-label text-white"
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
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Date</label>
              <input
                type="date"
                class="form-control"
                placeholder="Date"
                v-model="form.date"
              />
              <span v-if="errors.date" class="text-white">{{
                errors.date[0]
              }}</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Referrer Name</label>
              <select
                class="form-select form-control"
                aria-label="Default select example"
                v-model="form.referrer_id"
              >
                <option selected>Select Referrer Name</option>
                <option
                  v-for="(referrer, index) in referrers"
                  :key="index"
                  :value="referrer.id"
                >
                  {{ referrer.referrer_name }}
                </option>
              </select>
              <span v-if="errors.referrer_id" class="text-white">{{
                errors.referrer_id[0]
              }}</span>
            </div>
          </div>
        </div>
        <div class="row py-3">
          <div class="col-md-3">
            <h6 class="border border-secondary py-1 text-white text-center">
              Product / Service Details
            </h6>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <input
              class="form-control"
              type="text"
              value="Product Select (section right side)"
              disabled
              readonly
            />
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-lg">
              <input
                class="form-check-input"
                name="website"
                v-model="form.website"
                type="checkbox"
                value="1"
                id="flexCheckDefault"
              />
              <label class="form-check-label text-white" for="flexCheckDefault">
                Website
              </label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                name="software"
                v-model="form.software"
                value="1"
                id="flexCheckDefault"
              />
              <label class="form-check-label text-white" for="flexCheckDefault">
                Software
              </label>
            </div>
          </div>
        </div>
        <!-- website -->
        <div class="col-md-12" v-if="form.website">
          <div class="row py-3">
            <div class="col-md-3">
              <h6 class="border border-secondary py-1 text-white text-center">
                Website Details
              </h6>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Website Category</label
                >
                <select
                  class="form-select form-control"
                  aria-label="Default select example"
                  v-model="form.website_category"
                >
                  <option selected>Select Website Category</option>
                  <option value="E-commarce">E-commarce</option>
                  <option value="NewsPortal">NewsPortal</option>
                  <option value="Business">Business</option>
                </select>
                <span v-if="errors.website_category" class="text-white">{{
                  errors.website_category[0]
                }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">
                  Installation ID
                </label>
                <input
                  type="number"
                  class="form-control"
                  placeholder="Installation ID"
                  v-model="form.website_installation_id"
                />
                <span
                  v-if="errors.website_installation_id"
                  class="text-white"
                  >{{ errors.website_installation_id[0] }}</span
                >
              </div>
            </div>
            <div class="col-md-3">
              <label for="" class="form-label text-white">Hosted by</label>
              <select
                class="form-select form-control"
                aria-label="Default select example"
                v-model="form.hosted_by"
              >
                <option selected>Select Hosted by</option>
                <option value="WSZ">WSZ</option>
              </select>
              <span v-if="errors.hosted_by" class="text-white">{{
                errors.hosted_by[0]
              }}</span>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">Hosted At</label>
                <select
                  class="form-select form-control"
                  aria-label="Default select example"
                  v-model="form.hosted_at"
                >
                  <option selected>Select Hosted At</option>
                  <option
                    v-for="(host, index) in hosting"
                    :key="index"
                    :value="host.id"
                  >
                    {{ host.hosting_name }}
                  </option>
                </select>
                <span v-if="errors.hosted_at" class="text-white">{{
                  errors.hosted_at[0]
                }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Domain Purchased by</label
                >
                <select
                  class="form-select form-control"
                  aria-label="Default select example"
                  v-model="form.domain_purchased_by"
                >
                  <option selected>Domain Purchased by</option>
                  <option value="WSZ">WSZ</option>
                </select>
                <span v-if="errors.domain_purchased_by" class="text-white">{{
                  errors.domain_purchased_by[0]
                }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">Website URL</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Website URL"
                  v-model="form.website_url"
                />
                <span v-if="errors.website_url" class="text-white">{{
                  errors.website_url[0]
                }}</span>
              </div>
            </div>

            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">cPanel ID</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="cPanel ID"
                  v-model="form.cPanel_id"
                />
                <span v-if="errors.cPanel_id" class="text-white">{{
                  errors.cPanel_id[0]
                }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">Password</label>
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                  v-model="form.website_password"
                />
                <span v-if="errors.website_password" class="text-white">{{
                  errors.website_password[0]
                }}</span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Recurring Title</label
                >
                <select
                  class="form-select form-control"
                  aria-label="Default select example"
                  v-model="form.website_recurring_title"
                >
                  <option selected>Recurring Title</option>
                  <option value="One">One</option>
                  <option value="Two">Two</option>
                </select>
                <span
                  v-if="errors.website_recurring_title"
                  class="text-white"
                  >{{ errors.website_recurring_title[0] }}</span
                >
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Recurring Quintity</label
                >
                <input
                  type="number"
                  class="form-control"
                  placeholder="Recurring Quintity"
                  v-model="form.website_recurring_quantity"
                />
                <span
                  v-if="errors.website_recurring_quantity"
                  class="text-white"
                  >{{ errors.website_recurring_quantity[0] }}</span
                >
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Recurring Amount</label
                >
                <input
                  type="number"
                  class="form-control"
                  placeholder="Recurring Amount"
                  v-model="form.website_recurring_amount"
                />
                <span
                  v-if="errors.website_recurring_amount"
                  class="text-white"
                  >{{ errors.website_recurring_amount[0] }}</span
                >
              </div>
            </div>

            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Recurring Starting Date</label
                >
                <input
                  type="date"
                  class="form-control"
                  placeholder="Recurring Starting Date"
                  v-model="form.website_recurring_starting_date"
                />
                <span
                  v-if="errors.website_recurring_starting_date"
                  class="text-white"
                  >{{ errors.website_recurring_starting_date[0] }}</span
                >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <div class="form-check form-check-lg">
                <input
                  class="form-check-input"
                  name="product_status"
                  v-model="form.website_status"
                  type="checkbox"
                  value="1"
                  id="flexCheckDefault"
                />
                <label
                  class="form-check-label text-white"
                  for="flexCheckDefault"
                >
                  Status
                </label>
              </div>
            </div>
          </div>
        </div>
        <!-- software -->
        <div class="col-md-12" v-if="form.software">
          <div class="row py-3">
            <div class="col-md-3">
              <h6 class="border border-secondary py-1 text-white text-center">
                Software Details
              </h6>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label for="" class="form-label text-white">Software Name</label>
              <input
                type="number"
                class="form-control"
                placeholder="Software Name"
                v-model="form.software_name"
              />
              <span v-if="errors.software_name" class="text-white">{{
                errors.software_name[0]
              }}</span>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Installation ID</label
                >
                <input
                  type="number"
                  class="form-control"
                  placeholder="Installation ID"
                  v-model="form.software_installation_id"
                />
                <span
                  v-if="errors.software_installation_id"
                  class="text-white"
                  >{{ errors.software_installation_id[0] }}</span
                >
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-">
                <label for="" class="form-label text-white">Hosted by</label>
                <select
                  class="form-select form-control"
                  aria-label="Default select example"
                  v-model="form.software_hosted_by"
                >
                  <option selected>Select Hosted by</option>
                  <option value="WSZ">WSZ</option>
                </select>
                <span v-if="errors.software_hosted_by" class="text-white">{{
                  errors.software_hosted_by[0]
                }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">Hosted At</label>

                <select
                  class="form-select form-control"
                  aria-label="Default select example"
                  v-model="form.software_hosted_at"
                >
                  <option selected>Select Hosted At</option>
                  <option
                    v-for="(host, index) in hosting"
                    :key="index"
                    :value="host.id"
                  >
                    {{ host.hosting_name }}
                  </option>
                </select>
                <span v-if="errors.software_hosted_at" class="text-white">{{
                  errors.software_hosted_at[0]
                }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">User ID </label>
                <input
                  type="number"
                  class="form-control"
                  placeholder="User ID"
                  v-model="form.software_user_id"
                />
                <span v-if="errors.software_user_id" class="text-white">{{
                  errors.software_user_id[0]
                }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">Software URL</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Software URL"
                  v-model="form.software_url"
                />
                <span v-if="errors.software_url" class="text-white">{{
                  errors.software_url[0]
                }}</span>
              </div>
            </div>

            <div class="col-md-3">
              <div class="mb-">
                <label for="" class="form-label text-white">Password</label>
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                  v-model="form.software_password"
                />
                <span v-if="errors.software_password" class="text-white">{{
                  errors.software_password[0]
                }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Installation Date</label
                >
                <input
                  type="date"
                  class="form-control"
                  placeholder="Installation Date"
                  v-model="form.installation_date"
                />
                <span v-if="errors.installation_date" class="text-white">{{
                  errors.installation_date[0]
                }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Recurring Title</label
                >
                <select
                  class="form-select form-control"
                  aria-label="Default select example"
                  v-model="form.software_recurring_title"
                >
                  <option selected>Recurring Title</option>
                  <option value="One">One</option>
                </select>
                <span
                  v-if="errors.software_recurring_title"
                  class="text-white"
                  >{{ errors.software_recurring_title[0] }}</span
                >
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Recurring Quintity</label
                >
                <input
                  type="number"
                  class="form-control"
                  placeholder="Recurring Quintity"
                  v-model="form.software_recurring_quantity"
                />
                <span
                  v-if="errors.software_recurring_quantity"
                  class="text-white"
                  >{{ errors.software_recurring_quantity[0] }}</span
                >
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Recurring Amount</label
                >
                <input
                  type="number"
                  class="form-control"
                  placeholder="Recurring Amount"
                  v-model="form.software_recurring_amount"
                />
                <span
                  v-if="errors.software_recurring_amount"
                  class="text-white"
                  >{{ errors.software_recurring_amount[0] }}</span
                >
              </div>
            </div>

            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white"
                  >Recurring Starting Date</label
                >
                <input
                  type="date"
                  class="form-control"
                  placeholder="Recurring Starting Date"
                  v-model="form.software_recurring_starting_date"
                />
                <span
                  v-if="errors.software_recurring_starting_date"
                  class="text-white"
                  >{{ errors.software_recurring_starting_date[0] }}</span
                >
              </div>
            </div>
            <!-- <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">Status</label>
                <select
                  class="form-select form-control"
                  aria-label="Default select example"
                >
                  <option selected>Select Status</option>
                  <option value="1">Active</option>
                  <option value="2">InActive</option>
                </select>
              </div>
            </div> -->
          </div>
          <div class="row">
            <div class="col-3">
              <div class="form-check form-check-lg">
                <input
                  class="form-check-input"
                  name="product_status"
                  v-model="form.software_status"
                  type="checkbox"
                  value="1"
                  id="flexCheckDefault"
                />
                <label
                  class="form-check-label text-white"
                  for="flexCheckDefault"
                >
                  Status
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="pt-3">
          <v-btn
            :loading="loading[3]"
            :disabled="loading[3]"
            color="info"
            @click="storeData(3)"
          >
            Add New Sale
            <template v-slot:loader>
              <span class="custom-loader">
                <v-icon light>mdi-cached</v-icon>
              </span>
            </template>
          </v-btn>
          <!-- <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Add Sale"
          /> -->
        </div>
      </form>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      customers: [],
      referrers: [],
      hosting: [],
      loading: [],
      form: {
        customer_name: "",
        referrer_id: "",
        customer_id: "",
        date: "",
        business_name: "",
        business_address: "",
        software_name: "",
        software_installation_id: "",
        software_hosted_by: "",
        software_hosted_at: "",
        software_user_id: "",
        software_url: "",
        software_password: "",
        installation_date: "",
        software_recurring_title: "",
        software_recurring_quantity: "",
        software_recurring_amount: "",
        software_recurring_starting_date: "",
        website_category: "",
        website_installation_id: "",
        hosted_by: "",
        hosted_at: "",
        website_url: "",
        cPanel_id: "",
        website_password: "",
        domain_purchased_by: "",
        website_recurring_title: "",
        website_recurring_quantity: "",
        website_recurring_amount: "",
        website_recurring_starting_date: "",
        software_status: 0,
        website_status: 0,
        website: 0,
        software: 0,
      },
      errors: {},
    };
  },
  methods: {
    storeData(i) {
      this.loading[i] = true;
      setTimeout(() => (this.loading[i] = false), 3000);
      axios
        .post("/api/sales/", this.form)
        .then((res) => {
          console.log(res);
          if (res.status === 201) {
            this.form.customer_name = "";
            this.form.referrer_id = "";
            this.form.customer_id = "";
            this.form.date = "";
            this.form.business_name = "";
            this.form.business_address = "";
            this.form.software_name = "";
            this.form.software_installation_id = "";
            this.form.software_hosted_by = "";
            this.form.software_hosted_at = "";
            this.form.software_user_id = "";
            this.form.software_url = "";
            this.form.software_password = "";
            this.form.installation_date = "";
            this.form.software_recurring_title = "";
            this.form.software_recurring_quantity = "";
            this.form.software_recurring_amount = "";
            this.form.software_recurring_starting_date = "";
            this.form.website_category = "";
            this.form.website_installation_id = "";
            this.form.hosted_by = "";
            this.form.hosted_at = "";
            this.form.website_url = "";
            this.form.cPanel_id = "";
            this.form.website_password = "";
            this.form.domain_purchased_by = "";
            this.form.website_recurring_title = "";
            this.form.website_recurring_quantity = "";
            this.form.website_recurring_amount = "";
            this.form.website_recurring_starting_date = "";
            this.form.software_status = 0;
            this.form.website_status = 0;
            this.form.website = 0;
            this.form.software = 0;
          }
        })
        .catch((err) => {
          console.error(err);
          this.errors = err.response.data.errors;
        });
    },
    getHosting() {
      axios
        .get("/api/hosting")
        .then((res) => {
          this.hosting = res.data.data;
          // console.log(res.data.data);
        })
        .catch((err) => {
          console.error(err);
        });
    },
    getReferrer() {
      axios
        .get("/api/referrer")
        .then((res) => {
          this.referrers = res.data.data;
          // console.log(res.data.data);
        })
        .catch((err) => {
          console.error(err);
        });
    },
    getAllCustomer() {
      axios
        .get("/api/customer")
        .then((res) => {
          this.customers = res.data.data;
          // console.log(res.data.data);
        })
        .catch((err) => {
          console.error(err);
        });
    },
    fatchUniqueCode() {
      axios
        .get("/api/unique/code")
        .then((res) => {
          this.form.customer_id = res.data;
          console.log(res.data);
        })
        .catch((err) => {
          console.error(err);
        });
    },
  },
  mounted() {
    this.getAllCustomer();
    this.getReferrer();
    this.getHosting();
    this.fatchUniqueCode();
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