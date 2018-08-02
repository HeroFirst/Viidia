<?php

namespace App\Http\Controllers;
use App\Achivement;
use App\Event;
use App\Project;
use App\Service;
use App\Setting;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Technology;
use Illuminate\Http\Request;
use Illuminate\Validation;
use Image;
use Illuminate\Support\Facades\Cache;
class HomeController extends Controller
{

    public $partner = 0;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    //**TECHNOLOGIES**//
    public function technologiesAll(Technology $technology){
        $technologies = $technology->all();
        $pageinfo = ['title'=>'Технологии', 'link'=>'technologies', 'desc'=>'Выберите технологию для изменения'];

        return view('admin.technologies', ['items'=>$technologies, 'pageinfo'=>$pageinfo]);
    }
    public function technologiesGetId(Technology $technology, $id){
        $technologyId = $technology->find($id);
        return view('admin.technologyId', ['item'=>$technologyId]);
    }
    public function technologiesUpdateId(Request $request, Technology $technology, $id){
        $t=$request->title;
        $d=$request->description;
        $CkEditor = $request->ckeditor1;

        if($technology->where('id', $id)->update(['title'=>$t, 'description'=>$d, 'big-description'=>$CkEditor])){
            Session::flash('is', '/technologies/'.$id);
        }else{
            Session::flash('is', ' ');
        }
        return back();
    }
    //** END TECHNOLOGIES**//


    //**TECHNOLOGIES**//
    public function theTechnologiesAll(Technology $technology){
        $technologies = $technology->all();
        $pageinfo = ['title'=>'Технологии', 'link'=>'technologies', 'desc'=>'Выберите технологию для изменения'];

        return view('admin.the_technologies', ['items'=>$technologies, 'pageinfo'=>$pageinfo]);
    }
    public function theTechnologiesGetId(Technology $technology, $id){

        $technologyId = $technology->find($id);
        return view('admin.technologyId', ['item'=>$technologyId]);
    }

    public function theTechnologiesUpdateId(Request $request, Technology $technology, $id){
      
        $t=$request->title;
        $d=$request->description;
        $CkEditor = $request->ckeditor1;

       

        $data = ['title'=>$t, 'description'=>$d, 'big-description'=>$CkEditor];
       
        if($request->icon){
             $icon = $request->file('icon');
                $filenameIcon = time().$icon->getClientOriginalExtension();
        Image::make($icon)->crop(100,132)->save('images/svg/'.$filenameIcon);
            $data['icon'] = "images/svg/".$filenameIcon;
        }
        if($request->cover){
            $cover = $request->file('cover');
                   $filenameCover = time().$cover->getClientOriginalExtension();
        Image::make($cover)->crop(582,259)->save('images/technology/'.$filenameCover);
            $data['url'] = "images/technology/".$filenameCover;
        }

       
        if($technology->where('id', $id)->update($data)){
            Session::flash('is', '/technologies/'.$id);
        }else{
            Session::flash('is', ' ');
        }
        return back();
    }

    public function theTechnologiesGetCreate(){

        return view('admin.the_technologies_create');
    }
    public function theTechnologiesCreateDB(Request $request, Technology $technology){

        $this->validate($request, [
            'title'=>'required',
            'description'=>'required',
            
            'cover'=>'required',
            'ckeditor1'=>'required',
        ]);

        $t=$request->title;
        $d=$request->description;
       
   


        

       


        $CkEditor = $request->ckeditor1;

        $data = ['title'=>$t, 'description'=>$d, 'big-description'=>$CkEditor];

        if($request->file('icon')){
             $icon = $request->file('icon');
            $filenameIcon = time().$icon->getClientOriginalExtension();
        Image::make($icon)->crop(100,132)->save('images/svg/'.$filenameIcon);
            $data['icon'] = "images/svg/".$filenameIcon;
        }
        if($request->file('cover')){
                 $cover = $request->file('cover');
             $filenameCover = time().$cover->getClientOriginalExtension();
        Image::make($cover)->crop(582,259)->save('images/technology/'.$filenameCover);
            $data['url'] = "images/technology/".$filenameCover;
        }

        if($new = $technology->create($data)){
            Session::flash('is', '/technologies/'.$new->id);
        }else{
            Session::flash('is', ' ');
        }
        return back();
    }
    public function theTechnologiesDelete($id, Technology $technology){

        $technology->where('id','=',$id)->delete();


        return redirect('/admin/thetechnologies');

    }
    //** END TECHNOLOGIES**//

