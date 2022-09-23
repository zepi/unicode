<?php

/**
 * The HatranBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The HatranBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class HatranBlock extends AbstractBlock
{
    protected string $key = 'Hatran';
    protected array $names = [
        'en' => 'Hatran',
        'de' => 'Hatra-Schrift',
    ];
    protected int $blockStart = 0x108E0;
    protected int $blockEnd = 0x108FF;
    protected string $regex = '/[\x{108E0}-\x{108FF}]/u';
}