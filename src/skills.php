<?php
include $_SERVER['DOCUMENT_ROOT'] . '/header.html';

?>
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Skills</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Skills</li>
					</ol>
				</nav>
			</div>
		</div>
		<!--end breadcrumb-->

		<div class="container" style="height: 600px;">

			<div class="py-3">
				<h2>My Skills</h2>
				<p>This is my skill gained from my own Experience and Studied by myself.</p>
			</div>

			<div class="row">
				<div class="col-6">
					<div class="card">
						<div class="card-body">
							<div class="chart-container1">
								<canvas id="langSkill"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="card">
						<div class="card-body">
							<div class="chart-container1">
								<canvas id="chart4"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			<p>In some ways, programming is like painting. You start with a blank canvas and certain basic raw materials. You use a combination of science, art, and craft to determine what to do with them.</p>
		</div>

	</div>
</div>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
	<p class="mb-0">Copyright © 2021. All right reserved.</p>
</footer>
</div>
<!--end wrapper-->
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.html';
?>
<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
<script>
	$(function() {
		"use strict";
		// chart 1
		new Chart(document.getElementById("langSkill"), {
			type: 'horizontalBar',
			data: {
				labels: ["HTML", "CSS", "JavaScript", "PHP", "Python"],
				datasets: [{
					label: "Skill (percent)",
					backgroundColor: ["rgba(255, 255, 255, 0.64)", "#fff", "rgba(255, 255, 255, 0.44)", "rgba(255, 255, 255, 0.32)", "rgba(255, 255, 255, 0.15)"],
					data: [90, 83, 70, 76, 70]
				}]
			},
			options: {
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				title: {
					display: true,
					text: 'Langauges & Tools',
					fontColor: '#fff'
				},
				scales: {
					xAxes: [{
						ticks: {
							beginAtZero: true,
							fontColor: '#fff'
						},
						gridLines: {
							display: true,
							color: "rgba(255, 255, 255, 0.24)"
						},
					}],
					yAxes: [{
						ticks: {
							beginAtZero: true,
							fontColor: 'rgba(255, 255, 255, 0.64)'
						},
						gridLines: {
							display: true,
							color: "rgba(255, 255, 255, 0.24)"
						},
					}]
				}
			}
		});


		new Chart(document.getElementById("chart4"), {
			type: 'radar',
			data: {
				labels: ["Frontend/Design", "Backend", "Programming"],
				datasets: [{
					label: "Proficiency",
					fill: true,
					backgroundColor: "rgba(255, 255, 255, 0.64)",
					borderColor: "rgba(255,99,132,1)",
					pointBorderColor: "#fff",
					pointBackgroundColor: "rgba(255, 255, 255, 0.64)",
					pointBorderColor: "#fff",
					data: [50.0, 75.0, 72.0]
				}]
			},
			options: {
				maintainAspectRatio: false,
				title: {
					display: true,
					text: 'Proficiency',
					fontColor: '#fff'
				},
				legend: {
					position: "right",
					display: true,
					labels: {
						fontColor: '#fff',
						boxWidth: 15
					}
				},
				scale: {
					gridLines: {
						color: "rgba(221, 221, 221, 0.12)"
					},
				}
			}
		});
	});
</script>