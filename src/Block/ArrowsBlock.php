<?php

/**
 * The ArrowsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ArrowsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ArrowsBlock extends AbstractBlock
{
    protected string $key = 'Arrows';
    protected array $names = [
        'en' => 'Arrows',
        'de' => 'Pfeile',
    ];
    protected int $blockStart = 0x2190;
    protected int $blockEnd = 0x21FF;
    protected string $regex = '/[\x{2190}-\x{21FF}]/u';
}