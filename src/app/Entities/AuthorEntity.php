<?php

namespace App\Entities;

class AuthorEntity implements BaseEntity
{
    public function __construct(
        public string $name,
        public string $email,
        public string $description,
        public string $createdAt
    ) {
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'description' => $this->description,
            'created_at' => $this->createdAt
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'],
            email: $data['email'],
            description: $data['description'],
            createdAt: $data['created_at'],
        );
    }
}
