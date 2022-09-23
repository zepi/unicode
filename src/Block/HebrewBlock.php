<?php

/**
 * The HebrewBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The HebrewBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class HebrewBlock extends AbstractBlock
{
    protected string $key = 'Hebrew';
    protected array $names = [
        'en' => 'Hebrew',
        'de' => 'Hebräisch',
    ];
    protected int $blockStart = 0x0590;
    protected int $blockEnd = 0x05FF;
    protected string $regex = '/[\x{0590}-\x{05FF}]/u';
}