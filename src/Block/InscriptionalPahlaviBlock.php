<?php

/**
 * The InscriptionalPahlaviBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The InscriptionalPahlaviBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class InscriptionalPahlaviBlock extends AbstractBlock
{
    protected string $key = 'InscriptionalPahlavi';
    protected array $names = [
        'en' => 'Inscriptional Pahlavi',
        'de' => 'Inschriften-Pahlavi',
    ];
    protected int $blockStart = 0x10B60;
    protected int $blockEnd = 0x10B7F;
    protected string $regex = '/[\x{10B60}-\x{10B7F}]/u';
}