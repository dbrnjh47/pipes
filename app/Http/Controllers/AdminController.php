<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Settings;
use App\Models\News;
use App\Models\Catalog;
use App\Models\Service;
use App\Models\ServiceLot;

use DataTables;

class AdminController extends Controller
{   
    public function index() {
		return view('admin.pages.index');
    }

    public function settings() {
        return view('admin.pages.settings'); 
    }

    public function settingsSave(Request $r) {
        $image = $this->settings->logo;
    	if($r->file('img'))
    	{
    		$i = $r->file('img');
    		$form = $i->getClientOriginalExtension();
    		$new_name = 'logo_'.time().'.'.$form;
    		$image = '/temple/pk/img/logo/'.$new_name;
    	    $i->move(public_path('temple/pk/img/logo/'), $new_name);
    	}

        Settings::where('id', 1)->update([
            'name' => $r->name,
            'phone' => $r->phone,
            'mail' => $r->mail,
            'address' => $r->address,
            'teh_works' => $r->teh_work,
            'logo' => $image
            ]);

        return redirect()->route('admin.settings')->with('success', 'Настройки сохранены!');
    }

    // новости
    public function news() {
        return view('admin.pages.news');
    }

    public function newsAjax() {
        return datatables(News::get())->toJson();
    }

    public function addNews(Request $r) {
    	$image = '/temple/pk/img/news/def.png';
    	if($r->file('img'))
    	{
    		$i = $r->file('img');
    		$form = $i->getClientOriginalExtension();
    		$new_name = 'news_'.time().'.'.$form;
    		$image = '/temple/pk/img/news/'.$new_name;
    	    $i->move(public_path('temple/pk/img/news/'), $new_name);
    	}

        News::insert([
            'name' => $r->name, 
            'img' => $image, 
            'description' => $r->description, 
            'short_description' => $r->short_description, 
            'created_at' => $r->created_at, 
            'status' => $r->status
        ]);
        return redirect()->back()->with('success', 'Новость добавлена!');
    }

    public function news_del($id) {
    	News::where('id', $id)->delete();

		return redirect()->back()->with('success', 'Новость удалена!');
    }

    public function news_editing($id) {
        $news = News::where('id', $id)->first();

        return view('admin.pages.news_editing', compact('news')); 
    }

    public function newsSave(Request $r) {

        $image = $r->img_save;
        if($r->file('img'))
        {

            $i = $r->file('img');
            $form = $i->getClientOriginalExtension();
            $new_name = 'news_'.time().'.'.$form;
            $image = '/temple/pk/img/news/'.$new_name;
            $i->move(public_path('temple/pk/img/news/'), $new_name);

        }


        if($r->get('id') == null) return back()->with('error', 'Не удалось найти новость!');
        
        $date = null;
        if($r->get('date') != null) $date = $r->get('date');
        News::where('id', $r->id)->update([
            'name' => $r->name, 
            'img' => $image, 
            'description' => $r->description, 
            'short_description' => $r->short_description, 
            'created_at' => $r->created_at, 
            'status' => $r->status
        ]);
        
        return back()->with('success', 'Новость обновлена!');
    }
    // новости
    
    // каталоги
    public function catalogs() {
        return view('admin.pages.cot');
    }

    public function catalogsAjax() {
        return datatables(Catalog::get())->toJson();
    }

    public function addcatalogs(Request $r) {
        Catalog::create([
            'name' => $r->name, 
            'status' => $r->status
        ]);

        return redirect()->back()->with('success', 'Каталог добавлен!');
    }

    public function catalogs_del($id) {
    	Catalog::where('id', $id)->delete();

		return redirect()->back()->with('success', 'Каталог удален!');
    }

    public function catalogs_editing($id) {
        $catalogs = Catalog::where('id', $id)->first();

        return view('admin.pages.catalogs_editing', compact('catalogs')); 
    }

    public function catalogsSave(Request $r) {


        if($r->get('id') == null) return back()->with('error', 'Не удалось найти каталог!');
        
        Catalog::where('id', $r->id)->update([
            'name' => $r->name, 

            'status' => $r->status
        ]);
        
        return back()->with('success', 'Каталог обновлён!');
    }
    // каталоги

