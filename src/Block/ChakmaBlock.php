<?php

/**
 * The ChakmaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ChakmaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ChakmaBlock extends AbstractBlock
{
    protected string $key = 'Chakma';
    protected array $names = [
        'en' => 'Chakma',
        'de' => 'Chakma',
    ];
    protected int $blockStart = 0x11100;
    protected int $blockEnd = 0x1114F;
    protected string $regex = '/[\x{11100}-\x{1114F}]/u';
}