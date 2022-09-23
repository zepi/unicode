<?php

/**
 * The TibetanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The TibetanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class TibetanBlock extends AbstractBlock
{
    protected string $key = 'Tibetan';
    protected array $names = [
        'en' => 'Tibetan',
        'de' => 'Tibetisch',
    ];
    protected int $blockStart = 0x0F00;
    protected int $blockEnd = 0x0FFF;
    protected string $regex = '/[\x{0F00}-\x{0FFF}]/u';
}