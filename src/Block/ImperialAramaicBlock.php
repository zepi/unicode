<?php

/**
 * The ImperialAramaicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ImperialAramaicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ImperialAramaicBlock extends AbstractBlock
{
    protected string $key = 'ImperialAramaic';
    protected array $names = [
        'en' => 'Imperial Aramaic',
        'de' => 'Aramäisch',
    ];
    protected int $blockStart = 0x10840;
    protected int $blockEnd = 0x1085F;
    protected string $regex = '/[\x{10840}-\x{1085F}]/u';
}