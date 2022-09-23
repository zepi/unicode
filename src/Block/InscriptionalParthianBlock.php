<?php

/**
 * The InscriptionalParthianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The InscriptionalParthianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class InscriptionalParthianBlock extends AbstractBlock
{
    protected string $key = 'InscriptionalParthian';
    protected array $names = [
        'en' => 'Inscriptional Parthian',
        'de' => 'Parthisch',
    ];
    protected int $blockStart = 0x10B40;
    protected int $blockEnd = 0x10B5F;
    protected string $regex = '/[\x{10B40}-\x{10B5F}]/u';
}