    // ** SERVICES ** //
    public function servicesAll(Service $service){
        $service = $service->all();
        $pageinfo = ['title'=>'Услуги', 'link'=>'services', 'desc'=>'Выберите услугу для изменения'];

        return view('admin.services', ['items'=>$service, 'pageinfo'=>$pageinfo]);
    }
    public function serviceGetId(Service $service, $id){
        $serviceId = $service->find($id);
        return view('admin.serviceId', ['item'=>$serviceId]);
    }
    public function serviceUpdateId(Request $request, Service $service, $id){ //here123123
        $t=$request->title;
        $sh=$request->short_description;
        $d=$request->description;
        $CkEditor = $request->ckeditor1;



        $cover_service=$request->file('cover_service');
        $url=$request->file('url');

        $data = ['title'=>$t, 'short_description'=>$sh, 'description'=>$d, 'big-description'=>$CkEditor];
        if($cover_service){
            //удалить старый файл
            $oldImg = $service->find($id)->first()->cover_service;
            Storage::disk('delete')->delete($oldImg);

            //загрузить новый файл
            $path_filename_icon = 'images/svg/services/'.time().$cover_service->getClientOriginalName();
            Image::make($cover_service)->crop(140,151)->save($path_filename_icon);
            $data['cover_service']=$path_filename_icon;
        }
        if($url){
            //удалить старый файл
            $oldImg = $service->find($id)->first()->url;
            Storage::disk('delete')->delete($oldImg);

            //загрузить новый файл
            $path_filename_url = 'images/services/'.time().$url->getClientOriginalName();
            Image::make($url)->crop(538,244)->save($path_filename_url);
            $data['url']=$path_filename_url;
        }

        //записать в базу
        if($service->where('id', $id)->update($data)){
            Session::flash('is', '/services/'.$id);
        }else{
            Session::flash('is', ' ');
        }
        return back();
    }
    public function servicesDelete(Service $service, $id){

       $service->where('id','=',$id)->delete();


        return redirect('/admin/services');
    }
    public function serviceCreate(){
        return view('admin.service_create');
    }
    public function serviceCreateDb(Request $request, Service $service){ //here123123
        $t=$request->title;
        $sh=$request->short_description;
        $d=$request->description;
        $CkEditor = $request->ckeditor1;


        //удалить старый файл
        $cover_service=$request->file('cover_service');
        $url=$request->file('url');

        $data = ['title'=>$t, 'short_description'=>$sh, 'description'=>$d, 'big-description'=>$CkEditor];
        if($cover_service){
            //загрузить новый файл
            $path_filename_icon = 'images/svg/services/'.time().$cover_service->getClientOriginalName();
            Image::make($cover_service)->crop(140,151)->save($path_filename_icon);
            $data['cover_service']=$path_filename_icon;
        }
        if($url){
            //загрузить новый файл
            $path_filename_url = 'images/services/'.time().$url->getClientOriginalName();
            Image::make($url)->crop(538,244)->save($path_filename_url);
            $data['url']=$path_filename_url;
        }

        $id=$service->create($data);
        //записать в базу
        if($id){
            Session::flash('is', '/services/'.$id->id);
        }else{
            Session::flash('is', ' ');
        }
        return back();
    }

    // ** END SERVICES ** //

