<nav class=" flex justify-evenly flex-wrap md:flex-nowrap px-5 pt-8 pb-4 md:py-8 md:px-20 border-b-2 md:space-x-3">
    <div class=" flex items-center">
        <img class=" w-48 md:w-96 " src="asset/logo1.png" alt="" />
    </div>
    <div class="hidden md:flex w-full py-5 items-center relative justify-center ">
        <form action="" class="hidden md:flex w-full py-5 items-center relative justify-center">
            {{-- {/* input desktop */} --}}
            <input class="outline-[3px] w-4/5 rounded-full py-2 px-5 pang font-extralight outline outline-[#F68C4A] "
                placeholder="Apa yang ingin Anda sewa?" type="search" name="search" id="search" />
            <button type="submit" name="submit"
                class=" absolute right-0 md:right-[10%] rounded-lg bg-[#F68C4A] py-[7.5px] px-3"><object
                    class="fill-current" data="asset/search-svgrepo-com.svg" width="30"
                    height="30"></object></button>
        </form>
    </div>
    <div class=" flex items-center">
        <a class="px-2" href=""><object class="fill-current" data="asset/cart-4-svgrepo-com.svg" width="35"
                height="35"></object></a>
        <a class=" sm:px-2" href="">
            <object class="fill-current" data="asset/user-svgrepo-com.svg" width="35" height="35"></object>
        </a>
        <div class="pang font-extralight  hidden sm:flex flex-wrap w-16  ">
            <p class=" text-sm">Log in</p>
            <p class=" text-sm">Daftar</p>
        </div>
    </div>
    <div class=" w-full flex items-center justify-center relative md:hidden">
        {{-- {/* input mobile */} --}}
        <form action="" class="w-full py-5 flex items-center justify-center relative md:hidden">
            <input class="border-[3px] w-11/12 rounded-full py-2 px-5 pang font-extralight border-[#F68C4A] "
                placeholder="Apa yang ingin Anda sewa?" type="search" name="search" id="search" />
            <button type="submit" name="submit"
                class=" absolute right-[3%] rounded-lg bg-[#F68C4A] py-[7.5px] px-3"><object class="fill-current"
                    data="asset/search-svgrepo-com.svg" width="30" height="30"></object></button>
        </form>
    </div>




</nav>

  
