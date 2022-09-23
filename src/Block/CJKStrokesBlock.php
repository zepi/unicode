<?php

/**
 * The CJKStrokesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CJKStrokesBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CJKStrokesBlock extends AbstractBlock
{
    protected string $key = 'CJKStrokes';
    protected array $names = [
        'en' => 'CJK Strokes',
        'de' => 'CJK-Striche',
    ];
    protected int $blockStart = 0x31C0;
    protected int $blockEnd = 0x31EF;
    protected string $regex = '/[\x{31C0}-\x{31EF}]/u';
}