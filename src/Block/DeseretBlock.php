<?php

/**
 * The DeseretBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The DeseretBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class DeseretBlock extends AbstractBlock
{
    protected string $key = 'Deseret';
    protected array $names = [
        'en' => 'Deseret',
        'de' => 'Mormonenalphabet',
    ];
    protected int $blockStart = 0x10400;
    protected int $blockEnd = 0x1044F;
    protected string $regex = '/[\x{10400}-\x{1044F}]/u';
}