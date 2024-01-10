<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuranApp extends Controller
{
    //
    function CompleteQuranData()
    {
        $QuranData = Http::get("https://api.alquran.cloud/v1/meta");

        return view("Quran", ["myqurandata" => $QuranData["data"]["surahs"]["references"]]);
    }
    function ReadSurah($SurahNumber) {
        $SurahDetail = Http::get("https://api.alquran.cloud/v1/surah/{$SurahNumber}");
        return view("ReadSurah", ["SurahDetails" => $SurahDetail["data"]]);
    }
}