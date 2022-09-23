<?php

/**
 * The LowSurrogatesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LowSurrogatesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LowSurrogatesBlock extends AbstractBlock
{
    protected string $key = 'LowSurrogates';
    protected array $names = [
        'en' => 'Low Surrogates',
        'de' => 'Low Surrogates',
    ];
    protected int $blockStart = 0xDC00;
    protected int $blockEnd = 0xDFFF;
    protected string $regex = '/[\x{DC00}-\x{DFFF}]/u';
}