<?php

namespace App\Entities;

use DateTime;

class BookEntity implements BaseEntity
{
    public function __construct(
        public int       $id,
        public int       $categoryId,
        public int       $authorId,
        public string    $title,
        public string    $description,
        public string    $price,
        public string    $numberPages,
        public string    $isbn,
        public ?DateTime $launch = null,
        public ?string   $summary = null,
    )
    {
    }

    public static function fromArray(array $data): self
    {
        return new BookEntity(
            id: $data['id'],
            categoryId: $data['category_id'],
            authorId: $data['author_id'],
            title: $data['title'],
            description: $data['description'],
            price: $data['price'],
            numberPages: $data['number_pages'],
            isbn: $data['isbn'],
            launch: $data['launch'] ? new DateTime($data['launch']) : null,
            summary: $data['summary']
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'category' => $this->category,
            'author' => $this->author,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'number_pages' => $this->numberPages,
            'isbn' => $this->isbn,
            'launch' => $this->launch,
            'summary' => $this->summary
        ];
    }
}
