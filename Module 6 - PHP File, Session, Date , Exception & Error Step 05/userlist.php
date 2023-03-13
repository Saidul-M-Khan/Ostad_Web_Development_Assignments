<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>All Users</title>
	<style>
		.table {
				overflow: hidden;
				border-radius: 3px;
				-webkit-box-shadow: 0 1px 6px 0 rgba(0,0,0,.12), 0 1px 6px 0 rgba(0,0,0,.12);
				-moz-box-shadow: 0 1px 6px 0 rgba(0,0,0,.12), 0 1px 6px 0 rgba(0,0,0,.12);
				box-shadow: 0 1px 6px 0 rgba(0,0,0,.12), 0 1px 6px 0 rgba(0,0,0,.12);
			}

			.table > thead > tr > th {
				border-bottom-color: #EEEEEE;
			}

			.table > tbody > tr > td,
			.table > tbody > tr > th,
			.table > thead > tr > td,
			.table > thead > tr > th {
				padding: 15px;
				background-color: #fff;
				border-top-color: #EEEEEE;
			}

			.table > tbody > tr:hover > td {
				background-color: #FAFAFA;
			}

			@media (max-width: 767px) {
				.table-no-more,
				.table-no-more > thead,
				.table-no-more > thead > tr,
				.table-no-more > thead > tr > th,
				.table-no-more > tbody,
				.table-no-more > tbody > tr,
				.table-no-more > tbody > tr > td {
					display: block;
				}

				.table-no-more > thead {
					position: absolute;
					top: -9999px;
					left: -9999px;
					opacity: 0;
				}

				.table-no-more > tbody > tr > td {
					position: relative;
					padding-left: 45%;
				}

				.table-no-more > tbody > tr:nth-child(even) > td {
					background-color: #ffffff;
				}

				.table-no-more > tbody > tr:nth-child(odd) > td {
					background-color: #FAFAFA;
				}

				.table-no-more > tbody > tr > td:before {
					position: absolute;
					top: 15px;
					left: 5%;
					width: 40%;
					white-space: nowrap;
					font-weight: bold;
				}

				.table-no-more > tbody > tr > td:after {
					content: "";
					position: absolute;
					top: 0;
					left: 0;
					width: 40%;
					height: 100%;
					border-right: 1px solid #EEEEEE;
				}

				.table-no-more > tbody > tr > td:nth-of-type(1):before {content: "#";}
				.table-no-more > tbody > tr > td:nth-of-type(2):before {content: "First Name";}
				.table-no-more > tbody > tr > td:nth-of-type(3):before {content: "Last Name";}
			}

		body {
			background-color: #9575CD;
		}

		.demo {
			padding-top: 60px;
			padding-bottom: 110px;
		}

		img {
			max-width: 100px;
			height: auto;
			display: block;
			margin: 0 auto;
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
		width:225px;
		cursor: pointer;
		}

	</style>
</head>
<body>
<div class="container demo">

<h2 class="text-white align-center">Users</h2>

	<table class="table table-no-more">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Profile Picture</th>
			</tr>
		</thead>
		<tbody>
			<?php
                $file = fopen( 'users.csv', 'r' );

                while (  ( $data = fgetcsv( $file ) ) !== false ) {
                    echo '<tr>';
                    echo '<td>' . $data[0] . '</td>';
                    echo '<td>' . $data[1] . '</td>';
                    echo '<td><img src="uploads/' . $data[2] . '"></td>';
                    echo '</tr>';
                }

                fclose( $file );
            ?>
		</tbody>
	</table>
</div>

<a href="index.php"><input type="button" class="submit-btn ms-5" value="Go To Registration"></a>


</body>
</html>
