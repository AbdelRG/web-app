<template>
     <div>
    <NavigationBar/>
    <ContentSection/>
     </div>

</template>

<script>
 import NavigationBar from "./components/NavigationBar.vue";
 
 import ContentSection from "./components/ContentSection.vue";
 


export default {
  name: "App",
  components:{
    NavigationBar,
    ContentSection,
  },

   data(){
    return{
      title
    }
 
}};
</script>

<style>

#app {
  font-family: "Roboto" , sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  
 

  min-height: 100vh;
    display: flex;
    flex-direction: column;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}
:root {
  box-sizing: border-box;
}

</style>