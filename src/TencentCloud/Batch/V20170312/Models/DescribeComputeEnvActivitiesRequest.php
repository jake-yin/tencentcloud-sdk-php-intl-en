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
 * @method string getEnvId() Obtain Compute environment ID
 * @method void setEnvId(string $EnvId) Set Compute environment ID
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Number of returned results
 * @method void setLimit(integer $Limit) Set Number of returned results
 * @method Filter getFilters() Obtain Filter
<li> compute-node-id - String - Required: No - (Filter) Filter by compute node ID.</li>
 * @method void setFilters(Filter $Filters) Set Filter
<li> compute-node-id - String - Required: No - (Filter) Filter by compute node ID.</li>
 */

/**
 *DescribeComputeEnvActivities request structure.
 */
class DescribeComputeEnvActivitiesRequest extends AbstractModel
{
    /**
     * @var string Compute environment ID
     */
    public $EnvId;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Number of returned results
     */
    public $Limit;

    /**
     * @var Filter Filter
<li> compute-node-id - String - Required: No - (Filter) Filter by compute node ID.</li>
     */
    public $Filters;
    /**
     * @param string $EnvId Compute environment ID
     * @param integer $Offset Offset
     * @param integer $Limit Number of returned results
     * @param Filter $Filters Filter
<li> compute-node-id - String - Required: No - (Filter) Filter by compute node ID.</li>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filter();
            $this->Filters->deserialize($param["Filters"]);
        }
    }
}
