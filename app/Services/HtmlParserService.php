<?php

namespace App\Services;

use DOMDocument;
use Illuminate\Support\Str;

class HtmlParserService
{
    public function parseAndLimitParagraph($html, $limit)
    {
        $dom = new DOMDocument();
        $dom->loadHTML($html);

        $paragraphs = $dom->getElementsByTagName('p');

        foreach ($paragraphs as $paragraph) {
            $content = Str::limit($paragraph->textContent, $limit);
            $paragraph->textContent = $content;
        }

        return $dom->saveHTML();
    }
}
