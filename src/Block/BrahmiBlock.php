<?php

namespace zepi\Unicode\Block;

class BrahmiBlock extends AbstractBlock
{
    protected string $key = 'Brahmi';
    protected array $names = [
        'en' => 'Brahmi',
        'de' => 'Brahmi',
    ];
    protected int $blockStart = 0x11000;
    protected int $blockEnd = 0x1107F;
    protected string $regex = '/[\x{11000}-\x{1107F}]/u';
}