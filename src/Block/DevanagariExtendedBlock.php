<?php

/**
 * The DevanagariExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The DevanagariExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class DevanagariExtendedBlock extends AbstractBlock
{
    protected string $key = 'DevanagariExtended';
    protected array $names = [
        'en' => 'Devanagari Extended',
        'de' => 'Devanagari, erweitert',
    ];
    protected int $blockStart = 0xA8E0;
    protected int $blockEnd = 0xA8FF;
    protected string $regex = '/[\x{A8E0}-\x{A8FF}]/u';
}