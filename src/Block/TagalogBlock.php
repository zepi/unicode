<?php

/**
 * The TagalogBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The TagalogBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class TagalogBlock extends AbstractBlock
{
    protected string $key = 'Tagalog';
    protected array $names = [
        'en' => 'Tagalog',
        'de' => 'Tagalog',
    ];
    protected int $blockStart = 0x1700;
    protected int $blockEnd = 0x171F;
    protected string $regex = '/[\x{1700}-\x{171F}]/u';
}