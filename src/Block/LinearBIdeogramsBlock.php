<?php

/**
 * The LinearBIdeogramsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LinearBIdeogramsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LinearBIdeogramsBlock extends AbstractBlock
{
    protected string $key = 'LinearBIdeograms';
    protected array $names = [
        'en' => 'Linear B Ideograms',
        'de' => 'Linear-B-Ideogramme',
    ];
    protected int $blockStart = 0x10080;
    protected int $blockEnd = 0x100FF;
    protected string $regex = '/[\x{10080}-\x{100FF}]/u';
}