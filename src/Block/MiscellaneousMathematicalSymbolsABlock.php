<?php

/**
 * The MiscellaneousMathematicalSymbolsABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MiscellaneousMathematicalSymbolsABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MiscellaneousMathematicalSymbolsABlock extends AbstractBlock
{
    protected string $key = 'MiscellaneousMathematicalSymbolsA';
    protected array $names = [
        'en' => 'Miscellaneous Mathematical Symbols-A',
        'de' => 'Verschiedene mathematische Symbole-A',
    ];
    protected int $blockStart = 0x27C0;
    protected int $blockEnd = 0x27EF;
    protected string $regex = '/[\x{27C0}-\x{27EF}]/u';
}