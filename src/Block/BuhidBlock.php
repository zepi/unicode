<?php

/**
 * The BuhidBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BuhidBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BuhidBlock extends AbstractBlock
{
    protected string $key = 'Buhid';
    protected array $names = [
        'en' => 'Buhid',
        'de' => 'Buid',
    ];
    protected int $blockStart = 0x1740;
    protected int $blockEnd = 0x175F;
    protected string $regex = '/[\x{1740}-\x{175F}]/u';
}