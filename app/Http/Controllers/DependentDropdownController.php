<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Province;

class DependentDropdownController extends Controller
{
    public function index()
    {
        $provinces = Province::pluck('name', 'id');

        return view('dependent-dropdown.index', [
            'provinces' => $provinces,
        ]);
    }

    public function store(Request $request)
    {
        $cities = City::where('province_id', $request->get('id'))
            ->pluck('name', 'id');

        return response()->json($cities);
    }
}
