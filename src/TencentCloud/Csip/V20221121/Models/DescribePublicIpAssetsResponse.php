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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublicIpAssets response structure.
 *
 * @method array getData() Obtain Data list
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set Data list
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getTotal() Obtain Total number of results
 * @method void setTotal(integer $Total) Set Total number of results
 * @method array getAssetLocationList() Obtain List of asset locations
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetLocationList(array $AssetLocationList) Set List of asset locations
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getIpTypeList() Obtain List of IP types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIpTypeList(array $IpTypeList) Set List of IP types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getRegionList() Obtain List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setRegionList(array $RegionList) Set List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getDefenseStatusList() Obtain List of protection status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDefenseStatusList(array $DefenseStatusList) Set List of protection status
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getAssetTypeList() Obtain List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAssetTypeList(array $AssetTypeList) Set List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getAppIdList() Obtain List of AppIds 
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAppIdList(array $AppIdList) Set List of AppIds 
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePublicIpAssetsResponse extends AbstractModel
{
    /**
     * @var array Data list
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var integer Total number of results
     */
    public $Total;

    /**
     * @var array List of asset locations
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetLocationList;

    /**
     * @var array List of IP types
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IpTypeList;

    /**
     * @var array List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $RegionList;

    /**
     * @var array List of protection status
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $DefenseStatusList;

    /**
     * @var array List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AssetTypeList;

    /**
     * @var array List of AppIds 
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AppIdList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Data Data list
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $Total Total number of results
     * @param array $AssetLocationList List of asset locations
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $IpTypeList List of IP types
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $RegionList List of regions
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $DefenseStatusList List of protection status
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $AssetTypeList List of asset types
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $AppIdList List of AppIds 
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new IpAssetListVO();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AssetLocationList",$param) and $param["AssetLocationList"] !== null) {
            $this->AssetLocationList = [];
            foreach ($param["AssetLocationList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AssetLocationList, $obj);
            }
        }

        if (array_key_exists("IpTypeList",$param) and $param["IpTypeList"] !== null) {
            $this->IpTypeList = [];
            foreach ($param["IpTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->IpTypeList, $obj);
            }
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = [];
            foreach ($param["RegionList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->RegionList, $obj);
            }
        }

        if (array_key_exists("DefenseStatusList",$param) and $param["DefenseStatusList"] !== null) {
            $this->DefenseStatusList = [];
            foreach ($param["DefenseStatusList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->DefenseStatusList, $obj);
            }
        }

        if (array_key_exists("AssetTypeList",$param) and $param["AssetTypeList"] !== null) {
            $this->AssetTypeList = [];
            foreach ($param["AssetTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AssetTypeList, $obj);
            }
        }

        if (array_key_exists("AppIdList",$param) and $param["AppIdList"] !== null) {
            $this->AppIdList = [];
            foreach ($param["AppIdList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AppIdList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
