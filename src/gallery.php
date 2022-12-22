<?php
include $_SERVER['DOCUMENT_ROOT'] . '/header.html';

?>
<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Gallery</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Gallery</li>
					</ol>
				</nav>
			</div>
		</div>
		<!--end breadcrumb-->

		<div class="container">

			<div class="py-3">
				<h2>Gallery</h2>
			</div>
			<div class="row">
				<div class="col-12 col-lg-3">
					<div class="card">
						<div class="card-body">
							<h5 class="my-3">My Gallery</h5>
							<div class="fm-menu">
								<div class="list-group list-group-flush">
									<a href="javascript:;" class="list-group-item py-1"><i class='bx bx-image me-2'></i><span>Images</span></a>
									<a href="javascript:;" class="list-group-item py-1"><i class='bx bx-video me-2'></i><span>Videos</span></a>
									<a href="javascript:;" class="list-group-item py-1"><i class='bx bx-music me-2'></i><span>Audio</span></a>
									<a href="javascript:;" class="list-group-item py-1"><i class='bx bx-beer me-2'></i><span>Zip Files</span></a>
									<a href="javascript:;" class="list-group-item py-1"><i class='bx bx-trash-alt me-2'></i><span>Deleted Files</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-9">
					<div class="card">
						<div class="card-body">
							<h5>Folders</h5>
							<div class="row mt-3">
								<div class="col-12 col-lg-4">
									<div class="card shadow-none border radius-15">
										<div class="card-body">
											<div class="d-flex align-items-center">
												<div class="font-30"><i class='bx bxs-folder'></i>
												</div>
											</div>
											<h6 class="mb-0">Personal Image</h6>
											<small>15 files</small>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="card shadow-none border radius-15">
										<div class="card-body">
											<div class="d-flex align-items-center">
												<div class="font-30"><i class='bx bxs-folder'></i>
												</div>
											</div>
											<h6 class="mb-0">MJU Science Week 2022</h6>
											<small>345 files</small>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="card shadow-none border radius-15">
										<div class="card-body">
											<div class="d-flex align-items-center">
												<div class="font-30"><i class='bx bxs-folder'></i>
												</div>
											</div>
											<h6 class="mb-0">MJU</h6>
											<small>143 files</small>
										</div>
									</div>
								</div>
							</div>
							<!--end row-->

							<div class="row mt-3">
								<div class="col-12 col-lg-4">
									<div class="card bg-dark text-white">
										<img src="https://i.imgur.com/1N1o6yG.jpg" class="card-img" alt="...">
									</div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="card bg-dark text-white">
										<img src="https://i.imgur.com/nWShVMN.jpg" class="card-img" alt="...">
									</div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="card bg-dark text-white">
										<img src="https://i.imgur.com/9ksdqie.jpg" class="card-img" alt="...">
									</div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="card bg-dark text-white">
										<img src="https://i.imgur.com/kuBCsL6.jpg" class="card-img" alt="...">
									</div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="card bg-dark text-white">
										<img src="https://i.imgur.com/lVwBOlX.jpg" class="card-img" alt="...">
									</div>
								</div>
								<div class="col-12 col-lg-4">
									<div class="card bg-dark text-white">
										<img src="https://i.imgur.com/twyBS7p.jpg" class="card-img" alt="...">
									</div>
								</div>
							</div>

						</div>
					</div>
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