    //**Projects**//
    public function projectsAll(Project $project){
        $projects = $project->all();
        $pageinfo = ['title'=>'Проекты','link'=>'projects', 'desc'=>'Выберите проект для изменения'];
        return view('admin.technologies', ['items'=>$projects, 'pageinfo'=> $pageinfo]);
    }
    public function projectsGetId(Project $project, $id){

        $projectId = $project->find($id);
        $galery = $projectId->images;
        return view('admin.projectId', ['item'=>$projectId, 'galery'=>$galery]);
    }
    public function projectsSingleImgGl($id){
        $sImg = \App\Image::find($id);

        Storage::disk('delete')->delete($sImg->url);
        $sImg->delete();
        return back();
    }
    public function projectsUpdateId(Request $request, Project $project, $id){ //here123123
        $t=$request->title;
        $a=$request->address;
        $y=$request->year;
        $CkEditor = $request->ckeditor1;
        
        //удалить старый файл
        $cover=$request->file('cover');
        if($cover){
        $oldImg = $project->where('id','=',$id)->get()[0]->url;
        Storage::disk('delete')->delete($oldImg);
        
        //загрузить новый файл
                    $filename = time().$cover->getClientOriginalExtension();
        Image::make($cover)->fit(410,247)->save('images/galery/'.$filename);
        $data = ['title'=>$t, 'address'=>$a, 'year'=>$y, 'description'=>$CkEditor,'url'=>'/images/galery/'.$filename];
        }else{
        $data = ['title'=>$t, 'address'=>$a, 'year'=>$y, 'description'=>$CkEditor];
        }
        
        //записать в базу
        if($project->where('id', $id)->update($data)){
            Session::flash('is', '/projects/'.$id);
        }else{
            Session::flash('is', ' ');
        }
        return back();
    }
    public function projectsDelete(Project $project, $id){

        $pr =$project->find($id);

        Storage::disk('upload')->delete($pr->url);



        foreach($pr->images as $img){
            Storage::disk('delete')->delete($img['url']);

        }

        $sImgs = \App\Image::where('project_id','=',$pr->id)->delete();

        $pr->delete();

        return redirect('/admin/projects/');
    }
    public function projectsCreate(Request $request, Project $project){
        $t=$request->title;
        $a=$request->address;
        $y=$request->year;
        //galery
        $files=
        //galery
        $CkEditor = $request->ckeditor1;

//        if($project->where('id', $id)->update(['title'=>$t, 'address'=>$a, 'year'=>$y, 'description'=>$CkEditor])){
//            Session::flash('is', '/projects/'.$id);
//        }else{
//            Session::flash('is', ' ');
//        }
        return view('admin.project_create');
    }
    public function projectsCreateDb(Request $request, Project $project){

        $te=$request->title;
        $ad=$request->address;
        $y=$request->year;
        //galery
        $cover=$request->file('cover');
            $filename = time().$cover->getClientOriginalExtension();
        Image::make($cover)->fit(410,247)->save('images/galery/'.$filename);

//        dd($request->all());
        //galery
        $CkEditor = $request->ckeditor1;
        $id=$project->create(['title'=>$te,'address'=>$ad,'year'=>$y,'description'=>$CkEditor,'url'=>'/images/galery/'.$filename]);

        if($id){
            Session::flash('is', '/projects/'.$id->id);
        }else{
            Session::flash('is', ' ');
        }
        return view('admin.project_create');
    }

