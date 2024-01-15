// Main.php
include 'CMS.php';

$user1 = new User("john_doe", "john@example.com");
$user2 = new User("jane_smith", "jane@example.com");

$post1 = new Post("Introduction to PHP", "This is a PHP introduction.", $user1);
$post2 = new Post("PHP Best Practices", "Learn PHP best practices.", $user2);

$cms = new CMS();
$cms->addUser($user1);
$cms->addUser($user2);
$cms->addPost($post1);
$cms->addPost($post2);

$cms->displayUsers();
$cms->displayPosts();
