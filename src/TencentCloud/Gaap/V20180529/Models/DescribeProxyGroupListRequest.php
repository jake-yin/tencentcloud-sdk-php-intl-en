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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getOffset() Obtain Offset. The default value is 0.
 * @method void setOffset(integer $Offset) Set Offset. The default value is 0.
 * @method integer getLimit() Obtain Number of returned results. The default value is 20. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. The default value is 20. The maximum value is 100.
 * @method integer getProjectId() Obtain Project ID. Value range:
-1: all projects of this user
0: default project
Other values: specified project
 * @method void setProjectId(integer $ProjectId) Set Project ID. Value range:
-1: all projects of this user
0: default project
Other values: specified project
 * @method array getTagSet() Obtain Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the connection groups tagged any of them will be pulled.
 * @method void setTagSet(array $TagSet) Set Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the connection groups tagged any of them will be pulled.
 * @method array getFilters() Obtain Filter conditions.   
The limit on Filter.Values of each request is 5.
RealServerRegion - String - Required: No - Filter by origin server region; Refer to the RegionId in the results returned by DescribeDestRegions API.
 * @method void setFilters(array $Filters) Set Filter conditions.   
The limit on Filter.Values of each request is 5.
RealServerRegion - String - Required: No - Filter by origin server region; Refer to the RegionId in the results returned by DescribeDestRegions API.
 */

/**
 *DescribeProxyGroupList request structure.
 */
class DescribeProxyGroupListRequest extends AbstractModel
{
    /**
     * @var integer Offset. The default value is 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. The default value is 20. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Project ID. Value range:
-1: all projects of this user
0: default project
Other values: specified project
     */
    public $ProjectId;

    /**
     * @var array Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the connection groups tagged any of them will be pulled.
     */
    public $TagSet;

    /**
     * @var array Filter conditions.   
The limit on Filter.Values of each request is 5.
RealServerRegion - String - Required: No - Filter by origin server region; Refer to the RegionId in the results returned by DescribeDestRegions API.
     */
    public $Filters;
    /**
     * @param integer $Offset Offset. The default value is 0.
     * @param integer $Limit Number of returned results. The default value is 20. The maximum value is 100.
     * @param integer $ProjectId Project ID. Value range:
-1: all projects of this user
0: default project
Other values: specified project
     * @param array $TagSet Tag list. If this field exists, the list of the resources with the tag will be pulled.
It supports up to 5 tags. If there are two or more tags, the connection groups tagged any of them will be pulled.
     * @param array $Filters Filter conditions.   
The limit on Filter.Values of each request is 5.
RealServerRegion - String - Required: No - Filter by origin server region; Refer to the RegionId in the results returned by DescribeDestRegions API.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
