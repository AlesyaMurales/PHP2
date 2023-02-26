<?php

namespace GeekBrains\LevelTwo\Blog;

class Comment

{

    public function __construct(
        private int $id,
        private User $user,
        private Post $post,
        private string $text
    )
    {
    }
    public function id(): int 
    {
        return $this->id;
    }

    public function setId(int $id): void 
    {
        $this->id = $id;
    }

    public function getUser(): User 
    {
        return $this->user;
    }

    public function setUser(User $user): void 
    {
        $this->user = $user;
    }
    public function getText(): string 
    {
        return $this->text;
    }

    public function getPost(): Post 
    {
        return $this->post;
    }

    public function setPost(Post $post): void 
    {
        $this->post = $post;
    }

    public function setText(string $text): void 
    {
        $this->text = $text;
    }

    public function __toString()
    {
        return $this->user . ' пишет Комментарий: ' . $this->text  . PHP_EOL;
    }

}