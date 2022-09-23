<?php

/**
 * The MeroiticCursiveBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MeroiticCursiveBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MeroiticCursiveBlock extends AbstractBlock
{
    protected string $key = 'MeroiticCursive';
    protected array $names = [
        'en' => 'Meroitic Cursive',
        'de' => 'Meroitisch-demotisch',
    ];
    protected int $blockStart = 0x109A0;
    protected int $blockEnd = 0x109FF;
    protected string $regex = '/[\x{109A0}-\x{109FF}]/u';
}