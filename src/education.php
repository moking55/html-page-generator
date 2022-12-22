<?php
include $_SERVER['DOCUMENT_ROOT'] . '/header.html';

?>
<link href="assets/plugins/fullcalendar/css/main.min.css" rel="stylesheet" />

<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Education</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Education</li>
					</ol>
				</nav>
			</div>
		</div>
		<!--end breadcrumb-->

		<div class="container py-2">
			<h2 class="font-weight-light text-center text-white py-3">My Education Timeline</h2>
			<!-- timeline item 1 -->
			<div class="row g-0">
				<div class="col-sm">
					<!--spacer-->
				</div>
				<!-- timeline item 1 center dot -->
				<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
					<div class="row h-50">
						<div class="col">&nbsp;</div>
						<div class="col">&nbsp;</div>
					</div>
					<h5 class="m-2">
						<span class="badge rounded-pill bg-light border">&nbsp;</span>
					</h5>
					<div class="row h-50">
						<div class="col border-end">&nbsp;</div>
						<div class="col">&nbsp;</div>
					</div>
				</div>
				<!-- timeline item 1 event content -->
				<div class="col-sm py-2">
					<div class="card radius-15">
						<div class="card-body">
							<h4 class="card-title text-white">Primary school</h4>
							<p class="card-text">Pratoolee Municipal School.</p>
						</div>
					</div>
				</div>
			</div>
			<!--/row-->
			<!-- timeline item 2 -->
			<div class="row g-0">
				<div class="col-sm py-2">
					<div class="card border-primary shadow radius-15">
						<div class="card-body">
							<h4 class="card-title text-white">Junior High school</h4>
							<p class="card-text">Suanboonyopatham Lamphun School.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
					<div class="row h-50">
						<div class="col border-end">&nbsp;</div>
						<div class="col">&nbsp;</div>
					</div>
					<h5 class="m-2">
						<span class="badge rounded-pill bg-white">&nbsp;</span>
					</h5>
					<div class="row h-50">
						<div class="col border-end">&nbsp;</div>
						<div class="col">&nbsp;</div>
					</div>
				</div>
				<div class="col-sm">
					<!--spacer-->
				</div>
			</div>
			<!--/row-->
			<!-- timeline item 3 -->
			<div class="row g-0">
				<div class="col-sm">
					<!--spacer-->
				</div>
				<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
					<div class="row h-50">
						<div class="col border-end">&nbsp;</div>
						<div class="col">&nbsp;</div>
					</div>
					<h5 class="m-2">
						<span class="badge rounded-pill bg-light border">&nbsp;</span>
					</h5>
					<div class="row h-50">
						<div class="col border-end">&nbsp;</div>
						<div class="col">&nbsp;</div>
					</div>
				</div>
				<div class="col-sm py-2">
					<div class="card radius-15">
						<div class="card-body">
							<h4 class="card-title">Vocational College</h4>
							<p>Lamphun Technical Colleage.</p>
						</div>
					</div>
				</div>
			</div>
			<!--/row-->
			<!-- timeline item 4 -->
			<div class="row g-0">
				<div class="col-sm py-2">
					<div class="card radius-15">
						<div class="card-body">
							<div class="float-end small">Now</div>
							<h4 class="card-title">University</h4>
							<p>Maejo University.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
					<div class="row h-50">
						<div class="col border-end">&nbsp;</div>
						<div class="col">&nbsp;</div>
					</div>
					<h5 class="m-2">
						<span class="badge rounded-pill bg-light border">&nbsp;</span>
					</h5>
					<div class="row h-50">
						<div class="col">&nbsp;</div>
						<div class="col">&nbsp;</div>
					</div>
				</div>
				<div class="col-sm">
					<!--spacer-->
				</div>
			</div>
			<!--/row-->
		</div>

		<h2 class="text-center my-5">My Classroom Timetable</h2>
		<!--end breadcrumb-->
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<div id='calendar'></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
</div>
<!--end wrapper-->

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.html';
?>

<script src="assets/plugins/fullcalendar/js/main.min.js"></script>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');
		var calendar = new FullCalendar.Calendar(calendarEl, {
			headerToolbar: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay'
			},
			initialView: 'dayGridMonth',
			navLinks: true, // can click day/week names to navigate views
			selectable: true,
			nowIndicator: true,
			dayMaxEvents: true, // allow "more" link when too many events
			editable: false,
			selectable: true,
			businessHours: true,
			dayMaxEvents: true, // allow "more" link when too many events
			events: [{
					daysOfWeek: [1],
					title: 'คพ232'
				},
				{
					daysOfWeek: [1],
					title: 'คพ313'
				},
				{
					daysOfWeek: [1],
					title: 'สต301'
				},
				{
					daysOfWeek: [2],
					title: 'ศท242'
				},
				{
					daysOfWeek: [2],
					title: 'ศท013'
				},
				{
					daysOfWeek: [2],
					title: 'คพ343'
				},
				{
					daysOfWeek: [2],
					title: 'คพ313'
				},
				{
					daysOfWeek: [3],
					title: 'คพ252'
				},
				{
					daysOfWeek: [4],
					title: 'คพ232'
				},
				{
					daysOfWeek: [4],
					title: 'สต301'
				},
				{
					daysOfWeek: [5],
					title: 'ศท242'
				},
				{
					daysOfWeek: [5],
					title: 'ศท013'
				},
				{
					daysOfWeek: [5],
					title: 'คพ343'
				},
			]
		});
		calendar.render();
	});
</script>