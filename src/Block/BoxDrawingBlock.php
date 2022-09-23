<?php

namespace zepi\Unicode\Block;

class BoxDrawingBlock extends AbstractBlock
{
    protected string $key = 'BoxDrawing';
    protected array $names = [
        'en' => 'Box Drawing',
        'de' => 'Rahmenzeichnung',
    ];
    protected int $blockStart = 0x2500;
    protected int $blockEnd = 0x257F;
    protected string $regex = '/[\x{2500}-\x{257F}]/u';
}