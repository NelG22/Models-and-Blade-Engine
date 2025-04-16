@extends('layouts.app')

@section('title', $book->title)

@section('content')
    <div class="mb-6">
        <a href="{{ route('books.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
            <i class="fas fa-arrow-left mr-2"></i> Back to Books
        </a>
    </div>
    
    <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
        <div class="p-6 sm:p-8 bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
            <h1 class="text-3xl sm:text-4xl font-bold mb-2">{{ $book->title }}</h1>
            <p class="text-xl opacity-90">By {{ $book->author }}</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 p-6 sm:p-8">
            <div class="lg:col-span-2">
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 flex items-center">
                            <i class="fas fa-book-open mr-2 text-indigo-600"></i> Book Description
                        </h3>
                        <div class="h-1 w-24 bg-indigo-600 mt-2 mb-4 rounded"></div>
                        <div class="prose prose-blue max-w-none text-gray-600">
                            <p class="text-gray-700 leading-relaxed">{{ $book->description }}</p>
                        </div>
                    </div>
                    
                    <div class="bg-blue-50 p-6 rounded-lg border border-blue-100 mt-8">
                        <h3 class="text-lg font-semibold text-blue-900 mb-4">Reader Reviews</h3>
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="ml-2 text-gray-700">4.5 out of 5</span>
                        </div>
                        <p class="text-blue-800 italic">"This book is a masterpiece of storytelling and character development."</p>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-info-circle mr-2 text-indigo-600"></i> Book Details
                    </h3>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-3 flex justify-between">
                            <span class="font-medium text-gray-700">ISBN:</span>
                            <span class="text-gray-600 font-mono">{{ $book->isbn }}</span>
                        </li>
                        <li class="py-3 flex justify-between">
                            <span class="font-medium text-gray-700">Published:</span>
                            <span class="text-gray-600">{{ \Carbon\Carbon::parse($book->date_published)->format('M d, Y') }}</span>
                        </li>
                        <li class="py-3 flex justify-between">
                            <span class="font-medium text-gray-700">Pages:</span>
                            <span class="text-gray-600">{{ rand(150, 500) }}</span>
                        </li>
                        <li class="py-3 flex justify-between">
                            <span class="font-medium text-gray-700">Language:</span>
                            <span class="text-gray-600">English</span>
                        </li>
                        <li class="py-3 flex justify-between">
                            <span class="font-medium text-gray-700">Added to Library:</span>
                            <span class="text-gray-600">{{ $book->created_at->format('M d, Y') }}</span>
                        </li>
                    </ul>
                </div>
                
                <div class="mt-6">
                    <a href="#" class="w-full inline-flex justify-center items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-300 mb-3">
                        <i class="fas fa-download mr-2"></i> Download Sample
                    </a>
                    <a href="#" class="w-full inline-flex justify-center items-center px-4 py-2 border border-indigo-600 text-base font-medium rounded-md shadow-sm text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-300">
                        <i class="fas fa-bookmark mr-2"></i> Add to Wishlist
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-10 bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200 p-6 sm:p-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-6">You might also like</h3>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @for ($i = 0; $i < 4; $i++)
            <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                <div class="h-40 bg-gradient-to-r from-purple-{{ 400 + ($i * 100) }} to-indigo-{{ 500 + ($i * 100) }} flex items-center justify-center text-white text-lg font-semibold p-4 text-center">
                    Book Cover {{ $i + 1 }}
                </div>
                <div class="p-4">
                    <h4 class="font-medium text-gray-800 mb-1">Related Book Title {{ $i + 1 }}</h4>
                    <p class="text-sm text-gray-600 mb-2">Author Name</p>
                    <div class="flex text-yellow-400 text-xs">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
@endsection
