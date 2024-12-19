<div class="bg-gray-900">
    <div class="relative isolate overflow-hidden pt-14">
        <!-- Image with overlay -->
        <img src=" {{ asset('img/bg.jpg') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover"
            sizes="(max-width: 600px) 480px, (max-width: 900px) 768px, 1200px">

        <!-- Black overlay -->
        <div class="absolute inset-0 bg-[#5b1641] opacity-50 -z-10"></div> <!-- Adjust opacity as needed -->

        <div class="absolute inset-x-0 -top-40 -z-20 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>

        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-4xl font-serif tracking-tight text-white sm:text-6xl">KAMARI'S <br>MASSAGE AND
                    SPA
                </h1>
                <p class="mt-1 text-lg font-serif leading-8 text-white">MASSAGE HOME SERVICE</p>
                <p class="mt-6 text-lg font-serif leading-8 text-white">Welcome to Kamari's Spa! We offer relaxing
                    massage and spa services right at your doorstep in Bali. Enjoy a soothing body treatment without
                    having to leave the comfort of your home. </p>
                {{-- <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ url('/tentang/jayadewata') }}"
                        class="rounded-md bg-[#FF8800] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#FFB700] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Get
                        started</a>
                    <a href="{{ url('/basketballstory') }}" class="text-sm font-semibold leading-6 text-white">Learn
                        more <span aria-hidden="true">→</span></a>
                </div> --}}
            </div>
        </div>

        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-20 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
</div>
