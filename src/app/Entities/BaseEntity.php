<?php

namespace App\Entities;

interface BaseEntity
{
    public function toArray(): array;
    public static function fromArray(array $data): self;
}
