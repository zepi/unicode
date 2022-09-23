<?php

/**
 * The ByzantineMusicalSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ByzantineMusicalSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ByzantineMusicalSymbolsBlock extends AbstractBlock
{
    protected string $key = 'ByzantineMusicalSymbols';
    protected array $names = [
        'en' => 'Byzantine Musical Symbols',
        'de' => 'Byzantinische Notenschriftzeichen',
    ];
    protected int $blockStart = 0x1D000;
    protected int $blockEnd = 0x1D0FF;
    protected string $regex = '/[\x{1D000}-\x{1D0FF}]/u';
}