<?php

/**
 * The EarlyDynasticCuneiformBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The EarlyDynasticCuneiformBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class EarlyDynasticCuneiformBlock extends AbstractBlock
{
    protected string $key = 'EarlyDynasticCuneiform';
    protected array $names = [
        'en' => 'Early Dynastic Cuneiform',
        'de' => 'Frühe Keilschrift',
    ];
    protected int $blockStart = 0x12480;
    protected int $blockEnd = 0x1254F;
    protected string $regex = '/[\x{12480}-\x{1254F}]/u';
}