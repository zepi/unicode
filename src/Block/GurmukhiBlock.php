<?php

/**
 * The GurmukhiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The GurmukhiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class GurmukhiBlock extends AbstractBlock
{
    protected string $key = 'Gurmukhi';
    protected array $names = [
        'en' => 'Gurmukhi',
        'de' => 'Gurmukhi',
    ];
    protected int $blockStart = 0x0A00;
    protected int $blockEnd = 0x0A7F;
    protected string $regex = '/[\x{0A00}-\x{0A7F}]/u';
}