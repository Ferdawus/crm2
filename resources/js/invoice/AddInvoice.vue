<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Add Invoice
          </h3>
        </div>
      </div>
      <form action="" @submit.prevent="storeData()">
        <div class="row g-3 pt-4">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="CustomerName" class="form-label text-white"
                >Customer Name</label
              >
              <select
                class="form-select form-control"
                aria-label="Default select example"
              >
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <!-- <span v-if="errors.customer_name" class="text-white">{{
                errors.customer_name[0]
              }}</span> -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="Invoice No" class="form-label text-white"
                >Invoice Title</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Invoice Title"
              />
              <!-- <span v-if="errors.business_name" class="text-white">{{
                errors.business_name[0]
              }}</span> -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="Invoice No" class="form-label text-white"
                >Invoice No</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Invoice No"
              />
              <!-- <span v-if="errors.business_name" class="text-white">{{
                errors.business_name[0]
              }}</span> -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="Invoice No" class="form-label text-white"
                >Last Payment Date</label
              >
              <input
                type="date"
                class="form-control"
                placeholder="Last Payment Date"
              />
              <!-- <span v-if="errors.business_name" class="text-white">{{
                errors.business_name[0]
              }}</span> -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="Invoice Date" class="form-label text-white"
                >Invoice Date</label
              >
              <input
                type="date"
                class="form-control"
                placeholder="Invoice Date"
              />
              <!-- <span v-if="errors.business_name" class="text-white">{{
                errors.business_name[0]
              }}</span> -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="Due Date" class="form-label text-white"
                >Due Date</label
              >
              <input type="date" class="form-control" placeholder="Due Date" />
              <!-- <span v-if="errors.business_name" class="text-white">{{
                errors.business_name[0]
              }}</span> -->
            </div>
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-body">
              <table>
                <thead>
                  <tr>
                    <th>Product/Service</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Tax</th>
                    <th>SubTotal</th>
                    <th class="col-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <select
                        class="form-select form-control"
                        aria-label="Default select example"
                      >
                        <option selected>Select Product</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </td>
                    <td>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Price"
                      />
                    </td>
                    <td>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Qty"
                      />
                    </td>
                    <td>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Tax"
                      />
                    </td>
                    <td>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="SubTotal"
                      />
                    </td>
                    <td>
                      <a href="" class="text-info">
                        <i class="fa fa-plus"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="pt-3">
          <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Add Invoice"
          />
        </div>
      </form>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
.card {
  background-color: #fff !important;
  background-image: none !important;
  box-shadow: none !important;
}
thead {
  /* background-color: black !important; */
  /* background-color: #0093E9; */
  /* background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%); */
  background-image: none !important;
  background-color: #fff !important;
}
</style>