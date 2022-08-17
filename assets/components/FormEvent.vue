<template>
  <div class="mb-3">
                 <form v-bind="{id:formId}" @submit.prevent="handleSubmit" >
                 <input  class="form-control"  id="exampleFormControlInput1" placeholder="Title of the event" name="title" v-model="title" required>
                 <p class="error" v-if="titleError"> {{titleError}} </p>
                 <input  class="form-control"  id="exampleFormControlInput1" placeholder="Organizer of the event" name="organizer" v-model="organizer" required>
                 <p class="error" v-if="organizerError"> {{organizerError}} </p>
                 <input  class="form-control"  id="exampleFormControlInput1" placeholder="Place of the event" name="place" v-model="place" required>
                 <p class="error" v-if="placeError"> {{placeError}} </p>
                 <input  class="form-control"   id="exampleFormControlInput1" placeholder="Date of the event , example : 'dd/mm/yyyy'" name="date" v-model="date" required>
                 <p class="error" v-if="dateError"> {{dateError}} </p>
                 <select v-model="type" class="form-select"  aria-label="Default select example" name="type" required>
                  <option selected value ="Type" >Type of the event</option>
                  <option value="Exhibition" >Exhibition</option>
                  <option value="Career Fair" >Career Fair</option>
                  <option value="Conference" >Conference</option>
                </select>
                <p class="error" v-if="typeError"> {{typeError}} </p>
                <input class="form-control" type="file" id="formFile" name ="image" ref="file" @change="selectFile" required>
                
                 </form>
              </div>
</template>

<script>
import axios from "axios";
export default {
   name: "FormEvent",
   data(){
    return {
          title : this.currentEvent.title,
          organizer : this.currentEvent.organizer,
          place : this.currentEvent.place,
          date : this.currentEvent.date,
          type:this.currentEvent.type,
          file:'',
          titleError:'',
          organizerError:'',
          placeError:'',
          dateError:'',
          typeError:'',
          eventArray
        }
   },
   methods:{
      selectFile(){
        this.file = this.$refs.file.files[0];
      },
      handleSubmit(){
        
       var regex = /^(0?[1-9]|[12][0-9]|3[01])[/-](0?[1-9]|1[012])[/-]\d{4}$/
        //validate form
       

        this.titleError = this.title.length >= 10 ? '' : 'Title must be at least 10 chars long'
        this.organizerError = this.organizer.length >= 3 ? '' : 'Organizer must be at least 3 chars long'
        this.placeError = this.place.length >= 5 ? '' : 'Place must be at least 5 chars long'
        this.dateError = regex.test(this.date) ? '' : 'Please enter the correct format : dd/mm/yyyy'
        this.typeError = (this.type === "Exhibition"  || this.type === "Career Fair" || this.type === "Conference" ) ? '' : 'Please select a type : Exhibition , Career Fair or Conference '
        const form = document.getElementById(this.formId);
          const formData = new FormData(form);

        //send form

          if(this.titleError =='' && this.organizerError == '' && this.placeError == '' && this.dateError == '' && this.typeError == '' ){
          axios.post('/create', formData).then( (res) => {
            console.log(res.data.message)
            console.log("form submitted");
            var newEvent = {
              title : res.data.title,
              organizer : res.data.organizer,
              place : res.data.place,
              date : res.data.date,
              type : res.data.type,
              image: res.data.image,
              id : res.data.id
            }
             this.$emit('updateArray',newEvent);
             
            })
            
             $('#exampleModal').modal('hide');
            
          }
      }
   },
   props:['formId','currentEvent'],
   emits: ['updateArray']
  
}
</script>

<style lang="scss">
.form-control {
  margin-bottom: 15px;
}

.form-select {
  margin-bottom: 15px;
}
.error{
  color:red;
  margin-bottom: 10px;
}
</style>