<?php

/**
 * The BengaliBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BengaliBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BengaliBlock extends AbstractBlock
{
    protected string $key = 'Bengali';
    protected array $names = [
        'en' => 'Bengali',
        'de' => 'Bengalisch',
    ];
    protected int $blockStart = 0x0980;
    protected int $blockEnd = 0x09FF;
    protected string $regex = '/[\x{0980}-\x{09FF}]/u';
}