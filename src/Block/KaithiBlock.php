<?php

/**
 * The KaithiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The KaithiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class KaithiBlock extends AbstractBlock
{
    protected string $key = 'Kaithi';
    protected array $names = [
        'en' => 'Kaithi',
        'de' => 'Kaithi',
    ];
    protected int $blockStart = 0x11080;
    protected int $blockEnd = 0x110CF;
    protected string $regex = '/[\x{11080}-\x{110CF}]/u';
}