    // услуги
    public function services() {
        $Сatalog = Catalog::get();
        return view('admin.pages.services', compact('Сatalog'));
    }

    public function servicesAjax() {
        $Service = Service::get();
        foreach($Service as $key => $s){
            $cat = Catalog::where('id', $s->catalog_id)->first();
            $Service[$key]->catalog_id = $cat->name;
        }
        return datatables($Service)->toJson();
    }

    public function addservices(Request $r) {
    	$image = '/temple/pk/img/service/def.png';
    	if($r->file('img'))
    	{
    		$i = $r->file('img');
    		$form = $i->getClientOriginalExtension();
    		$new_name = 'service_'.time().'.'.$form;
    		$image = '/temple/pk/img/service/'.$new_name;
    	    $i->move(public_path('temple/pk/img/service/'), $new_name);
    	}

        Service::create([
            'name' => $r->name, 
            'img' => $image, 
            'description' => $r->description, 
            'information' => $r->information, 
            'catalog_id' => $r->catalog_id, 
            'status' => $r->status
        ]);
        return redirect()->back()->with('success', 'Услуга добавлена!');
    }

    public function services_del($id) {
    	Service::where('id', $id)->delete();

		return redirect()->back()->with('success', 'Услуга удалена!');
    }

    public function services_editing($id) {
        $services = Service::where('id', $id)->first();
        $Сatalog = Catalog::get();

        return view('admin.pages.services_editing', compact('services', 'Сatalog')); 
    }

    public function servicesSave(Request $r) {

        $image = $r->img_save;
        if($r->file('img'))
        {

            $i = $r->file('img');
            $form = $i->getClientOriginalExtension();
            $new_name = 'service_'.time().'.'.$form;
            $image = '/temple/pk/img/service/'.$new_name;
            $i->move(public_path('temple/pk/img/service/'), $new_name);

        }


        if($r->get('id') == null) return back()->with('error', 'Не удалось найти услугу!');
        
        $date = null;
        if($r->get('date') != null) $date = $r->get('date');
        Service::where('id', $r->id)->update([
            'name' => $r->name, 
            'img' => $image, 
            'description' => $r->description, 
            'information' => $r->information, 
            'catalog_id' => $r->catalog_id, 
            'status' => $r->status
        ]);
        
        return back()->with('success', 'Услуга обновлена!');
    }
    // услуги

    // лот
    public function service_lots() {
        $Service = Service::get();
        return view('admin.pages.service_lots', compact('Service'));
    }

    public function service_lotsAjax() {
        $Service = ServiceLot::get();
        foreach($Service as $key => $s){
            $cat = Service::where('id', $s->services_id)->first();
            $Service[$key]->services_id = $cat->name;
        }
        return datatables($Service)->toJson();
    }
    
    public function get_information_service($id) {
        $Service = Service::where('id', $id)->first();
        
        return json_decode($Service->information);
    }

    public function addservice_lots(Request $r) {
        ServiceLot::create([
            'information' => $r->information, 
            'services_id' => $r->services_id
        ]);
        return redirect()->back()->with('success', 'Лот добавлен!');
    }

    public function service_lots_del($id) {
    	ServiceLot::where('id', $id)->delete();

		return redirect()->back()->with('success', 'Услуга удалена!');
    }

    public function  service_lots_editing($id) {
        $ServiceLot = ServiceLot::where('id', $id)->first();
        $Service = Service::get();
        $ServiceLot_Service = Service::where('id', $ServiceLot->services_id)->first();
        return view('admin.pages.service_lots_editing', compact('ServiceLot', 'Service', 'ServiceLot_Service')); 
    }

    public function service_lotsSave(Request $r) {
        if($r->id == null) return back()->with('error', 'Не удалось найти услугу!');
        
        ServiceLot::where('id', $r->id)->update([
            'information' => $r->information, 
            'services_id' => $r->services_id
        ]);
        
        return back()->with('success', 'Услуга обновлена!');
    }
    // лот
}