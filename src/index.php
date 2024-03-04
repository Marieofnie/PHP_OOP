<?php
require 'api/class.books.php';

header('Content-Type: application/json');

$book = new Book(
    'title',
    'id',
    'subtitle',
    'author_firstname',
    'author_lastname',
    'publisher',
    'year_published',
    'genre',
    'number_of_pages',
    'language',
    'status',
    'image_URL'
);
$idValues = array_column(($book->getAllIds()), 'id');

$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':
        $book = new Book(
            'title',
            'id',
            'subtitle',
            'author_firstname',
            'author_lastname',
            'publisher',
            'year_published',
            'genre',
            'number_of_pages',
            'language',
            'status',
            'image_URL'
        );
        if (isset($_GET['books'])) {
            $data = $book->getAllBooks();
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(($data));
        }
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (!in_array($id, $idValues)) {
                echo "This id does not exist";
            } else {
                $data = $book->getBookById($id);
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode(($data));
            }
        }
        if (isset($_GET['title'])) {
            $title = $_GET['title'];
            $data = $book->getBookByTitel($title);
            header('Content-Type: application/json; charset=utf-8');
            if ($data !== []) {
                echo json_encode(($data));
            } else {
                echo 'Title not found';
            }
        }
        if (isset($_GET['author_firstname'])) {
            $author_firstname = $_GET['author_firstname'];
            $data = $book->getBookByAuthorFirstName($author_firstname);
            header('Content-Type: application/json; charset=utf-8');
            if ($data !== []) {
                echo json_encode(($data));
            } else {
                echo 'Author not found';
            }
        }
        if (isset($_GET['author_lastname'])) {
            $author_firstname = $_GET['author_lastname'];
            $data = $book->getBookByAuthorLastName($author_lastname);
            header('Content-Type: application/json; charset=utf-8');
            if ($data !== []) {
                echo json_encode(($data));
            } else {
                echo 'Author not found';
            }
        }
        break;
    case 'POST':
        $book = new Book(
            'title',
            'id',
            'subtitle',
            'author_firstname',
            'author_lastname',
            'publisher',
            'year_published',
            'genre',
            'number_of_pages',
            'language',
            'status',
            'image_URL'
        );

        $data = json_decode(file_get_contents('php://input'), true);
        $title = $data['title'];
        $subtitle = $data['subtitle'];
        $author_firstname = $data['author_firstname'];
        $author_lastname = $data['author_lastname'];
        $publisher = $data['publisher'];
        $year_published = $data['year_published'];
        $genre = $data['genre'];
        $number_of_pages = $data['number_of_pages'];
        $language = $data['language'];
        $status = $data['status'];
        $image_URL = $data['image_URL'];

        if ($title !== '') {
            if ($author_firstname !== '') {
                if ($author_lastname !== '') {
                    if ((!is_int($year_published)) && ($year_published !== "")) {
                        echo "The publishing year should only contain numbers";
                    } else {
                        if ((strlen((string) $year_published) > 4) && ($year_published !== "")) {
                            echo "The publishing year should only contain 4 numbers";
                        } else {
                            if ((!is_numeric($number_of_pages)) && ($number_of_pages !== "")) {
                                echo "The number of pages should only contain numbers";
                            } else {
                                if ($status === "") {
                                    $status = 0;
                                }
                                if (!is_int($status)) {
                                    echo "The status should have a numeric value";
                                } else {
                                    if (($status) > 3) {
                                        echo "The status should have a value of 1=unread or 2=read or 3=currently reading";
                                    } else {
                                        $book->addBook(
                                            $title,
                                            $subtitle,
                                            $author_firstname,
                                            $author_lastname,
                                            $publisher,
                                            $year_published,
                                            $genre,
                                            $number_of_pages,
                                            $language,
                                            $status,
                                            $image_URL
                                        );
                                        echo json_encode(['message' => 'Book added successfully'])
                                        ;
                                    }
                                }
                            }
                        }
                    }
                } else {
                    echo "Add the author's last name";
                }
            } else {
                echo "Add the author's first name";
            }
        } else {
            echo 'Add a title';
        }


        break;
    case 'PUT':
        $book = new Book(
            'title',
            'id',
            'subtitle',
            'author_firstname',
            'author_lastname',
            'publisher',
            'year_published',
            'genre',
            'number_of_pages',
            'language',
            'status',
            'image_URL'
        );

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (!in_array($id, $idValues)) {
                echo "This id does not exist";
            } else {
                $data = json_decode(file_get_contents('php://input'), true);
                $title = $data['title'];
                $subtitle = $data['subtitle'];
                $author_firstname = $data['author_firstname'];
                $author_lastname = $data['author_lastname'];
                $publisher = $data['publisher'];
                $year_published = $data['year_published'];
                $genre = $data['genre'];
                $number_of_pages = $data['number_of_pages'];
                $language = $data['language'];
                $status = $data['status'];
                $image_URL = $data['image_URL'];

                if ($title !== '') {
                    if ($author_firstname !== '') {
                        if ($author_lastname !== '') {
                            if ((!is_int($year_published)) && ($year_published !== "")) {
                                echo "The publishing year should only contain numbers";
                            } else {
                                if ((strlen((string) $year_published) > 4) && ($year_published !== "")) {
                                    echo "The publishing year should only contain 4 numbers";
                                } else {
                                    if ((!is_numeric($number_of_pages)) && ($number_of_pages !== "")) {
                                        echo "The number of pages should only contain numbers";
                                    } else {
                                        if ($status === "") {
                                            $status = 0;
                                        }
                                        if (!is_int($status)) {
                                            echo "The status should have a numeric value";
                                        } else {
                                            if (($status) > 3) {
                                                echo "The status should have a value of 1=unread or 2=read or 3=currently reading";
                                            } else {
                                                $book->updateBook(
                                                    $id,
                                                    $title,
                                                    $subtitle,
                                                    $author_firstname,
                                                    $author_lastname,
                                                    $publisher,
                                                    $year_published,
                                                    $genre,
                                                    $number_of_pages,
                                                    $language,
                                                    $status,
                                                    $image_URL
                                                );
                                                echo json_encode(['message' => 'Book updated successfully'])
                                                ;
                                            }
                                        }
                                    }
                                }
                            }
                        } else {
                            echo "Add the author's last name";
                        }
                    } else {
                        echo "Add the author's first name";
                    }
                } else {
                    echo 'Add a title';
                }
            }
        }
        break;
    case 'DELETE':
        $book = new Book(
            'title',
            'id',
            'subtitle',
            'author_firstname',
            'author_lastname',
            'publisher',
            'year_published',
            'genre',
            'number_of_pages',
            'language',
            'status',
            'image_URL'
        );
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (!in_array($id, $idValues)) {
                echo "This id does not exist";
            } else {
                $book->deleteBookById($id);
                echo json_encode(['message' => 'Book deleted successfully']);
            }
        }
        break;
    default:
        // Invalid method
        http_response_code(405);
        echo json_encode(['error' => 'Method not allowed']);
        break;
}
