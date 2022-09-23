<?php

/**
 * The RunicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The RunicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class RunicBlock extends AbstractBlock
{
    protected string $key = 'Runic';
    protected array $names = [
        'en' => 'Runic',
        'de' => 'Runen',
    ];
    protected int $blockStart = 0x16A0;
    protected int $blockEnd = 0x16FF;
    protected string $regex = '/[\x{16A0}-\x{16FF}]/u';
}