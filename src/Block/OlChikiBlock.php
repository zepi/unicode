<?php

namespace zepi\Unicode\Block;

class OlChikiBlock extends AbstractBlock
{
    protected string $key = 'OlChiki';
    protected array $names = [
        'en' => 'Ol Chiki',
        'de' => 'Ol Chiki',
    ];
    protected int $blockStart = 0x1C50;
    protected int $blockEnd = 0x1C7F;
    protected string $regex = '/[\x{1C50}-\x{1C7F}]/u';
}