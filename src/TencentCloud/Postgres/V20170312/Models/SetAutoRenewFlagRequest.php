<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetAutoRenewFlag request structure.
 *
 * @method array getDBInstanceIdSet() Obtain List of instance IDs. Note that currently you cannot manipulate multiple instances at the same time. Only one instance ID can be passed in here.
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) Set List of instance IDs. Note that currently you cannot manipulate multiple instances at the same time. Only one instance ID can be passed in here.
 * @method integer getAutoRenewFlag() Obtain Renewal flag. 0: normal renewal, 1: auto-renewal, 2: no renewal upon expiration
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Renewal flag. 0: normal renewal, 1: auto-renewal, 2: no renewal upon expiration
 */
class SetAutoRenewFlagRequest extends AbstractModel
{
    /**
     * @var array List of instance IDs. Note that currently you cannot manipulate multiple instances at the same time. Only one instance ID can be passed in here.
     */
    public $DBInstanceIdSet;

    /**
     * @var integer Renewal flag. 0: normal renewal, 1: auto-renewal, 2: no renewal upon expiration
     */
    public $AutoRenewFlag;

    /**
     * @param array $DBInstanceIdSet List of instance IDs. Note that currently you cannot manipulate multiple instances at the same time. Only one instance ID can be passed in here.
     * @param integer $AutoRenewFlag Renewal flag. 0: normal renewal, 1: auto-renewal, 2: no renewal upon expiration
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
