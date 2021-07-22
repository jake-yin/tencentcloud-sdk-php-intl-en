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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark configuration details
 *
 * @method WaterPrintConfig getWaterPrintConfig() Obtain Watermark configuration
 * @method void setWaterPrintConfig(WaterPrintConfig $WaterPrintConfig) Set Watermark configuration
 * @method array getInstanceDetailList() Obtain Anti-DDoS instance configured
 * @method void setInstanceDetailList(array $InstanceDetailList) Set Anti-DDoS instance configured
 */
class WaterPrintRelation extends AbstractModel
{
    /**
     * @var WaterPrintConfig Watermark configuration
     */
    public $WaterPrintConfig;

    /**
     * @var array Anti-DDoS instance configured
     */
    public $InstanceDetailList;

    /**
     * @param WaterPrintConfig $WaterPrintConfig Watermark configuration
     * @param array $InstanceDetailList Anti-DDoS instance configured
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
        if (array_key_exists("WaterPrintConfig",$param) and $param["WaterPrintConfig"] !== null) {
            $this->WaterPrintConfig = new WaterPrintConfig();
            $this->WaterPrintConfig->deserialize($param["WaterPrintConfig"]);
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }
    }
}
