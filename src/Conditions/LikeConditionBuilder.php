<?php

declare(strict_types=1);

namespace Yiisoft\Db\Sqlite\Conditions;

use Yiisoft\Db\Querys\Conditions\LikeConditionBuilder as BaseLikeConditionBuilder;

/**
 * {@inheritdoc}
 */
class LikeConditionBuilder extends BaseLikeConditionBuilder
{
    /**
     * {@inheritdoc}
     */
    protected ?string $escapeCharacter = '\\';
}
