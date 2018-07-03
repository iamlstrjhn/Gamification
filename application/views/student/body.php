<section class="body">
		<div class="container">

			<h5 style="font-weight: 300;color: white; padding: 0 10px;">Welcome, <?php 
                       if ($this->session->has_userdata('flag')) {
                         echo $this->session->userdata['flag']['firstName'];
                       }else{
                         echo $this->session->userdata['session']['firstName'];
                       }

                       ?>. Let's start!</h5>
			<div class="row">
				

				<div class="col s12 l4">
					<a href="<?php echo base_url('category') ?>">
						<div class="box">
							<div class="flex-card">
								<h6 class="h6-levels-custom">PLAY GAME</h6>&ensp;
								<p class="p-levels-custom">Click me if you're ready!</p>
							</div>
							
						</div>
					</a>
				</div>

				<div class="col s12 l4">
					<a href="<?php echo base_url('instruction') ?>">
						<div class="box">
							<div class="flex-card">
								<h6 class="h6-levels-custom">INSTRUCTIONS</h6>&ensp;
								<p class="p-levels-custom">Read more for mechanics!</p>
							</div>
							
						</div>
					</a>
				</div>

				<div class="col s12 l4">
					<a href="<?php echo base_url('leaderboard') ?>">
						<div class="box">
							<div class="flex-card">
								<h6 class="h6-levels-custom">LEADERBOARD</h6>&ensp;
								<p class="p-levels-custom">Check whose on the upper hand.</p>
							</div>
							
						</div>
					</a>
				</div>

			</div>
		</div>
	</section>