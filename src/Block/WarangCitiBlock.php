<?php

/**
 * The WarangCitiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The WarangCitiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class WarangCitiBlock extends AbstractBlock
{
    protected string $key = 'WarangCiti';
    protected array $names = [
        'en' => 'Warang Citi',
        'de' => 'Varang Kshiti',
    ];
    protected int $blockStart = 0x118A0;
    protected int $blockEnd = 0x118FF;
    protected string $regex = '/[\x{118A0}-\x{118FF}]/u';
}