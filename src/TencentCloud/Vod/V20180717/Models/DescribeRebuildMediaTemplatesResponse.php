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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRebuildMediaTemplates response structure.
 *
 * @method integer getTotalCount() Obtain The total number of records that meet the conditions.
 * @method void setTotalCount(integer $TotalCount) Set The total number of records that meet the conditions.
 * @method array getRebuildMediaTemplateSet() Obtain The details of the remaster templates.
 * @method void setRebuildMediaTemplateSet(array $RebuildMediaTemplateSet) Set The details of the remaster templates.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRebuildMediaTemplatesResponse extends AbstractModel
{
    /**
     * @var integer The total number of records that meet the conditions.
     */
    public $TotalCount;

    /**
     * @var array The details of the remaster templates.
     */
    public $RebuildMediaTemplateSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The total number of records that meet the conditions.
     * @param array $RebuildMediaTemplateSet The details of the remaster templates.
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

        if (array_key_exists("RebuildMediaTemplateSet",$param) and $param["RebuildMediaTemplateSet"] !== null) {
            $this->RebuildMediaTemplateSet = [];
            foreach ($param["RebuildMediaTemplateSet"] as $key => $value){
                $obj = new RebuildMediaTemplate();
                $obj->deserialize($value);
                array_push($this->RebuildMediaTemplateSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
