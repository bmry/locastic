<?php

namespace App\Entity\Enum;

use App\DBAL\EnumType;

class EnumVerificationRequestStatusType extends EnumType
{
    public const TYPE_APPROVED = 'approved';
    public const TYPE_DECLINED = 'declined';
    public const TYPE_VERIFICATION_REQUESTED = 'verification requested';

    protected $name = 'enum_verification_request_type';

    protected static $values = [
        self::TYPE_APPROVED,
        self::TYPE_DECLINED,
        self::TYPE_VERIFICATION_REQUESTED
    ];
}
