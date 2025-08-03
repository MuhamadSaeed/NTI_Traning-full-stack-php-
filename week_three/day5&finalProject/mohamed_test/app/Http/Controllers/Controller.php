<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
{
    $user = auth()->user();

    return view('dashboard', [
        'totalArticles'      => $user->articles()->count(),
        'publishedArticles'  => $user->articles()->count(), // أو حسب شرط حالة النشر
        'totalViews'         => $user->articles()->sum('views'), // لو فيه عمود views
        'totalLikes'         => $user->articles()->sum('likes'), // لو فيه عمود likes
        'articlesThisMonth'  => $user->articles()->whereMonth('created_at', now()->month)->count(),
        'recentArticles'     => $user->articles()->latest()->take(5)->get(),
    ]);
}
}
