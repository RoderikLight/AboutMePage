<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyResponse;

class SurveyController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'occupation' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        SurveyResponse::create($request->all());

        return response()->json(['message' => 'Survey response submitted successfully.']);
    }
}