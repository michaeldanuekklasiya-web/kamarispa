<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="bg-white py-16 px-6 lg:px-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 max-w-7xl mx-auto">
            <!-- Bagian Informasi -->
            <div>
                <p class="text-sm font-semibold text-[#5b1641] uppercase tracking-wider mb-4">
                    What are you waiting for...
                </p>
                <h2 class="text-4xl font-semibold text-[#5b1641] mb-6">
                    Make an appointment
                </h2>
                <p class="text-gray-500 mb-8 leading-relaxed">
                    Schedule your relaxing spa session with Kamari's Spa Home Service today! Choose a time that fits
                    your schedule, and let our professional therapists bring a luxurious spa experience right to your
                    doorstep.
                </p>

                <!-- Lokasi -->
                <div class="flex items-start mb-6">
                    <div class="text-[#5b1641] mr-4 mt-1">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 10a3 3 0 100-6 3 3 0 000 6z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-[#5b1641] uppercase text-sm mb-1">Our Location</h3>
                        <p class="text-gray-500">Canggu, Seminyak, Kuta, prererenan, Uluwatu, Nusa dua, Ubud.</p>
                    </div>
                </div>

                <!-- Jam Operasional & Kontak -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start">
                        <div class="text-[#5b1641] mr-4 mt-1">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6l4 2M12 2a10 10 0 110 20 10 10 0 010-20z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-[#5b1641] uppercase text-sm mb-1">Opening Hours</h3>
                            <p class="text-gray-500">Open 24 Hours</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="text-[#5b1641] mr-4 mt-1">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm3 7h12M9 9h6M9 15h6" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-[#5b1641] uppercase text-sm mb-1">Contact</h3>
                            <p class="text-gray-500">Phone: +62 859-2989-3713</p>
                            <p class="text-gray-500">Email: kamarimassage@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulir Appointment -->
            <div class="bg-gray-50 p-8 rounded-lg shadow">
                <form id="appointmentForm" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" required
                            class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:ring-[#5b1641] focus:border-[#5b1641]">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email <span
                                class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email" required
                            class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:ring-[#5b1641] focus:border-[#5b1641]">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone number <span
                                class="text-red-500">*</span></label>
                        <input type="tel" id="phone" name="phone" required
                            class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:ring-[#5b1641] focus:border-[#5b1641]">
                    </div>
                    <div>
                        <button type="button" id="submitForm"
                            class="w-full bg-[#5b1641] text-white font-semibold py-3 rounded-lg hover:bg-[#a9367d] transition duration-300">
                            SAVE UP TO 50% TODAY
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('submitForm').addEventListener('click', function() {
            // Ambil data dari input
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();

            // Periksa apakah semua data diisi
            if (!name || !email || !phone) {
                alert('Please fill in all fields.');
                return;
            }

            // Format pesan WhatsApp
            const message =
                `Hello, I would like to make an appointment.\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}`;
            const whatsappNumber = '+6285929893713';

            // Redirect ke WhatsApp
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappURL, '_blank');
        });
    </script>
</body>

</html>
