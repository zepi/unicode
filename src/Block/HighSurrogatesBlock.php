<?php

/**
 * The HighSurrogatesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The HighSurrogatesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class HighSurrogatesBlock extends AbstractBlock
{
    protected string $key = 'HighSurrogates';
    protected array $names = [
        'en' => 'High Surrogates',
        'de' => 'High Surrogates',
    ];
    protected int $blockStart = 0xD800;
    protected int $blockEnd = 0xDB7F;
    protected string $regex = '/[\x{D800}-\x{DB7F}]/u';
}