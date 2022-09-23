<?php

/**
 * The ThaanaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ThaanaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ThaanaBlock extends AbstractBlock
{
    protected string $key = 'Thaana';
    protected array $names = [
        'en' => 'Thaana',
        'de' => 'Thaana',
    ];
    protected int $blockStart = 0x0780;
    protected int $blockEnd = 0x07BF;
    protected string $regex = '/[\x{0780}-\x{07BF}]/u';
}