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
 * DescribeBandwidthPackageBillUsage response structure.
 *
 * @method array getBandwidthPackageBillBandwidthSet() Obtain Current billable usage.
 * @method void setBandwidthPackageBillBandwidthSet(array $BandwidthPackageBillBandwidthSet) Set Current billable usage.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBandwidthPackageBillUsageResponse extends AbstractModel
{
    /**
     * @var array Current billable usage.
     */
    public $BandwidthPackageBillBandwidthSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $BandwidthPackageBillBandwidthSet Current billable usage.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("BandwidthPackageBillBandwidthSet",$param) and $param["BandwidthPackageBillBandwidthSet"] !== null) {
            $this->BandwidthPackageBillBandwidthSet = [];
            foreach ($param["BandwidthPackageBillBandwidthSet"] as $key => $value){
                $obj = new BandwidthPackageBillBandwidth();
                $obj->deserialize($value);
                array_push($this->BandwidthPackageBillBandwidthSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
