<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Message;
use Illuminate\Http\Request;

class PortfolioController extends Controller {
    public function index() {
        $projects = Project::latest()->get();
        return view('index', compact('projects'));
    }

    public function show($id) {
        $project = Project::findOrFail($id);
        return view('project-detail', compact('project'));
    }

    public function storeContact(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Message::create($validated);
        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}