<?php

/**
 * The SoraSompengBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SoraSompengBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SoraSompengBlock extends AbstractBlock
{
    protected string $key = 'SoraSompeng';
    protected array $names = [
        'en' => 'Sora Sompeng',
        'de' => 'Sorang-Sompeng',
    ];
    protected int $blockStart = 0x110D0;
    protected int $blockEnd = 0x110FF;
    protected string $regex = '/[\x{110D0}-\x{110FF}]/u';
}