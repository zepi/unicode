<?php

/**
 * The AhomBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The AhomBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class AhomBlock extends AbstractBlock
{
    protected string $key = 'Ahom';
    protected array $names = [
        'en' => 'Ahom',
        'de' => 'Ahom',
    ];
    protected int $blockStart = 0x11700;
    protected int $blockEnd = 0x1173F;
    protected string $regex = '/[\x{11700}-\x{1173F}]/u';
}