<?php

namespace zepi\Unicode\Block;

class SaurashtraBlock extends AbstractBlock
{
    protected string $key = 'Saurashtra';
    protected array $names = [
        'en' => 'Saurashtra',
        'de' => 'Saurashtra',
    ];
    protected int $blockStart = 0xA880;
    protected int $blockEnd = 0xA8DF;
    protected string $regex = '/[\x{A880}-\x{A8DF}]/u';
}