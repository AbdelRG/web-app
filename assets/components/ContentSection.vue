<template>
  <div class="contentSectionContainer">
    <EventBar/>
    <div class="cardListContainer">
    
    <EventCard/>
    <EventCard/>
    <EventCard/>
    <EventCard/>
    <EventCard/>
    <EventCard/>
    </div>
  </div> 
</template>

<script>
import EventBar from "./EventBar.vue";
import EventCard from "./EventCard.vue";

export default {
   name: "ContentSection",
  components:{
    EventBar,
    EventCard,
    
  },

}
</script>

<style lang="scss">
.contentSectionContainer{

    display: flex;
    flex-direction: column ;
    align-items: center;
    margin-top:35px;
    border-top: solid 2px #f0f0f0;
    .cardListContainer{
        display: grid;
        grid-template-columns: 240px 240px 240px;
        gap: 10px 20px;
       
         justify-content: center;
         margin-top:60px;
         
        
    }
     
}

</style>