<?php

/**
 * The KanbunBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The KanbunBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class KanbunBlock extends AbstractBlock
{
    protected string $key = 'Kanbun';
    protected array $names = [
        'en' => 'Kanbun',
        'de' => 'Kanbun',
    ];
    protected int $blockStart = 0x3190;
    protected int $blockEnd = 0x319F;
    protected string $regex = '/[\x{3190}-\x{319F}]/u';
}