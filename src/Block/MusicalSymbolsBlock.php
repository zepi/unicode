<?php

/**
 * The MusicalSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MusicalSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MusicalSymbolsBlock extends AbstractBlock
{
    protected string $key = 'MusicalSymbols';
    protected array $names = [
        'en' => 'Musical Symbols',
        'de' => 'Notenschriftzeichen',
    ];
    protected int $blockStart = 0x1D100;
    protected int $blockEnd = 0x1D1FF;
    protected string $regex = '/[\x{1D100}-\x{1D1FF}]/u';
}