<?php

/**
 * The OldSouthArabianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The OldSouthArabianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class OldSouthArabianBlock extends AbstractBlock
{
    protected string $key = 'OldSouthArabian';
    protected array $names = [
        'en' => 'Old South Arabian',
        'de' => 'Altsüdarabisch',
    ];
    protected int $blockStart = 0x10A60;
    protected int $blockEnd = 0x10A7F;
    protected string $regex = '/[\x{10A60}-\x{10A7F}]/u';
}