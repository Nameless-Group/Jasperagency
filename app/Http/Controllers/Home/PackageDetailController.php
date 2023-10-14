<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\Package;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class PackageDetailController extends Controller
{
    /**
     * @param Package $package
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function show(Package $package): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.packages.show', compact('package'));
    }
}
