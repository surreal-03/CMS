// Post.php
class Post {
    private $title;
    private $content;
    private $author;

    public function __construct($title, $content, $author) {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function displayPost() {
        echo "Title: {$this->title}\n";
        echo "Content: {$this->content}\n";
        echo "Author: {$this->author->getUsername()}\n\n";
    }
}
