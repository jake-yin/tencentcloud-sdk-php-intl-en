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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TSE instance details - asynchronously associated cloud resource data structure
 *
 * @method array getInstanceList() Obtain TSE instance details
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceList(array $InstanceList) Set TSE instance details
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTotalCount() Obtain Total TSE instances in this region	
 * @method void setTotalCount(integer $TotalCount) Set Total TSE instances in this region	
 * @method string getRegion() Obtain Region	
 * @method void setRegion(string $Region) Set Region	
 */
class TSEInstanceList extends AbstractModel
{
    /**
     * @var array TSE instance details
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceList;

    /**
     * @var integer Total TSE instances in this region	
     */
    public $TotalCount;

    /**
     * @var string Region	
     */
    public $Region;

    /**
     * @param array $InstanceList TSE instance details
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TotalCount Total TSE instances in this region	
     * @param string $Region Region	
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
        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new TSEInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
