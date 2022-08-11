<template>
<div >
<div class="sideBar">
</div>
<div class ="navigationBarContainer">
    
    <font-awesome-icon v-on:click="showSideBar()" class= "navigationBarIcon" icon="fa-solid fa-bars" />
    <div class="userInfoContainer">
        <font-awesome-icon class= "userInfoIcon" icon="fa-regular fa-comments" />
        <font-awesome-icon class= "userInfoIcon" icon="fa-regular fa-bell" />
         <img class="profilePic" src="../images/photo-1499952127939-9bbf5af6c51c.avif">
         <p class="userName">Jane Doe</p>
         <font-awesome-icon class= "userInfoIcon" icon="fa-solid fa-angle-down" />
    </div>    

</div>

</div>  
</template>

<script>

import { library } from "@fortawesome/fontawesome-svg-core";
import { faBars ,faAngleDown} from "@fortawesome/free-solid-svg-icons";
import { faComments,faBell} from "@fortawesome/free-regular-svg-icons";
library.add(faBars,faComments,faBell,faAngleDown);

var sideBarShow = false;


export default {
 
methods: {

    showSideBar() {
     
        
     if( sideBarShow == false ){
         sideBarShow = true ;
        document.getElementsByClassName("sideBar")[0].style.left ="0px"
        document.getElementsByClassName("navigationBarContainer")[0].style.marginLeft = "200px";
     }else{
        sideBarShow = false;
       document.getElementsByClassName("sideBar")[0].style.left = "-500px"
       document.getElementsByClassName("navigationBarContainer")[0].style.marginLeft = "0px";
     }
     
      
    }
  }
}
</script>

<style lang="scss">


.sideBar{
    width: 200px;
    height: 100vh;
    background-color: white;
    
    left: -250px;
    position: fixed;
    transition:all  500ms ease-out;
   
}
.navigationBarContainer{
    display: flex;
    background: linear-gradient(to right,#144980,#297fb9);
    height: 55px;
    justify-content: space-between;
    align-items: center;
    border-radius: 0px 0px 10px 0px;
     transition:all  500ms ease-out;
    
    .hidden{
        
        display: none;
       
    }
 
    .navigationBarIcon{
        color: white;
        margin-left: 30px;
        font-size: 20px;
        cursor: pointer;
    }
    .userInfoContainer{
        margin-right: 30px;
        display: flex;
        align-items: center;
        
        .userInfoIcon{
            color: white;
            padding-right: 10px ;
        }
        .profilePic{
            width: 30px;
            height: 30px;
            border-radius: 100%;
            object-fit: cover;
            
        }
        .userName{
            color: white;
            padding-right: 10px ;
            padding-left: 10px ;
            font-size: 15px;
        }
    }
    
}



  


</style>