<?php

/**
 * The SpecialsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SpecialsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SpecialsBlock extends AbstractBlock
{
    protected string $key = 'Specials';
    protected array $names = [
        'en' => 'Specials',
        'de' => 'Spezielles',
    ];
    protected int $blockStart = 0xFFF0;
    protected int $blockEnd = 0xFFFF;
    protected string $regex = '/[\x{FFF0}-\x{FFFF}]/u';
}