<?php

/**
 * The CJKUnifiedIdeographsExtensionABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CJKUnifiedIdeographsExtensionABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CJKUnifiedIdeographsExtensionABlock extends AbstractBlock
{
    protected string $key = 'CJKUnifiedIdeographsExtensionA';
    protected array $names = [
        'en' => 'CJK Unified Ideographs Extension A',
        'de' => 'Vereinheitlichte CJK-Ideogramme, Erweiterung A',
    ];
    protected int $blockStart = 0x3400;
    protected int $blockEnd = 0x4DBF;
    protected string $regex = '/[\x{3400}-\x{4DBF}]/u';
}