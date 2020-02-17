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
 * @method string getClusterId() Obtain Cluster ID. Enter the ClusterId field returned by the DescribeClusters API
 * @method void setClusterId(string $ClusterId) Set Cluster ID. Enter the ClusterId field returned by the DescribeClusters API
 * @method string getRunInstancePara() Obtain Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the [RunInstances](https://cloud.tencent.com/document/product/213/15730) API.
 * @method void setRunInstancePara(string $RunInstancePara) Set Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the [RunInstances](https://cloud.tencent.com/document/product/213/15730) API.
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() Obtain Additional parameter to be set for the instance
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) Set Additional parameter to be set for the instance
 */

/**
 *CreateClusterInstances request structure.
 */
class CreateClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID. Enter the ClusterId field returned by the DescribeClusters API
     */
    public $ClusterId;

    /**
     * @var string Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the [RunInstances](https://cloud.tencent.com/document/product/213/15730) API.
     */
    public $RunInstancePara;

    /**
     * @var InstanceAdvancedSettings Additional parameter to be set for the instance
     */
    public $InstanceAdvancedSettings;
    /**
     * @param string $ClusterId Cluster ID. Enter the ClusterId field returned by the DescribeClusters API
     * @param string $RunInstancePara Pass-through parameter for CVM creation in the format of a JSON string. For more information, see the [RunInstances](https://cloud.tencent.com/document/product/213/15730) API.
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings Additional parameter to be set for the instance
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RunInstancePara",$param) and $param["RunInstancePara"] !== null) {
            $this->RunInstancePara = $param["RunInstancePara"];
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }
    }
}
