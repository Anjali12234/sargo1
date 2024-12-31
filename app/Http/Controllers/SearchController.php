<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)

    {
        $query = $request->input('query');

        // Search logic for each model
        $products = Product::where('title', 'LIKE', "%{$query}%")->get();
        $services = Service::where('title', 'LIKE', "%{$query}%")->get();
        $colors = Color::where('name', 'LIKE', "%{$query}%")->get();

        return view('frontend.search-results', compact('query', 'products', 'services', 'colors'));
    }
    // public function search(Request $request)
    // {
    //     $query = $request->input('search'); // Get search input

    //     $products = Product::where('title', 'like', "%{$query}%")->get();
    //     $services = Service::where('title', 'like', "%{$query}%")->get();
    //     $colors = Color::where('name', 'like', "%{$query}%")->get();

    //     // Merge the results into a single collection
    //     $results = $products->merge($services)->merge($colors);

    //     $resultsCount = $results->count();

    //     if ($results->isEmpty()) {
    //         return view('frontend.search-results', [
    //             'message' => 'No data found',
    //             'resultsCount' => 0
    //         ]);
    //     }

    //     return view('frontend.search-results', [
    //         'results' => $results,
    //         'resultsCount' => $resultsCount
    //     ]);
    // }
}
