<?php

namespace App\Transformers;

class LessonTransformer extends Transformer
{
    /**
     * Transform a single item
     *
     * @param array $lesson
     * @return array
     */
    public function transform(array $lesson): array
    {
        return [
            'title' => $lesson['title'],
            'body' => $lesson['body'],
            'active' => (bool) $lesson['some_bool'],
        ];
    }
}
