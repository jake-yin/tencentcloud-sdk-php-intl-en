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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() Obtain Total number of CDH instances meeting the query conditions
 * @method void setTotalCount(integer $TotalCount) Set Total number of CDH instances meeting the query conditions
 * @method array getHostSet() Obtain Information on CDH instances
 * @method void setHostSet(array $HostSet) Set Information on CDH instances
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeHosts response structure.
 */
class DescribeHostsResponse extends AbstractModel
{
    /**
     * @var integer Total number of CDH instances meeting the query conditions
     */
    public $TotalCount;

    /**
     * @var array Information on CDH instances
     */
    public $HostSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $TotalCount Total number of CDH instances meeting the query conditions
     * @param array $HostSet Information on CDH instances
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("HostSet",$param) and $param["HostSet"] !== null) {
            $this->HostSet = [];
            foreach ($param["HostSet"] as $key => $value){
                $obj = new HostItem();
                $obj->deserialize($value);
                array_push($this->HostSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
