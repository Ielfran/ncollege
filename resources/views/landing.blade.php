@extends    ('components.masterlayout')

@section('title', 'Home')

@section('content')
<div class="bg-gray-100">
    <div class="container mx-auto py-4 pt-32">
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
