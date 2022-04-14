<?php

namespace App\Consts;

// safety_informationで使う定数
class SafetyInformationConst
{
    // 安否
    const SAFETY = 1;
    const INJURED = 2;
    const UNCONFIRMED = 3;
    const SAFETY_LIST = [
        self::SAFETY => '無事',
        self::INJURED => '負傷',
        self::UNCONFIRMED => '未確認',
    ];

    // 出社可否
    const GO_TO_WORK_YES = 1;
    const GO_TO_WORK_NO = 2;
    const GO_TO_WORK_LIST = [
        self::GO_TO_WORK_YES => '出社可',
        self::GO_TO_WORK_NO => '出社不可',
    ];
}
