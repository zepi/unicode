<?php

/**
 * The AncientSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The AncientSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class AncientSymbolsBlock extends AbstractBlock
{
    protected string $key = 'AncientSymbols';
    protected array $names = [
        'en' => 'Ancient Symbols',
        'de' => 'Alte Symbole',
    ];
    protected int $blockStart = 0x10190;
    protected int $blockEnd = 0x101CF;
    protected string $regex = '/[\x{10190}-\x{101CF}]/u';
}