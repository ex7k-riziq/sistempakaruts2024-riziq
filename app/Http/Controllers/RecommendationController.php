<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecommendationController extends Controller
{
    public function welcome()
    {
        return view('recommendation.welcome');
    }

    public function index()
    {
        return view('recommendation.index');
    }

    public function list()
    {
        $laptops = Laptop::whereIn('id', function ($query) {
            $query->select(\DB::raw('MIN(id)'))
                  ->from('laptops')
                  ->groupBy('name');
        })->get();

        return view('recommendation.list', ['laptops' => $laptops]);
    }


    public function input(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->session()->put('name', $request->input('name'));
            return view('recommendation.input');
        }

        return view('recommendation.index');
    }

    public function process(Request $request)
{
    if (!$request->session()->has('name')) {
        return redirect('/')->with('error', 'Session expired. Silakan masukkan nama lagi.');
    }

    $request->validate([
        'purpose' => 'required',
        'budget' => 'required',
    ]);

    $name = $request->session()->get('name');
    $purpose = $request->input('purpose');
    $budget = $request->input('budget');

    $categoryPoints = [
        'apa saja' => 0,
        'produktivitas' => 1,
        'gaming' => 2,
        'kreasi' => 3,
    ];

    $budgetPoints = [
        'apa saja' => 0,
        '0-6000000' => 30,
        '7000000-11000000' => 60,
        '12000000-16000000' => 90,
    ];

    $categoryPoint = $categoryPoints[$purpose] ?? 0;
    $budgetPoint = $budgetPoints[$budget] ?? 0;

    $totalPoints = $categoryPoint + $budgetPoint;

    $query = Laptop::query();

    if ($purpose !== 'apa saja') {
        $query->where('category', ucfirst($purpose));
    }

    if ($budget !== 'apa saja') {
        $budgetRange = explode('-', $budget);
        $query->where('min_budget', '>=', $budgetRange[0])
              ->where('max_budget', '<=', $budgetRange[1]);
    }

    $laptops = $query->get();

    return view('recommendation.result', [
        'laptops' => $laptops,
        'name' => $name,
        'totalPoints' => $totalPoints,
    ]);
}

}

