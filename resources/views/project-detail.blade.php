@extends('layouts.app')

@section('content')
<section class="py-24 px-6 max-w-4xl mx-auto">
    <a href="{{ route('home') }}" class="text-red-500 hover:underline">← Back to Portfolio</a>
    
    <div class="mt-8">
        <img src="{{ asset('images/projects/' . $project->image) }}" class="w-full rounded-2xl shadow-2xl">
        <h1 class="text-4xl font-bold mt-8 text-white">{{ $project->title }}</h1>
        <p class="text-slate-400 mt-4 leading-relaxed">{{ $project->description }}</p>
        
        <div class="mt-8">
            <h3 class="font-bold text-white mb-2">Technologies Used:</h3>
            <div class="flex flex-wrap gap-2">
                @foreach(explode(',', $project->tech_stack) as $tech)
                    <span class="bg-slate-800 text-red-500 px-4 py-2 rounded-full text-sm font-semibold">
                        {{ trim($tech) }}
                    </span>
                @endforeach
            </div>
        </div>

        @if($project->github_link)
        <div class="mt-12">
            <a href="{{ $project->github_link }}" target="_blank" class="bg-red-600 px-8 py-3 rounded-lg font-bold hover:bg-red-700 transition">
                View Source on GitHub
            </a>
        </div>
        @endif
    </div>
</section>
@endsection