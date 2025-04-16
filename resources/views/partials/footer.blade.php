<footer class="bg-gray-900 text-white py-10 mt-auto border-t border-gray-800">
    <div class="container mx-auto px-6">
        <!-- Main footer content with 3 columns for better organization -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Column 1: About -->
            <div>
                <div class="flex items-center mb-4">
                    <div class="bg-indigo-600 p-2 rounded-lg mr-3 flex items-center justify-center">
                        <i class="fas fa-book-open text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white">Book Library</h3>
                </div>
                <p class="text-gray-300 mb-6 text-sm leading-relaxed">
                    Your destination for exploring books from various genres and authors around the world.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="bg-gray-800 hover:bg-indigo-600 p-2 rounded-full transition-colors text-white">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="bg-gray-800 hover:bg-indigo-600 p-2 rounded-full transition-colors text-white">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="bg-gray-800 hover:bg-indigo-600 p-2 rounded-full transition-colors text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            
            <!-- Column 2: Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-white">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="{{ route('books.index') }}" class="text-gray-300 hover:text-white transition-colors flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-indigo-400"></i>
                            All Books
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-indigo-400"></i>
                            Categories
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-indigo-400"></i>
                            Authors
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-indigo-400"></i>
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-indigo-400"></i>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Column 3: Contact -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-white">Contact Us</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-indigo-400 mt-1 mr-3"></i>
                        <span class="text-gray-300">123 Library Street<br>Booktown, BT 12345</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone text-indigo-400 mr-3"></i>
                        <span class="text-gray-300">+1 (123) 456-7890</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope text-indigo-400 mr-3"></i>
                        <span class="text-gray-300">contact@booklibrary.com</span>
                    </li>
                </ul>
                
                <div class="mt-6">
                    <h4 class="text-sm font-medium mb-2 text-white">Subscribe to Newsletter</h4>
                    <div class="flex">
                        <input type="email" placeholder="Your email" class="bg-gray-800 border border-gray-700 rounded-l-lg px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 text-sm text-white w-full">
                        <button class="bg-indigo-600 hover:bg-indigo-700 transition-colors px-3 py-2 rounded-r-lg">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer bottom: copyright and links -->
        <div class="border-t border-gray-800 pt-4 flex flex-col sm:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm mb-4 sm:mb-0">&copy; {{ date('Y') }} Book Library. All rights reserved.</p>
            <div>
                <ul class="flex flex-wrap justify-center gap-4 text-xs">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Terms</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Cookies</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
