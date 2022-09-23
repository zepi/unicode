<?php

/**
 * The CJKCompatibilityBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CJKCompatibilityBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CJKCompatibilityBlock extends AbstractBlock
{
    protected string $key = 'CJKCompatibility';
    protected array $names = [
        'en' => 'CJK Compatibility',
        'de' => 'CJK-Kompatibilität',
    ];
    protected int $blockStart = 0x3300;
    protected int $blockEnd = 0x33FF;
    protected string $regex = '/[\x{3300}-\x{33FF}]/u';
}