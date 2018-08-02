<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Event extends Model
{
    protected $fillable = ['url','title','year','sort'];


    public function getOwnYear(){
        $year = [];
         $ys = $this->orderBy('year','asc')->distinct('year')->select('year')->get();
        foreach($ys as $item) {
            $year[] = $item->year;
        }

        return $year;

    }
    public function getOwnItems(){
        $master = [];
        $one=[];
        $sloy = [];
        $sloy2 = [];

        $all_years=$this->getOwnYear();
        $all_events = $this::orderBy('sort', 'asc')->get();

        foreach($all_years as $j=>$year) {

            foreach ($all_events as $k => $item) {

                if($year === $item->year) {
                    $two=[];
                        $two[$k]["date"] = $item->title;
                        $two[$k]["period"] = 0; //hz
                        $two[$k]["year"] = $j;
                        $two[$k]["category"] = 0; //hz
                        $two[$k]["title"] = ""; //hz
                        $two[$k]["url"] = $item->url; //hz
                    $sloy2[]=$two[$k];
                    unset($two[$k]);
                }


            }
            $one["items"] = $sloy2;
            unset($sloy2);
            $sloy[]=$one;


            $master[] = $sloy;
            unset($sloy);
        }




        return $master;


    }
}
