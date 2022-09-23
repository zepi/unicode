<?php

/**
 * The SyriacBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SyriacBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SyriacBlock extends AbstractBlock
{
    protected string $key = 'Syriac';
    protected array $names = [
        'en' => 'Syriac',
        'de' => 'Syrisch',
    ];
    protected int $blockStart = 0x0700;
    protected int $blockEnd = 0x074F;
    protected string $regex = '/[\x{0700}-\x{074F}]/u';
}