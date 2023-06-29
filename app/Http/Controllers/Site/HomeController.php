<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Define constants for API URL and pagination settings
        define('API_URL', 'https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
        define('PER_PAGE', 10);

        try {
            // Perform API request to retrieve user data
            $response = Http::get(API_URL);
            $users = $response['users'];
        } catch (\Exception $e) {
            // Handle the exception, log or display an error message
            $users = [];
        }

        $currentPage = $request->query('page', 1);
        $totalUsers = count($users);
        $lastPage = ceil($totalUsers / PER_PAGE);

        $offset = ($currentPage - 1) * PER_PAGE;
        $paginatedUsers = array_slice($users, $offset, PER_PAGE);

        return view('site/home', compact('paginatedUsers', 'currentPage', 'lastPage'));
    }
}
