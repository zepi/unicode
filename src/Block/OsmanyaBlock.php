<?php

/**
 * The OsmanyaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The OsmanyaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class OsmanyaBlock extends AbstractBlock
{
    protected string $key = 'Osmanya';
    protected array $names = [
        'en' => 'Osmanya',
        'de' => 'Osmaniya',
    ];
    protected int $blockStart = 0x10480;
    protected int $blockEnd = 0x104AF;
    protected string $regex = '/[\x{10480}-\x{104AF}]/u';
}