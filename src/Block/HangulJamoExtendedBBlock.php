<?php

/**
 * The HangulJamoExtendedBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The HangulJamoExtendedBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class HangulJamoExtendedBBlock extends AbstractBlock
{
    protected string $key = 'HangulJamoExtendedB';
    protected array $names = [
        'en' => 'Hangul Jamo Extended-B',
        'de' => 'Hangeul-Jamo, erweitert-B',
    ];
    protected int $blockStart = 0xD7B0;
    protected int $blockEnd = 0xD7FF;
    protected string $regex = '/[\x{D7B0}-\x{D7FF}]/u';
}