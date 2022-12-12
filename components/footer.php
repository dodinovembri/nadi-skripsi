		<!-- Footer wrapper -->
		<footer class="footer-wrapper footer-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-sm-push-6 col-md-push-4 xs-box">
						<?php
							$counterfiles = ("counter.txt");
							$visit = file($counterfiles);
							$visit[0]++;
							$file = fopen($counterfiles, "w");
							fputs($file, "$visit[0]");
							fclose($file);
						?>
						<span style="color: #303236;"><?php echo $visit[0]; ?></span>
					</div>
					<div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-4">
						&copy; Nadi Skripsi. All Right Reserved.
					</div>
				</div>
			</div>
		</footer>