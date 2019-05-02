<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TTD | Admin Login</title>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js">
	<link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/dataTables/datatables.min.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.com/libraries/Chart.js">
	<style>
	body{
		
		padding: 0;
		margin: 0;
		background-color: #eee;
		font-family: 'Montserrat', sans-serif;
	}
</style>

</head>
<body bgcolor="#fff">
	<nav id="navbar" class="white" style="position: fixed;z-index: 99">
		<div class="nav-wrapper container" style="width: 85%">
			<a href="#!" class="brand-logo black-text"><b>TTD</b></a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
			<ul class="right hide-on-med-and-down">
				
				<li>
					<a href="{{ url('/') }}" class="waves-effect waves-light btn modal-trigger" style="background-color: #03a6f4">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	
	
	<div id="grafik" class="container center" style="width: 95%;padding-top: 70px">
		<h4 style="font-weight: bold; font-size: 25pt" class="grey-text text-darken-2">Kelebihan dan Keunggulan</h4>
		<hr style="width: 10%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
		<div class="row">
			<div class="col m6 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					
		                 <div class="header" style="padding: 10px">
                            <h5 class="grey-text">Kategori usia & jenis kelamin</h5>
                        </div>
		                    <div class="body">
		                        <canvas id="bar_chart" height="150" style="padding: 10px"></canvas>
		                    </div>
		            
                        
                    
				</div>
			</div>
			<div class="col m6 s12">
				<div class="card hoverable" style="border-radius: 10px;">
						<div class="header" style="padding: 10px">
                            <h5 class="grey-text">Provinsi</h5>
                        </div>
                        <div class="body">
                            <canvas id="pie_jk" height="150" style="padding: 20px"></canvas>
                        </div>
				</div>
			</div>
			
		</div>
		<div class="card hoverable col m12" style="border-radius: 10px;padding: 20px">
			<table class="striped highlight" >
	        <thead>
	          <tr>
	          	  <th>No</th>
	              <th>Name</th>
	              <th>Email</th>
	              <th>No Hp</th>
	          </tr>
	        </thead>

	        <tbody>
	      	@foreach($datas as $row)
	          <tr>
	  		    <td>{{ $no++ }}</td>
	            <td>{{ $row->nama_lengkap }}</td>
	            <td>{{ $row->email }}</td>
	            <td>{{ $row->no_hp }}</td>
	          </tr>
	        @endforeach
	         
	        </tbody>
	      </table>
	     </div>
		</div>


	</div>
	

            
	
	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
	<script src="{{ asset('assets/chartjs/Chart.bundle.js') }}"></script>
	<!-- <script src="{{ asset('assets/charts/chartjs.js') }}"></script> -->



	<link rel="stylesheet" href="{{ asset('assets/dataTables/datatables.min.js') }}">
	<link rel="stylesheet" href="cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
	
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable();
      } );     

      // Pie
      $(function () {
    // new Chart(document.getElementById("line_chart").getContext("2d"), getChartJs('line'));
    new Chart(document.getElementById("bar_chart").getContext("2d"), getChartJs('bar'));
    // new Chart(document.getElementById("radar_chart").getContext("2d"), getChartJs('radar'));
    // new Chart(document.getElementById("pie_umur").getContext("2d"), getChartJs('pie_umur'));
    new Chart(document.getElementById("pie_jk").getContext("2d"), getChartJs('pie_jk'));
    // new Chart(document.getElementById("pie_provinsi").getContext("2d"), getChartJs('pie_provinsi'));
});

function getChartJs(type) {
    var config = null;
    if (type === 'bar') {
        config = {
            type: 'bar',
            data: {
                labels: ["Anak-anak", "Remaja", "Dewasa"],
                datasets: [{
                    label: "Pria",
                    data: [{{ $anak_l }}, {{ $remaja_l }}, {{ $dewasa_l}}],
                    backgroundColor: 'rgba(0, 188, 212, 0.8)'
                }, {
                        label: "Wanita",
                        data: [{{ $anak_p }}, {{ $remaja_p }}, {{ $dewasa_p}}],
                        backgroundColor: 'rgba(233, 30, 99, 0.8)'
                    }]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
   

    else if (type === 'pie_jk') {
        config = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [{{ $pria }}, {{ $wanita }}],
                    backgroundColor: [
                        // "rgb(233, 30, 99)",
                        "rgb(255, 193, 7)",
                        // "rgb(0, 188, 212)"
                        "rgb(139, 195, 74)"
                    ],
                }],
                labels: [
                    "Boy",
                    "Girl"
                ]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    }
    


    return config;
}
    </script>

</body>
</html>