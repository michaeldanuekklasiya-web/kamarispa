<div class="bg-white py-16 px-6 lg:px-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 max-w-7xl mx-auto">
        <!-- Bagian Informasi -->
        <div>
            <p class="text-sm font-semibold text-[#1f4e47] uppercase tracking-wider mb-4">
                What are you waiting for...
            </p>
            <h2 class="text-4xl font-semibold text-[#1f4e47] mb-6">
                Make an appointment
            </h2>
            <p class="text-gray-500 mb-8 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis,
                pulvinar dapibus leo.
            </p>

            <!-- Lokasi -->
            <div class="flex items-start mb-6">
                <div class="text-[#1f4e47] mr-4 mt-1">
                    <!-- Ikon lokasi -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 10a3 3 0 100-6 3 3 0 000 6z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-[#1f4e47] uppercase text-sm mb-1">Our Location</h3>
                    <p class="text-gray-500">123 Fifth Avenue, New York, NY 10160, United States.</p>
                </div>
            </div>

            <!-- Jam Operasional & Kontak -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Opening Hours -->
                <div class="flex items-start">
                    <div class="text-[#1f4e47] mr-4 mt-1">
                        <!-- Ikon jam -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6l4 2M12 2a10 10 0 110 20 10 10 0 010-20z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-[#1f4e47] uppercase text-sm mb-1">Opening Hours</h3>
                        <p class="text-gray-500">Mon-Fri: 6am-10pm</p>
                        <p class="text-gray-500">Sat-Sun: 8am-2pm</p>
                    </div>
                </div>
                <!-- Contact -->
                <div class="flex items-start">
                    <div class="text-[#1f4e47] mr-4 mt-1">
                        <!-- Ikon kontak -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm3 7h12M9 9h6M9 15h6" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-[#1f4e47] uppercase text-sm mb-1">Contact</h3>
                        <p class="text-gray-500">Phone: +1 123-456-7890</p>
                        <p class="text-gray-500">Email: mail@example.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulir Appointment -->
        <div class="bg-gray-50 p-8 rounded-lg shadow">
            <form action="#" method="POST" class="space-y-6">
                <!-- Input Nama -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="name" name="name" required
                        class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:ring-[#1f4e47] focus:border-[#1f4e47]">
                </div>
                <!-- Input Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email <span
                            class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" required
                        class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:ring-[#1f4e47] focus:border-[#1f4e47]">
                </div>
                <!-- Input Nomor Telepon -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone number <span
                            class="text-red-500">*</span></label>
                    <input type="tel" id="phone" name="phone" required
                        class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:ring-[#1f4e47] focus:border-[#1f4e47]">
                </div>
                <!-- Tombol Submit -->
                <div>
                    <button type="submit"
                        class="w-full bg-[#1f4e47] text-white font-semibold py-3 rounded-lg hover:bg-[#173f38] transition duration-300">
                        SAVE UPTO 50% TODAY
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
