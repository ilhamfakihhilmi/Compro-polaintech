<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Berita;
use App\Models\Carousel;
use App\Models\Client;
use App\Models\Price;
use App\Models\Project;
use App\Models\Services;
use App\Models\Struktur;
use App\Models\Team;
use App\Models\Testimoni;
use App\Models\VisiMisi;
use App\Models\Whychoose;
use App\Models\whychooseDetail;

class LandingPageController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // get 3 data terbaru service
        $services = Services::latest()->take('3')->get();

        // get 3 data terbaru prices
        $price = Price::take('3')->get();

        // get 1 data about
        $about = About::latest()->first();

        // get 1 data project
        $project = Project::latest()->take('10')->get();

        // get 4 carousel
        $carousels = Carousel::latest()->take('4')->get();

        // testimonial 4 aja
        $testimonials = Testimoni::latest()->take('4')->get();

        // get 3 data terbaru teams
        $teams = Team::latest()->take('3')->get();

        // get whychoose
        $whychoose = Whychoose::latest()->first();

        // get detail whychoose left (2 data pertama)
        $whychooseDetail1 = WhychooseDetail::where('whychoose_id', $whychoose->id)
            ->orderBy('id', 'asc') // Mengurutkan data berdasarkan id secara ascending (terkecil ke terbesar)
            ->limit(2) // Mengambil 2 data pertama
            ->get();

        // get detail whychoose right (2 data terakhir)
        $whychooseDetail2 = WhychooseDetail::where('whychoose_id', $whychoose->id)
            ->orderBy('id', 'desc') // Mengurutkan data berdasarkan id secara descending (terbesar ke terkecil)
            ->limit(2) // Mengambil 2 data terakhir
            ->get();

        // client
        $clients = Client::latest()->take('20')->get();

        return view('pages.landingPage.index', compact('services', 'price', 'about', 'project', 'carousels', 'testimonials', 'teams', 'whychoose', 'whychooseDetail1', 'whychooseDetail2', 'clients'));
    }

    /**
     * service
     *
     * @return void
     */
    public function service()
    {
        // get 3 data terbaru service
        $services = Services::latest()->paginate('6');

        // testimonial 4 aja
        $testimonials = Testimoni::latest()->take('4')->get();

        // client
        $clients = Client::latest()->take('20')->get();

        return view('pages.landingPage.service', compact('services', 'testimonials', 'clients'));
    }

    /**
     * about
     *
     * @return void
     */
    public function about()
    {
        // get about
        $about = About::latest()->first();

        // get about
        $visiMisi = VisiMisi::first();

        // get 8 data terbaru service
        $teams = Team::take('8')->get();

        // client
        $clients = Client::latest()->take('20')->get();

        return view('pages.landingPage.about', compact('about', 'teams', 'clients', 'visiMisi'));
    }

    /**
     * struktur
     *
     * @return void
     */
    public function struktur()
    {
        // get 1
        $struktur = Struktur::first();
        return view('pages.landingPage.struktur', compact('struktur'));
    }

    /**
     * visiMisi
     *
     * @return void
     */
    public function visiMisi()
    {
        // get 1
        $visiMisi = VisiMisi::first();
        return view('pages.landingPage.visiMisi', compact('visiMisi'));
    }

    public function berita()
    {
        // get  data terbaru
        $berita = Berita::latest()->paginate('6');

        return view('pages.landingPage.berita', compact('berita'));
    }

    public function beritaDetail($id)
    {
        // get  data terbaru
        $berita = Berita::findOrFail($id);

        // get 3 data terbaru
        $terbaru = Berita::latest()->limit('3')->get();

        return view('pages.landingPage.berita-detail', compact('berita', 'terbaru'));
    }
}
