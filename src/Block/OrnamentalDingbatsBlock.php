<?php

/**
 * The OrnamentalDingbatsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The OrnamentalDingbatsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class OrnamentalDingbatsBlock extends AbstractBlock
{
    protected string $key = 'OrnamentalDingbats';
    protected array $names = [
        'en' => 'Ornamental Dingbats',
        'de' => 'Ziersymbole',
    ];
    protected int $blockStart = 0x1F650;
    protected int $blockEnd = 0x1F67F;
    protected string $regex = '/[\x{1F650}-\x{1F67F}]/u';
}