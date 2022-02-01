<?php
class Date_Time{
    //private  $datetiemformat= Date('Y-m-d H:i:s');
    public function getDateTime(){
       return Date('Y-m-d h:i:s');
   }
   public function getDate(){
        return Date("y-m-d");
    }
    public function getTime(){
        return Date("h:i:s");
    }
}
// $date_time=new Date_Time();
// $date_time=$date_time->getDateTime();
// print $date_time;
?>