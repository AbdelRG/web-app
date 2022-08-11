<template>
  <div class="eventBarContainer">
    <p class="eventLink">Upcoming events </p>
    <p class="eventLink">Past events </p>
  </div>
</template>

<script>
export default {

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
        
    }
}

</style>