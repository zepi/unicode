<?php

/**
 * The MiscellaneousMathematicalSymbolsBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MiscellaneousMathematicalSymbolsBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MiscellaneousMathematicalSymbolsBBlock extends AbstractBlock
{
    protected string $key = 'MiscellaneousMathematicalSymbolsB';
    protected array $names = [
        'en' => 'Miscellaneous Mathematical Symbols-B',
        'de' => 'Verschiedene mathematische Symbole-B',
    ];
    protected int $blockStart = 0x2980;
    protected int $blockEnd = 0x29FF;
    protected string $regex = '/[\x{2980}-\x{29FF}]/u';
}