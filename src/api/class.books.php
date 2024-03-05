<?php
require __DIR__ . '/config.php';
// require __DIR__ . '/publicconfig.php';
class Book
{
    private $db;
    public $title = '';
    public $id = '';
    private $subtitle = '';
    private $author_firstname = '';
    private $author_lastname = '';
    private $publisher = '';
    private $year_published = '';
    private $genre = '';
    private $number_of_pages = '';
    private $language = '';
    private $status = '';
    private $image_URL = '';

    public function __construct(

        $title,
        $id,
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
    ) {

        $this->db = connectToDB();
        $this->id = $id;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->author_firstname = $author_firstname;
        $this->author_lastname = $author_lastname;
        $this->publisher = $publisher;
        $this->year_published = $year_published;
        $this->genre = $genre;
        $this->number_of_pages = $number_of_pages;
        $this->language = $language;
        $this->status = $status;
        $this->image_URL = $image_URL;
    }

    public function __destruct()
    {
    }

    public function getAllBooks()
    {
        $sql = "SELECT * FROM ID396978_oopbooks.books WHERE deleted=0";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function getBookById($id)
    {
        $sql = "SELECT * FROM ID396978_oopbooks.books WHERE id = :id AND deleted=0";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllIds()
    {
        $sql = "SELECT id FROM ID396978_oopbooks.books WHERE deleted=0";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getBookByTitel($title)
    {
        $sql = "SELECT * FROM ID396978_oopbooks.books WHERE title LIKE CONCAT('%', :title, '%') AND deleted=0";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['title' => $title]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getBookByAuthorFirstName($author_firstname)
    {
        $sql = "SELECT * FROM ID396978_oopbooks.books WHERE author_firstname LIKE CONCAT('%', :author_firstname, '%') AND deleted=0";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['author_firstname' => $author_firstname]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getBookByAuthorLastName($author_lastname)
    {
        $sql = "SELECT * FROM ID396978_oopbooks.books WHERE author_lastname LIKE CONCAT('%', :author_lastname, '%') AND deleted=0";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['author_lastname' => $author_lastname]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addBook(
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
    ) {
        $sql = "INSERT INTO ID396978_oopbooks.books 
        (title, subtitle, author_firstname, author_lastname, publisher, 
        year_published, genre, number_of_pages, language, status, image_URL)
        VALUES (:title, :subtitle, :author_firstname, :author_lastname, :publisher, 
        :year_published, :genre, :number_of_pages, :language, :status, :image_URL)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'title' => $title,
            'subtitle' => $subtitle,
            'author_firstname' => $author_firstname,
            'author_lastname' => $author_lastname,
            'publisher' => $publisher,
            'year_published' => $year_published,
            'genre' => $genre,
            'number_of_pages' => $number_of_pages,
            'language' => $language,
            'status' => $status,
            'image_URL' => $image_URL
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateBook(
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
    ) {
        $sql = 'UPDATE `ID396978_oopbooks`.`books`
        SET 
        title=:title,
        subtitle = :subtitle,
        author_firstname = :author_firstname,
        author_lastname = :author_lastname,
        publisher = :publisher,
        year_published = :year_published,
        genre = :genre,
        number_of_pages = :number_of_pages,
        language = :language,
        status = :status,
        image_URL = :image_URL
        WHERE id=:id';
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'id' => $id,
            'title' => $title,
            'subtitle' => $subtitle,
            'author_firstname' => $author_firstname,
            'author_lastname' => $author_lastname,
            'publisher' => $publisher,
            'year_published' => $year_published,
            'genre' => $genre,
            'number_of_pages' => $number_of_pages,
            'language' => $language,
            'status' => $status,
            'image_URL' => $image_URL
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteBookById($id)
    {
        $sql = "UPDATE `ID396978_oopbooks`.`books`
        SET deleted = 1 WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}