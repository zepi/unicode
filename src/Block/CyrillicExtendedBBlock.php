<?php

/**
 * The CyrillicExtendedBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CyrillicExtendedBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CyrillicExtendedBBlock extends AbstractBlock
{
    protected string $key = 'CyrillicExtendedB';
    protected array $names = [
        'en' => 'Cyrillic Extended-B',
        'de' => 'Kyrillisch, erweitert-B',
    ];
    protected int $blockStart = 0xA640;
    protected int $blockEnd = 0xA69F;
    protected string $regex = '/[\x{A640}-\x{A69F}]/u';
}