<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function login(){
        return view('login');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function signup(){
        return view('signup');
    }
    public function recover(){
        return view('recover');
    }
    public function calender(){
        return view('apps.calender');
    }
    public function chat(){
        return view('apps.chat');
    }
    public function tickets(){
        return view('apps.tickets');
    }
    public function contact(){
        return view('apps.contact');
    }
    public function contactGrid(){
        return view('apps.contact-grid');
    }
    public function contactDetails(){
        return view('apps.contact-details');
    }
    public function cards(){
        return view('uiElements.cards');
    }
    public function userCards(){
        return view('uiElements.userCard');
    }
    public function buttons(){
        return view('uiElements.button');
    }
    public function modals(){
        return view('uiElements.modals');
    }
    public function tabs(){
        return view('uiElements.tabs');
    }
    public function tooltip(){
        return view('uiElements.tooltip');
    }
    public function addGenre(){
        return view('addGenre');
    }
    public function genre(){
        return view('genre');
    }
    public function albums(){
        return view('album');
    }
    public function addAlbums(){
        return view('addAlbum');
    }
    public function detailsAlbum(){
        return view('detailsAlbum');
    }
    public function artists(){
        return view('artists.artists');
    }
    public function addArtist(){
        return view('artists.addArtist');
    }
    public function artistDetails(){
        return view('artists.artistDetails');
    }
    public function audio(){
        return view('audio');
    }
    public function addAudio(){
        return view('addAudio');
    }
    public function videos(){
        return view('videos.videos');
    }
    public function videoDetails(){
        return view('videos.videoDetails');
    }
    public function addVideos(){
        return view('videos.addVideos');
    }
}
