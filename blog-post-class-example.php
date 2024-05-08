<?php

/**
 * This is an example BlogPost class for review and improvement.
 * The idea here is to identify how the code can be fixed and refactored to better align with PHP best practices. 
 */

class BlogPost
{
    private Author $author;
    private string $title;
    private string $content;
    private \DateTime $date;

    public function getData(): array
    {
        return [
            'author' => $this->author->fullName(),
            'title' => $this->title,
            'content' => $this->content,
            'timestamp' => $this->date->getTimestamp(),
        ];
    }
 
    public function printJson()
    {
        return json_encode($this->getData());
    }
 
    public function print_html(): string
    {
        return `<article>
                    <h1>{$this->$title}</h1>
                    <article>
                        <p>{$this->$date->format('Y-m-d H:i:s')}</p>
                        <p>{$this->$author->fullName()}</p>
                        <p>{$this->$content}</p>
                    </article>
                </article>`;
    }
}
