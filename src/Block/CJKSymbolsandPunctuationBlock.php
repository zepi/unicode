<?php

/**
 * The CJKSymbolsandPunctuationBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CJKSymbolsandPunctuationBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CJKSymbolsandPunctuationBlock extends AbstractBlock
{
    protected string $key = 'CJKSymbolsandPunctuation';
    protected array $names = [
        'en' => 'CJK Symbols and Punctuation',
        'de' => 'CJK-Symbole und -Interpunktion',
    ];
    protected int $blockStart = 0x3000;
    protected int $blockEnd = 0x303F;
    protected string $regex = '/[\x{3000}-\x{303F}]/u';
}