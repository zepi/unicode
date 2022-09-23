<?php

namespace zepi\Unicode\Block;

class PalmyreneBlock extends AbstractBlock
{
    protected string $key = 'Palmyrene';
    protected array $names = [
        'en' => 'Palmyrene',
        'de' => 'Palmyrenisch',
    ];
    protected int $blockStart = 0x10860;
    protected int $blockEnd = 0x1087F;
    protected string $regex = '/[\x{10860}-\x{1087F}]/u';
}