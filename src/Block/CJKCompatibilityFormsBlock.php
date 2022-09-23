<?php

/**
 * The CJKCompatibilityFormsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CJKCompatibilityFormsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CJKCompatibilityFormsBlock extends AbstractBlock
{
    protected string $key = 'CJKCompatibilityForms';
    protected array $names = [
        'en' => 'CJK Compatibility Forms',
        'de' => 'CJK-Kompatibilitätsformen',
    ];
    protected int $blockStart = 0xFE30;
    protected int $blockEnd = 0xFE4F;
    protected string $regex = '/[\x{FE30}-\x{FE4F}]/u';
}