<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
        $users = $response['users'];

        $currentPage = $request->query('page', 1);
        $perPage = 10;

        $totalUsers = count($users);
        $lastPage = ceil($totalUsers / $perPage);

        $offset = ($currentPage - 1) * $perPage;
        $users = array_slice($users, $offset, $perPage);

        return view('site/home', compact('users', 'currentPage', 'lastPage'));
    }
}
