<?php

/**
 * The YijingHexagramSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The YijingHexagramSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class YijingHexagramSymbolsBlock extends AbstractBlock
{
    protected string $key = 'YijingHexagramSymbols';
    protected array $names = [
        'en' => 'Yijing Hexagram Symbols',
        'de' => 'I-Ging-Hexagramme',
    ];
    protected int $blockStart = 0x4DC0;
    protected int $blockEnd = 0x4DFF;
    protected string $regex = '/[\x{4DC0}-\x{4DFF}]/u';
}