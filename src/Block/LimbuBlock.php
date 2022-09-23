<?php

/**
 * The LimbuBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LimbuBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LimbuBlock extends AbstractBlock
{
    protected string $key = 'Limbu';
    protected array $names = [
        'en' => 'Limbu',
        'de' => 'Limbu',
    ];
    protected int $blockStart = 0x1900;
    protected int $blockEnd = 0x194F;
    protected string $regex = '/[\x{1900}-\x{194F}]/u';
}