    public function projectsAdGl(Request $request, Project $project, $project_id){



        if ($request->file('filedr')) {
            $img=$request->file('filedr');
            $min = time().$img->getClientOriginalName();
            $big = "big_".time().$img->getClientOriginalName();
            
            Image::make($img)->save('images/galery/'.$big);
            Image::make($img)->fit(364,239)->save('images/galery/'.$min);
            \App\Image::create(['url'=>'/images/galery/'.$min, 'big-url'=>'/images/galery/'.$big, 'project_id'=>$project_id]);
//            $tempFile = $_FILES['file']['tmp_name'];
//
//            $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
//
//            $targetFile =  $targetPath. $_FILES['file']['name'];
//
//            move_uploaded_file($tempFile,$targetFile);

        } else {
            $result  = array();

//            $files = scandir($storeFolder);                 //1
            $files= $project->find($project_id)->images();
            if ( false!==$files ) {
                foreach ( $files as $file ) {
//                    if ( '.'!=$file && '..'!=$file) {       //2
                        $obj['name'] = basename(Storage::size($file->url));
                        $obj['size'] = Storage::size($file->url);
                        $result[] = $obj;
//                    }
                }
            }

            header('Content-type: text/json');              //3
            header('Content-type: application/json');
            echo json_encode($result);
        }
    }
    //** END Projects**//
    
    //**PARTNER**//
     public function partnersGet(){
         $galery = \App\Image::where('project_id','=', $this->partner)->get();
         $projectId = [
             'id'=>$this->partner
         ];

        return view('admin.partners', ['item'=>$projectId, 'galery'=>$galery]);
    }
    public function partnersAdGl(Request $request, Project $project, $project_id){



        if ($request->file('filedr')) {

            $img=$request->file('filedr');
            $min = time().$img->getClientOriginalName();
            $big = "big_".time().$img->getClientOriginalName();


            Image::make($img)->fit(236,148)->save('images/partners/'.$min);
            \App\Image::create(['url'=>'/images/partners/'.$min,  'project_id'=>$this->partner]);


        } else {
            return 0;
            $result  = array();

//            $files = scandir($storeFolder);                 //1
            $files= $project->find($project_id)->images();
            if ( false!==$files ) {
                foreach ( $files as $file ) {
//                    if ( '.'!=$file && '..'!=$file) {       //2
                    $obj['name'] = basename(Storage::size($file->url));
                    $obj['size'] = Storage::size($file->url);
                    $result[] = $obj;
//                    }
                }
            }

            header('Content-type: text/json');              //3
            header('Content-type: application/json');
            echo json_encode($result);
        }
    }
   //**END PARTNER**//

    ///Достижения  ->rotate((int)30)
    public function achivementsAll(Achivement $achivement){
          $achivements = $achivement->orderBy('id','asc')->get();
          return view('admin.achivemets', ['items' => $achivements]);
    }
    public function achivementGetCreate(){

        return view('admin.achivement_create');
    }
    public function achivementCreateDB(Request $request, Achivement $achivement){

        $this->validate($request, [
            'title'=>'max:10',
            'description'=>'required|max:80',

            'cover'=>'required',
        ]);

        $t=$request->title;
        $d=$request->description;



        $data = ['title'=>$t, 'description'=>$d];

        if($request->file('cover')){
            $cover = $request->file('cover');
            $filenameCover = time().$cover->getClientOriginalExtension();
            Image::make($cover)->resize(606, 606)->save('images/achivements/'.$filenameCover);
            $data['url'] = "images/achivements/".$filenameCover;
        }

        if($new = $achivement->create($data)){
            Session::flash('is', '/');
        }else{
            Session::flash('is', ' ');
        }
        return back();
    }


    public function achivementGetId(Achivement $achivement, $id){

         $achivementId = $achivement->find($id);
        if(!$achivementId)
            return back();

        return view('admin.achivement_update', ['item'=>$achivementId]);
    }

    public function achivementUpdateId(Request $request, Achivement $achivement, $id){
        $this->validate($request, [
            'title'=>'max:10',
            'description'=>'max:80',


        ]);
        $t=$request->title;
        $d=$request->description;



        $data = ['title'=>$t, 'description'=>$d];


        if($request->cover){
            $cover = $request->file('cover');
            $filenameCover = time().$cover->getClientOriginalExtension();
            Image::make($cover)->resize(606, 606)->save('images/achivements/'.$filenameCover);
            $data['url'] = "images/achivements/".$filenameCover;
        }


        if($achivement->where('id', $id)->update($data)){
            Session::flash('is', '/');
        }else{
            Session::flash('is', ' ');
        }
        return back();
    }
    public function achivementDelete($id, Achivement $achivement){
        $achivement->where('id','=',$id)->delete();
        return redirect('/admin/achivements');
    }
    ///Достижения

