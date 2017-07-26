<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getData(Request $request)
    {
        $url = $request->get('url');
        $html = file_get_contents($url);

        $images = substr_count ($html, '<img');
        $links = substr_count ($html, '<link');
        $styles = substr_count ($html, '<style');

        if($styles > 0){
            $styles = 'Si';
        }else{
            $styles = 'No';
        }

        if ($request->ajax()) {
            return response()->json(['images' => $images, 'styles' => $styles, 'links' => $links]);
        }
    }
}
