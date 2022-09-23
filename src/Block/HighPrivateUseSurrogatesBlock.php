<?php

/**
 * The HighPrivateUseSurrogatesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The HighPrivateUseSurrogatesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class HighPrivateUseSurrogatesBlock extends AbstractBlock
{
    protected string $key = 'HighPrivateUseSurrogates';
    protected array $names = [
        'en' => 'High Private Use Surrogates',
        'de' => 'High Surrogates (privater Bereich)',
    ];
    protected int $blockStart = 0xDB80;
    protected int $blockEnd = 0xDBFF;
    protected string $regex = '/[\x{DB80}-\x{DBFF}]/u';
}