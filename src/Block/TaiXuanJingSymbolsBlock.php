<?php

/**
 * The TaiXuanJingSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The TaiXuanJingSymbolsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class TaiXuanJingSymbolsBlock extends AbstractBlock
{
    protected string $key = 'TaiXuanJingSymbols';
    protected array $names = [
        'en' => 'Tai Xuan Jing Symbols',
        'de' => 'Tai-Xuan-Jing-Symbole',
    ];
    protected int $blockStart = 0x1D300;
    protected int $blockEnd = 0x1D35F;
    protected string $regex = '/[\x{1D300}-\x{1D35F}]/u';
}