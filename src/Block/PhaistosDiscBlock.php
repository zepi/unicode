<?php

/**
 * The PhaistosDiscBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The PhaistosDiscBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class PhaistosDiscBlock extends AbstractBlock
{
    protected string $key = 'PhaistosDisc';
    protected array $names = [
        'en' => 'Phaistos Disc',
        'de' => 'Diskos von Phaistos',
    ];
    protected int $blockStart = 0x101D0;
    protected int $blockEnd = 0x101FF;
    protected string $regex = '/[\x{101D0}-\x{101FF}]/u';
}