    //EVENTS
    public function eventsAll(Event $event){

        $events = $event::orderBy('sort','asc')->get();

        return view('admin.events', ['events'=>$events]);
    }
    public function eventCreate(){
        return view('admin.event_create');
    }

    public function eventsChange(Request $request, Event $events){

        if($request->sort) {
            $elements = $request->sort;
            foreach ($elements as $i => $row) {
                $events->where('id',$row)->update(['sort'=> ++$i]);
            }
        }
        if($request->item) {

            $item_sort = $events->where('id', '=', $request->item)->get();
            $item_sort_node = 0;

            ($item_sort[0]->sort <= 1) ? $item_sort_node = $item_sort[0]->sort + 1 : $item_sort_node = $item_sort[0]->sort - 1;

            $childNodeYear = $events->where('sort', '=', $item_sort_node)->get()[0]->year;
            $item_sort[0]->year=$childNodeYear;
            $item_sort[0]->save();

            Cache::forget('slider');
            return $item_sort;
        }
    }




    public function eventCreateDB(Request $request, Event $event){

        $this->validate($request, [
            'title'=>'required|max:130',
            'year'=>'required|max:4',


        ]);

        $t=$request->title;
        $d=$request->year;

        $data = ['title'=>$t, 'year'=>$d];

        if($request->file('cover')){
            $cover = $request->file('cover');
             $filenameCover = time().$cover->getClientOriginalName();
            Image::make($cover)->save('images/events/'.$filenameCover);
            $data['url'] = "images/events/".$filenameCover;
        }
        $new = $event->create($data);
        if(1) {

            $elements = \App\Event::orderBy('year', 'asc')->get();
            foreach ($elements as $i => $row) {
                \App\Event::where('id', $row->id)->update(['sort' => ++$i]);

            }
            Cache::forget('slider');
            Session::flash('is', '/');
        }else{
            Session::flash('is', ' ');
        }
        return back();
    }

//
    public function getIdEvent(Event $event, $id){

        $eventId = $event->find($id);
        if(!$eventId)
            return back();

        return view('admin.event_update', ['item'=>$eventId]);
    }
//
    public function updateIdEvent(Request $request, Event $event, $id){
        $this->validate($request, [
            'title'=>'required|max:130',
            'year'=>'required|max:4',


        ]);

        $t=$request->title;
        $d=$request->year;




        $data = ['title'=>$t, 'year'=>$d];



        if($request->file('cover')){
            $cover = $request->file('cover');
            $filenameCover = time().$cover->getClientOriginalName();
            Image::make($cover)->save('images/events/'.$filenameCover);
            $data['url'] = "images/events/".$filenameCover;
        }

        Cache::forget('slider');
        if($event->where('id', $id)->update($data)){
            Session::flash('is', '/admin/events#'.$id);
        }else{
            Session::flash('is', ' ');
        }
        return back();
    }

    public function eventDelete($id, Event $item){
        $item->where('id','=',$id)->delete();
        return redirect('/admin/events');
    }
    //END EVENTS


    // SETTINGS


    public function getSettings(){

        $data = [];
        return view('admin.settings_viidia', $data);
    }

    public function UpdateSettings(Request $request, $id, Setting $setting){

        $this->validate($request, [
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);

        $a=$request->address;
        $e=$request->email;
        $p=$request->phone;

        $c1 = $request->ckeditor1;

        $data = ['address'=>$a, 'email'=>$e, 'phone'=>$p];

        if($c1)
            $data['about_box']=$c1;



        Cache::forget('settings');
        if($setting->where('id', $id)->update($data)){
            Session::flash('is', '/admin/settings');
        }else{
            Session::flash('is', ' ');
        }
        return back();
    }
    //END SETTINGS

}
