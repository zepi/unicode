<?php

/**
 * The MyanmarExtendedBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MyanmarExtendedBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MyanmarExtendedBBlock extends AbstractBlock
{
    protected string $key = 'MyanmarExtendedB';
    protected array $names = [
        'en' => 'Myanmar Extended-B',
        'de' => 'Birmanisch, erweitert-B',
    ];
    protected int $blockStart = 0xA9E0;
    protected int $blockEnd = 0xA9FF;
    protected string $regex = '/[\x{A9E0}-\x{A9FF}]/u';
}