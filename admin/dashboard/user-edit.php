<?php include 'includes/header.html'; ?>


	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>User Edit</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item">User Tables</li>
									<li class="breadcrumb-item active" aria-current="page">User Form</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									Export Data
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">.SQL</a>
									<a class="dropdown-item" href="#">.XML</a>
									<a class="dropdown-item" href="#">.pdf</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


				<!-- horizontal Basic Forms Start -->
				<div class="pd-20 card-box mb-30 pb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">User Form</h4>
							<p class="mb-30">From Table: User_master</p>
						</div>
					
					</div>
					<form>
						<div class="form-group">
							<label>id</label>
							<input aria-describedby="textHelp" class="form-control" type="text" readonly value="#1">
						</div>
						<div class="form-group">
							<label>Name</label>
							<input class="form-control" type="text" value="Larry Bros">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" value="20bca053@sxca.edu.in" type="email">
						</div>
						<div class="form-group">
							<label>Mobile no.</label>
							<input class="form-control" value="8699887740" type="number">
						</div>
						
                              <div class="form-group" >
                                   <input class="btn btn-primary btn-lg float-right" type="submit">
                              </div>
						
					</form>
					
				</div>

				<?php include 'includes/footer.html'; ?>
			