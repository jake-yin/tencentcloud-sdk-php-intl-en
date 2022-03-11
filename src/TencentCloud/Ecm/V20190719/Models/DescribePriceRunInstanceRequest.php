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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePriceRunInstance request structure.
 *
 * @method string getInstanceType() Obtain Instance model information
 * @method void setInstanceType(string $InstanceType) Set Instance model information
 * @method SystemDisk getSystemDisk() Obtain System disk information
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set System disk information
 * @method integer getInstanceCount() Obtain Number of instances
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances
 * @method array getDataDisk() Obtain Data disk information
 * @method void setDataDisk(array $DataDisk) Set Data disk information
 */
class DescribePriceRunInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance model information
     */
    public $InstanceType;

    /**
     * @var SystemDisk System disk information
     */
    public $SystemDisk;

    /**
     * @var integer Number of instances
     */
    public $InstanceCount;

    /**
     * @var array Data disk information
     */
    public $DataDisk;

    /**
     * @param string $InstanceType Instance model information
     * @param SystemDisk $SystemDisk System disk information
     * @param integer $InstanceCount Number of instances
     * @param array $DataDisk Data disk information
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = [];
            foreach ($param["DataDisk"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisk, $obj);
            }
        }
    }
}
