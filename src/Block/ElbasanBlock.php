<?php

/**
 * The ElbasanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ElbasanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ElbasanBlock extends AbstractBlock
{
    protected string $key = 'Elbasan';
    protected array $names = [
        'en' => 'Elbasan',
        'de' => 'Albanisch',
    ];
    protected int $blockStart = 0x10500;
    protected int $blockEnd = 0x1052F;
    protected string $regex = '/[\x{10500}-\x{1052F}]/u';
}