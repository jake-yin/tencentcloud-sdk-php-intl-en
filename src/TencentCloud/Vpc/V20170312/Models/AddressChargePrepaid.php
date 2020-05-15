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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EIP cost object
 *
 * @method integer getPeriod() Obtain Purchase duration of instance
 * @method void setPeriod(integer $Period) Set Purchase duration of instance
 * @method string getRenewFlag() Obtain Whether auto-renewal is enabled
 * @method void setRenewFlag(string $RenewFlag) Set Whether auto-renewal is enabled
 */
class AddressChargePrepaid extends AbstractModel
{
    /**
     * @var integer Purchase duration of instance
     */
    public $Period;

    /**
     * @var string Whether auto-renewal is enabled
     */
    public $RenewFlag;

    /**
     * @param integer $Period Purchase duration of instance
     * @param string $RenewFlag Whether auto-renewal is enabled
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
