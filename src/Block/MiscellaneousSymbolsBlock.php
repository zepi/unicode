<?php

/**
 * The MiscellaneousSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MiscellaneousSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MiscellaneousSymbolsBlock extends AbstractBlock
{
    protected string $key = 'MiscellaneousSymbols';
    protected array $names = [
        'en' => 'Miscellaneous Symbols',
        'de' => 'Verschiedene Symbole',
    ];
    protected int $blockStart = 0x2600;
    protected int $blockEnd = 0x26FF;
    protected string $regex = '/[\x{2600}-\x{26FF}]/u';
}