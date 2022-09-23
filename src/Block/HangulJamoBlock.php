<?php

/**
 * The HangulJamoBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The HangulJamoBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class HangulJamoBlock extends AbstractBlock
{
    protected string $key = 'HangulJamo';
    protected array $names = [
        'en' => 'Hangul Jamo',
        'de' => 'Hangeul-Jamo',
    ];
    protected int $blockStart = 0x1100;
    protected int $blockEnd = 0x11FF;
    protected string $regex = '/[\x{1100}-\x{11FF}]/u';
}