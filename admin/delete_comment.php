<?php include("includes/init.php");
if (!$session->is_signed_in()) {
    redirect("login.php");
}

if (empty($_GET['id'])) {
    redirect("comments.php");
}

$comment = Comment::find_by_id($_GET['id']);

if ($comment) {
    $comment->delete();
    $session->message("The comment with {$comment->id} user has been deleted");

    redirect('comments.php');
} else {
    redirect('comments.php');
}