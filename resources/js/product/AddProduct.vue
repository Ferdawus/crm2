<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Add Product
          </h3>
        </div>
      </div>
      <form action="">
        <div class="row g-3 pt-4">
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Product Name" class="form-label text-white"
                >Product Name</label
              >
              <input
                type="text"
                class="form-control py-3"
                placeholder="Product Name"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Category Name</label>
              <select
                class="form-select form-control"
                aria-label=".form-select-sm example"
              >
                <option selected>Category Select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="Code" class="form-label text-white">Code</label>
              <input type="text" class="form-control" placeholder="Code" />
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
              <label for="" class="form-label text-white">Selling Price</label>
              <input
                type="text"
                class="form-control"
                placeholder="Selling Price"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Unit</label>
              <input type="text" class="form-control" placeholder="Unit" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Blank</label>
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
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Blank</label>
              <input
                type="text"
                class="form-control py-3"
                placeholder="Blank"
              />
            </div>
          </div>
        </div>
        <div class="row pb-2">
          <div class="col-3">
            <div class="form-check form-check-lg">
              <input
                class="form-check-input"
                name="product_status"
                v-model="form.product_status"
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
        <div class="row g-3">
          <div class="col-md-12">
            <div class="mb-3">
              <label for="" class="form-label text-white"
                >Product Description</label
              >
              <textarea
                class="form-control"
                placeholder="Product Description"
                rows="3"
              ></textarea>
            </div>
          </div>
        </div>
        <div class="pt-3">
          <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Add Product"
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
        product_status: 0,
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