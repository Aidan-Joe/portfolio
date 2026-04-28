@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="h-screen flex flex-col justify-center items-center text-center p-6 bg-slate-900">
    <!-- ... bagian nama dan typing effect tetap sama ... -->
    <h1 class="text-5xl md:text-7xl font-bold mb-4" data-aos="fade-up">
        Hi, I'm <span class="text-red-500">Aidan Joe</span>
    </h1>
    <p class="text-xl md:text-2xl text-slate-400 mb-8" data-aos="fade-up" data-aos-delay="200">
        IT Student & <span class="typing" id="type-text"></span>
    </p>

    <div class="flex gap-4 mb-16" data-aos="fade-up" data-aos-delay="400">
        <a href="#projects" class="bg-red-600 px-8 py-3 rounded-lg font-semibold transition">View Projects</a>
        <a href="{{ asset('assets/Aidan-Rabbihafiz-Joe-CV-Resume.pdf') }}" download class="border border-slate-600 px-8 py-3 rounded-lg transition">Download CV</a>
    </div>

    <!-- Stats Section - Dibuat lebih rapat di tengah -->
    <div class="w-full max-w-md border-t border-slate-800 pt-12" data-aos="fade-up" data-aos-delay="600">
        <div class="flex justify-around items-center">
            <div class="text-center">
                <span class="text-4xl font-bold text-red-500 block">3</span>
                <p class="text-slate-500 text-[10px] uppercase tracking-[0.2em] mt-2">Projects</p>
            </div>
            <!-- Garis pembatas vertikal tipis -->
            <div class="h-10 w-[1px] bg-slate-800"></div>
            <div class="text-center">
                <span class="text-4xl font-bold text-red-500 block">10+</span>
                <p class="text-slate-500 text-[10px] uppercase tracking-[0.2em] mt-2">Skills</p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 px-6 max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold mb-12 text-center">Recent Work</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($projects as $project)
        <div class="bg-slate-800 rounded-xl overflow-hidden hover:transform hover:scale-105 transition duration-300 shadow-xl" data-aos="zoom-in">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">{{ $project->title }}</h3>
                <p class="text-slate-400 text-sm mb-4">{{ Str::limit($project->description, 100) }}</p>
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach(explode(',', $project->tech_stack) as $tech)
                    <span class="bg-slate-700 text-xs px-3 py-1 rounded-full">{{ trim($tech) }}</span>
                    @endforeach
                </div>
                <a href="{{ route('project.detail', $project->id) }}" class="text-red-500 hover:text-red-400 font-medium italic">View Details →</a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section id="skills" class="py-20 bg-slate-800/20">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-slate-400 text-sm uppercase tracking-widest mb-12">Technologies I work with</h2>
        <div class="flex flex-wrap justify-center gap-10 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-500">
            <span class="text-2xl font-bold">Laravel</span>
            <span class="text-2xl font-bold">CodeIgniter</span>
            <span class="text-2xl font-bold">Tailwind CSS</span>
            <span class="text-2xl font-bold">MySQL</span>
             <span class="text-2xl font-bold">MongoDb</span>
            <span class="text-2xl font-bold">Docker</span>
            <span class="text-2xl font-bold">Java</span>
             <span class="text-2xl font-bold">Spring Boot</span>
        </div>
    </div>
</section>
<section id="contact" class="py-24 bg-slate-900 text-white">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-4">Let's work together</h2>
            <p class="text-slate-400">Punya proyek atau ingin berdiskusi? Mari kita bangun sesuatu yang hebat.</p>
        </div>

        <div class="grid md:grid-cols-1 gap-12">
            <div class="bg-slate-800/50 p-8 rounded-3xl border border-slate-700 shadow-2xl" data-aos="zoom-in">
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-slate-300 mb-2 ml-1">Name</label>
                            <input type="text" name="name" placeholder="Aidan Joe" 
                                class="w-full bg-slate-900/50 text-white px-5 py-4 rounded-2xl border border-slate-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-300 mb-2 ml-1">Email</label>
                            <input type="email" name="email" placeholder="example@mail.com" 
                                class="w-full bg-slate-900/50 text-white px-5 py-4 rounded-2xl border border-slate-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-300 mb-2 ml-1">Message</label>
                        <textarea name="message" rows="5" placeholder="Tuliskan pesan Anda di sini..." 
                            class="w-full bg-slate-900/50 text-white px-5 py-4 rounded-2xl border border-slate-700 focus:outline-none focus:border-red-500 focus:ring-1 focus:ring-red-500 transition"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-red-600 text-white font-bold py-4 rounded-2xl hover:bg-red-700 transition-all transform hover:scale-[1.02] active:scale-95 shadow-xl shadow-red-900/20">
                        Send Message →
                    </button>
                </form>
            </div>

            <div class="mt-16 text-center">
                <h3 class="text-2xl font-bold mb-10">Get in Touch</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div class="p-6 bg-slate-800/30 rounded-2xl border border-slate-800 hover:border-red-500/50 transition group" data-aos="fade-up" data-aos-delay="100">
                        <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">Email</p>
                        <a href="mailto:aidanjoe88@gmail.com" class="text-slate-200 font-medium group-hover:text-red-500 transition">aidanjoe88@gmail.com</a>
                    </div>
                    <div class="p-6 bg-slate-800/30 rounded-2xl border border-slate-800 hover:border-red-500/50 transition group" data-aos="fade-up" data-aos-delay="200">
                        <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">GitHub</p>
                        <a href="https://github.com/Aidan-Joe" target="_blank" class="text-slate-200 font-medium group-hover:text-red-500 transition">@Aidan-Joe</a>
                    </div>
                    <div class="p-6 bg-slate-800/30 rounded-2xl border border-slate-800 hover:border-red-500/50 transition group" data-aos="fade-up" data-aos-delay="300">
                        <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-3">LinkedIn</p>
                        <a href="https://www.linkedin.com/in/aidan-rabbihafiz-joe-831828398?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" class="text-slate-200 font-medium group-hover:text-red-500 transition">Aidan Rabbihafiz Joe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="py-12 bg-slate-900 border-t border-slate-800">
    <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8 text-center md:text-left">
        <div>
            <p class="text-slate-500 text-sm">
                © 2026 <span class="text-slate-300 font-semibold">Aidan Rabbihafiz Joe</span>.  All rights reserved.
            </p>
        </div>
        
        <div class="flex gap-10 text-sm font-medium">
            <a href="https://github.com/Aidan-Joe" target="_blank" class="text-slate-400 hover:text-white transition">GitHub</a>
            <a href="https://www.linkedin.com/in/aidan-rabbihafiz-joe-831828398?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" class="text-slate-400 hover:text-white transition">LinkedIn</a>
            <a href="mailto:aidanjoe88@gmail.com" class="text-slate-400 hover:text-white transition">Email</a>
        </div>
    </div>
</footer>



<!-- Simple Typing Script -->
<script>
    const text = "Full-Stack Developer";
    let i = 0;
    function type() {
        if (i < text.length) {
            document.getElementById("type-text").innerHTML += text.charAt(i);
            i++;
            setTimeout(type, 100);
        }
    }
    window.onload = type;
</script>
@endsection