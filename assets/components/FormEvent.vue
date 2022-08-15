<template>
  <div class="mb-3">
                 
                 <input class="form-control" id="exampleFormControlInput1" placeholder="Title of the event">
                 <input  class="form-control" id="exampleFormControlInput1" placeholder="Organizer of the event">
                 <input  class="form-control" id="exampleFormControlInput1" placeholder="Place of the event">
                 <input  class="form-control" id="exampleFormControlInput1" placeholder="Date of the event">
                 <select class="form-select" aria-label="Default select example">
                  <option selected>Type of the event</option>
                  <option value="1">Exhibition</option>
                  <option value="2">Career Fair</option>
                  <option value="3">Conference</option>
                </select>
                <input class="form-control" type="file" id="formFile">
              </div>
</template>

<script>
export default {

}
</script>

<style lang="scss">
.form-control {
  margin-bottom: 15px;
}

.form-select {
  margin-bottom: 15px;
}
</style>