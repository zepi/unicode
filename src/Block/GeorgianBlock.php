<?php

/**
 * The GeorgianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The GeorgianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class GeorgianBlock extends AbstractBlock
{
    protected string $key = 'Georgian';
    protected array $names = [
        'en' => 'Georgian',
        'de' => 'Georgisch',
    ];
    protected int $blockStart = 0x10A0;
    protected int $blockEnd = 0x10FF;
    protected string $regex = '/[\x{10A0}-\x{10FF}]/u';
}