<?php include('header.php'); ?>
<section id="courseview" class="container-fluid pt pb mt-80">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-8 col-xl-9">
				<div class="course-detail">
					<figure>
						<img src="assets/image/blog/blogview.jpg" alt="" class="img-fluid" />
					</figure>
					<div class="blogmaintxt">
						<h2 class="bloghding">logo design in Photoshop for beginners.</h2>
						<ul class="bloglist">
							<li><span><i class="fa fa-user" aria-hidden="true"></i></span>blogername</li>
							<li><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> may 30, 2021</li>
						</ul>
						<p class="blogp">Arcu dapibus praesent est nunc bibendum ridiculus tellus. Aliquet rutrum mauris
							augue ac. Fringilla at suspendisse netus rhoncus nam curabitur.Iaculis laoreet penatibus
							aliquam penatibus ac id ut tortor massa. At vestibulum mattis velit placerat mattis blandit
							diam.<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas
								nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut
								aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed
								nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida
								venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor
								porta.</span></p>
						<button onclick="myFunction()" id="myBtn">Read more</button>
					</div>
				</div><!--/course-detail-->
				<div class="comment-sec">
					<h4 class="comment-title">02 Comments</h4>
					<ul class="comment-list">
						<li>
							<div class="comment_container">
								<div class="avatar-img">
									<img src="assets/image/blog/user1.png" alt="" class="img-fluid" />
								</div>
								<div class="comment-text">
									<p class="meta">
										<span>name</span>
										<time datetime="2019-03-28T07:22:58+00:00">March 28, 2019</time>
									</p>
									<div class="description">
										<p>Pellentesque ultrices orci id justo vehicula, non aliquam erat lacinia Mam
											rem aperiam, eaque ipsa qua tore veritatis.</p>
									</div>
								</div>
								<!--a href="#" class="reply">Reply</a-->
							</div>
						</li>
					</ul>
				</div><!--/comment sec-->
				<div class="vmoretogle">
					<button class="toggle">view more <span><i class="fa fa-chevron-down"
								aria-hidden="true"></i></span></button>
					<div id="target">
						<ul class="comment-list">
							<li>
								<div class="comment_container">
									<div class="avatar-img">
										<img src="assets/image/blog/user1.png" alt="" class="img-fluid">
									</div>
									<div class="comment-text">
										<p class="meta">
											<span>name</span>
											<time datetime="2019-03-28T07:22:58+00:00">March 28, 2019</time>
										</p>
										<div class="description">
											<p>Pellentesque ultrices orci id justo vehicula, non aliquam erat lacinia
												Mam rem aperiam, eaque ipsa qua tore veritatis.</p>
										</div>
									</div>
									<!--a href="#" class="reply">Reply</a-->
								</div>
								<div class="comment_container">
									<div class="avatar-img">
										<img src="assets/image/blog/user2.png" alt="" class="img-fluid">
									</div>
									<div class="comment-text">
										<p class="meta">
											<span>name</span>
											<time datetime="2019-03-28T07:22:58+00:00">March 28, 2019</time>
										</p>
										<div class="description">
											<p>Pellentesque ultrices orci id justo vehicula, non aliquam erat lacinia
												Mam rem aperiam, eaque ipsa qua tore veritatis.</p>
										</div>
									</div>
									<!--a href="#" class="reply">Reply</a-->
								</div>
							</li>
						</ul><!--comments-->

						<div class="blog-comment-form">
							<div class="contact-form">
								<div id="respond" class="comment-respond">
									<span id="reply-title" class="comment-reply-title">Leave a Comment <small><a
												rel="nofollow" id="cancel-comment-reply-link" href="#"
												style="display:none;">Cancel reply</a></small>
									</span>
									<form method="post" id="commentform" class="comment-form">
										<div class="row">
											<div class="col-lg-6">
												<p class="comment-form-author">
													<label for="author"></label>
													<input placeholder="Full Name" id="author" name="author" type="text"
														value="" required="" />
												</p>
											</div>
											<div class="col-lg-6">
												<p class="comment-form-email">
													<label for="email"><i class="fa fa-envelope-open"></i></label>
													<input placeholder="Email id" id="email" name="email" type="email"
														value="" required="" />
												</p>
											</div>
											<div class="col-lg-12">
												<p class="comment-form-subject">
													<label for="subject"></label>
													<input placeholder="Subject" id="subject" name="subject" type="text"
														value="" required="" />
												</p>
											</div>
											<div class="col-lg-12">
												<p class="comment-form-comment">
													<label for="comment"></label>
													<textarea placeholder="Review" id="comment" name="comment" cols="45"
														rows="4" required=""></textarea>
												</p>
											</div>
										</div>
										<p class="form-submit">
											<input type="submit" cursor="pointer" class="submit butn1 butn-bg" href="#"
												value="Send Message">
										</p>
									</form>
								</div>
							</div>
						</div><!--/comment sec-->
					</div>
				</div>
			</div><!--/col-->
			<div class="col-sm-7 col-md-5 col-lg-4 col-xl-3">
				<aside class="sidebar right">
					<div class="item-eight">
						<div class="sec-title-one pb-one">
							<h6>latest blogs</h6>
						</div>
						<ul class="coming-event scside">
							<li>
								<div class="event-meta">
									<h4><a href="#">Basic Time Management Course.Basic Time Management Course</a></h4>
								</div>
								<p><i class="fa fa-bookmark" aria-hidden="true"></i>May 30, 2021</p>
							</li>
							<li>
								<div class="event-meta">
									<h4><a href="#">Basic Time Management Course.</a></h4>
								</div>
								<p><i class="fa fa-bookmark" aria-hidden="true"></i>May 30, 2021</p>
							</li>
							<li>
								<div class="event-meta">
									<h4><a href="#">Basic Time Management Course</a></h4>
								</div>
								<p><i class="fa fa-bookmark" aria-hidden="true"></i>May 30, 2021</p>
							</li>
						</ul><!--/coming-event-->
					</div>
					<div class="widget black-bg">
						<div class="newsletter-bg">
							<h4>Newsletter</h4>
							<p>Subscribe Our Newsletter and Get Updates.</p>
							<form>
								<div class="form-group">
									<input type="email" class="form-control" required="required"
										placeholder="Subscribe Email">
								</div>
								<button type="submit" class="btn">Subscribe Now</button>
							</form>
						</div>
					</div>
				</aside>
			</div>
		</div><!--row-->
	</div><!--/container-->
</section><!-- End Blog Section -->

<?php include('footer.php'); ?>
<script>
	$('.Show').click(function () {
		$('#target').show(200);
		$('.Show').hide(0);
		$('.Hide').show(0);
	});
	$('.Hide').click(function () {
		$('#target').hide(500);
		$('.Show').show(0);
		$('.Hide').hide(0);
	});
	$('.toggle').click(function () {
		$('#target').toggle('slow');
	});
</script><!--/show and hide comment sec-->
<script>
	function myFunction() {
		var dots = document.getElementById("dots");
		var moreText = document.getElementById("more");
		var btnText = document.getElementById("myBtn");

		if (dots.style.display === "none") {
			dots.style.display = "inline";
			btnText.innerHTML = "Read more";
			moreText.style.display = "none";
		} else {
			dots.style.display = "none";
			btnText.innerHTML = "Read less";
			moreText.style.display = "inline";
		}
	}
</script><!--read more-->