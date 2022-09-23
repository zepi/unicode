<?php

/**
 * The KangxiRadicalsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The KangxiRadicalsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class KangxiRadicalsBlock extends AbstractBlock
{
    protected string $key = 'KangxiRadicals';
    protected array $names = [
        'en' => 'Kangxi Radicals',
        'de' => 'Kangxi-Radikale',
    ];
    protected int $blockStart = 0x2F00;
    protected int $blockEnd = 0x2FDF;
    protected string $regex = '/[\x{2F00}-\x{2FDF}]/u';
}