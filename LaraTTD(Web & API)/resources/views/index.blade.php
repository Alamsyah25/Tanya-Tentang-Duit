<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>TTD | Tanya Tentang Duit</title>
	<link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/vegas.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
	<style>
	body{
		padding: 0;
		margin: 0;
		font-family: 'Montserrat', sans-serif;
	}
</style>
</head>
<body>
	<!-- Navbar -->
	<nav id="navbar" class="white" style="position: relative;z-index: 99">
		<div class="nav-wrapper container" style="width: 85%">
			<a href="#!" class="brand-logo black-text"><b>TTD</b></a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#apa_itu_ttd" class="black-text">Apa itu TTD?</a></li>
				<li><a href="#cara_penggunaan" class="black-text">Cara Penggunaan</a></li>
				<li><a href="#kelebihan" class="black-text">Kelebihan</a></li>
				<li><a href="#our_team" class="black-text">Our Team</a></li>
				<li><a href="#modal1" class="waves-effect waves-light btn modal-trigger" style="background-color: #03a6f4">Daftar</a></li>
			</ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-demo">
		<li><a href="#apa_itu_ttd">Apa itu TTD?</a></li>
		<li><a href="#cara_penggunaan">Cata Penggunaan</a></li>
		<li><a href="#kelebihan">Kelebihan</a></li>
		<li><a href="#our_team">Our Team</a></li>
		<li><a href="#modal1" class="waves-effect waves-light btn modal-trigger" style="background-color: #03a6f4">Daftar</a></li>
	</ul>

	<!-- slideshow -->
	<div class="slideshow" style="width: 100%;height: 90vh"></div>

	<!-- Apa itu TTD -->
	<div id="apa_itu_ttd" class="container valign-wrapper" style="width: 90%;height: 90vh; padding-top: 64px">
		<div class="row">
			<div class="col m6 s12">
				<img src="{{ asset('assets/img/apa itu.png') }}" alt="apa itu TTD?" title="apa itu TTD?" width="100%">
			</div>
			<div class="col m6 s12">
				<p style="padding-top: 10%">
					<h4 style="font-weight: bold; font-size: 25pt" class="grey-text text-darken-2">APA ITU TTD?</h4>
					<div style="width: 15%;">
						<hr style="width: 100%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
					</div>
					<p>
						TTD (Tanya Tentang Duit) merupakan salah satu upaya sekaligus solusi bagi kaum millennial untuk meningkatkan pengetahuan dan pemahaman tentang Literasi Finansial atau pengetahuan mengenai keuangan.
					</p>
				</p>
			</div>
		</div>
	</div>

	<!-- Bagaimana menggunakannya -->
	<div id="cara_penggunaan" class="container center" style="width: 90; padding-top: 64px">
		<h4 style="font-weight: bold; font-size: 25pt;" class="grey-text text-darken-2">Cara Penggunaannya</h4>
		<hr style="width: 10%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
		<div class="row" style="padding-top: 5%">
			<div class="col m6">
				<img src="{{ asset('assets/img/alur.png') }}" alt="Alur TTD" width="100%">
			</div>
			<div class="col m6">
				<img src="{{ asset('assets/img/ttd_design.gif') }}" class="center" alt="TTD Demo" title="TTD Demo" width="65%">
			</div>
		</div>
	</div>

	<!-- Kelebihan -->
	<div id="kelebihan" class="container center" style="width: 80%;padding-top: 64px">
		<h4 style="font-weight: bold; font-size: 25pt" class="grey-text text-darken-2">Kelebihan dan Keunggulan</h4>
		<hr style="width: 10%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
		<div class="row">
			<div class="col m4 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;min-height: 189px">
						<img src="{{ asset('assets/img/time.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Pelayanan 24 Jam</span>
					</div>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;min-height: 189px">
						<img src="{{ asset('assets/img/cepat.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Respon Cepat</span>
					</div>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;min-height: 189px">
						<img src="{{ asset('assets/img/interaksi.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Kemudahan Interkasi</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col m4 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;min-height: 189px">
						<img src="{{ asset('assets/img/detail.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Jawaban yang Detail</span>
					</div>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;min-height: 189px">
						<img src="{{ asset('assets/img/platform.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Compatible di Semua Platform</span>
					</div>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;min-height: 189px">
						<img src="{{ asset('assets/img/nabung.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Pengetahuan Bermanfaat mengenai Financial Literacy</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our Team -->
	<div id="our_team" class="container-fluid center" style="background-color: #03a6f4;padding-top: 20px">
		<h4 style="font-weight: bold; font-size: 25pt" class="white-text">Our Team</h4>
		<hr style="width: 10%;height: 10px;background-color: white;border-radius: 50px;border:none;">
		<div class="row container">
			<div class="col m3 s6">
				<div class="card transparent" style="box-shadow: none">
					<div class="card-image" style="padding: 20px;min-height: 189px">
						<img src="{{ asset('assets/img/tedi.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title white-text" style="font-weight: 500; font-size: 14pt">Fandy Septiana</span>
					</div>
				</div>
			</div>
			<div class="col m3 s6">
				<div class="card transparent" style="box-shadow: none">
					<div class="card-image" style="padding: 20px;min-height: 189px">
						<img src="{{ asset('assets/img/ilham.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title white-text" style="font-weight: 500; font-size: 14pt">Muhamad Ilham Sihabudin</span>
					</div>
				</div>
			</div>
			<div class="col m3 s6">
				<div class="card transparent" style="box-shadow: none">
					<div class="card-image" style="padding: 20px;min-height: 189px">
						<img src="{{ asset('assets/img/reta.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title white-text" style="font-weight: 500; font-size: 14pt">Siti Syahda Rana Areta</span>
					</div>
				</div>
			</div>
			<div class="col m3 s6">
				<div class="card transparent" style="box-shadow: none">
					<div class="card-image" style="padding: 20px;min-height: 189px">
						<img src="{{ asset('assets/img/tedi.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title white-text" style="font-weight: 500; font-size: 14pt">Tedi Alamsyah</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Modal --}}
	<div id="modal1" class="modal modal-fixed-footer">
		<form action="{{ route('daftar.store') }}" method="POST">
			{{csrf_field()}}
			<div class="modal-content">
				<h4 style="font-weight: bold; font-size: 25pt" class="grey-text text-darken-2 center">DAFTAR</h4>
				<hr style="width: 10%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
				<div class="row">
					<div class="input-field col s12">
						<input id="nama_lengkap" name="nama_lengkap" type="text" class="validate" required>
						<label for="nama_lengkap">Nama Lengkap</label>
					</div>
					<div class="input-field col s12 m6">
						<input id="email" name="email" type="email" class="validate" required>
						<label for="email">Email</label>
					</div>
					<div class="input-field col s12 m6">
						<input id="no_hp" name="no_hp" type="number" data-length="13" class="validate" required>
						<label for="no_hp">No Handphone</label>
					</div>
					<p class="col s12">Jenis Kelamin</p>
					<div class="col m6 s12">
						<label>
							<input class="with-gap" name="jk" type="radio" value="Laki-Laki" checked/>
							<span>Laki-Laki</span>
						</label>
					</div>
					<div class="col m6 s12">
						<label>
							<input class="with-gap" name="jk" type="radio" value="Perempuan"/>
							<span>Perempuan</span>
						</label>
					</div>
					<p class="col s12">Tempat Tinggal</p>
					<div class="input-field col s12 m6">
						<select id="provinsi" name="id_provinsi" required>
							<option value="" disabled selected>Choose your option</option>
							@foreach($provinsi as $row)
								<option value="{{ $row->id }}">{{ $row->name }}</option>
							@endforeach
						</select>
						<label>Provinsi</label>
					</div>
					<div class="input-field col s12 m6">
						<select id="show_kota" name="id_kota" required>
							<option value="" disabled selected>Choose your option</option>
							<option value="">-</option>
						</select>
						<label>Kota</label>
					</div>
					<div class="input-field col s12">
						<input id="tgl_lahir" type="date" name="tgl_lahir" class="validate" max="2010-12-31" required>
						<label for="tgl_lahir">Tanggal Lahir</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
				<button type="submit" class="btn waves-effect btn-primary" style="background-color: #03a6f4">Daftar</button>
			</div>
		</form>
	</div>

	<!-- Modal Structure -->
	  <div id="modal1" class="modal">
	    <div class="modal-content">
	      <h4>Modal Header</h4>
	      <p>A bunch of text</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
	    </div>
	  </div>

	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
	<script src="{{ asset('assets/js/vegas.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('.sidenav').sidenav();
			$('.modal').modal();
			$('input#no_hp').characterCounter();

			$('select').formSelect();

			if ($(this).scrollTop() > 0) {
				$('#navbar').css("position","fixed");
				$('.slideshow').css("padding-top","64px");
			} else {
				$('#navbar').css("position","relative");
				$('.slideshow').css("padding-top","0");
			}

		});

		//select provisi $ kota
			$('#provinsi').change(function() {
				var provinsi_id = $(this).val();

				$.ajax({
					headers: {
					   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					type: 'POST',
					url: '{{ route('show_kota') }}',
					data: 'provinsi_id='+provinsi_id,
					success: function (response) {
						$('#show_kota').html(response);
						$('select').formSelect();
					}
				});
			});

		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 0) {
					$('#navbar').css("position","fixed");
					$('.slideshow').css("padding-top","64px");
				} else {
					$('#navbar').css("position","relative");
					$('.slideshow').css("padding-top","0");
				}
			});
		});

		$(".slideshow").vegas({
			slides: [
			{ src: "{{ asset('assets/img/slider.png') }}" },
			{ src: "{{ asset('assets/img/slide1.jpg') }}" },
			{ src: "{{ asset('assets/img/slide2.png') }}" },
			],
			transition: ['fade'],
		});

		//Smooth Scroll
		$(function(){
			$('a[href^="#"]').on('click', function(e){
				$target = $(this.hash);
				$jarak = 0;
				$('html, body').stop().animate(
				{
					'scrollTop' : $target.offset().top - $jarak
				},
				    1000, //durasi dalam milisekon
				    'swing', //efek transisi (opsi : swing / linear)
				    function(){
				    	window.location.hash = target;
				    }
				    );
			});
		});
	</script>
</body>
</html>