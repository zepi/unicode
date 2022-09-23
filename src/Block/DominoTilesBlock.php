<?php

/**
 * The DominoTilesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The DominoTilesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
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