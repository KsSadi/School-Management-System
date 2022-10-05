<nav
    class="w-full absolute z-999 mx-auto px-4 lg:px-2 xl:px-20 py-4 bg-white drop-shadow-lg"
>
    <!-- flex container -->
    <div class="flex items-center justify-between">
        <!-- logo -->
        <div class="md:pt-4">
            <img src="./image/logo.svg" alt="" />
        </div>
        <!-- menu items middle-->
        <div
            class="hidden lg:flex space-x-6 capitalize drop-shadow-lg rounded-full bg-white px-10 py-3"
        >
            <a href="#" class="text-lightblue hover:text-brightblue font-bold"
            >Hotel</a
            >
            <a href="" class="border"></a>
            <a href="#" class="text-lightblue hover:text-brightblue font-bold"
            >Photographer</a
            >
            <a href="" class="border"></a>
            <a href="#" class="text-lightblue hover:text-brightblue font-bold"
            >bike</a
            >
            <a href="" class="border"></a>
            <a href="#" class="text-lightblue hover:text-brightblue font-bold"
            >tour package</a
            >
        </div>
        <!-- menu items right-->
        <div class="hidden lg:block">
            <ul class="flex space-x-6 py-3">
                <li>
                    <a href="#" class="text-gray-500">English</a>
                    <span><i class="fa-solid fa-chevron-down"></i></span>
                </li>
                <li><a href="#" class="text-gray-500">Sign in</a></li>
                <li>
                    <a href="#" class="cta bg-brightblue px-6 py-2 rounded text-white"
                    >Register</a
                    >
                </li>
            </ul>
        </div>
        <!-- hamburguer menu -->
        <button
            id="menu-btn"
            class="block hamburger lg:hidden focus:outline-none"
        >
            <span class="hanburger-top"></span>
            <span class="hanburger-middle"></span>
            <span class="hanburger-bottom"></span>
        </button>
    </div>
    <!-- mobile menu -->
    <div class="lg:hidden md:block">
        <div
            id="menu"
            class="z-40 capitalize absolute flex-col hidden items-center self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-start left-6 right-6 drop-shadow-md"
        >
            <a href="">hotel</a>
            <a href="">photographer</a>
            <a href="">bike</a>
            <a href="">tour package</a>
            <a href="">sign in</a>
            <a href="">register</a>
        </div>
    </div>
</nav>
