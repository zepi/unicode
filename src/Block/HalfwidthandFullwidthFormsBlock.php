<?php

namespace zepi\Unicode\Block;

class HalfwidthandFullwidthFormsBlock extends AbstractBlock
{
    protected string $key = 'HalfwidthandFullwidthForms';
    protected array $names = [
        'en' => 'Halfwidth and Fullwidth Forms',
        'de' => 'Halbbreite und vollbreite Formen',
    ];
    protected int $blockStart = 0xFF00;
    protected int $blockEnd = 0xFFEF;
    protected string $regex = '/[\x{FF00}-\x{FFEF}]/u';
}