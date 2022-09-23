<?php

/**
 * The MahjongTilesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MahjongTilesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
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