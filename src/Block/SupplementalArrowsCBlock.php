<?php

namespace zepi\Unicode\Block;

class SupplementalArrowsCBlock extends AbstractBlock
{
    protected string $key = 'SupplementalArrowsC';
    protected array $names = [
        'en' => 'Supplemental Arrows-C',
        'de' => 'Zusätzliche Pfeile-C',
    ];
    protected int $blockStart = 0x1F800;
    protected int $blockEnd = 0x1F8FF;
    protected string $regex = '/[\x{1F800}-\x{1F8FF}]/u';
}