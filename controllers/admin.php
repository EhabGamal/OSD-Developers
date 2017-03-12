<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/11/17
 * Time: 2:01 PM
 */
require '../vendor/autoload.php';
require '../core/bootstrap.php';

$sections = Section::getSections();
foreach ($sections as $section){
    $section->forums = Forum::getForumsBySectionId($section->id);
    foreach ($section->forums as $forum) {
        $forum->threads = Thread::getOrderedThreadsByForumId($forum->id);
        foreach ($forum->threads as $thread){

            $thread->username = $thread->getOwnerUsername();
            $thread->replies = Reply::countRepliesByThreadId($thread->id);
        }
    }
}
$users = User::getAllUsersJoin();
$content=$_GET['content'];

require '../views/admin.php';
