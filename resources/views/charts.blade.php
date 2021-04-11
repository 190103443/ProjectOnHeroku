<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Charts</title>
</head>
<body>
<canvas id = "myChart1" width = "100%" height = "50%"></canvas>
<script type="text/javascript">
	var ctx = document.getElementById("myChart1");
	var myChart = new Chart(ctx, {
		type: 'bar',
			data: {
				labels: ["2015", "2016", "2017" , "2018", "2019","2020","2021"],
				datasets: [
					{ label : 'Jordans sales growth',
					data: [6,10,12,12,15,21,28],
					backgroundColor :['rgba(75, 192, 192, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(75, 192, 192, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(75, 192, 192, 1)',
					],
				}
			]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
	</script>

<canvas id = "myChart2" width = "100%" height = "50%"></canvas>
<script type="text/javascript">
	var ctx = document.getElementById("myChart2");
	var myChart = new Chart(ctx, {
		type: 'pie',
			data: {
				labels: ["Jordan", "Adidas", "Puma", "Under Armour", "Nike"],
				datasets: [
					{ label : 'Most popular brand',
					data: [65,15,10,4,6],
					backgroundColor :['rgb(255,0,0)',
						'rgba(234, 162, 235, 1)',
						'rgba(255, 206, 36, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(75, 192, 192, 1)'
					],
				}
			]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
	</script>
	<canvas id = "myChart3" width = "100%" height = "50%"></canvas>
<script type="text/javascript">
	var ctx = document.getElementById("myChart3");
	var myChart = new Chart(ctx, {
		type: 'polarArea',
			data: {
				labels: ["Europe", "Asia", "America", "Africa"],
				datasets: [
					{ label : '',
					data: [33,14,47,6],
					backgroundColor :['rgb(255,0,0)',
						'rgba(234, 162, 235, 1)',
						'rgba(255, 206, 36, 1)',
                        'rgba(153, 102, 255, 1)'
					],
				}
			]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
	</script>
</body>
</html>