<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{


   public function settings(Request $request)
   {
       $settings = DB::table('settings')->get();

       return view('settings', ['settings' => $settings]);

   }


    public function settingsSave(Request $request)
    {
        $settings = ['udemy_link'];

        foreach ($settings as $setting) {

            if(($request->has($setting))) {

                DB::table('settings')
                    ->where('slug', $setting)
                    ->update(['value' => $request->$setting]);
            }
        }

        return redirect('settings');

    }



    public function about(Request $request)
    {

        return view('about');

    }



}
