<?php

namespace zepi\Unicode\Block;

class MandaicBlock extends AbstractBlock
{
    protected string $key = 'Mandaic';
    protected array $names = [
        'en' => 'Mandaic',
        'de' => 'Mandäisch',
    ];
    protected int $blockStart = 0x0840;
    protected int $blockEnd = 0x085F;
    protected string $regex = '/[\x{0840}-\x{085F}]/u';
}