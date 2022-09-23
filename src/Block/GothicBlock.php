<?php

/**
 * The GothicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The GothicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class GothicBlock extends AbstractBlock
{
    protected string $key = 'Gothic';
    protected array $names = [
        'en' => 'Gothic',
        'de' => 'Gotisch',
    ];
    protected int $blockStart = 0x10330;
    protected int $blockEnd = 0x1034F;
    protected string $regex = '/[\x{10330}-\x{1034F}]/u';
}