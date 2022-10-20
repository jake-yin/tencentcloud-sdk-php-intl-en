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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoadBalancingStatus request structure.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getLoadBalancingId() Obtain The load balancer ID.
 * @method void setLoadBalancingId(string $LoadBalancingId) Set The load balancer ID.
 * @method string getStatus() Obtain The load balancer status. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
 * @method void setStatus(string $Status) Set The load balancer status. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
 */
class ModifyLoadBalancingStatusRequest extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The load balancer ID.
     */
    public $LoadBalancingId;

    /**
     * @var string The load balancer status. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
     */
    public $Status;

    /**
     * @param string $ZoneId The site ID.
     * @param string $LoadBalancingId The load balancer ID.
     * @param string $Status The load balancer status. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("LoadBalancingId",$param) and $param["LoadBalancingId"] !== null) {
            $this->LoadBalancingId = $param["LoadBalancingId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
