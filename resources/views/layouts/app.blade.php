<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aidan | Full-Stack Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .typing::after {
            content: '|';
            animation: blink 0.7s infinite;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }
    </style>
</head>

<body class="bg-slate-900 text-slate-100">
    <nav class="fixed w-full z-50 bg-slate-900/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-red-500">Joe<span class="text-white">.dev</span></a>

            <div class="hidden md:flex gap-10 text-sm font-medium items-center">
                <a href="#projects" class="text-slate-300 hover:text-red-500 transition">Projects</a>
                <a href="#skills" class="text-slate-300 hover:text-red-500 transition">Skills</a>
                <a href="#contact" class="bg-red-600 px-6 py-2 rounded-lg hover:bg-red-700 transition text-white font-semibold shadow-lg shadow-red-900/20">
                    Contact
                </a>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>