<template>

<div class="eventCardContainer">
<div class="eventCardBloc">    
<img class="eventPic"  v-bind="{src: 'uploads/' + event.image}" >
<p class="eventTitle">{{ event.title }}</p>
<div class="eventContainer">
    <p class="eventOrganizer"> {{ event.organizer }}</p>
    <div class="eventTypeContainer">
    <p class="eventType">{{event.type}}</p>
    </div>
</div> 
<div class="eventInfo">
<font-awesome-icon class="eventIcon" icon="fa-solid fa-location-dot" /> 
<p class="info"> {{event.place}}</p>
</div> 
<div class="eventInfo">
<font-awesome-icon  class="eventIcon" icon="fa-solid fa-calendar" />
<p class="info"> {{dateFormat}}</p>
</div> 
<div class="btnContainer">
    
 <font-awesome-icon class="updateIcon"   icon="fa-solid fa-square-pen" data-bs-toggle="modal"  v-bind="{'data-bs-target': '#exampleModal' + event.id}" />
 

<font-awesome-icon class="deleteIcon" icon="fa-solid fa-square-xmark" />
</div>  

      
         
</div> 
<!-- Modal -->
<div class="modal fade" v-bind="{'id': 'exampleModal' + event.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update event</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <FormEvent :formId="event.id" :currentEvent = this.event />
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit"  v-bind="{form:event.id}" class="btn btn-primary">Upload</button>
            </div>
          </div>
          </div>
        </div>          
</div>
  
</template>

<script>
import { library } from "@fortawesome/fontawesome-svg-core";
import { faLocationDot,faCalendar,faSquarePen,faSquareXmark} from "@fortawesome/free-solid-svg-icons";
import FormEvent from "./FormEvent.vue";

library.add(faLocationDot,faCalendar,faSquarePen,faSquareXmark);



 

export default {
name: "EventCard",
  components:{
    FormEvent,
    
  },
  props:['event'],
  data(){
    return{ 
      dateFormat: null,
      
    }
  },
  mounted(){
   
   var dateString = this.event.date;

   var dateParts = dateString.split("/");
   var dateObject = new Date(+dateParts[2], dateParts[1] - 1, +dateParts[0]);
   const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
                  ];
   this.dateFormat = monthNames[dateObject.getMonth()]+" "+ dateObject.getDate() + ", " + dateObject.getFullYear() ;  
   
    
          
  },
  

}
</script>

<style lang="scss">

.eventCardContainer{
    display: flex;
    flex-direction: column;
    height: 190px;
    width: 240px;
    background-color: white ;
    border-radius: 10px ;
    box-shadow: 0 0 5px silver;
    align-items: flex-start;
    margin-top:25px;
    margin-right:20px;
   
    .eventCardBloc{
        padding: 10px;
       
        z-index: 0;
        flex-shrink: 1;
        
         &:hover{
           
        .btnContainer{
        .updateIcon{
        transform: translateY(-60px) rotate(360deg);    
         opacity: 1;
         font-size: 30px ;
         transition: all 500ms ease-out;
         
        }
        .deleteIcon{
        transform: translateY(-60px) rotate(360deg);    
         opacity: 1;
         font-size: 30px ;
         transition: all 500ms ease-out;
        }
      
        }
    }
    .eventPic{
        width: 220px;
        height: 80px;
        border-radius: 10px ;
        object-fit: cover;
    }
    .eventTitle{
        font-size: 12px;
        
        margin-top:5px;
        width: 150px;
        margin-bottom: 0px;
        text-align: start;
    }
    .eventContainer{
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        margin-bottom: 15px;
        .eventOrganizer{
            color:#47bda7;
            font-size: 10px;
            margin-bottom: 0px;
            
        }
        .eventTypeContainer{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 18px;
            background-color: #e8edf3;
            width: 45px;
            border-radius: 5px;
            .eventType{
                color:#49729d;
                font-size:8px;
                margin-bottom: 0px;
            }
        }
    }
    .eventInfo{
        display: flex;
        align-items: baseline;
        .eventIcon{
            color: #7f8183;
            font-size: 8px;
            margin-right: 3px;
        }
        .info{
            color: #7f8183;
            font-size: 8px;
            margin-bottom: 0px;
        }
    }
    .btnContainer{
       display: flex;
       justify-content: space-evenly;
      .updateIcon{
      
      flex-shrink: 0;
     transform: translateY(0px);
      color:#47bda7;
     opacity: 0;
      cursor: pointer;
      }
      .deleteIcon{
      flex-shrink: 0;
     transform: translateY(0px);
     opacity: 0;
     cursor: pointer;
      color:red
      }
    }
    }
}
 
</style>