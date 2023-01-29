<?php include 'includes/header.html'; ?>

<style>
	#edit-btn, #delete-btn {
		font-size: 1.5rem !important;
		cursor: pointer;
		
	}
	#icon-td{
	display: flex !important;
    justify-content: space-around !important;
	}
</style>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Users</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="micon dw dw-settings" ></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Delete All Entries</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			

				<!-- Striped table End -->
				<!-- Responsive tables Start -->
				<div class="pd-20 card-box mb-30">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">User id</th>
									<th scope="col">Name</th>
									<th scope="col">Email</th>
									<th scope="col">Mobile no.</th>
									<th scope="col">Last Login</th>
                                    <th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Jaison John</td>
									<td>20bca053@sxca.edu.in</td>
									<td>95946088877</td>
                                             <td>Last 5 days ago</td>
											 <td id="icon-td"><a href="user-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Nikhil</td>
									<td>20bca068@sxca.edu.in</td>
									<td>89656774400</td>
                                             <td>Last 1 day ago</td>
											 <td id="icon-td"><a href="user-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>20bca177@sxca.edu.in</td>
									<td>8795564982</td>
                                             <td>few hours ago</td>
											 <td id="icon-td"><a href="user-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>20bca001@sxca.edu.in</td>
									<td>88876964928</td>
                                             <td>5min ago</td>
											 <td id="icon-td"><a href="user-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>20bca027@sxca.edu.in</td>
									<td>7899552409</td>
                                             <td>Yesterday</td>
											 <td id="icon-td"><a href="user-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="collapse collapse-box" id="responsive-table">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#responsive-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#responsive-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="responsive-table-code">
<div class="table-responsive">
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	    </tr>
	  </tbody>
	</table>
</div>
							</code></pre>
						</div>
					</div>
				</div>
				<!-- Responsive tables End -->			<!-- Contextual classes End -->
			</div>
<?php include 'includes/footer.html'; ?>
			