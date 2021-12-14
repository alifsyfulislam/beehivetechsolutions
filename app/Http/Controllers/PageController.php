<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Choose;
use App\Models\Client;
use App\Models\Faqs;
use App\Models\News;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $menus = Service::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $banners = Banner::with('media')->where('status','=','1')
        ->orderBy('created_at','DESC')->take(3)->get();

        $services = Service::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $chooses = Choose::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $clients = Client::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->take(3)->get();

        $newses = News::with('media','user')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();


        return view('ui.index',[
            'name'          => '/',
            'banners'       => $banners,
            'services'      => $services,
            'chooses'       => $chooses,
            'clients'       => $clients,
            'newses'        => $newses,
            'menus'         => $menus
        ]);
    }

    public function aboutUsViewController(){
        $menus = Service::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $chooses    = Choose::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $newses     = News::with('media','user')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $teams      = Team::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        foreach ($teams as $team){
            $team->social_links = explode(',',$team->social_links);
        }
        return view('ui.page.about-us',[
            'name'          => 'about-us',
            'chooses'       => $chooses,
            'menus'         => $menus,
            'newses'        => $newses,
            'teams'         => $teams
        ]);
    }


    public function bannerViewController($slug){
        $menus = Service::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $newses = News::with('media','user')
        ->where('status','=','1')->paginate(3);

        $banner = Banner::with('media','user')
        ->where('slug','=',$slug)->where('status','=','1')->first();

        $chooses = Choose::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $clients = Client::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->take(3)->get();
    
        return view('ui.page.banner-details',[
            'name'          => 'banner-list',
            'banner'        => $banner,
            'banner_title'  => $banner->title,
            'chooses'       => $chooses,
            'clients'       => $clients,
            'menus'         => $menus,
            'newses'        => $newses
        ]);
    }


    public function bannerListController(){
        $menus = Service::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $newses = News::with('media','user')
        ->where('status','=','1')->paginate(3);

        $banners = Banner::with('media','user')
        ->where('status','=','1')->paginate(3);
        $chooses = Choose::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $clients = Client::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->take(3)->get();

        return view('ui.page.banner-list',[
            'name'           => 'banner-list',
            'banners'        => $banners,
            'chooses'        => $chooses,
            'clients'        => $clients,
            'menus'          => $menus,
            'newses'         => $newses
        ]);
    }

    public function serviceViewController($slug){
        $menus = Service::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $newses = News::with('media','user')
        ->where('status','=','1')->paginate(3);

        $service = Service::with('media','user')
        ->where('slug','=',$slug)->where('status','=','1')->first();

        $chooses = Choose::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $clients = Client::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->take(3)->get();

        return view('ui.page.service-details',[
            'name'           => 'service-list',
            'service'        => $service,
            'service_title'  => $service->title,
            'chooses'        => $chooses,
            'clients'        => $clients,
            'newses'         => $newses,
            'menus'          => $menus,
        ]);
    }


    public function serviceListController(){
        $menus = Service::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $newses = News::with('media','user')
        ->where('status','=','1')->paginate(3);

        $services = Service::with('media','user')
        ->where('status','=','1')->orderBy('created_at','DESC')->paginate(3);

        $chooses = Choose::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $clients = Client::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->take(3)->get();

        return view('ui.page.service-list',[
            'name'           => 'service-list',
            'services'       => $services,
            'chooses'        => $chooses,
            'clients'        => $clients,
            'newses'         => $newses,
            'menus'          => $menus,
        ]);
    }


    public function newsListController(){
        $menus = Service::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $newses = News::with('media','user')
        ->where('status','=','1')->paginate(3);

        $chooses = Choose::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $clients = Client::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->take(3)->get();

        return view('ui.page.news-list',[
            'name'           => 'news-list',
            'menus'          => $menus,
            'newses'         => $newses,
            'chooses'        => $chooses,
            'clients'        => $clients
        ]);
    }


    public function newsViewController($slug){
         $menus = Service::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $newses = News::with('media','user')
        ->where('status','=','1')->paginate(3);

        $news = News::with('media','user')
        ->where('slug','=',$slug)->where('status','=','1')->first();

        $chooses = Choose::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $clients = Client::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->take(3)->get();

        return view('ui.page.news-details',[
            'name'           => 'news-list',
            'news'           => $news,
            'news_title'     => $news->title,
            'chooses'        => $chooses,
            'clients'        => $clients,
            'menus'          => $menus,
            'newses'         => $newses
        ]);
    }

    public function faqsViewController(){
        $menus = Service::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $newses = News::with('media','user')
        ->where('status','=','1')->paginate(3);

        $faqs = Faqs::with('user')
        ->where('status','=','1')->get();

        return view('ui.page.faqs',[
            'name'           => 'faqs',
            'menus'          => $menus,
            'newses'         => $newses,
            'faqs'           => $faqs
        ]);
    }

    public function contactViewController(){
        $menus = Service::with('media')
        ->where('status','=','1')->orderBy('created_at','DESC')->get();

        $newses = News::with('media','user')
        ->where('status','=','1')->paginate(3);
        
        return view('ui.page.contact-us',[
            'name'          => 'contact-us',
            'menus'         => $menus,
            'newses'        => $newses
        ]);
    }
}
