<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            General Settings
          </h3>
        </div>
      </div>
      <form action="">
        <div class="row g-3 pt-4">
          <div class="col-md-4">
            <input
              type="text"
              class="form-control py-3"
              placeholder="Company Name"
            />
          </div>

          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Address" />
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Contact" />
          </div>
        </div>

        <div class="row g-3 pt-4">
          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Email" />
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Website" />
          </div>
          <div class="col-md-4">
            <input
              type="text"
              class="form-control py-3"
              placeholder="Facebook"
            />
          </div>
        </div>
        <div class="pt-3">
          <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="General"
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