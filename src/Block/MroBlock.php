<?php

/**
 * The MroBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MroBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MroBlock extends AbstractBlock
{
    protected string $key = 'Mro';
    protected array $names = [
        'en' => 'Mro',
        'de' => 'Mro',
    ];
    protected int $blockStart = 0x16A40;
    protected int $blockEnd = 0x16A6F;
    protected string $regex = '/[\x{16A40}-\x{16A6F}]/u';
}