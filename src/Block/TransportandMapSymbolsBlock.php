<?php

/**
 * The TransportandMapSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The TransportandMapSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class TransportandMapSymbolsBlock extends AbstractBlock
{
    protected string $key = 'TransportandMapSymbols';
    protected array $names = [
        'en' => 'Transport and Map Symbols',
        'de' => 'Verkehrs- und Kartensymbole',
    ];
    protected int $blockStart = 0x1F680;
    protected int $blockEnd = 0x1F6FF;
    protected string $regex = '/[\x{1F680}-\x{1F6FF}]/u';
}