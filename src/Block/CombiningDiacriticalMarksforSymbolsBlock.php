<?php

/**
 * The CombiningDiacriticalMarksforSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CombiningDiacriticalMarksforSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CombiningDiacriticalMarksforSymbolsBlock extends AbstractBlock
{
    protected string $key = 'CombiningDiacriticalMarksforSymbols';
    protected array $names = [
        'en' => 'Combining Diacritical Marks for Symbols',
        'de' => 'Komb. diakr. Zeichen für Symbole',
    ];
    protected int $blockStart = 0x20D0;
    protected int $blockEnd = 0x20FF;
    protected string $regex = '/[\x{20D0}-\x{20FF}]/u';
}