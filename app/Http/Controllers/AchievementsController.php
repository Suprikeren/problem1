<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AchievementsController extends Controller
{
    public function index(){
        $achievements = Achievement::all();
        return view('index', compact('achievements'));
    }
    // public function edit($achievement_id){
    //     $achievement = Achievement::findOrFail($achievement_id);
    //     return response()->json($achievement);
    // }
    public function store(Request $request){
        $validated = $request->validate([
            'award_name' => 'required|string',
            'categories' => 'required|string',
            'finis_time' => 'required|string',
            'description' => 'required|string',
        ]);

        $achievement = Achievement::create($validated);
        return redirect()->back()->with('system', ['success'=>'award berhasil ditambahkan!']);
    }

    public function update(Request $request, $achievement_id){
        $achievement = Achievement::findOrFail($achievement_id);

        $validated = $request->validate([
            'award_name' => 'required|string',
            'categories' => 'required|string',
            'finis_time' => 'required|string',
            'description' => 'required|string',
        ]);
        $achievement->update($validated);

        return redirect()->back();
    }

}
