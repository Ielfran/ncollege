@extends('components.masterlayout')

@section('title', 'Home')

@section('content')
<!-- Main Container: Flex Container to Split Screen -->
<div class="flex flex-col md:flex-row h-screen">
    <!-- Left Content -->
    <div class="h-1/3 md:h-full w-full md:w-1/3 bg-gray-100 flex items-center justify-center">
        <div class="text-center px-6 md:px-12">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-800 mb-6">Welcome to Our Platform</h2>
            <p class="text-lg text-gray-700 mb-8">Enim eiusmod incididunt dolore est. Ipsum sint sint esse sit velit laboris cupidatat ad culpa officia ipsum velit.</p>
            <a href="#about" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">Enroll now</a>
        </div>
    </div>

    <!-- Right Content: Animated Background -->
    <div class="relative h-2/3 md:h-full w-full md:w-2/3 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center animate-backgroundChange z-0"></div>
    </div>
</div>

<!-- Additional Content Section -->
<div class="bg-gray-100">
    <div class="container mx-auto py-4 pt-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-2">Box 1</h2>
                <p>Content for box 1 goes here...</p>
            </div>
            <div class="bg-blue-200 rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-2">Box 2</h2>
                <p>Content for box 2 goes here...</p>
            </div>
        </div>
    </div>
</div>

@endsection
