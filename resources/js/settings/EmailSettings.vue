<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Email Settings
          </h3>
        </div>
      </div>
      <form action="">
        <div class="row pt-4">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="Title" class="form-label text-white">Title</label>
              <input type="text" class="form-control" placeholder="Title" />
            </div>
          </div>
        </div>
        <h6 class="text-white text-bold">Message To</h6>
        <div class="row">
          <div class="col-md-3">
            <div class="form-check form-check-lg">
              <input
                class="form-check-input"
                name="website"
                type="checkbox"
                v-model="form.customer"
                value="1"
                id="flexCheckDefault"
              />
              <label class="form-check-label text-white" for="flexCheckDefault">
                Customer
              </label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                name="supplier"
                v-model="form.supplier"
                value="1"
                id="flexCheckDefault"
              />
              <label class="form-check-label text-white" for="flexCheckDefault">
                Supplier
              </label>
            </div>
          </div>
        </div>
        <div class="row pt-3" v-if="form.customer">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="Customer" class="form-label text-white"
                >Customer</label
              >
              <select
                class="form-select form-control"
                aria-label="Default select example"
              >
                <option selected>Select Customer</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row" v-if="form.supplier">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="Supplier" class="form-label text-white"
                >Supplier</label
              >
              <select
                class="form-select form-control"
                aria-label="Default select example"
              >
                <option selected>Select Supplier</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="Message" class="form-label text-white">Message</label>
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
              ></textarea>
            </div>
          </div>
        </div>
        <div class="py-3">
          <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Add Email"
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
        customer: 0,
        supplier: 0,
      },
    };
  },
};
</script>
<style lang="">
</style>