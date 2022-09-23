<?php

/**
 * The BalineseBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BalineseBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BalineseBlock extends AbstractBlock
{
    protected string $key = 'Balinese';
    protected array $names = [
        'en' => 'Balinese',
        'de' => 'Balinesisch',
    ];
    protected int $blockStart = 0x1B00;
    protected int $blockEnd = 0x1B7F;
    protected string $regex = '/[\x{1B00}-\x{1B7F}]/u';
}