<?php

/**
 * The MongolianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MongolianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MongolianBlock extends AbstractBlock
{
    protected string $key = 'Mongolian';
    protected array $names = [
        'en' => 'Mongolian',
        'de' => 'Mongolisch',
    ];
    protected int $blockStart = 0x1800;
    protected int $blockEnd = 0x18AF;
    protected string $regex = '/[\x{1800}-\x{18AF}]/u';
}