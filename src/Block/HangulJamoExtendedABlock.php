<?php

/**
 * The HangulJamoExtendedABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The HangulJamoExtendedABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class HangulJamoExtendedABlock extends AbstractBlock
{
    protected string $key = 'HangulJamoExtendedA';
    protected array $names = [
        'en' => 'Hangul Jamo Extended-A',
        'de' => 'Hangeul-Jamo, erweitert-A',
    ];
    protected int $blockStart = 0xA960;
    protected int $blockEnd = 0xA97F;
    protected string $regex = '/[\x{A960}-\x{A97F}]/u';
}