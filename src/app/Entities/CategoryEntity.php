<?php

namespace App\Entities;

class CategoryEntity implements BaseEntity
{
    public function __construct(
        public int $id,
        public string $name,
        public string $createdAt
    )
    {
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'created_at' => $this->createdAt
        ];
    }

    public static function fromArray(array $data): self
    {
        return new CategoryEntity(
            id: $data['id'],
            name: $data['name'],
            createdAt: $data['created_at']
        );
    }
}
