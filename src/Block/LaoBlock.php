<?php

namespace zepi\Unicode\Block;

class LaoBlock extends AbstractBlock
{
    protected string $key = 'Lao';
    protected array $names = [
        'en' => 'Lao',
        'de' => 'Laotisch',
    ];
    protected int $blockStart = 0x0E80;
    protected int $blockEnd = 0x0EFF;
    protected string $regex = '/[\x{0E80}-\x{0EFF}]/u';
}