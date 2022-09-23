<?php

/**
 * The KhudawadiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The KhudawadiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class KhudawadiBlock extends AbstractBlock
{
    protected string $key = 'Khudawadi';
    protected array $names = [
        'en' => 'Khudawadi',
        'de' => 'Khudabadi',
    ];
    protected int $blockStart = 0x112B0;
    protected int $blockEnd = 0x112FF;
    protected string $regex = '/[\x{112B0}-\x{112FF}]/u';
}