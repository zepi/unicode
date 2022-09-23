<?php

namespace zepi\Unicode\Block;

class SylotiNagriBlock extends AbstractBlock
{
    protected string $key = 'SylotiNagri';
    protected array $names = [
        'en' => 'Syloti Nagri',
        'de' => 'Syloti Nagri',
    ];
    protected int $blockStart = 0xA800;
    protected int $blockEnd = 0xA82F;
    protected string $regex = '/[\x{A800}-\x{A82F}]/u';
}