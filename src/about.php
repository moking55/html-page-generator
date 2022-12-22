<?php
include $_SERVER['DOCUMENT_ROOT'] . '/header.html';

?>
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">About Me</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">About Me</li>
					</ol>
				</nav>
			</div>
		</div>
		<!--end breadcrumb-->

		<div class="container">
			<div class="main-body">
				<div class="row">
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-column align-items-center text-center">
									<img src="assets/images/me.jpg" alt="Admin" class="rounded-circle p-1 bg-primary" style="width: 180px;height: 180px;object-fit: cover;">
									<div class="mt-3">
										<h4>Maythawat Mahawan</h4>
										<p class="mb-1">Student at Maejo University</p>
										<p class="font-size-sm">Computer Science</p>
									</div>
								</div>
								<hr class="my-4" />
								<ul class="list-group list-group-flush">
									<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
										<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline">
												<circle cx="12" cy="12" r="10"></circle>
												<line x1="2" y1="12" x2="22" y2="12"></line>
												<path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
											</svg>Website</h6>
										<span><a href="https://codename-t.com" class="text-white">https://codename-t.com</a></span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
										<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline">
												<path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
											</svg>Github</h6>
										<span><a href="https://github.com/moking55" class="text-white">moking55</a></span>

									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
										<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline">
												<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
											</svg>Facebook</h6>
										<span class="text-white">T'Tawan Mahawan</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="card">
							<div class="card-body" style="font-size: 11pt;">
								Hey there! My name is Tawan and I'm 20 years old. I'm a Computer Science student at Maejo University in Chiang Mai, Thailand. I grew up in a small town called Lamphun and I love spending my free time coding and hanging out with friends.
								<br><br>
								I have experience with a variety of programming languages, including <strong class="text-white">PHP, JavaScript, HTML, Bootstrap, Python, and the Codeigniter framework.</strong> I'm also currently learning <strong class="text-white">Ruby and Ruby on Rails.</strong>
								<br><br>

								If you want to chat or just hang out, you can find me on Discord as <strong class="text-white">Codename_T#3181</strong> or send me an email at mju6404101332@mju.ac.th. I'm always up for meeting new people, so don't be shy! Feel free to hit me up anytime.
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Full Name</h6>
									</div>
									<div class="col-sm-9">
										<input readonly type="text" class="form-control" value="Maythawat Mahawan" />
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Email</h6>
									</div>
									<div class="col-sm-9">
										<input readonly type="text" class="form-control" value="mju6404101332@mju.ac.th" />
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Student ID</h6>
									</div>
									<div class="col-sm-9">
										<input readonly type="text" class="form-control" value="6404101332" />
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-body">
										<h5 class="d-flex align-items-center mb-3">Project Status</h5>
										<p>Web Design</p>
										<div class="progress mb-3" style="height: 5px">
											<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p>Website Markup</p>
										<div class="progress mb-3" style="height: 5px">
											<div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p>One Page</p>
										<div class="progress mb-3" style="height: 5px">
											<div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p>Mobile Template</p>
										<div class="progress mb-3" style="height: 5px">
											<div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p>Backend API</p>
										<div class="progress" style="height: 5px">
											<div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end page wrapper -->
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.html';
?>