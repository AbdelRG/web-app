<template>
  <div class="eventBarContainer">
    <p class="eventLink"  data-filter="upcoming" v-on:click="filterEvent">Upcoming events </p>
    <p class="eventLink" data-filter="past" v-on:click="filterEvent">Past events </p>
  </div>
</template>

<script>
export default {
methods:{
    filterEvent(e){
      const events = document.querySelectorAll('.eventCardContainer');
      const filterButtons =   document.querySelectorAll('.eventLink');
        filterButtons.forEach(filter => {
          filter.style.color = ""
        })
        e.target.style.color = "blue";
      if(e.target.dataset.filter == "upcoming"){

        events.forEach(event => {
          let date = new Date(event.querySelectorAll('.info')[1].innerHTML);
          let currentdate = new Date();
          if (currentdate > date){
             event.style.display = "none";
          }
          else{
             event.style.display = "";
          }
        })
      }
      else{
        events.forEach(event => {
          let date = new Date(event.querySelectorAll('.info')[1].innerHTML);
          let currentdate = new Date();
          if (currentdate < date){
             event.style.display = "none";
          }
          else{
             event.style.display = "";
          }
        })
      }
    }
   }
}
</script>

<style lang="scss">

.eventBarContainer{
    height: 35px ;
    width: 280px;
    border-radius: 10px;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: -15px;
    box-shadow: 0 0 5px silver;
    .eventLink{
        font-size:13px;
        margin-right:20px;
        margin-bottom: 0px;
        
    }
}

</style>