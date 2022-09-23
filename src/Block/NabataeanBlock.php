<?php

/**
 * The NabataeanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The NabataeanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class NabataeanBlock extends AbstractBlock
{
    protected string $key = 'Nabataean';
    protected array $names = [
        'en' => 'Nabataean',
        'de' => 'Nabatäisch',
    ];
    protected int $blockStart = 0x10880;
    protected int $blockEnd = 0x108AF;
    protected string $regex = '/[\x{10880}-\x{108AF}]/u';
}