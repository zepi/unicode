<?php

/**
 * The ArmenianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ArmenianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ArmenianBlock extends AbstractBlock
{
    protected string $key = 'Armenian';
    protected array $names = [
        'en' => 'Armenian',
        'de' => 'Armenisch',
    ];
    protected int $blockStart = 0x0530;
    protected int $blockEnd = 0x058F;
    protected string $regex = '/[\x{0530}-\x{058F}]/u';
}