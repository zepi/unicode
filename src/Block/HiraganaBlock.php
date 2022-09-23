<?php

/**
 * The HiraganaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The HiraganaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class HiraganaBlock extends AbstractBlock
{
    protected string $key = 'Hiragana';
    protected array $names = [
        'en' => 'Hiragana',
        'de' => 'Hiragana',
    ];
    protected int $blockStart = 0x3040;
    protected int $blockEnd = 0x309F;
    protected string $regex = '/[\x{3040}-\x{309F}]/u';
}