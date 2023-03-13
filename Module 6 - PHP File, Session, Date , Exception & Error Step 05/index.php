<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./style.css">
    <title>Assignment-6</title>
    <style>
    .get-in-touch {
	max-width: 800px;
	margin: 50px auto;
	position: relative;
	}

	.get-in-touch .title {
	text-align: center;
	text-transform: uppercase;
	letter-spacing: 3px;
	font-size: 3.2em;
	line-height: 48px;
	padding-bottom: 48px;
		color: #5543ca;
		background: #5543ca;
		background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
		background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
		background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
		-webkit-background-clip: text !important;
		-webkit-text-fill-color: transparent !important;
	}

	.contact-form .form-field {
	position: relative;
	margin: 32px 0;
	}

	.contact-form .input-text {
	display: block;
	width: 100%;
	height: 36px;
	border-width: 0 0 2px 0;
	border-color: #5543ca;
	font-size: 18px;
	line-height: 26px;
	font-weight: 400;
	}

	.contact-form .input-text:focus {
	outline: none;
	}

	.contact-form .input-text:focus + .label,
	.contact-form .input-text.not-empty + .label {
	-webkit-transform: translateY(-24px);
			transform: translateY(-24px);
	}

	.contact-form .label {
	position: absolute;
	left: 20px;
	bottom: 11px;
	font-size: 18px;
	line-height: 26px;
	font-weight: 400;
	color: #5543ca;
	cursor: text;
	transition: -webkit-transform .2s ease-in-out;
	transition: transform .2s ease-in-out;
	transition: transform .2s ease-in-out,
	-webkit-transform .2s ease-in-out;
	}

	.contact-form .submit-btn {
	display: inline-block;
	background-color: #000;
	background-image: linear-gradient(125deg,#a72879,#064497);
	color: #fff;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-size: 16px;
	padding: 8px 16px;
	border: none;
	width:200px;
	cursor: pointer;
	}

    .submit-btn {
	display: inline-block;
	background-color: #000;
	background-image: linear-gradient(125deg,#a72879,#064497);
	color: #fff;
	text-transform: uppercase;
	letter-spacing: 2px;
	font-size: 16px;
	padding: 8px 16px;
	border: none;
	width:200px;
	cursor: pointer;
	}

	.error {color: #FF0000;}

	.success {color: green;}

    </style>
</head>
<body>
    <section class="get-in-touch">
        <h1 class="title">Register</h1>

        <form class="contact-form row" action="process.php" method="POST" enctype="multipart/form-data">

            <div class="form-field col-lg-6">
                <input id="name" name="name" class="input-text js-input" type="text">
                <label class="label" for="name">Name</label>
            </div>

            <div class="form-field col-lg-6 ">
                <input id="email" name="email" class="input-text js-input" type="email">
                <label class="label" for="email">E-mail</label>
            </div>

            <div class="form-field col-lg-12">
                <input id="password" name="password" class="input-text js-input" type="password">
                <label class="label" for="password">Password</label>
            </div>

            <div class="form-field col-lg-12">
                <label class="label mb-5" for="profile_pic">Profile Picture</label>
                <input id="profile_pic" name="profile_pic" class="input-text js-input mt-5" type="file">
            </div>

            <div class="form-field col-lg-12">
                <input class="submit-btn" type="submit" value="Submit">
            </div>
        </form>

        <a href="userlist.php"><input type="button" class="submit-btn ms-5" value="See All Users"></a>
    </section>

</body>
</html>

