<?php

/**
 * The KhmerSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The KhmerSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class KhmerSymbolsBlock extends AbstractBlock
{
    protected string $key = 'KhmerSymbols';
    protected array $names = [
        'en' => 'Khmer Symbols',
        'de' => 'Khmer-Symbole',
    ];
    protected int $blockStart = 0x19E0;
    protected int $blockEnd = 0x19FF;
    protected string $regex = '/[\x{19E0}-\x{19FF}]/u';
}