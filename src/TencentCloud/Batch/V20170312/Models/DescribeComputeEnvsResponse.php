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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getComputeEnvSet() Obtain List of compute environments
 * @method void setComputeEnvSet(array $ComputeEnvSet) Set List of compute environments
 * @method integer getTotalCount() Obtain Number of compute environments
 * @method void setTotalCount(integer $TotalCount) Set Number of compute environments
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeComputeEnvs response structure.
 */
class DescribeComputeEnvsResponse extends AbstractModel
{
    /**
     * @var array List of compute environments
     */
    public $ComputeEnvSet;

    /**
     * @var integer Number of compute environments
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param array $ComputeEnvSet List of compute environments
     * @param integer $TotalCount Number of compute environments
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
        if (array_key_exists("ComputeEnvSet",$param) and $param["ComputeEnvSet"] !== null) {
            $this->ComputeEnvSet = [];
            foreach ($param["ComputeEnvSet"] as $key => $value){
                $obj = new ComputeEnvView();
                $obj->deserialize($value);
                array_push($this->ComputeEnvSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
