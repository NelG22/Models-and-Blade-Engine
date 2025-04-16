<header class="bg-indigo-700 shadow-md">
    <!-- Top navigation bar -->
    <div class="container mx-auto px-4 sm:px-6 py-4">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <!-- Logo and site name -->
            <div class="flex items-center">
                <div class="bg-white p-2 rounded-lg shadow-md mr-3">
                    <i class="fas fa-book-open text-xl text-indigo-600"></i>
                </div>
                <h1 class="text-2xl font-bold text-white">Book Library</h1>
            </div>
            
            <!-- Main navigation -->
            <nav class="w-full sm:w-auto">
                <ul class="flex flex-wrap justify-center sm:justify-end gap-2">
                    <li>
                        <a href="{{ route('books.index') }}" 
                           class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white font-medium rounded-lg transition-colors">
                            <i class="fas fa-book mr-2"></i>
                            <span>Books</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                           class="inline-flex items-center px-4 py-2 bg-transparent hover:bg-indigo-600 text-white font-medium rounded-lg transition-colors">
                            <i class="fas fa-bookmark mr-2"></i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                           class="inline-flex items-center px-4 py-2 bg-transparent hover:bg-indigo-600 text-white font-medium rounded-lg transition-colors">
                            <i class="fas fa-user mr-2"></i>
                            <span>Authors</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
