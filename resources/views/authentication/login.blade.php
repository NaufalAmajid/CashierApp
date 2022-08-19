
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Cashier App</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img src="{{ asset('template/images/logo.png') }}" alt="" width="100" height="100" id="storeLogo"></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Silahkan Login Terlebih Dahulu</h4>
                                    <form id="formlogin">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Toko</strong></label>
                                            <select class="form-control default-select" id="store" style="color: black;">
                                                <option value="0">-- Pilih Toko --</option>
                                                <option value="1">Toko 1</option>
                                                <option value="2">Toko 2</option>
                                                <option value="3">Toko 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input type="text" class="form-control" id="username" placeholder="username" style="color: black;" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="password" placeholder="password" style="color: black;" autocomplete="off">
                                        </div>
                                        <div class="text-center mt-5">
                                            <button type="button" onclick="login()" class="btn bg-white text-primary btn-block">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('template/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('template/js/deznav-init.js') }}"></script>
    <script src="{{ asset('sweetalert2@11.js') }}"></script>
    <script>
        const store = document.getElementById('store');
        store.addEventListener('change', e => {
            const value = e.target.value;
            const img = document.querySelector('#storeLogo');
            value != 0 ? img.src = `/template/images/store/store${value}.png` : img.src = `/template/images/logo.png`;

        });

        function login(){
            const store = document.getElementById('store').value;
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const form = document.getElementById('formlogin');

            if(store != 0){
                if(username == 'owner' && password == 'owner'){
                    Swal.fire({
                        title: 'Berhasil Login',
                        text: 'Anda akan diarahkan ke halaman utama',
                        icon: 'success',
                        confirmButtonText: 'Oke'
                    }).then((response) => {
                        window.location.href = `/dashboard`;
                    })
                }else{

                    form.reset();

                    Swal.fire({
                        title: 'Gagal Login',
                        text: 'Username atau Password salah',
                        icon: 'error',
                        confirmButtonText: 'Oke'
                    })
                }
            }
        }
    </script>
</body>

</html>
