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
    $budget = explode('-', $request->input('budget'));

    $query = Laptop::query();

    if ($purpose == 'produktivitas') {
        $query->where('category', 'Produktivitas');
    } elseif ($purpose == 'gaming') {
        $query->where('category', 'Gaming');
    } elseif ($purpose == 'kreasi') {
        $query->where('category', 'Kreasi');
    }

    $query->where('min_budget', '>=', $budget[0])
          ->where('max_budget', '<=', $budget[1]);

    $laptops = $query->get();

    return view('recommendation.result', compact('laptops', 'name'));
    }

}

