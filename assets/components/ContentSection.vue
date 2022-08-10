<template>
  <div class="contentSectionContainer">
    <EventBar/>
  </div> 
</template>

<script>
import EventBar from "./EventBar.vue";

export default {
   name: "ContentSection",
  components:{
    EventBar
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
}

</style>