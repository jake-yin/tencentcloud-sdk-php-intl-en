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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRegionName() Obtain Region name
 * @method void setRegionName(string $RegionName) Set Region name
 * @method string getArea() Obtain Area
 * @method void setArea(string $Area) Set Area
 * @method integer getIsDefaultRegion() Obtain Whether it is a default region
 * @method void setIsDefaultRegion(integer $IsDefaultRegion) Set Whether it is a default region
 * @method string getRegion() Obtain Region name
 * @method void setRegion(string $Region) Set Region name
 * @method array getZonesConf() Obtain Sale configuration of the AZ
 * @method void setZonesConf(array $ZonesConf) Set Sale configuration of the AZ
 */

/**
 *Sale configuration of the region
 */
class RegionSellConf extends AbstractModel
{
    /**
     * @var string Region name
     */
    public $RegionName;

    /**
     * @var string Area
     */
    public $Area;

    /**
     * @var integer Whether it is a default region
     */
    public $IsDefaultRegion;

    /**
     * @var string Region name
     */
    public $Region;

    /**
     * @var array Sale configuration of the AZ
     */
    public $ZonesConf;
    /**
     * @param string $RegionName Region name
     * @param string $Area Area
     * @param integer $IsDefaultRegion Whether it is a default region
     * @param string $Region Region name
     * @param array $ZonesConf Sale configuration of the AZ
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
        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("IsDefaultRegion",$param) and $param["IsDefaultRegion"] !== null) {
            $this->IsDefaultRegion = $param["IsDefaultRegion"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ZonesConf",$param) and $param["ZonesConf"] !== null) {
            $this->ZonesConf = [];
            foreach ($param["ZonesConf"] as $key => $value){
                $obj = new ZoneSellConf();
                $obj->deserialize($value);
                array_push($this->ZonesConf, $obj);
            }
        }
    }
}
