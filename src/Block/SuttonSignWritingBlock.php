<?php

namespace zepi\Unicode\Block;

class SuttonSignWritingBlock extends AbstractBlock
{
    protected string $key = 'SuttonSignWriting';
    protected array $names = [
        'en' => 'Sutton SignWriting',
        'de' => 'Sutton-SignWriting',
    ];
    protected int $blockStart = 0x1D800;
    protected int $blockEnd = 0x1DAAF;
    protected string $regex = '/[\x{1D800}-\x{1DAAF}]/u';
}