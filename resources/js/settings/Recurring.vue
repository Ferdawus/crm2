<template>
  <div>
    <div class="container px-5">
      <div class="row pt-5">
        <div class="col-md-3">
          <h3 class="border border-secondary py-1 text-white text-center">
            Add Recurring
          </h3>
        </div>
      </div>
      <form action="">
        <div class="row g-3 pt-4">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="Category Name" class="form-label text-white"
                >Recurring Title</label
              >
              <input
                type="text"
                class="form-control py-3"
                placeholder="Recurring Title"
              />
            </div>
          </div>
        </div>

        <div class="row g-3">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="" class="form-label text-white"> Description</label>
              <textarea
                class="form-control"
                placeholder="Description .........."
                rows="3"
              ></textarea>
            </div>
          </div>
        </div>
        <div class="pt-3">
          <input
            type="submit"
            class="btn btn_bg py-2 px-3 text-white"
            value="Add New Recurring"
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
      form: {},
    };
  },
};
</script>
<style>
.btn_bg {
  background: linear-gradient(to right, #77a1d3 0%, #79cbca 51%, #77a1d3 100%);
}
</style>