<?php

namespace Microblog\Core\Domain\Interfaces;

use Microblog\Core\Domain\Model\Post\Post;
use Microblog\Core\Domain\Model\Post\PostID;

interface IPostRepository
{
    public function find(PostID $tweet_id): Post;
    public function persist(Post $tweet);
    public function delete(Post $tweet);
}
