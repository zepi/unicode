<?php

/**
 * The ShorthandFormatControlsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ShorthandFormatControlsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ShorthandFormatControlsBlock extends AbstractBlock
{
    protected string $key = 'ShorthandFormatControls';
    protected array $names = [
        'en' => 'Shorthand Format Controls',
        'de' => 'Kurzschrift-Steuerzeichen',
    ];
    protected int $blockStart = 0x1BCA0;
    protected int $blockEnd = 0x1BCAF;
    protected string $regex = '/[\x{1BCA0}-\x{1BCAF}]/u';
}