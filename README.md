# My Bookcase API

## Database connection

- use the publicconfig.php file as a template to connect to your database.

- do not forget to put the
  require **DIR** . '/publicconfig.php'; out of comments.

- do not forget to put the
  require **DIR** . '/config.php'; in comments.

these two steps are necessary to use your own database.

## Local Setup

- make sure docker desktop is installed and running

- run dockercompose up -d

- your application should be ready at http://localhost:1111

## API endpoints

### GET method

- /books -> this endpoints provides all the books in the database.

- /book/ -> this endpoint provides all the information for one book to which you provided the id.

- /title/ -> this endpoint provides all the information for one book to which you provided the title.

- /firstname/ -> this endpoint provides all the information for the books written by the author to which you provided the first name.
  \*\* NOTE: when using this endpoint its not necessary to provide the complete first name you are able to search on even one letter to get all the books written by writers with that letter in their first name.

- /lastname/ -> this endpoint provides all the information for the books written by the author to which you provided the last name.
  \*\* NOTE: when using this endpoint its not necessary to provide the complete last name you are able to search on even one letter to get all the books written by writers with that letter in their last name.

### POST method

- /book/ -> This method allows you to add a new book to the library.

- Use the following format to provide data.
  { "title" : "title",
  "subtitle":"subtitle",
  "author_firstname":"author_firstname",
  "author_lastname":"author_lastname",
  "publisher":"publisher",
  "year_published":"year_published",
  "genre":"genre",
  "number_of_pages":"number_of_pages",
  "language":"language",
  "status":"status",
  "image_URL":"image_URL"}

- Title, Author first name and author last name are required.

- The publishing year is only allowed to have a numeric value with less then 5 numbers.

- The number of pages is only allowed to have a numeric value

- The status is only allowed to be numeric and under 3 as the number represents a value in the database 0=unread or 1=read or 2=currently reading.

### PUT method

- /book/ -> This method allows you to edit a book in the library with the id you provided.

  - Use the following format to edit data.
    { "title" : "title",
    "subtitle":"subtitle",
    "author_firstname":"author_firstname",
    "author_lastname":"author_lastname",
    "publisher":"publisher",
    "year_published":"year_published",
    "genre":"genre",
    "number_of_pages":"number_of_pages",
    "language":"language",
    "status":"status",
    "image_URL":"image_URL"}

  - Title, Author first name and author last name are required.

  - The publishing year is only allowed to have a numeric value with less then 5 numbers.

  - The number of pages is only allowed to have a numeric value

  - The status is only allowed to be numeric and under 3 as the number represents a value in the database 0=unread or 1=read or 2=currently reading.

### DELETE method

- /book/ -> This method allows you to delete a book in the library with the id you provided.

#### Please enjoy the api and let me know if you have any tips or tricks or adjustments
