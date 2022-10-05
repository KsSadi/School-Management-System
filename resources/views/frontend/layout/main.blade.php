@extends('frontend.layout.base')
@section('body')
    @include('frontend.layout.header')
    <!-- START NAVBAR-->
    @yield('content')
    <!--END START NAVBAR-->
    <!-- START HERO SECTION -->
    <section id="hero" class="z-10 overflow-hidden">
        <div>
            <div
                class="w-full bg-height bg-[url('https://images.unsplash.com/photo-1505845664900-f883fde76fb0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')] bg-fixed bg-cover bg-center flex justify-center items-center"
            ></div>
            <div
                class="flex flex-col relative centered-text justify-center items-center h-4/6 mx-auto px-4 sm:w-full md:w-1/2"
            >
                <h1
                    class="sm:text-2xl md:text-3xl lg:text-[44px] xl:text-[44px] xl:leading-[55px] text-white font-bold capitalize text-center lg:px-2 xl:px-36"
                >
                    Find your next holiday on 15 cool packages
                </h1>
                <button
                    class="btn text-xl md:text-2xl font-semibold bg-brightyellow text-brightblue mt-10 sm:py-3 sm:px-4 lg:py-5 lg:px-24 capitalize"
                >
                    see destinations
                </button>
            </div>
            <!-- START QUOTE FORM -->
            <div
                class="lg:px-8 sm:px-4 quote-form sm:mt-0 md:mt-5 lg:-mt-12 flex sm:flex-col md:flex-row lg:flex-row xl:flex-row items-center justify-center sm:w-full md:w-4/5 mx-auto rounded-lg py-14 shadow bg-white"
            >
                <div
                    class="grid sm:grid-cols-1 lg:grid-cols-5 sm:gap-4 lg:gap-12 sm:w-full"
                >
                    <div class="flex flex-col space-y-3">
                        <label for="location">Location</label>
                        <input
                            type="text"
                            placeholder="Select Location"
                            class="focus:outline-none shadow bg-gray-100 rounded py-2 px-3 text-gray-700 sm:mr-0 mr-8"
                        />
                    </div>
                    <div class="flex flex-col space-y-3">
                        <label for="">Duration</label>
                        <input
                            type="text"
                            placeholder="Select Duration"
                            class="focus:outline-none shadow bg-gray-100 rounded py-2 px-3 text-gray-700 sm:mr-0 mr-8"
                        />
                    </div>
                    <div class="flex flex-col space-y-3">
                        <label for="">Date</label>
                        <input
                            type="text"
                            placeholder="Select Duration"
                            class="focus:outline-none shadow bg-gray-100 rounded py-2 px-3 text-gray-700 sm:mr-0 mr-8"
                        />
                    </div>
                    <div class="flex flex-col space-y-3">
                        <label for="">Gueste</label>
                        <input
                            type="text"
                            placeholder="Number of gueste"
                            class="focus:outline-none shadow bg-gray-100 rounded py-2 px-3 text-gray-700 sm:mr-0 mr-8"
                        />
                    </div>
                    <div class="flex flex-col lg:w-full sm:w-1/2 sm:mx-auto">
                        <button class="bg-brightblue p-2 mt-9 rounded text-white">
                            search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO SECTION -->
    <!-- START POPULAR PACKAGES -->
    <section
        id="popular-packages"
        class="sm:py-16 md:py-32 container mx-auto px-4"
    >
        <div>
            <div class="flex flex-col justify-center text-center space-y-4">
                <h1 class="sm:text-2xl md:text-5xl font-bold capitalize">
                    our popular packages
                </h1>
                <p class="mx-auto sm:w-full md:w-2/3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ipsum
                    molestias commodi cupiditate vero saepe a dolor sapiente voluptas
                    doloremque iusto aspernatur
                </p>
            </div>
            <div
                class="pt-16 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-1 sm:gap-5"
            >
                <!-- card 1st one -->
                <div class="max-w-sm rounded overflow-hidden shadow-md">
                    <div class="relative">
                        <img
                            class="h-80 bg-blend-multiply"
                            src="https://flowbite.com/docs/images/blog/image-1.jpg"
                        />
                        <div
                            class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                            style="background-color: rgba(0, 0, 0, 0.4)"
                        ></div>
                        <h1
                            class="absolute font-bold top-4 right-4 text-white text-3xl capitalize"
                        >
                            cox's bazar <br />
                            <p class="text-2xl normal-case">Tour package</p>
                        </h1>
                        <div
                            class="absolute top-48 bottom-4 left-1/2 -translate-x-1/2 text-white w-72"
                        >
                            <div class="">
                                <h1 class="font-bold md:text-3xl capitalize mb-1">
                                    4 days 3 night
                                </h1>
                                <hr class="border-2 rounded" />
                                <div class="flex md:row justify-between">
                                    <h3 class="font-semibold text-2xl capitalize">
                                        from tk<br />
                                        <p class="text-sm">per person</p>
                                    </h3>
                                    <h6 class="text-6xl font-bold">8,500</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="px-6 py-4 flex flex-col justify-center items-center text-center space-y-3"
                    >
                        <div class="mb-2 text-brightblue">Bangladesh</div>
                        <div class="h-0.5 bg-brightblue w-20 mt-2 mx-auto"></div>
                        <p class="text-2xl text-gray-700 capitalize">
                            with surfing experience
                        </p>
                        <div class="flex justify-center px-6 py-4">
                            <button
                                class="bg-transparent hover:bg-brightblue text-brightblue font-semibold hover:text-white py-2 px-4 border border-brightblue hover:border-transparent rounded"
                            >
                                know more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- card 2nd one -->
                <div class="max-w-sm rounded overflow-hidden shadow-md">
                    <div class="relative">
                        <img
                            class="h-80 bg-blend-multiply"
                            src="https://flowbite.com/docs/images/blog/image-1.jpg"
                        />
                        <div
                            class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                            style="background-color: rgba(0, 0, 0, 0.4)"
                        ></div>
                        <h1
                            class="absolute font-bold top-4 right-4 text-white text-3xl capitalize"
                        >
                            cox's bazar <br />
                            <p class="text-2xl normal-case">Tour package</p>
                        </h1>
                        <div
                            class="absolute top-48 bottom-4 left-1/2 -translate-x-1/2 text-white w-72"
                        >
                            <div class="">
                                <h1 class="font-bold md:text-3xl capitalize mb-1">
                                    4 days 3 night
                                </h1>
                                <hr class="border-2 rounded" />
                                <div class="flex md:row justify-between">
                                    <h3 class="font-semibold text-2xl capitalize">
                                        from tk<br />
                                        <p class="text-sm">per person</p>
                                    </h3>
                                    <h6 class="text-6xl font-bold">8,500</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="px-6 py-4 flex flex-col justify-center items-center text-center space-y-3"
                    >
                        <div class="mb-2 text-brightblue">Bangladesh</div>
                        <div class="h-0.5 bg-brightblue w-20 mt-2 mx-auto"></div>
                        <p class="text-2xl text-gray-700 capitalize">
                            with surfing experience
                        </p>
                        <div class="flex justify-center px-6 py-4">
                            <button
                                class="bg-transparent hover:bg-brightblue text-brightblue font-semibold hover:text-white py-2 px-4 border border-brightblue hover:border-transparent rounded"
                            >
                                know more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- card 3nd one -->
                <div class="max-w-sm rounded overflow-hidden shadow-md">
                    <div class="relative">
                        <img
                            class="h-80 bg-blend-multiply"
                            src="https://flowbite.com/docs/images/blog/image-1.jpg"
                        />
                        <div
                            class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                            style="background-color: rgba(0, 0, 0, 0.4)"
                        ></div>
                        <h1
                            class="absolute font-bold top-4 right-4 text-white text-3xl capitalize"
                        >
                            cox's bazar <br />
                            <p class="text-2xl normal-case">Tour package</p>
                        </h1>
                        <div
                            class="absolute top-48 bottom-4 left-1/2 -translate-x-1/2 text-white w-72"
                        >
                            <div class="">
                                <h1 class="font-bold md:text-3xl capitalize mb-1">
                                    4 days 3 night
                                </h1>
                                <hr class="border-2 rounded" />
                                <div class="flex md:row justify-between">
                                    <h3 class="font-semibold text-2xl capitalize">
                                        from tk<br />
                                        <p class="text-sm">per person</p>
                                    </h3>
                                    <h6 class="text-6xl font-bold">8,500</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="px-6 py-4 flex flex-col justify-center items-center text-center space-y-3"
                    >
                        <div class="mb-2 text-brightblue">Bangladesh</div>
                        <div class="h-0.5 bg-brightblue w-20 mt-2 mx-auto"></div>
                        <p class="text-2xl text-gray-700 capitalize">
                            with surfing experience
                        </p>
                        <div class="flex justify-center px-6 py-4">
                            <button
                                class="bg-transparent hover:bg-brightblue text-brightblue font-semibold hover:text-white py-2 px-4 border border-brightblue hover:border-transparent rounded"
                            >
                                know more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- START POPULAR PACKAGES -->
    <section class="py-16">
        <div
            class="bg-image w-full bg-height bg-cover bg-center flex justify-center items-center"
        >
            <div
                class="overlay flex flex-col justify-center items-center h-4/6 mx-auto border-black px-4"
            >
                <h1
                    class="sm:text-2xl md:text-5xl text-white font-bold capitalize text-center"
                >
                    choose your destination
                </h1>
                <p
                    class="mx-auto sm:w-fulls md:w-1/2 text-white text-center mt-5 sm:text-sm"
                >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ullam
                    cupiditate voluptate ipsa atque iste, id earum delectus est
                    repudiandae at assumenda qui corrupti consequuntur quaerat vel
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint
                    maxime iste vero vel. Nobis quas vero labore, atque voluptas
                    similique?
                </p>
                <button
                    class="btn text-xl md:text-2xl font-semibold mt-10 bg-brightyellow text-brightblue sm:py-3 sm:px-14 md:py-5 md:px-24 capitalize"
                >
                    Browse destinations
                </button>
            </div>
        </div>
    </section>
    <!-- END POPULAR PACKAGES -->
    <!-- MOST ADVENTURE POPULAR PACKAGES START-->
    <section
        id="most-popular-packages"
        class="sm:py-16 md:py-32 px-4 container mx-auto"
    >
        <div>
            <div class="flex flex-col justify-center text-center space-y-4">
                <h1 class="sm:text-2xl md:text-5xl font-bold capitalize">
                    most popular adventure packages
                </h1>
                <p class="mx-auto sn:w-full md:w-2/3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ipsum
                    molestias commodi cupiditate vero saepe a dolor sapiente voluptas
                    doloremque iusto aspernatur
                </p>
            </div>
            <div
                class="pt-16 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-1 sm:gap-5"
            >
                <!-- card 1st one -->
                <div class="max-w-md rounded overflow-hidden shadow-lg">
                    <img
                        class="w-full"
                        src="https://source.unsplash.com/600x400/?brazil"
                    />
                    <div class="px-6 py-4 flex flex-col justify-center space-y-3">
                        <div class="mb-2 text-black font-bold text-2xl">
                            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
                        </div>
                        <div
                            class="mb-2 text-gray-500 capitalize flex flex-row al-center text-center"
                        >
                            <i class="fa-solid fa-earth-americas"></i>
                            <a href="" class="ml-3"
                            ><p class="capitalize">gazipur, dhaka, bangladesh</p></a
                            >
                        </div>
                        <hr />
                        <div class="flex justify-between items-center py-4">
                            <p class="text-black text-2xl font-bold capitalize">Tk 5000</p>
                            <button
                                class="bg-brightblue font-semibold text-white py-2 px-4 border border-brightblue hover:border-transparent rounded"
                            >
                                <a href="tourPackageDetails.html">Book now</a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- card 2nd one -->
                <div class="max-w-md rounded overflow-hidden shadow-lg">
                    <img
                        class="w-full"
                        src="https://source.unsplash.com/600x400/?brazil"
                    />
                    <div class="px-6 py-4 flex flex-col justify-center space-y-3">
                        <div class="mb-2 text-black font-bold text-2xl">
                            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
                        </div>
                        <div
                            class="mb-2 text-gray-500 capitalize flex flex-row al-center text-center"
                        >
                            <i class="fa-solid fa-earth-americas"></i>
                            <a href="" class="ml-3"
                            ><p class="capitalize">gazipur, dhaka, bangladesh</p></a
                            >
                        </div>
                        <hr />
                        <div class="flex justify-between items-center py-4">
                            <p class="text-black text-2xl font-bold capitalize">Tk 5000</p>
                            <button
                                class="bg-brightblue font-semibold text-white py-2 px-4 border border-brightblue hover:border-transparent rounded"
                            >
                                Book now
                            </button>
                        </div>
                    </div>
                </div>
                <!-- card 3nd one -->
                <div class="max-w-md rounded overflow-hidden shadow-lg">
                    <img
                        class="w-full"
                        src="https://source.unsplash.com/600x400/?brazil"
                    />
                    <div class="px-6 py-4 flex flex-col justify-center space-y-3">
                        <div class="mb-2 text-black font-bold text-2xl">
                            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
                        </div>
                        <div
                            class="mb-2 text-gray-500 capitalize flex flex-row al-center text-center"
                        >
                            <i class="fa-solid fa-earth-americas"></i>
                            <a href="" class="ml-3"
                            ><p class="capitalize">gazipur, dhaka, bangladesh</p></a
                            >
                        </div>
                        <hr />
                        <div class="flex justify-between items-center py-4">
                            <p class="text-black text-2xl font-bold capitalize">Tk 5000</p>
                            <button
                                class="bg-brightblue font-semibold text-white py-2 px-4 border border-brightblue hover:border-transparent rounded"
                            >
                                Book now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="max-w-md rounded overflow-hidden shadow-lg">
                    <img
                        class="w-full"
                        src="https://source.unsplash.com/600x400/?brazil"
                    />
                    <div class="px-6 py-4 flex flex-col justify-center space-y-3">
                        <div class="mb-2 text-black font-bold text-2xl">
                            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
                        </div>
                        <div
                            class="mb-2 text-gray-500 capitalize flex flex-row al-center text-center"
                        >
                            <i class="fa-solid fa-earth-americas"></i>
                            <a href="" class="ml-3"
                            ><p class="capitalize">gazipur, dhaka, bangladesh</p></a
                            >
                        </div>
                        <hr />
                        <div class="flex justify-between items-center py-4">
                            <p class="text-black text-2xl font-bold capitalize">Tk 5000</p>
                            <button
                                class="bg-brightblue font-semibold text-white py-2 px-4 border border-brightblue hover:border-transparent rounded"
                            >
                                Book now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="max-w-md rounded overflow-hidden shadow-lg">
                    <img
                        class="w-full"
                        src="https://source.unsplash.com/600x400/?brazil"
                    />
                    <div class="px-6 py-4 flex flex-col justify-center space-y-3">
                        <div class="mb-2 text-black font-bold text-2xl">
                            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
                        </div>
                        <div
                            class="mb-2 text-gray-500 capitalize flex flex-row al-center text-center"
                        >
                            <i class="fa-solid fa-earth-americas"></i>
                            <a href="" class="ml-3"
                            ><p class="capitalize">gazipur, dhaka, bangladesh</p></a
                            >
                        </div>
                        <hr />
                        <div class="flex justify-between items-center py-4">
                            <p class="text-black text-2xl font-bold capitalize">Tk 5000</p>
                            <button
                                class="bg-brightblue font-semibold text-white py-2 px-4 border border-brightblue hover:border-transparent rounded"
                            >
                                Book now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="max-w-md rounded overflow-hidden shadow-lg">
                    <img
                        class="w-full"
                        src="https://source.unsplash.com/600x400/?brazil"
                    />
                    <div class="px-6 py-4 flex flex-col justify-center space-y-3">
                        <div class="mb-2 text-black font-bold text-2xl">
                            <a href=""><h2>Lorem ipsum dolor sit amet</h2></a>
                        </div>
                        <div
                            class="mb-2 text-gray-500 capitalize flex flex-row al-center text-center"
                        >
                            <i class="fa-solid fa-earth-americas"></i>
                            <a href="" class="ml-3"
                            ><p class="capitalize">gazipur, dhaka, bangladesh</p></a
                            >
                        </div>
                        <hr />
                        <div class="flex justify-between py-4">
                            <p class="text-black text-2xl font-bold capitalize">Tk 5000</p>
                            <button
                                class="bg-brightblue font-semibold text-white py-2 px-4 border border-brightblue hover:border-transparent rounded"
                            >
                                Book now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MOST ADVENTURE POPULAR PACKAGES END -->
    @include('frontend.layout.footer')

    <script src="/js/script.js"></script>
@endsection
