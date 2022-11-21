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
      <form action="">
        <div class="row g-3 pt-4">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Customer Name</label>
              <select
                class="form-select form-control"
                aria-label="Default select example"
              >
                <option selected>Select Customer Name</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="from-label text-white">Customer ID</label>
              <input
                type="number"
                class="form-control"
                placeholder="Customer ID"
              />
            </div>
          </div>
          <div class="col-md-4">
            <label for="" class="from-label text-white">Business Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="Business Name"
            />
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
              />
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Date</label>
              <input type="date" class="form-control" placeholder="Date" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Referrer Name</label>
              <select
                class="form-select form-control"
                aria-label="Default select example"
              >
                <option selected>Select Referrer Name</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
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
                >
                  <option selected>Select Website Category</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
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
                />
              </div>
            </div>
            <div class="col-md-3">
              <label for="" class="form-label text-white">Hosted by</label>
              <select
                class="form-select form-control"
                aria-label="Default select example"
              >
                <option selected>Select Hosted by</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">Hosted At</label>
                <select
                  class="form-select form-control"
                  aria-label="Default select example"
                >
                  <option selected>Select Hosted At</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
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
                >
                  <option selected>Domain Purchased by</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">Website URL</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Website URL"
                />
              </div>
            </div>

            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">cPanel ID</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="cPanel ID"
                />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">Password</label>
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                />
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
                >
                  <option selected>Recurring Title</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
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
                />
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
                />
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
                  v-model="form.product_status_website"
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
              />
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
                />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-">
                <label for="" class="form-label text-white">Hosted by</label>
                <select
                  class="form-select form-control"
                  aria-label="Default select example"
                >
                  <option selected>Select Hosted by</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">Hosted by</label>

                <select
                  class="form-select form-control"
                  aria-label="Default select example"
                >
                  <option selected>Select Hosted At</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
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
                />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3">
                <label for="" class="form-label text-white">Software URL</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Software URL"
                />
              </div>
            </div>

            <div class="col-md-3">
              <div class="mb-">
                <label for="" class="form-label text-white">Password</label>
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                />
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
                />
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
                >
                  <option selected>Recurring Title</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
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
                />
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
                />
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
                />
              </div>
            </div>
            <div class="col-md-3">
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
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <div class="form-check form-check-lg">
                <input
                  class="form-check-input"
                  name="product_status"
                  v-model="form.product_status_software"
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
          <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Add Sale"
          />
        </div>
      </form>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      form: {
        product_status_software: 0,
        product_status_website: 0,
        website: 0,
        software: 0,
      },
    };
  },
};
</script>
<style>
.btn_bg {
  background: linear-gradient(to right, #77a1d3 0%, #79cbca 51%, #77a1d3 100%);
}
</style>