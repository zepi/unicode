<?php

/**
 * The LinearABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LinearABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LinearABlock extends AbstractBlock
{
    protected string $key = 'LinearA';
    protected array $names = [
        'en' => 'Linear A',
        'de' => 'Linear A',
    ];
    protected int $blockStart = 0x10600;
    protected int $blockEnd = 0x1077F;
    protected string $regex = '/[\x{10600}-\x{1077F}]/u';
}