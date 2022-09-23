<?php

/**
 * The CyrillicExtendedABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CyrillicExtendedABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CyrillicExtendedABlock extends AbstractBlock
{
    protected string $key = 'CyrillicExtendedA';
    protected array $names = [
        'en' => 'Cyrillic Extended-A',
        'de' => 'Kyrillisch, erweitert-A',
    ];
    protected int $blockStart = 0x2DE0;
    protected int $blockEnd = 0x2DFF;
    protected string $regex = '/[\x{2DE0}-\x{2DFF}]/u';
}