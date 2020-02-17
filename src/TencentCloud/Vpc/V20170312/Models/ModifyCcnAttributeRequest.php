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
 * @method string getCcnId() Obtain The CCN instance ID, such as `ccn-f49l6u0z`.
 * @method void setCcnId(string $CcnId) Set The CCN instance ID, such as `ccn-f49l6u0z`.
 * @method string getCcnName() Obtain The name of the CCN. The maximum length is 60 characters.
 * @method void setCcnName(string $CcnName) Set The name of the CCN. The maximum length is 60 characters.
 * @method string getCcnDescription() Obtain The description of the CCN. The maximum length is 100 characters.
 * @method void setCcnDescription(string $CcnDescription) Set The description of the CCN. The maximum length is 100 characters.
 */

/**
 *ModifyCcnAttribute request structure.
 */
class ModifyCcnAttributeRequest extends AbstractModel
{
    /**
     * @var string The CCN instance ID, such as `ccn-f49l6u0z`.
     */
    public $CcnId;

    /**
     * @var string The name of the CCN. The maximum length is 60 characters.
     */
    public $CcnName;

    /**
     * @var string The description of the CCN. The maximum length is 100 characters.
     */
    public $CcnDescription;
    /**
     * @param string $CcnId The CCN instance ID, such as `ccn-f49l6u0z`.
     * @param string $CcnName The name of the CCN. The maximum length is 60 characters.
     * @param string $CcnDescription The description of the CCN. The maximum length is 100 characters.
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CcnName",$param) and $param["CcnName"] !== null) {
            $this->CcnName = $param["CcnName"];
        }

        if (array_key_exists("CcnDescription",$param) and $param["CcnDescription"] !== null) {
            $this->CcnDescription = $param["CcnDescription"];
        }
    }
}
