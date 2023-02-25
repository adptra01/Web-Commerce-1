<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Administrator Center</title>
<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('adminassets') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="{{ asset('adminassets') }}/assets/vendors/css/vendor.bundle.base.css">

<link rel="stylesheet" href="{{ asset('adminassets') }}/assets/css/style.css">
<link href="{{ asset('swal/dist/sweetalert2.min.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('adminassets') }}/assets/images/favicon.png" />
<link href="{{ asset('table/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container-scroller">
	<!-- partial:partials/_navbar.html -->
	<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
		<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
			<a class="navbar-brand brand-logo" href="{{ route('admin.dashboard') }}"><img src="{{ asset('adminassets') }}/assets/images/logo-mini.svg" alt="logo" /></a>
			
			<a class="navbar-brand brand-logo-mini" href="{{ route('admin.dashboard') }}"><img src="{{ asset('adminassets') }}/assets/images/logo-mini.svg" alt="logo" /></a>
		</div>
		<div class="navbar-menu-wrapper d-flex align-items-stretch">
			<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
				<span class="mdi mdi-menu"></span>
			</button>
			<ul class="navbar-nav navbar-nav-right">
				<li class="nav-item nav-profile dropdown">
					<a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
						<div class="nav-profile-img">
							<img src="https://api.dicebear.com/5.x/adventurer/svg?seed={{rand(01, 100)}}" alt="image">
							<span class="availability-status online"></span>
						</div>
						<div class="nav-profile-text">
							<p class="mb-1 text-black">{{ Auth::user()->name }}</p>
						</div>
					</a>
					<div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">Logout 
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
						</form>
					</div>
				</li>
			</ul>
			<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
				<span class="mdi mdi-menu"></span>
			</button>
		</div>
	</nav>
	<!-- partial -->
	<div class="container-fluid page-body-wrapper">
		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas d-print-none" id="sidebar">
			<ul class="nav">
				<li class="nav-item nav-profile">
					<a href="#" class="nav-link">
						
						<div class="nav-profile d-flex flex-column">
							<h3 class="font-weight-bold mb-2">THANKS DREAMS</h3>
							<span class="text-secondary text-small">Admin</span>
						</div>
						<i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
					</a>
				</li>
				<li class="nav-item {{ Request::path() === 'admin' ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('admin.dashboard') }}">
						<span class="menu-title">Dashboard</span>
						<i class="mdi mdi-home menu-icon"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.pelanggan') }}">
						<span class="menu-title">Pelanggan</span>
						<i class="mdi mdi mdi-account-multiple menu-icon"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.customer') }}">
						<span class="menu-title">Customer</span>
						<i class="mdi mdi mdi-account-multiple menu-icon"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/administrator">
						<span class="menu-title">Administrator</span>
						<i class="mdi mdi mdi-account menu-icon"></i>
					</a>
				</li>
				{{--  --}}
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.product') }}">
						<span class="menu-title">Produk</span>
						<i class="mdi mdi mdi-ethernet menu-icon"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.categories') }}">
						<span class="menu-title">Kategori</span>
						<i class="mdi mdi mdi-alphabetical menu-icon"></i>
					</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.transaksi') }}">
						<span class="menu-title">Semua transaksi</span>
						<i class="mdi mdi mdi-apple-keyboard-caps menu-icon"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.transaksi.perludicek') }}">
						<span class="nav-item menu-title">Transaksi Perlu Dicek</span>
						{{-- <i class="mdi mdi mdi-alert-box menu-icon"></i> --}}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.transaksi.perludikirim') }}">
						<span class="nav-item menu-title">Transaksi Perlu Dikirim</span>
						{{-- <i class="mdi mdi mdi-apple-keyboard-caps menu-icon"></i> --}}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.transaksi.dikirim') }}">
						<span class="nav-item menu-title">Transaksi Dikirim</span>
						{{-- <i class="mdi mdi mdi-calendar-clock menu-icon"></i> --}}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.transaksi.selesai') }}">
						<span class="nav-item menu-title">Transaksi Selesai</span>
						{{-- <i class="mdi mdi mdi-check-all menu-icon"></i> --}}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.transaksi.dibatalkan') }}">
						<span class="nav-item menu-title">Transaksi Dibatalkan</span>
						{{-- <i class="mdi mdi mdi-close menu-icon"></i> --}}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.pengaturan.alamat') }}">
						<span class="menu-title">Alamat Toko</span>
						<i class="mdi mdi mdi-crosshairs-gps menu-icon"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('admin.rekening') }}">
						<span class="menu-title">No. Rekening Toko</span>
						<i class="mdi mdi mdi-credit-card menu-icon"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/admin/laporan">
						<span class="menu-title">Laporan</span>
						<i class="mdi mdi-cloud-print menu-icon"></i>
					</a>
				</li>
				{{--  --}}
			</ul>
		</nav>
		<!-- partial -->
		<div class="main-panel">
			@yield('content')
			
		</div>
		<!-- main-panel ends -->
	</div>
	<!-- page-body-wrapper ends -->
</div>

<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('adminassets') }}/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('adminassets') }}/assets/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('adminassets') }}/assets/js/off-canvas.js"></script>
<script src="{{ asset('adminassets') }}/assets/js/hoverable-collapse.js"></script>
<script src="{{ asset('adminassets') }}/assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('adminassets') }}/assets/js/dashboard.js"></script>
<script src="{{ asset('adminassets') }}/assets/js/todolist.js"></script>
<!-- <script src="{{ asset('table/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('table/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->

<!-- Core plugin JavaScript-->
<script src="{{ asset('table/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('table/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('table/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('swal/dist/sweetalert2.min.js') }}"></script>
<!-- End custom js for this page -->
@if(session('status'))
<script type="text/javascript">
	Swal.fire({
		title: 'Horee ...',
		icon: 'success',
		text: '{{ session("status") }}',
		showClass: {
			popup: 'animated bounceInDown slow'
		},
		hideClass: {
			popup: 'animated bounceOutDown slow'
		}
	})
</script>
@endif
<script>
	
	var t = $('#table').DataTable({
			"columnDefs": [ {
					"searchable": true,
					"orderable": true,
					"targets": 0
			} ],
			"order": [[ 1, 'asc' ]],
			"language" : {
					"sProcessing" : "Sedang memproses ...",
					"lengthMenu" : "Tampilkan _MENU_ data per halaman",
					"zeroRecord" : "Maaf data tidak tersedia",
					"info" : "Menampilkan _PAGE_ halaman dari _PAGES_ halaman",
					"infoEmpty" : "Tidak ada data yang tersedia",
					"infoFiltered" : "(difilter dari _MAX_ total data)",
					"sSearch" : "Cari",
					"oPaginate" : {
							"sFirst" : "Pertama",
							"sPrevious" : "Sebelumnya",
							"sNext" : "Selanjutnya",
							"sLast" : "Terakhir"
					}
			}
	});
	t.on( 'order.dt search.dt', function () {
			t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
					cell.innerHTML = i+1;
			} );
	} ).draw();
</script>
@yield('js')
</body>
</html>