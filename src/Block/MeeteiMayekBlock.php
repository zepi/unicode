<?php

/**
 * The MeeteiMayekBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MeeteiMayekBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MeeteiMayekBlock extends AbstractBlock
{
    protected string $key = 'MeeteiMayek';
    protected array $names = [
        'en' => 'Meetei Mayek',
        'de' => 'Meitei-Mayek',
    ];
    protected int $blockStart = 0xABC0;
    protected int $blockEnd = 0xABFF;
    protected string $regex = '/[\x{ABC0}-\x{ABFF}]/u';
}