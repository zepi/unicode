<?php

/**
 * The SiddhamBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SiddhamBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SiddhamBlock extends AbstractBlock
{
    protected string $key = 'Siddham';
    protected array $names = [
        'en' => 'Siddham',
        'de' => 'Siddham',
    ];
    protected int $blockStart = 0x11580;
    protected int $blockEnd = 0x115FF;
    protected string $regex = '/[\x{11580}-\x{115FF}]/u';
}