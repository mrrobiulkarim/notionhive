<div class="modal fade text-left" id="contactUs" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 id="modalTitle" class="modal-title"> Contact Us</h4>
			</div>
			<div class="modal-body">
				<form action="#" method="post" enctype="multipart/form-data">
					<div class="form-group row">
						<div class="form-group col-md-6">
							<label>Name</label>
							<input type="text" name="name" required class="form-control"  placeholder="Enter Your Name">
						</div>
						<div class="form-group col-md-6">
							<label>Mobile Number</label>
							<input type="text" name="mobile" required class="form-control"  placeholder="Enter Mobile Number">
						</div>
						<div class="form-group col-md-6">
							<label>Email</label>
							<input type="email" name="email" class="form-control"  placeholder="Enter Email">
						</div>
						<div class="form-group col-md-6">
							<label>Select Subject</label>
							<select class="form-control" name="" required>
								<option value="" > Select Subject </option>
								<option value="1" > Sales  Support</option>
								<option value="2" > Hosting Support</option>
								<option value="3" > Others</option>
							</select>
						</div>
						<div class="form-group col-md-12">
							<label>Message</label>
							<textarea name="message" id="InputMessage" class="form-control" rows="4" placeholder="Enter Your message here..." required="required" data-error="Message is required."></textarea>
						</div>
					</div>
				</form>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Submit</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			
		</div>
	</div>	  	  
</div>	

<div class="modal fade text-left" id="playVideo" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<iframe width="100%" height="450" src="https://www.youtube.com/embed/_BWhdHDN8HY" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>	  	  
</div>	

<!-- search popup area -->
<div class="search-popup">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>
	<!-- content -->
	<div class="search-content">
		<div class="text-center">
			<h3 class="mb-4 mt-0">Press ESC to close</h3>
		</div>
		<!-- form -->
		<form class="d-flex search-form">
			<input class="form-control me-2" type="search" placeholder="Search and press enter ..." aria-label="Search">
			<button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
		</form>
	</div>
</div>

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>
	<!--  -->
	<div class="logo">
		<img src="images/logo.png" alt="Katen" />
	</div>
	<!-- menu -->
	<nav>
		<ul class="vertical-menu">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Cmmunity</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</nav>

	<!-- social icons -->
	<ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
		<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
	</ul>
</div>