<?php

namespace PhpLab\Sandbox\Example\Domain\Enums;

use PhpLab\Core\Domain\Base\BaseEnum;

class StatusEnum extends BaseEnum
{

    const DELETED = -10;
    const DISABLE = 0;
    const REJECTED = 10;
    const BLOCKED = 20;
    const WAIT_APPROVING = 90;
    const ENABLE = 100;

    public static function getLabels()
    {
        return [
            self::DELETED => 'удален',
            self::DISABLE => 'отключен',
            self::REJECTED => 'отвергнут / отклонен',
            self::BLOCKED => 'заблокирован',
            self::WAIT_APPROVING => 'ожидает одобрения / премодерация',
            self::ENABLE => 'включен / одобрен',
        ];
    }

}
