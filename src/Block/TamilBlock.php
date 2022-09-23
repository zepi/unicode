<?php

namespace zepi\Unicode\Block;

class TamilBlock extends AbstractBlock
{
    protected string $key = 'Tamil';
    protected array $names = [
        'en' => 'Tamil',
        'de' => 'Tamilisch',
    ];
    protected int $blockStart = 0x0B80;
    protected int $blockEnd = 0x0BFF;
    protected string $regex = '/[\x{0B80}-\x{0BFF}]/u';
}