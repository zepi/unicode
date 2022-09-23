<?php

/**
 * The YiSyllablesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The YiSyllablesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class YiSyllablesBlock extends AbstractBlock
{
    protected string $key = 'YiSyllables';
    protected array $names = [
        'en' => 'Yi Syllables',
        'de' => 'Yi-Silbenzeichen',
    ];
    protected int $blockStart = 0xA000;
    protected int $blockEnd = 0xA48F;
    protected string $regex = '/[\x{A000}-\x{A48F}]/u';
}