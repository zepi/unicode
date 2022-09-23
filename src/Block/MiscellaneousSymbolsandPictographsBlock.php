<?php

/**
 * The MiscellaneousSymbolsandPictographsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MiscellaneousSymbolsandPictographsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MiscellaneousSymbolsandPictographsBlock extends AbstractBlock
{
    protected string $key = 'MiscellaneousSymbolsandPictographs';
    protected array $names = [
        'en' => 'Miscellaneous Symbols and Pictographs',
        'de' => 'Verschiedene piktografische Symbole',
    ];
    protected int $blockStart = 0x1F300;
    protected int $blockEnd = 0x1F5FF;
    protected string $regex = '/[\x{1F300}-\x{1F5FF}]/u';
}