<?php

/**
 * The TirhutaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The TirhutaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class TirhutaBlock extends AbstractBlock
{
    protected string $key = 'Tirhuta';
    protected array $names = [
        'en' => 'Tirhuta',
        'de' => 'Tirhuta',
    ];
    protected int $blockStart = 0x11480;
    protected int $blockEnd = 0x114DF;
    protected string $regex = '/[\x{11480}-\x{114DF}]/u';
}