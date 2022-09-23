<?php

/**
 * The BugineseBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BugineseBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BugineseBlock extends AbstractBlock
{
    protected string $key = 'Buginese';
    protected array $names = [
        'en' => 'Buginese',
        'de' => 'Buginesisch',
    ];
    protected int $blockStart = 0x1A00;
    protected int $blockEnd = 0x1A1F;
    protected string $regex = '/[\x{1A00}-\x{1A1F}]/u';
}