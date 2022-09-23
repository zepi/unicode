<?php

/**
 * The MathematicalAlphanumericSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MathematicalAlphanumericSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MathematicalAlphanumericSymbolsBlock extends AbstractBlock
{
    protected string $key = 'MathematicalAlphanumericSymbols';
    protected array $names = [
        'en' => 'Mathematical Alphanumeric Symbols',
        'de' => 'Mathematische alphanumerische Symbole',
    ];
    protected int $blockStart = 0x1D400;
    protected int $blockEnd = 0x1D7FF;
    protected string $regex = '/[\x{1D400}-\x{1D7FF}]/u';
}