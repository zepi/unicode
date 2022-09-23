<?php

/**
 * The HalfwidthandFullwidthFormsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The HalfwidthandFullwidthFormsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class HalfwidthandFullwidthFormsBlock extends AbstractBlock
{
    protected string $key = 'HalfwidthandFullwidthForms';
    protected array $names = [
        'en' => 'Halfwidth and Fullwidth Forms',
        'de' => 'Halbbreite und vollbreite Formen',
    ];
    protected int $blockStart = 0xFF00;
    protected int $blockEnd = 0xFFEF;
    protected string $regex = '/[\x{FF00}-\x{FFEF}]/u';
}