<?php include 'includes/header.html'; ?>


	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Orders</h4>
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
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
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
									<th scope="col">Order id</th>
									<th scope="col">Book Name</th>
									<th scope="col">Username</th>
									<th scope="col">Customer Name</th>
                                             <th scope="col">Price</th>
									<th scope="col">Quntity</th>
                                             <th scope="col">Date</th>
                                             <th scope="col">Order status</th>
                                             <th scope="col">Payment status</th>
                                             <th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Born a crime</td>
									<td>treverNoah</td>
									<td>Naveen</td>
									<td>300</td>
									<td>1</td>
									<td>29/1/2023</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td><span class="badge badge-success">Success</span></td>
									<td id="icon-td"><a href="order-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Theory of Everything</td>
									<td>stevenHawking</td>
									<td>Jenin</td>
									<td>642</td>
									<td>2</td>
									<td>20/1/2023</td>
                                             <td><span class="badge badge-success">Success</span></td>
                                             <td><span class="badge badge-success">Success</span></td>
											 <td id="icon-td"><a href="order-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Harry Potter</td>
									<td>jkROwling</td>
									<td>Pratyush</td>
									<td>444</td>
									<td>7</td>
									<td>15/1/2023</td>
                                             <td><span class="badge badge-danger">Cancelled</span></td>
                                             <td><span class="badge badge-danger">Cancelled</span></td>
											 <td id="icon-td"><a href="order-edit.php"><i class="micon dw dw-pencil" id="edit-btn"></i></a>
									<i class="micon dw dw-trash" id="delete-btn"></i></td>
								</tr>
								
							</tbody>
						</table>
					</div>
					
				</div>
				<!-- Responsive tables End -->			<!-- Contextual classes End -->
			</div>
<?php include 'includes/footer.html'; ?>
			