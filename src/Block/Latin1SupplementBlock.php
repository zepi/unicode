<?php

/**
 * The Latin1SupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The Latin1SupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class Latin1SupplementBlock extends AbstractBlock
{
    protected string $key = 'Latin1Supplement';
    protected array $names = [
        'en' => 'Latin-1 Supplement',
        'de' => 'Lateinisch-1, Ergänzung',
    ];
    protected int $blockStart = 0x0080;
    protected int $blockEnd = 0x00FF;
    protected string $regex = '/[\x{0080}-\x{00FF}]/u';
}