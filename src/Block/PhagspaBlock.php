<?php

namespace zepi\Unicode\Block;

class PhagspaBlock extends AbstractBlock
{
    protected string $key = 'Phagspa';
    protected array $names = [
        'en' => 'Phags-pa',
        'de' => 'Phagspa',
    ];
    protected int $blockStart = 0xA840;
    protected int $blockEnd = 0xA87F;
    protected string $regex = '/[\x{A840}-\x{A87F}]/u';
}