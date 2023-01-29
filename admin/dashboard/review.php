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
								<h4>Review Details</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Libraian</a></li>
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Review Tables</li>
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
									<th scope="col">Review Id</th>
									<th scope="col">Book Name</th>
									<th scope="col">User Id</th>
									<th scope="col">Review Details</th>
									<th scope="col">Review Date</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Action</th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Born a Crime</td>
									<td>2</td>
									<td>This is very funny...</td>
                                             <td>Last 5 days ago</td>
                                             <td>4</td>
											 <td id="icon-td"><a href="review-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Theory of Everything</td>
									<td>5</td>
									<td>Very informative...</td>
                                             <td>Last 1 day ago</td>
                                             <td>4.5</td>
											 <td id="icon-td"><a href="review-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Harry Potter</td>
									<td>1</td>
									<td>Interesting Book...</td>
                                             <td>few hours ago</td>
                                             <td>3.5</td>
											 <td id="icon-td"><a href="review-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
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
			