<?php

namespace zepi\Unicode\Block;

class DominoTilesBlock extends AbstractBlock
{
    protected string $key = 'DominoTiles';
    protected array $names = [
        'en' => 'Domino Tiles',
        'de' => 'Dominosteine',
    ];
    protected int $blockStart = 0x1F030;
    protected int $blockEnd = 0x1F09F;
    protected string $regex = '/[\x{1F030}-\x{1F09F}]/u';
}