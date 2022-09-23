<?php

/**
 * The CJKUnifiedIdeographsExtensionDBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CJKUnifiedIdeographsExtensionDBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CJKUnifiedIdeographsExtensionDBlock extends AbstractBlock
{
    protected string $key = 'CJKUnifiedIdeographsExtensionD';
    protected array $names = [
        'en' => 'CJK Unified Ideographs Extension D',
        'de' => 'Vereinheitlichte CJK-Ideogramme, Erweiterung D',
    ];
    protected int $blockStart = 0x2B740;
    protected int $blockEnd = 0x2B81F;
    protected string $regex = '/[\x{2B740}-\x{2B81F}]/u';
}