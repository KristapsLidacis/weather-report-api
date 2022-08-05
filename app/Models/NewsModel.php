<?php

namespace App\Models;

class NewsModel
{
    private ?string $source;
    private ?string $title;
    private ?string $author;
    private ?string $description;
    private ?string $url;
    private ?string $imageUrl;
    private ?string $publishedTime;

    public function __construct(?string $source, ?string $title, ?string $author, ?string $description, ?string $url,
                                ?string $imageUrl, ?string $publishedTime)
    {
        $this->source = $source;
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
        $this->url = $url;
        $this->imageUrl = $imageUrl;
        $this->publishedTime = $publishedTime;
    }

    public function getAuthor(): ?string
    {
        return $this->author != null ? $this->author : ' ';
    }

    public function getDescription(): ?string
    {
        return $this->description != null ? $this->description : ' ';
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl != null ? $this->imageUrl : ' ';
    }

    public function getPublishedTime(): ?string
    {
        return $this->publishedTime != null ? $this->publishedTime : ' ';
    }

    public function getTitle(): ?string
    {
        return $this->title != null ? $this->title : ' ';
    }

    public function getUrl(): ?string
    {
        return $this->url != null ? $this->url : ' ';
    }

    public function getSource(): ?string
    {
        return $this->source != null ? $this->source : ' ';
    }
}