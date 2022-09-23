<?php

/**
 * The GranthaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The GranthaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class GranthaBlock extends AbstractBlock
{
    protected string $key = 'Grantha';
    protected array $names = [
        'en' => 'Grantha',
        'de' => 'Grantha',
    ];
    protected int $blockStart = 0x11300;
    protected int $blockEnd = 0x1137F;
    protected string $regex = '/[\x{11300}-\x{1137F}]/u';
}