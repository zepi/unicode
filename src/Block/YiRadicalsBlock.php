<?php

/**
 * The YiRadicalsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The YiRadicalsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class YiRadicalsBlock extends AbstractBlock
{
    protected string $key = 'YiRadicals';
    protected array $names = [
        'en' => 'Yi Radicals',
        'de' => 'Yi-Radikale',
    ];
    protected int $blockStart = 0xA490;
    protected int $blockEnd = 0xA4CF;
    protected string $regex = '/[\x{A490}-\x{A4CF}]/u';
}