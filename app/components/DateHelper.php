<?php
namespace App\Components;
class DateHelper{
    // date_default_timezone_set('America/New York');
    public function getCurrentDate(){
        return date('d-m-y');
    }
    public function getCurrentTime(){
        return time();
    }
    public function getCurrentDateTime(){
        return Date('l jS \of F Y h:i:s A');
    }
}