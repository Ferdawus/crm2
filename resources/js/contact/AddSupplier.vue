<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Add Supplier
          </h3>
        </div>
      </div>
      <form action="">
        <div class="row g-3 pt-4">
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Supplier Name</label>
              <input
                type="text"
                class="form-control py-3"
                placeholder="Supplier Name"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Phone</label>
              <input type="text" class="form-control" placeholder="Phone" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Business Name</label>
              <input
                type="text"
                class="form-control"
                placeholder="Business Name"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
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
        </div>

        <div class="row g-3">
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white"
                >Alternative contact name</label
              >
              <input
                type="text"
                class="form-control py-3"
                placeholder="Alternative contact name"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white"
                >Alternative number</label
              >
              <input
                type="number"
                class="form-control py-3"
                placeholder="Alternative number"
              />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">City</label>
              <input type="text" class="form-control" placeholder="City" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Country</label>
              <input type="text" class="form-control" placeholder="Country" />
            </div>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-md-3">
            <div class="mb-3">
              <label for="" class="form-label text-white">Facebook</label>
              <input
                type="text"
                class="form-control py-3"
                placeholder="Facebook"
              />
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
              <label for="" class="form-label text-white"
                >Opening Balancez</label
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
              <label for="" class="form-label text-white"
                >Picture Attachment</label
              >
              <input
                type="text"
                class="form-control py-3"
                placeholder="Picture Attachment"
              />
            </div>
          </div>
        </div>
        <div class="pt-3">
          <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Add Supplier"
          />
        </div>
      </form>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style>
.btn_bg {
  background: linear-gradient(to right, #77a1d3 0%, #79cbca 51%, #77a1d3 100%);
}
</style>