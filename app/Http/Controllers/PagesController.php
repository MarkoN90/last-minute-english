<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
   public function settings(Request $request)
   {
       $settings = DB::table('settings')->get();
       $categories = Category::all();

       return view('settings', ['settings' => $settings, 'categories' => $categories]);
   }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
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

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function about(Request $request)
    {
        return view('about');
    }

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function contact(Request $request)
    {
        return view('contact');

    }
}
