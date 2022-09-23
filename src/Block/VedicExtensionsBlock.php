<?php

/**
 * The VedicExtensionsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The VedicExtensionsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class VedicExtensionsBlock extends AbstractBlock
{
    protected string $key = 'VedicExtensions';
    protected array $names = [
        'en' => 'Vedic Extensions',
        'de' => 'Vedische Erweiterungen',
    ];
    protected int $blockStart = 0x1CD0;
    protected int $blockEnd = 0x1CFF;
    protected string $regex = '/[\x{1CD0}-\x{1CFF}]/u';
}