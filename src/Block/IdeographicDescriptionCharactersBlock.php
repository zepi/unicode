<?php

namespace zepi\Unicode\Block;

class IdeographicDescriptionCharactersBlock extends AbstractBlock
{
    protected string $key = 'IdeographicDescriptionCharacters';
    protected array $names = [
        'en' => 'Ideographic Description Characters',
        'de' => 'Ideographische Beschreibungszeichen',
    ];
    protected int $blockStart = 0x2FF0;
    protected int $blockEnd = 0x2FFF;
    protected string $regex = '/[\x{2FF0}-\x{2FFF}]/u';
}