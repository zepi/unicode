<?php

namespace zepi\Unicode\Block;

class AvestanBlock extends AbstractBlock
{
    protected string $key = 'Avestan';
    protected array $names = [
        'en' => 'Avestan',
        'de' => 'Avestisch',
    ];
    protected int $blockStart = 0x10B00;
    protected int $blockEnd = 0x10B3F;
    protected string $regex = '/[\x{10B00}-\x{10B3F}]/u';
}