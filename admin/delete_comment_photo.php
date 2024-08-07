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
    $session->message("The comment {$comment->id} has been deleted");

    redirect('photo_comments.php?id={$comment->photo_id}');
} else {
    redirect('comments.php');
}