<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Book Library')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-dark: #4338ca;
            --primary-light: #818cf8;
            --secondary-color: #06b6d4;
            --accent-color: #f97316;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --bg-light: #f8fafc;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-primary);
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }
        .content-container {
            max-width: 1440px;
            margin: 0 auto;
        }
        .card {
            border-radius: 16px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        @media (min-width: 768px) {
            .container {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-50">
    @include('partials.header')
    
    <main class="flex-grow container mx-auto py-12 px-4 sm:px-8 lg:px-12">
        <div class="content-container">
            @yield('content')
        </div>
    </main>
    
    @include('partials.footer')
</body>
</html>
