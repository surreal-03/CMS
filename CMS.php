// CMS.php
include 'User.php';
include 'Post.php';

class CMS {
    private $users = [];
    private $posts = [];

    public function addUser(User $user) {
        $this->users[] = $user;
    }

    public function addPost(Post $post) {
        $this->posts[] = $post;
    }

    public function displayUsers() {
        echo "Users:\n";
        foreach ($this->users as $user) {
            echo "Username: {$user->getUsername()}, Email: {$user->getEmail()}\n";
        }
        echo "\n";
    }

    public function displayPosts() {
        echo "Posts:\n";
        foreach ($this->posts as $post) {
            $post->displayPost();
        }
    }
}
