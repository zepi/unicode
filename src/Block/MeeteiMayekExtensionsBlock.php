<?php

/**
 * The MeeteiMayekExtensionsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MeeteiMayekExtensionsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MeeteiMayekExtensionsBlock extends AbstractBlock
{
    protected string $key = 'MeeteiMayekExtensions';
    protected array $names = [
        'en' => 'Meetei Mayek Extensions',
        'de' => 'Meitei-Mayek, Erweiterungen',
    ];
    protected int $blockStart = 0xAAE0;
    protected int $blockEnd = 0xAAFF;
    protected string $regex = '/[\x{AAE0}-\x{AAFF}]/u';
}