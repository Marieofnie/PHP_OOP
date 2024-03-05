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

<body class="font-mono bg-grey-500 text-pretty leading-normal p-10 text-slate-600">
	<main class="max-w-lg mx-auto bg-grey-800">
		<h1 class="text-4xl font-bold text-center mb-3">Marieke's library</h1>
		<p class="italic text-center mb-4 text-slate-400">Welcome to my library</p>
		<hr>
		<div>
			<h2 class="text-3xl font-bold mt-4">GET method</h2>
			<p class="text-slate-600"><span class="text-xl font-semibold mt-3">/api/books</span></p>
			<p>This endpoints provides all the books in
				the database.</p>
			<br>
			<p class="text-slate-600"><span class="text-xl font-semibold mt-3">/api/book/<i
						class="italic">yourid</i></span></p>
			<p>This
				endpoint
				provides all
				the
				information
				for one book to
				which you provided
				the id.</p>
			<br>
			<p class="text-slate-600"><span class="text-xl font-semibold mt-3">/api/title/<i
						class="italic">yourtitle</i></span></p>
			<p>This
				endpoint provides
				all
				the
				information for one book to
				which
				you
				provided the
				title.</p><br>
			<p class="text-slate-600"><span class="text-xl font-semibold mt-3">/api/firstname/<i class="italic">author's
						firstname</i></span>
			</p>
			<p>This
				endpoint
				provides
				all the information for
				the
				books
				written by
				the author to which you
				provided the first name.</p>

			<p class="text-sm italic text-slate-400">When using this endpoint its not necessary to provide the complete
				first
				name you are able to
				search on even one letter to get all the books written by writers with that letter in their first
				name.</p><br>
			<p class="text-slate-600"><span class="text-xl font-semibold mt-3">/api/lastname/<i class="italic">author's
						lastname</i></span>
			</p>
			<p>This endpoint
				provides all
				the information for
				the
				books
				written by
				the author to which you
				provided the last name.</p>

			<p class="text-sm italic text-slate-400">When using this endpoint its not necessary to provide the complete
				last
				name you are able to
				search on even one letter to get all the books written by writers with that letter in their last
				name.</p><br>
		</div>
		<div>
			<h2 class="text-3xl font-bold mt-4">POST method</h2>
			<p class="text-slate-600"><span class="text-xl font-semibold mt-3">/api/book</span></p>
			<p class="mb-1.5">This method allows you to add a new book to the library.</p>
			<p class="mb-1.5">Title, Author first name and author last name are required.</p>
			<p class="mb-1.5">The publishing year is only allowed to have a numeric value with less then 5 numbers.</p>
			<p class="mb-1.5">The number of pages is only allowed to have a numeric value</p>
			<p class="mb-1.5">The status is only allowed to be numeric and under 3 as the number represents a value in
				the database
				0=unread or 1=read or 2=currently reading.</p>
			<p class="mb-1.5">Use the following format to add data</p>
			<img class="mb-10" src="/img/jsonformat.png" alt="shows used format">
		</div>
		<div>
			<h2 class="text-3xl font-bold mt-4">PUT method</h2>
			<p class="text-slate-600"><span class="text-xl font-semibold mt-3">/api/book</span></p>
			<p class="mb-1.5">This method allows you to edit a book in the library with the id you provided.</p>
			<p class="mb-1.5">Title, Author first name and author last name are required.</p>
			<p class="mb-1.5">The publishing year is only allowed to have a numeric value with less then 5 numbers.</p>
			<p class="mb-1.5">The number of pages is only allowed to have a numeric value</p>
			<p class="mb-1.5">The status is only allowed to be numeric and under 3 as the number represents a value in
				the database
				0=unread or 1=read or 2=currently reading.</p>
			<p class="mb-1.5">Use the following format to edit data</p>
			<img class="mb-10" src="/img/jsonformat.png" alt="shows used format">
		</div>
		<div>
			<h2 class="text-3xl font-bold mt-4">Delete method</h2>
			<p class="text-slate-600"><span class="text-xl font-semibold mt-3">/api/book/<i
						class="italic">yourid</i></span></p>
			<p>This method allows you to delete a book in the library with the id you provided.</p>
		</div>
	</main>
</body>

</html>