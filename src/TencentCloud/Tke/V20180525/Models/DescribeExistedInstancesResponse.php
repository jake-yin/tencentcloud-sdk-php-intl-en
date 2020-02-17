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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getExistedInstanceSet() Obtain Array of existing instance information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExistedInstanceSet(array $ExistedInstanceSet) Set Array of existing instance information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Number of instances that match the filter condition(s).
 * @method void setTotalCount(integer $TotalCount) Set Number of instances that match the filter condition(s).
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeExistedInstances response structure.
 */
class DescribeExistedInstancesResponse extends AbstractModel
{
    /**
     * @var array Array of existing instance information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExistedInstanceSet;

    /**
     * @var integer Number of instances that match the filter condition(s).
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param array $ExistedInstanceSet Array of existing instance information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Number of instances that match the filter condition(s).
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
        if (array_key_exists("ExistedInstanceSet",$param) and $param["ExistedInstanceSet"] !== null) {
            $this->ExistedInstanceSet = [];
            foreach ($param["ExistedInstanceSet"] as $key => $value){
                $obj = new ExistedInstance();
                $obj->deserialize($value);
                array_push($this->ExistedInstanceSet, $obj);
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
