<?php

/**
 * The ThaiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ThaiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ThaiBlock extends AbstractBlock
{
    protected string $key = 'Thai';
    protected array $names = [
        'en' => 'Thai',
        'de' => 'Thailändisch',
    ];
    protected int $blockStart = 0x0E00;
    protected int $blockEnd = 0x0E7F;
    protected string $regex = '/[\x{0E00}-\x{0E7F}]/u';
}