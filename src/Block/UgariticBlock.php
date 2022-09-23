<?php

/**
 * The UgariticBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The UgariticBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class UgariticBlock extends AbstractBlock
{
    protected string $key = 'Ugaritic';
    protected array $names = [
        'en' => 'Ugaritic',
        'de' => 'Ugaritisch',
    ];
    protected int $blockStart = 0x10380;
    protected int $blockEnd = 0x1039F;
    protected string $regex = '/[\x{10380}-\x{1039F}]/u';
}