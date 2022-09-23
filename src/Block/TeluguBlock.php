<?php

/**
 * The TeluguBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The TeluguBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class TeluguBlock extends AbstractBlock
{
    protected string $key = 'Telugu';
    protected array $names = [
        'en' => 'Telugu',
        'de' => 'Telugu',
    ];
    protected int $blockStart = 0x0C00;
    protected int $blockEnd = 0x0C7F;
    protected string $regex = '/[\x{0C00}-\x{0C7F}]/u';
}