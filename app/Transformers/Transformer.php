<?php

namespace App\Transformers;

abstract class Transformer
{
    /**
     * Transform a collection of items
     *
     * @param array $items
     * @return array
     */
    public function transformCollection(array $items): array
    {
        return array_map([$this, 'transform'], $items);
    }

    /**
     * Transform a single item
     *
     * @param array $item
     * @return array
     */
    public abstract function transform(array $item): array;
}
