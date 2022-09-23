<?php

/**
 * The ShavianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ShavianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ShavianBlock extends AbstractBlock
{
    protected string $key = 'Shavian';
    protected array $names = [
        'en' => 'Shavian',
        'de' => 'Shaw-Alphabet',
    ];
    protected int $blockStart = 0x10450;
    protected int $blockEnd = 0x1047F;
    protected string $regex = '/[\x{10450}-\x{1047F}]/u';
}