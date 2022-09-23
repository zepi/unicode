<?php

namespace zepi\Unicode\Block;

class KannadaBlock extends AbstractBlock
{
    protected string $key = 'Kannada';
    protected array $names = [
        'en' => 'Kannada',
        'de' => 'Kannada',
    ];
    protected int $blockStart = 0x0C80;
    protected int $blockEnd = 0x0CFF;
    protected string $regex = '/[\x{0C80}-\x{0CFF}]/u';
}