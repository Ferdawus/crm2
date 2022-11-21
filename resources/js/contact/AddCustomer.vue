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
      <form action="">
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
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Phone" class="form-label text-white">Phone</label>
              <input type="text" class="form-control" placeholder="Phone" />
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
              />
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
              />
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
              />
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
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white"
                >Opening Balance</label
              >
              <input
                type="text"
                class="form-control py-3"
                placeholder="Opening Balance"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="City" class="form-label text-white">City</label>
              <input type="text" class="form-control py-3" placeholder="City" />
            </div>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Country" class="form-label text-white">Country</label>
              <input type="text" class="form-control" placeholder="Country" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Facebook" class="form-label text-white"
                >Facebook</label
              >
              <input type="text" class="form-control" placeholder="Facebook" />
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
              />
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
          <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Add Customer"
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
        customer_status: 0,
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