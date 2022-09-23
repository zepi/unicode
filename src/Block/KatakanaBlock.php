<?php

/**
 * The KatakanaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The KatakanaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class KatakanaBlock extends AbstractBlock
{
    protected string $key = 'Katakana';
    protected array $names = [
        'en' => 'Katakana',
        'de' => 'Katakana',
    ];
    protected int $blockStart = 0x30A0;
    protected int $blockEnd = 0x30FF;
    protected string $regex = '/[\x{30A0}-\x{30FF}]/u';
}