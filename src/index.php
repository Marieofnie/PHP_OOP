<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Marieke's library</title>
	<?php
	include("./cs.inc.php")
		?>
</head>

<body class="bg-red-600">
	<main>
		<h1>Marieke's library</h1>
		<p></p>
		<hr>
		<h2>GET method</h2>
		<p><strong>/api/books</strong> <br>This endpoints provides all the books in the database.</p>
		<p><strong>/api/book/<i>yourid</i></strong> <br>This endpoint provides all the information for one book to
			which you provided
			the id.
		</p>
		<p><strong>/api/title/<i>yourtitle</i></strong> <br>This endpoint provides all the information for one book to
			which
			you
			provided the
			title.</p>
		<p><strong>/api/firstname/<i>author's firstname</i></strong> <br>This endpoint provides all the information for
			the
			books
			written by
			the author to which you
			provided the first name.
		</p>
		<p class="note">When using this endpoint its not necessary to provide the complete first
			name you are able to
			search on even one letter to get all the books written by writers with that letter in their first
			name.</p>
		<p><strong>/api/lastname/<i>author's lastname</i></strong> <br>This endpoint provides all the information for
			the
			books
			written by
			the author to which you
			provided the last name.
		</p>
		<p class="note">When using this endpoint its not necessary to provide the complete last
			name you are able to
			search on even one letter to get all the books written by writers with that letter in their last
			name.</p>
		<h2>POST method</h2>
		<h2>PUT method</h2>
		<h2>Delete method</h2>
	</main>
</body>

</html>