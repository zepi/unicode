<?php

namespace zepi\Unicode\Block;

class MahjongTilesBlock extends AbstractBlock
{
    protected string $key = 'MahjongTiles';
    protected array $names = [
        'en' => 'Mahjong Tiles',
        'de' => 'Mahjonggsteine',
    ];
    protected int $blockStart = 0x1F000;
    protected int $blockEnd = 0x1F02F;
    protected string $regex = '/[\x{1F000}-\x{1F02F}]/u';
}