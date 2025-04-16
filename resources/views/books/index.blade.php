@extends('layouts.app')

@section('title', 'Book Collection')

@section('content')
    <!-- Clean, organized hero section -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden mb-10">
        <div class="relative bg-gradient-to-r from-indigo-600 to-purple-700 py-12 px-6 md:py-16 md:px-10 lg:px-16">
            <!-- Clear, centered content with better spacing -->
            <div class="max-w-3xl mx-auto text-center relative z-10">
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">Digital Book Collection</h1>
                <p class="text-white/90 text-lg mb-8 max-w-xl mx-auto">Explore our curated library of {{ count($books) }} books</p>
                
                <!-- Simplified, more accessible search box -->
                <div class="bg-white rounded-lg p-1.5 shadow-lg max-w-xl mx-auto flex">
                    <input type="text" placeholder="Search by title or author..." 
                           class="flex-1 px-4 py-2 border-0 focus:ring-0 text-gray-700 bg-transparent" />
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white rounded-md px-5 py-2 font-medium transition-colors">
                        <i class="fas fa-search mr-2"></i> Search
                    </button>
                </div>
            </div>
            
            <!-- Decorative elements positioned so they don't interfere with content -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-500 rounded-full -translate-y-1/2 translate-x-1/3 opacity-20 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-purple-500 rounded-full translate-y-1/2 -translate-x-1/3 opacity-20 blur-3xl"></div>
        </div>
        
        <!-- Category chips in an organized row -->
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex flex-wrap gap-2 justify-center">
            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-3 py-1.5 rounded-full">All Categories</span>
            <span class="bg-white border border-gray-300 text-gray-700 text-xs font-medium px-3 py-1.5 rounded-full hover:bg-gray-50 cursor-pointer">Fiction</span>
            <span class="bg-white border border-gray-300 text-gray-700 text-xs font-medium px-3 py-1.5 rounded-full hover:bg-gray-50 cursor-pointer">Fantasy</span>
            <span class="bg-white border border-gray-300 text-gray-700 text-xs font-medium px-3 py-1.5 rounded-full hover:bg-gray-50 cursor-pointer">Biography</span>
            <span class="bg-white border border-gray-300 text-gray-700 text-xs font-medium px-3 py-1.5 rounded-full hover:bg-gray-50 cursor-pointer">Science Fiction</span>
        </div>
    </div>
    
    <!-- Simplified, more organized filter controls -->
    <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4 mb-8 flex flex-col sm:flex-row justify-between items-center gap-4">
        <div class="flex items-center gap-3">
            <h2 class="text-xl font-bold text-gray-800">All Books</h2>
            <div class="bg-indigo-100 text-indigo-800 rounded-full px-3 py-1 text-sm font-medium">
                {{ count($books) }}
            </div>
        </div>
        
        <div class="flex flex-wrap items-center gap-3 w-full sm:w-auto justify-end">
            <!-- Simplified category dropdown -->
            <div class="relative w-full sm:w-auto">
                <select class="w-full sm:w-auto appearance-none bg-white border border-gray-300 rounded-lg py-2 pl-4 pr-10 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 text-sm">
                    <option>All Categories</option>
                    <option>Fiction</option>
                    <option>Non-Fiction</option>
                    <option>Science Fiction</option>
                    <option>Mystery</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-gray-500">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
            
            <!-- Simplified sort dropdown -->
            <div class="relative w-full sm:w-auto">
                <select class="w-full sm:w-auto appearance-none bg-white border border-gray-300 rounded-lg py-2 pl-4 pr-10 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 text-sm">
                    <option>Sort: Latest</option>
                    <option>Sort: Oldest</option>
                    <option>Sort: A-Z</option>
                    <option>Sort: Z-A</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none text-gray-500">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
            
            <!-- View toggle buttons -->
            <div class="flex border border-gray-300 rounded-lg overflow-hidden">
                <button class="bg-white px-3 py-2 text-gray-600 hover:bg-gray-50" title="Grid view">
                    <i class="fas fa-th-large"></i>
                </button>
                <button class="bg-indigo-50 px-3 py-2 text-indigo-600 border-l border-gray-300" title="List view">
                    <i class="fas fa-list"></i>
                </button>
            </div>
        </div>
    </div>

    @if($books->isEmpty())
        <div class="bg-yellow-50 border border-yellow-200 p-8 rounded-2xl shadow-sm mb-6 text-center" role="alert">
            <img src="https://illustrations.popsy.co/amber/taken.svg" alt="No books" class="w-64 h-64 mx-auto mb-6" />
            <h3 class="text-2xl font-bold text-yellow-800 mb-2">No books found</h3>
            <p class="text-yellow-700 mb-4">There are currently no books available in the library.</p>
            <button class="bg-yellow-600 hover:bg-yellow-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                Add a New Book
            </button>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($books as $book)
                <div class="card bg-white border border-gray-200 rounded-lg overflow-hidden shadow hover:shadow-lg transition-all duration-300 flex flex-col h-full">
                    <!-- Book cover image with consistent height and better text positioning -->
                    <div class="h-56 sm:h-64 bg-gradient-to-r from-indigo-500 to-purple-600 p-4 relative overflow-hidden flex items-center justify-center">
                        <div class="absolute inset-0 opacity-20 bg-pattern-book"></div>
                        <h3 class="font-bold text-lg text-white text-center z-10 px-3 py-2 bg-black/30 backdrop-blur-sm rounded-lg line-clamp-2 max-w-[90%]">{{ $book->title }}</h3>
                        <div class="absolute top-3 right-3 bg-indigo-800 text-white text-xs font-medium px-2.5 py-1 rounded-full">
                            ISBN: {{ substr($book->isbn, -4) }}
                        </div>
                        <div class="absolute bottom-3 right-3 bg-white/20 backdrop-blur-sm rounded-full px-2.5 py-1 text-xs font-medium text-white">
                            {{ \Carbon\Carbon::parse($book->date_published)->format('Y') }}
                        </div>
                    </div>
                    
                    <!-- Book details with improved spacing and readability -->
                    <div class="p-5 flex-grow flex flex-col gap-2">
                        <!-- Author with icon for better visual hierarchy -->
                        <div class="flex items-center mb-1">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-indigo-100 text-indigo-600 mr-2">
                                <i class="fas fa-user"></i>
                            </span>
                            <p class="font-medium text-indigo-700">{{ $book->author }}</p>
                        </div>
                        
                        <!-- Published date with icon -->
                        <div class="flex items-center text-gray-600 text-sm mb-4">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 text-gray-600 mr-2">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            <span>{{ \Carbon\Carbon::parse($book->date_published)->format('M d, Y') }}</span>
                        </div>
                        
                        <!-- Clear action button -->
                        <a href="{{ route('books.show', $book->id) }}" class="mt-auto w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 px-4 rounded-lg transition-colors text-center flex items-center justify-center gap-2">
                            <i class="fas fa-book-open"></i>
                            <span>View Details</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Pagination controls -->
        <div class="mt-16 flex justify-center">
            <nav class="inline-flex rounded-lg shadow overflow-hidden">
                <a href="#" class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 text-sm font-medium transition-colors">
                    <i class="fas fa-chevron-left mr-1"></i> Previous
                </a>
                <a href="#" class="bg-white border border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 text-sm font-medium ml-1 rounded-r-lg transition-colors">
                    Next <i class="fas fa-chevron-right ml-1"></i>
                </a>
            </nav>
        </div>
    @endif
@endsection
