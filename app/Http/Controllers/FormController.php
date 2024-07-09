<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request)
{
    if ($request->isMethod('post')) {
        $data = $request->all();
        foreach ($data['name'] as $key => $value) {
            $formData[] = [
                'name' => $value,
                'email' => $data['email'][$key]
            ];
        }
        dd($formData);
    }
    return view('form');
}
}
