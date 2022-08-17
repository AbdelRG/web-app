<template>
<div >
<div class="sideBar">
    <img class="sideBarLogo" src="../images/logo.png">
    <div class="sideBarListContainer">
    <a class="sideBarElementLink" href="#">
    <div class="sideBarElementContainer1">
        <div class="sideBarInfo1">
     <font-awesome-icon class="sideBarIcon1" icon="fa-solid fa-user" />
     <p class="sideBarElementContent1">My profile</p>
     </div>
     <font-awesome-icon class= "sideBarIconArrow" icon="fa-solid fa-angle-down" />
    </div>
    </a>
    <a class="sideBarElementLink" href="#">
    <div class="sideBarElementContainer1">
        <div class="sideBarInfo1">
     <font-awesome-icon class="sideBarIcon1" icon="fa-solid fa-user-group" />
     <p class="sideBarElementContent1">My network</p>
     </div>
     <font-awesome-icon class= "sideBarIconArrow" icon="fa-solid fa-angle-down" />
    </div>
    </a>
    <a class="sideBarElementLink" href="#">
    <div class="sideBarElementContainer1">
        <div class="sideBarInfo1">
     <font-awesome-icon class="sideBarIcon1" icon="fa-solid fa-diagram-project" />
     <p class="sideBarElementContent1">Communities</p>
     </div>
     <font-awesome-icon class= "sideBarIconArrow" icon="fa-solid fa-angle-down" />
    </div> 
    </a>
     <a class="sideBarElementLink" href="#">
    <div class="sideBarElementContainer">
        <div class="sideBarInfo">
     <font-awesome-icon class="sideBarIcon" icon="fa-regular fa-envelope" />
     <p class="sideBarElementContent">Inbox</p>
     </div>
    </div> 
     </a>
    <a class="sideBarElementLink" href="#">
    <div class="sideBarElementContainer">
        <div class="sideBarInfo">
     <font-awesome-icon class="sideBarIcon" icon="fa-solid fa-house" />
     <p class="sideBarElementContent">Companies</p>
     </div>
    </div> 
    </a>
     <a class="sideBarElementLink" href="#">
     <div class="sideBarElementContainer">
        <div class="sideBarInfo">
     <font-awesome-icon class="sideBarIcon" icon="fa-solid fa-briefcase" />
     <p class="sideBarElementContent">Find a job</p>
     </div>
    </div> 
     </a>
     <a class="sideBarElementLink" href="#">
     <div class="sideBarElementContainer">
        <div class="sideBarInfo">
     <font-awesome-icon class="sideBarIcon" icon="fa-regular fa-folder" />
     <p class="sideBarElementContent">Find a mission</p>
     </div>
    </div> 
     </a>
      <a class="sideBarElementLink" href="#">
      <div class="sideBarElementContainer">
        <div class="sideBarInfo">
     <font-awesome-icon class="sideBarIcon" icon="fa-solid fa-calendar" />
     <p class="sideBarElementContent">Find an event</p>
     </div>
    </div> 
      </a>
    <a class="sideBarElementLink" href="#">
    <div class="sideBarElementContainer">
        <div class="sideBarInfo">
     <font-awesome-icon class="sideBarIcon" icon="fa-regular fa-pen-to-square" />
     <p class="sideBarElementContent">Publications</p>
     </div>
    </div> 
    </a>
      <button type="button" v-on:click="hideSideBar()" class="btn btn-danger">Close</button>
    </div>    
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
import { faBars ,faAngleDown,faUser,faUserGroup,faDiagramProject,faHouse,faBriefcase,faCalendar} from "@fortawesome/free-solid-svg-icons";
import { faComments,faBell,faEnvelope,faFolder,faPenToSquare} from "@fortawesome/free-regular-svg-icons";
library.add(faBars,faComments,faBell,faAngleDown,faUser,faUserGroup,faDiagramProject,faEnvelope,faHouse,faBriefcase,faFolder,faCalendar,faPenToSquare);

var sideBarShow = false;


export default {
 
methods: {

    showSideBar() {
     
        
     if( sideBarShow == false ){
         sideBarShow = true ;
        document.getElementsByClassName("sideBar")[0].style.left ="0px"
        document.getElementsByClassName("navigationBarContainer")[0].style.marginLeft = "160px";
     }else{
        sideBarShow = false;
       document.getElementsByClassName("sideBar")[0].style.left = "-500px"
       document.getElementsByClassName("navigationBarContainer")[0].style.marginLeft = "0px";
     }
     
      
    },
    hideSideBar(){
        sideBarShow = false;
        document.getElementsByClassName("sideBar")[0].style.left ="-2500px";
        document.getElementsByClassName("navigationBarContainer")[0].style.marginLeft = "0px";
        
    }

  }
}
</script>

<style lang="scss">


.sideBar{
    width: 160px;
    height: 100vh;
    background-color: white;
    border-radius: 0px 0px 10px 0px;
    left: -250px;
    position: fixed;
    transition:all  500ms ease-out;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    box-shadow: 0 0 5px silver;
    .sideBarLogo{
        height: 40px;
        width: 115px;
        margin-top:20px;
        margin-right:15px;
        padding-bottom: 10px;
        object-fit: cover;
        border-bottom: solid 1px #ebebeb;
        margin-bottom:50px;
    }
    .sideBarListContainer{
        display: flex;
        flex-direction: column;
        .btn-danger {
            display: none;
        }
        .sideBarElementLink{
             text-decoration: none;
             cursor: pointer;
        }
        .sideBarElementLink:visited{
            
             
            .sideBarElementContainer{
                .sideBarIcon{
                    color:#46bda7;
                }
                .sideBarElementContent{
                    color:#46bda7;
                }   
            }
             .sideBarIconArrow{
            
            color:#46bda7;
          
        } 
        }
    .sideBarElementContainer{
        display: flex;
        align-items: center;
        margin-bottom: 40px;
        justify-content: space-between;
        .sideBarInfo{
            display: flex;
            align-items: center;

        .sideBarIcon{
            font-size:12px;
            color: #919394;
            
        }
        .sideBarElementContent{
            color:#919394 ;
            font-size:12px;
            padding-left: 4px;
            margin-bottom: 0px;
        }
        }
        
        
    }
    .sideBarElementContainer1{
        display: flex;
        align-items: center;
        margin-bottom: 40px;
        justify-content: space-between;
        .sideBarInfo1{
            display: flex;
            align-items: center;

        .sideBarIcon1{
            font-size:12px;
            color: #919394;
            
        }
        .sideBarElementContent1{
            color:#919394 ;
            font-size:12px;
            padding-left: 4px;
            margin-bottom: 0px;
        }
        }
        .sideBarIconArrow{
            font-size:12px;
            color:#919394 ;
            margin-left:35px;
        } 
        
    }
       
    }
}
.navigationBarContainer{
    display: flex;
    background: linear-gradient(to right,#144980,#297fb9);
    height: 55px;
    justify-content: space-between;
    align-items: center;
    border-radius: 0px 0px 10px 0px;
     transition: all  500ms ease-out;
    
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
            margin-bottom: 0px;
        }
    }
    
}

@media screen and (min-width:0px) and  (max-width: 900px) {
    .sideBar{
        width: 100%;
        height: 100vh;
        left: -2500px;
        
        
        z-index: 10;
        .sideBarListContainer{
            .btn-danger {
            display: block;
        }
        }
    } 
    
  
}



</style>