<?php

/**
 * The CJKUnifiedIdeographsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CJKUnifiedIdeographsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CJKUnifiedIdeographsBlock extends AbstractBlock
{
    protected string $key = 'CJKUnifiedIdeographs';
    protected array $names = [
        'en' => 'CJK Unified Ideographs',
        'de' => 'Vereinheitlichte CJK-Ideogramme',
    ];
    protected int $blockStart = 0x4E00;
    protected int $blockEnd = 0x9FFF;
    protected string $regex = '/[\x{4E00}-\x{9FFF}]/u';
}