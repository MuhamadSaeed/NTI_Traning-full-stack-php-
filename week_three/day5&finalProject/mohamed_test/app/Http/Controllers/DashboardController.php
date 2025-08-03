<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

public function index()
{
    $user = auth()->user();

    return view('dashboard', [
        'totalArticles'      => $user->articles()->count(),
        'publishedArticles'  => $user->articles()->count(), 
        'articlesThisMonth'  => $user->articles()
                                     ->whereMonth('created_at', now()->month)
                                     ->whereYear('created_at', now()->year)
                                     ->count(),
        'recentArticles'     => $user->articles()->latest()->take(5)->get(),
    ]);
}

}
