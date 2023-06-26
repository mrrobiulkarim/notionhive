<footer>
		<div class="container-xl">
			<div class="footer-inner">
				<div class="row d-flex align-items-center gy-4">
					<!-- copyright text -->
					<div class="col-md-4">
						<span class="copyright">© 2023 all rights resered to notionhive</span>
					</div>

					<!-- social icons -->
					<div class="col-md-4 text-center">
						<ul class="social-icons list-unstyled list-inline mb-0">
							<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>

					<!-- go to top button -->
					<div class="col-md-4">
						<a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
 <script>
var blogContainer = document.getElementById("blog-container");
var loadMoreBtn = document.getElementById("load-more-btn");
var postsPerClick = 3; // Adjust this value to determine the number of items to load per click
var visibleItems = 0;

loadMoreBtn.addEventListener("click", function() {
  var hiddenItems = blogContainer.getElementsByClassName("hidden");

  // Show the next set of hidden items
  for (var i = 0; i < postsPerClick; i++) {
    if (hiddenItems[i]) {
      hiddenItems[i].classList.remove("hidden");
      visibleItems++;
    }
  }

  // Check if there are no more hidden items
  if (visibleItems >= blogContainer.children.length) {
    loadMoreBtn.disabled = true;
    loadMoreBtn.textContent = "No More Items";
  }
});

// Initially hide items that exceed the initial visible limit
var allItems = blogContainer.children;
for (var i = postsPerClick; i < allItems.length; i++) {
  allItems[i].classList.add("hidden");
}
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.sticky-sidebar.min.js"></script>
<script src="js/custom.js"></script>