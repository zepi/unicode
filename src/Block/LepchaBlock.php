<?php

/**
 * The LepchaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LepchaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LepchaBlock extends AbstractBlock
{
    protected string $key = 'Lepcha';
    protected array $names = [
        'en' => 'Lepcha',
        'de' => 'Lepcha',
    ];
    protected int $blockStart = 0x1C00;
    protected int $blockEnd = 0x1C4F;
    protected string $regex = '/[\x{1C00}-\x{1C4F}]/u';
}