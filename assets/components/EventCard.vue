<template>

<div class="eventCardContainer">
<div class="eventCardBloc">    
<img class="eventPic" src="../images/photo-1505373877841-8d25f7d46678.avif">
<p class="eventTitle">Premier évenement</p>
<div class="eventContainer">
    <p class="eventOrganizer">L'oreal</p>
    <div class="eventTypeContainer">
    <p class="eventType">Exhibition</p>
    </div>
</div> 
<div class="eventInfo">
<font-awesome-icon class="eventIcon" icon="fa-solid fa-location-dot" /> 
<p class="info"> Paris ,France</p>
</div> 
<div class="eventInfo">
<font-awesome-icon  class="eventIcon" icon="fa-solid fa-calendar" />
<p class="info"> December 20,2022</p>
</div> 
</div>           
</div>
  
</template>

<script>
import { library } from "@fortawesome/fontawesome-svg-core";
import { faLocationDot,faCalendar} from "@fortawesome/free-solid-svg-icons";

library.add(faLocationDot,faCalendar);
export default {

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
     box-shadow: 0 0 3px silver;
    align-items: flex-start;
    margin-top:25px;
    
    margin-right: 50px;
    .eventCardBloc{
        padding: 10px;
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
        margin-bottom: 5px;
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
            border-radius: 5px ;
            .eventType{
                color: #49729d;
                font-size:8px;
            }
        }
    }
    .eventInfo{
        display: flex;
        align-items: baseline;
        .eventIcon{
            color: grey;
            font-size: 8px;
            margin-right: 3px;
        }
        .info{
            color: grey;
            font-size: 8px;
            margin-bottom: 0px;
        }
    }
    }
}

</style>