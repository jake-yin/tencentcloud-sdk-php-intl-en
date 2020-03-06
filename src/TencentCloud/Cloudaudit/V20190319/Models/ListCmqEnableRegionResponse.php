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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getEnableRegions() Obtain CloudAudit-enabled CMQ AZs
 * @method void setEnableRegions(array $EnableRegions) Set CloudAudit-enabled CMQ AZs
 * @method string getRequestId() Obtain Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
 * @method void setRequestId(string $RequestId) Set Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
 */

/**
 *Return parameter structure of ListCmqEnableRegion
 */
class ListCmqEnableRegionResponse extends AbstractModel
{
    /**
     * @var array CloudAudit-enabled CMQ AZs
     */
    public $EnableRegions;

    /**
     * @var string Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
     */
    public $RequestId;
    /**
     * @param array $EnableRegions CloudAudit-enabled CMQ AZs
     * @param string $RequestId Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
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
        if (array_key_exists("EnableRegions",$param) and $param["EnableRegions"] !== null) {
            $this->EnableRegions = [];
            foreach ($param["EnableRegions"] as $key => $value){
                $obj = new CmqRegionInfo();
                $obj->deserialize($value);
                array_push($this->EnableRegions, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
