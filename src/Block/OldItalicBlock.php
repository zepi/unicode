<?php

/**
 * The OldItalicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The OldItalicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class OldItalicBlock extends AbstractBlock
{
    protected string $key = 'OldItalic';
    protected array $names = [
        'en' => 'Old Italic',
        'de' => 'Altitalisch',
    ];
    protected int $blockStart = 0x10300;
    protected int $blockEnd = 0x1032F;
    protected string $regex = '/[\x{10300}-\x{1032F}]/u';
}