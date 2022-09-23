<?php

/**
 * The HangulSyllablesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The HangulSyllablesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class HangulSyllablesBlock extends AbstractBlock
{
    protected string $key = 'HangulSyllables';
    protected array $names = [
        'en' => 'Hangul Syllables',
        'de' => 'Hangeul-Silbenzeichen',
    ];
    protected int $blockStart = 0xAC00;
    protected int $blockEnd = 0xD7AF;
    protected string $regex = '/[\x{AC00}-\x{D7AF}]/u';
}