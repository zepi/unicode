<?php

/**
 * The MiscellaneousTechnicalBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MiscellaneousTechnicalBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MiscellaneousTechnicalBlock extends AbstractBlock
{
    protected string $key = 'MiscellaneousTechnical';
    protected array $names = [
        'en' => 'Miscellaneous Technical',
        'de' => 'Verschiedene technische Zeichen',
    ];
    protected int $blockStart = 0x2300;
    protected int $blockEnd = 0x23FF;
    protected string $regex = '/[\x{2300}-\x{23FF}]/u';
}