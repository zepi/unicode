<?php

/**
 * The OldPermicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The OldPermicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class OldPermicBlock extends AbstractBlock
{
    protected string $key = 'OldPermic';
    protected array $names = [
        'en' => 'Old Permic',
        'de' => 'Altpermisch',
    ];
    protected int $blockStart = 0x10350;
    protected int $blockEnd = 0x1037F;
    protected string $regex = '/[\x{10350}-\x{1037F}]/u';
}