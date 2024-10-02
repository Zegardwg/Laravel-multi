<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        echo "Halo, Selamat datang ";
        echo "<a href='logout'>Logout >></a>";
    }
    function siswa(){
        echo "Halo, Selamat datang siswa";
        echo "<a href='/logout'>Logout >></a>";
    }
    function guru(){
        echo "Halo, Selamat datang guru";
        echo "<a href='/logout'>Logout >></a>";
    }
    function kepsek(){
        echo "Halo, Selamat datang kepsek";
        echo "<a href='/logout'>Logout >></a>";
    }
    function admin(){
        echo "Halo, Selamat datang admin";
        echo "<a href='/logout'>Logout >></a>";
    }
    function orangtua(){
        echo "Halo, Selamat datang orangtua";
        echo "<a href='/logout'>Logout >></a>";
    }
}
