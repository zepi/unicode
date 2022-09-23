<?php

/**
 * The BasicLatinBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BasicLatinBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BasicLatinBlock extends AbstractBlock
{
    protected string $key = 'BasicLatin';
    protected array $names = [
        'en' => 'Basic Latin',
        'de' => 'Basis-Lateinisch',
    ];
    protected int $blockStart = 0x0000;
    protected int $blockEnd = 0x007F;
    protected string $regex = '/[\x{0000}-\x{007F}]/u';
}