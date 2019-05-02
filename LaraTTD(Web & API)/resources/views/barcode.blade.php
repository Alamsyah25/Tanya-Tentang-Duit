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
	
	<div id="kelebihan" class="container center" style="width: 80%;padding-top: 34px">
		<h4 style="font-weight: bold; font-size: 25pt" class="grey-text text-darken-2">Silahkan Tambahkan Pada Sosial Media Anda </h4>
		<hr style="width: 10%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
		<div class="row">
			<div class="col m4 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="height: 109px;">
						<img src="{{ asset('assets/img/messenger.png') }}" style="width: 100px;position: absolute;top: 0; bottom:0; left: 0; right:0;margin: auto; padding-top: 15px">
					</div>
					<div class="card-content white-text" style="height: 95px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Facebook Massenger</span>
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">@Tanyatentangduit</span>
					</div>
					<div class="card-image" style="height: 229px;">
						<img src="{{ asset('assets/img/facebook_massenger_qrcode.png') }}" style="width: 220px;position: absolute;top: 0; bottom:0; left: 0; right:0;margin: auto;">
					</div>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="height: 109px">
						<img src="{{ asset('assets/img/line.png') }}" style="width: 100px;position: absolute;top: 0; bottom:0; left: 0; right:0;margin: auto; padding-top: 15px">
					</div>
					<div class="card-content white-text" style="height: 95px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Line</span>
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">@Tanyatentangduit</span>
					</div>
					<div class="card-image" style="height: 229px;">
						<img src="{{ asset('assets/img/line_qrcode.png') }}" style="width: 220px;position: absolute;top: 0; bottom:0; left: 0; right:0;margin: auto;">
					</div>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="height: 109px">
						<img src="{{ asset('assets/img/telegram.png') }}" style="width: 100px;position: absolute;top: 0; bottom:0; left: 0; right:0;margin: auto; padding-top: 15px">
					</div>
					<div class="card-content white-text" style="height: 95px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Telegram</span>
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">@TTDApp_bot</span>
					</div>
					<div class="card-image" style="height: 229px;">
						<img src="{{ asset('assets/img/telegram_qrcode.png') }}" style="width: 220px;position: absolute;top: 0; bottom:0; left: 0; right:0;margin: auto;">
					</div>
				</div>
			</div>
		</div>
	</div>

		<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
		<script src="{{ asset('assets/js/vegas.min.js') }}"></script>
		<script>
		//
	</script>
</body>
</html>