<?php

namespace App\Entities;

class CategoryEntity implements BaseEntity
{
    public function __construct(
        public string $name,
        public string $createdAt
    )
    {
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'created_at' => $this->createdAt
        ];
    }

    public static function fromArray(array $data): BaseEntity
    {
        return new CategoryEntity(
            name: $data['name'],
            createdAt: $data['created_at']
        );
    }
}
