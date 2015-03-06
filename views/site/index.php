<?php
/* @var $this yii\web\View */
$this->title = 'StationMap';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to StationMap!</h1>

        <p class="lead">Construction of the service is underway, please be patient, this is a project I am undertaking in my spare time while studying as an engineer.</p>
    </div>

    <div class="body-content">

        <div class="row text-center">
            <div class="col-lg-4">
                <h2>What is StationMap?</h2>

                <p>
				StationMap is an effort to bring HAM radio repeater and station location finding into the 21st century.
				<br>
				<br>
				I recently got into the hobby and have found other websites difficult to navigate and often display outdated information, StationMap is aimed at fixing that.
				<br>
				<br>
				The code behind the project is all open source, feel free to take a look or contribute on Git.
				</p>

                <p><a class="btn btn-default" href="https://github.com/jamesthoward/stationmap">Go to GitHub &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Support the project</h2>

                <p>
					Blood sweat and tears are going into the creation of StationMap, as well as countless hours of programming and development.
					<br>
					<br>
					If you are so inclined to support the project, you can buy me a beer by hitting the button bellow.
					<br>
					<br>
				</p>

				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
            </div>
            <div class="col-lg-4">
                <h2>Who is behind it?</h2>

                <p>
					<img src="http://bloxservers.com/images/james.png" class="img-circle" width="120px">
					<br>
					<br>
					My name is James, I am a Mechatronics Engineering student with an interest in web design and software development.
					<br>
					<br>
				</p>

                <p><a class="btn btn-default" href="mailto: jthoward.mech@gmail.com">Get in touch &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
