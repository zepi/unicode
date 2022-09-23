<?php

namespace zepi\Unicode\Block;

class AlphabeticPresentationFormsBlock extends AbstractBlock
{
    protected string $key = 'AlphabeticPresentationForms';
    protected array $names = [
        'en' => 'Alphabetic Presentation Forms',
        'de' => 'Alphabetische Präsentationsformen',
    ];
    protected int $blockStart = 0xFB00;
    protected int $blockEnd = 0xFB4F;
    protected string $regex = '/[\x{FB00}-\x{FB4F}]/u';
}