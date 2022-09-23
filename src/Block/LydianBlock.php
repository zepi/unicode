<?php

/**
 * The LydianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LydianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LydianBlock extends AbstractBlock
{
    protected string $key = 'Lydian';
    protected array $names = [
        'en' => 'Lydian',
        'de' => 'Lydisch',
    ];
    protected int $blockStart = 0x10920;
    protected int $blockEnd = 0x1093F;
    protected string $regex = '/[\x{10920}-\x{1093F}]/u';
}