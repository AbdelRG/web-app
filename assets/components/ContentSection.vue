<template>
  <div class="contentSectionContainer">
    <EventBar/>
    <div class="cardListContainer" >
    
    <EventCard v-for="event in eventArray " :key="event.id"  :event = event @updateEvent = "updateEvent" />
    
    </div>
     <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Add event
        </button>

<!-- Modal -->
      
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add new event</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <FormEvent formId="formAdd" :currentEvent= currentEvent @updateArray = "pushArray"   />
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" form="formAdd" class="btn btn-primary">Upload</button>
            </div>
          </div>
          </div>
        </div>
       

  </div> 
</template>

<script>
import EventBar from "./EventBar.vue";
import EventCard from "./EventCard.vue";
import FormEvent from "./FormEvent.vue";
 
export default {
   name: "ContentSection",
  components:{
    EventBar,
    EventCard,
    FormEvent,
    
  },
  data(){
    return{
      eventArray:eventArray,
      array :[],
      currentEvent: {
        title: '',
        organizer: '',
        place: '',
        date: '',
        type: '',
        file:'',
      }
     
    }
  },
  methods:{
    pushArray(newEvent){
        
        this.eventArray.push({ ...newEvent })
    },
    updateEvent(updatedEvent){
        
      const index =   this.eventArray.findIndex((element) => element.id == updatedEvent.id);
      this.eventArray[index] = updatedEvent ;

    }
  }
  

}
</script>

<style lang="scss">
.contentSectionContainer{

    display: flex;
    flex-direction: column ;
    align-items: center;
    margin-top:35px;
    border-top: solid 2px #f0f0f0;
    margin-bottom: 30px ;
    .cardListContainer{
        display: grid;
        grid-template-columns: 240px 240px 240px;
        gap: 10px 20px;
       
         justify-content: center;
         margin-top:60px;
         margin-bottom:60px;
         
        
    }
    .btn-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #144980;
    --bs-btn-border-color: #144980;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #297fb9;
    --bs-btn-hover-border-color: #0a58ca;
    --bs-btn-focus-shadow-rgb: 49, 132, 253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0a58ca;
    --bs-btn-active-border-color: #0a53be;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #0d6efd;
    --bs-btn-disabled-border-color: #0d6efd;
}

}

@media screen and (min-width:0px) and  (max-width: 650px) {

  .contentSectionContainer{
    margin-bottom: 30px ;
   
    
     .cardListContainer{
      display: flex;
        flex-direction: column;
        gap: 10px 20px;
       
         justify-content: center;
         margin-top:60px;
         margin-bottom:60px;
         margin-left:20px;
         margin-right:20px;
     }
  
}
}
@media screen and (min-width:651px) and  (max-width: 1200px) {
    

  .contentSectionContainer{  
    margin-bottom: 30px ;
  .cardListContainer{
        display: grid;
        grid-template-columns: 240px 240px ;
        gap: 10px 20px;
       
         justify-content: center;
         margin-top:60px;
         margin-bottom:60px;
         
         
        
    }
}
}
</style>