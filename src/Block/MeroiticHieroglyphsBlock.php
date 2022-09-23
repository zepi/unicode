<?php

/**
 * The MeroiticHieroglyphsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MeroiticHieroglyphsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MeroiticHieroglyphsBlock extends AbstractBlock
{
    protected string $key = 'MeroiticHieroglyphs';
    protected array $names = [
        'en' => 'Meroitic Hieroglyphs',
        'de' => 'Meroitische Hieroglyphen',
    ];
    protected int $blockStart = 0x10980;
    protected int $blockEnd = 0x1099F;
    protected string $regex = '/[\x{10980}-\x{1099F}]/u';
}