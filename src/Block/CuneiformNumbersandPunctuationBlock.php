<?php

/**
 * The CuneiformNumbersandPunctuationBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CuneiformNumbersandPunctuationBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CuneiformNumbersandPunctuationBlock extends AbstractBlock
{
    protected string $key = 'CuneiformNumbersandPunctuation';
    protected array $names = [
        'en' => 'Cuneiform Numbers and Punctuation',
        'de' => 'Keilschrift-Zahlzeichen und -Interpunktion',
    ];
    protected int $blockStart = 0x12400;
    protected int $blockEnd = 0x1247F;
    protected string $regex = '/[\x{12400}-\x{1247F}]/u';
}