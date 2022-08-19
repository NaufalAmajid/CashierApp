<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu mb-4" id="menu">
            <li><a class="ai-icon" href="/dashboard" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-box"></i>
                    <span class="nav-text">Produk</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('product.list') }}">Daftar Produk</a></li>
                    <li><a href="{{ route('product.create') }}">Tambah Stok</a>
                    </li>
                    <li><a href="#">Empty Menu</a></li>
                    </li>
                </ul>
            </li>
            <li><a href="/transaction" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-send"></i>
                    <span class="nav-text">Transaksi</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-user-8"></i>
                    <span class="nav-text">Kelola Pengguna</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('user.list') }}">Daftar Pengguna</a></li>
                    <li><a href="{{ route('user.create') }}">Pengguna Baru</a>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-location-1"></i>
                    <span class="nav-text">Kelola Toko</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('trade.list') }}">List Toko</a></li>
                    <li><a href="{{ route('trade.create') }}">Toko Baru</a>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-file-1"></i>
                    <span class="nav-text">Laporan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Laporan 1</a></li>
                    <li><a href="#">Laporan 2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
