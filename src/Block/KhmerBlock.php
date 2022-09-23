<?php

/**
 * The KhmerBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The KhmerBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class KhmerBlock extends AbstractBlock
{
    protected string $key = 'Khmer';
    protected array $names = [
        'en' => 'Khmer',
        'de' => 'Khmer',
    ];
    protected int $blockStart = 0x1780;
    protected int $blockEnd = 0x17FF;
    protected string $regex = '/[\x{1780}-\x{17FF}]/u';
}