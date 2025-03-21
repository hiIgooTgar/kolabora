<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Kolabora</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/kolabora.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/font/mona-sans.css') }}">
    <link rel="stylesheet" href="{{ asset('library/sweetalert/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="font-primary">
    <!-- Loading Bar -->
    <div id="loading-bar"
        class="fixed top-0 left-0  z-20 h-1   bg-gradient-to-r from-orange-400 to-orange_normal   transition-all duration-300">
    </div>
    <section class="login-section flex flex-col lg:flex-row relative w-full h-full lg:overflow-hidden">
        <div
            class="left-col hidden lg:flex-1 bg-gradient-to-r from-sky_normal to-primary_dark w-full h-auto lg:flex items-center px-[6%] relative">
            <img class="w-full" src="{{ asset('images/auth/image-job-2.png') }}" alt="">
        </div>
        <div class="right-col flex-1 py-28 lg:py-14 px-[6%] w-full relative">
            <div
                class="blob-1 w-64 h-64 sm:w-44 sm:h-44 bg-primary blur-3xl rounded-full opacity-35 -z-10 absolute -top-20 right-0">
            </div>
            <div
                class="blob-2 w-64 h-64 sm:w-52 sm:h-52 bg-orange-500 blur-3xl rounded-full opacity-35 -z-10 absolute -bottom-20 left-0">
            </div>
            <div class="mb-5">
                <div class="flex items-center">
                    <img class="w-10 h-10" src="{{ asset('images/logo/kolabora-transparent.png') }}" alt="">
                    <h1 class="text-2xl font-bold text-orange-300">Kola<span class="text-primary">Bora</span></h1>
                </div>
                <h2 class="font-bold text-3xl my-2">Create your Account</h2>
                <p class="text-gray-500">Enter your personal data to create your account</p>
            </div>
            <form action="{{ route('processRegistrasi') }}" method="post">
                @csrf
                <div class="form-group mb-5">
                    <label class="label-form block mb-1 text-gray-500 text-md">Name</label>
                    <input type="text"
                        class="inline-block bg-gray-100 border-[1.8px] border-gray-400 w-full py-2.5 px-3 focus:border-primary outline-none rounded-md"
                        name="name" value="{{ old('name') }}" id="name" autocomplete="off">
                </div>
                <div class="form-group mb-5">
                    <label class="label-form block mb-1 text-gray-500 text-md">Email</label>
                    <input type="text"
                        class="inline-block bg-gray-100 border-[1.8px] border-gray-400 w-full py-2.5 px-3 focus:border-primary outline-none rounded-md"
                        name="email" value="{{ old('email') }}" id="email" autocomplete="off">
                </div>
                <div class="form-group mb-5 ">
                    <label class="label-form block mb-1 text-gray-500 text-md">Menggunakan Kolabora Untuk ?</label>
                    <select name="role" id="role"
                        class="inline-block bg-gray-100 border-[1.8px] border-gray-400 w-full py-2.5 px-3 focus:border-primary outline-none rounded-md cursor-pointer appearance-none">
                        <option value="">-- Pilih Kebutuhan --</option>
                        <option value="company">Penyedia Kerja</option>
                        <option value="users">Mencari Kerja</option>
                    </select>
                </div>
                <div class="form-group mb-5">
                    <label class="label-form block mb-1 text-gray-500 text-md">Username</label>
                    <input type="text"
                        class="inline-block bg-gray-100 border-[1.8px] border-gray-400 w-full py-2.5 px-3 focus:border-primary outline-none rounded-md"
                        name="username" value="{{ old('username') }}" id="username" autocomplete="off">
                </div>
                <div class="form-group mb-5">
                    <label class="label-form block mb-1 text-gray-500 text-md">Password</label>
                    <input type="password"
                        class="inline-block bg-gray-100 border-[1.8px] border-gray-400 w-full py-2.5 px-3 focus:border-primary outline-none rounded-md"
                        name="password" value="{{ old('password') }}" id="password" autocomplete="off">
                    <span class="password-icon"><i class="fas fa-eye-slash"></i></span>
                </div>
                <div class="form-group mb-8">
                    <label class="label-form block mb-1 text-gray-500 text-md">Confirmation Password</label>
                    <input type="password"
                        class="inline-block bg-gray-100 border-[1.8px] border-gray-400 w-full py-2.5 px-3 focus:border-primary outline-none rounded-md"
                        name="password_confirmation" value="{{ old('password_confirmation') }}"
                        id="password_confirmation" autocomplete="off">
                    <span class="password-icon-c"><i class="fas fa-eye-slash"></i></span>
                </div>
                <div class="form-group">
                    <button
                        class="inline-block font-medium tracking-wider text-center rounded-md bg-gradient-to-r from-sky_light  to-primary_dark text-white py-2.5 px-3 w-full hover:opacity-[90%]"
                        type="submit">Sign Up</button>
                </div>
            </form>
            <p class="text-center mt-4 text-gray-500">Already have an account? <a href="{{ url('auth/login') }}"
                    class="text-primary font-medium">Sign In</a></p>
        </div>
    </section>

    <script src="{{ asset('library/sweetalert/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/auth.js') }}"></script>

    <!-- Loading -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let loadingBar = document.getElementById("loading-bar");

            function startLoading() {
                loadingBar.style.width = "0%";
                loadingBar.style.opacity = "1";
                let progress = 0;
                let interval = setInterval(() => {
                    if (progress < 90) {
                        progress += Math.random() * 10;
                        loadingBar.style.width = progress + "%";
                    } else {
                        clearInterval(interval);
                    }
                }, 100);
            }

            function completeLoading() {
                loadingBar.style.width = "100%";
                setTimeout(() => {
                    loadingBar.style.opacity = "0";
                    loadingBar.style.width = "0%";
                }, 300);
            }

            // Gunakan event beforeunload agar loading muncul saat pindah halaman
            window.addEventListener("beforeunload", startLoading);
            window.addEventListener("load", completeLoading);

            // Mulai loading saat klik link
            document.querySelectorAll("a").forEach((link) => {
                link.addEventListener("click", function(e) {
                    if (link.target !== "_blank" && link.href.startsWith(window.location.origin)) {
                        startLoading();
                    }
                });
            });
        });
    </script>
    <!-- End Loading -->

    @if (session('error'))
        <script>
            Swal.fire({
                title: "{{ session('error') }}",
                icon: "error",
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                html: '<ul>' +
                    @foreach ($errors->all() as $error)
                        '<li>{{ $error }}</li>' +
                    @endforeach
                '</ul>',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
</body>

</html>
