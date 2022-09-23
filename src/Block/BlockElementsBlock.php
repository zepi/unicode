<?php

/**
 * The BlockElementsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BlockElementsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BlockElementsBlock extends AbstractBlock
{
    protected string $key = 'BlockElements';
    protected array $names = [
        'en' => 'Block Elements',
        'de' => 'Blockelemente',
    ];
    protected int $blockStart = 0x2580;
    protected int $blockEnd = 0x259F;
    protected string $regex = '/[\x{2580}-\x{259F}]/u';
}