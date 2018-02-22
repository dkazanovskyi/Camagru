
<div class="content">
	<div class="wrapper">
		<div class="row">
			<div class="col-6">
				<div class="camera-canvas">
					<video id="video" width="480" height="360" autoplay></video>
					<canvas id="canvas" width="480" height="360"></canvas>
				</div>
			</div>
			<div class="post-add col-6">
				<h3 class="file-h3">CHOSE PHOTO FROM FOLDER:</h3>
					<input class="post-add__file" type="file" name="file" id="file" accept=".png, .jpg, .jpeg">
					<h3 class="comment-h3">YOUR COMMENT:</h3>
					<textarea class="post-add__comment" style="resize:none;" name="desc" id="desc" cols="20" rows="3" maxlength="70"></textarea>
					<button class="post-add__snap" id="snap">Snap Photo</button>
			</div>
		</div>
	</div>
</div>

<div id="preview-bg" class="preview-bg">
	<div id="preview-bg__container" class="preview-bg__container">
	</div>

</div>

<script src="<?php echo ROOT_URL; ?>assets/js/app.js"></script>