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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroupList response structure.
 *
 * @method integer getTotal() Obtain The total number of groups that meet the conditions.
 * @method void setTotal(integer $Total) Set The total number of groups that meet the conditions.
 * @method array getGroupInfos() Obtain The information of the groups. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupInfos(array $GroupInfos) Set The information of the groups. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeGroupListResponse extends AbstractModel
{
    /**
     * @var integer The total number of groups that meet the conditions.
     */
    public $Total;

    /**
     * @var array The information of the groups. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupInfos;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total The total number of groups that meet the conditions.
     * @param array $GroupInfos The information of the groups. Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("GroupInfos",$param) and $param["GroupInfos"] !== null) {
            $this->GroupInfos = [];
            foreach ($param["GroupInfos"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->GroupInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
