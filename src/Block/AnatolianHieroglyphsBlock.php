<?php

/**
 * The AnatolianHieroglyphsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The AnatolianHieroglyphsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class AnatolianHieroglyphsBlock extends AbstractBlock
{
    protected string $key = 'AnatolianHieroglyphs';
    protected array $names = [
        'en' => 'Anatolian Hieroglyphs',
        'de' => 'Anatolische Hieroglyphen',
    ];
    protected int $blockStart = 0x14400;
    protected int $blockEnd = 0x1467F;
    protected string $regex = '/[\x{14400}-\x{1467F}]/u';
}