<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
</head>
<body>
    <nav id="Nav" class="flex z-50 p-7 border-b-2 h-28 border-pink-500 bg-transparent backdrop-filter backdrop-blur overflow-hidden justify-between items-center shadow-lg sticky top-0 bg-slate-900 ">
        <div class="flex ">
            <h1 class=" float-left mx-4    font-bold text-2xl text-violet-700 font-Japan hover:border-b-2 border-violet-700 " >フェルディナンド.</h1>
        </div>
        <div class=" hidden md:flex float-left items-center justify-between"  >
            <div class=" mx-4 font-bold  text-sky-50 hover:border-b-2 border-violet-700" >
                <a class="text-violet-700" href="{{route('transaksi.create')}}">Transaksi</a>
            </div>
            <div class=" mx-4 font-bold  text-sky-50 hover:border-b-2 border-violet-700">
                <a class="text-violet-700" href="{{route('kategori.index')}}">Kategori</a>
            </div>
            <div class=" mx-4 font-bold text-sky-50 hover:border-b-2 border-violet-700">
                <a class="text-violet-700" href="#">Report</a>
            </div>
            <div class="mx-4 font-bold  text-sky-50 hover:border-b-2 border-violet-700">
                <a class="text-violet-700" href="{{route('transaksi.index')}}">History</a>
            </div>
        </div>
        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
            <button class="outline-none mobile-menu-button">
                <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                    x-show="!showMenu"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="hidden mobile-menu bg-white shadow-lg w-[150px] " style="border:10px solid black">
            <ul class="">
                <li>
                    <div class=" mx-4 font-bold  text-sky-50 hover:border-b-2 border-violet-700" >
                        <a class="text-violet-700" href="{{route('transaksi.create')}}">Transaksi</a>
                    </div>
                </li>
                <li> 
                    <div class=" mx-4 font-bold  text-sky-50 hover:border-b-2 border-violet-700">
                        <a class="text-violet-700" href="{{route('kategori.index')}}">Kategori</a>
                    </div>
                </li>
                <li>            
                    <div class=" mx-4 font-bold text-sky-50 hover:border-b-2 border-violet-700">
                        <a class="text-violet-700" href="#">Report</a>
                    </div>
                </li>
                <li> 
                    <div class="mx-4 font-bold  text-sky-50 hover:border-b-2 border-violet-700">
                        <a class="text-violet-700" href="{{route('transaksi.index')}}">History</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
  
  <div class="p-5">
    @yield('content')
  </div>
</body>
</html>