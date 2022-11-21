<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Referrer settings
          </h3>
        </div>
      </div>
      <form action="">
        <div class="row g-3 pt-4">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Referrer Name</label>
              <input
                type="text"
                class="form-control py-3"
                placeholder="Referrer Name"
              />
            </div>
          </div>

          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Contact Number</label>
              <input
                type="text"
                class="form-control"
                placeholder="Contact Number"
              />
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white"
                >Alternative Number</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="Alternative Number"
              />
            </div>
          </div>
        </div>

        <div class="row g-3">
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Address</label>
              <input type="text" class="form-control" placeholder="Address" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="" class="form-label text-white">Commission</label>
              <input
                type="text"
                class="form-control"
                placeholder="Commission"
              />
            </div>
          </div>
        </div>
        <div class="pt-3">
          <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Referrer"
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