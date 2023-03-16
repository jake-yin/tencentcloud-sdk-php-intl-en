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
 * CheckInstancesUpgradeAble response structure.
 *
 * @method string getClusterVersion() Obtain The current minor version of cluster Master
 * @method void setClusterVersion(string $ClusterVersion) Set The current minor version of cluster Master
 * @method string getLatestVersion() Obtain The latest minor version of cluster Master corresponding major version
 * @method void setLatestVersion(string $LatestVersion) Set The latest minor version of cluster Master corresponding major version
 * @method array getUpgradeAbleInstances() Obtain List of nodes that can be upgraded
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setUpgradeAbleInstances(array $UpgradeAbleInstances) Set List of nodes that can be upgraded
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getTotal() Obtain Total number
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setTotal(integer $Total) Set Total number
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getUnavailableVersionReason() Obtain Reason why the upgrade is not available
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnavailableVersionReason(array $UnavailableVersionReason) Set Reason why the upgrade is not available
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CheckInstancesUpgradeAbleResponse extends AbstractModel
{
    /**
     * @var string The current minor version of cluster Master
     */
    public $ClusterVersion;

    /**
     * @var string The latest minor version of cluster Master corresponding major version
     */
    public $LatestVersion;

    /**
     * @var array List of nodes that can be upgraded
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $UpgradeAbleInstances;

    /**
     * @var integer Total number
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Total;

    /**
     * @var array Reason why the upgrade is not available
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnavailableVersionReason;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ClusterVersion The current minor version of cluster Master
     * @param string $LatestVersion The latest minor version of cluster Master corresponding major version
     * @param array $UpgradeAbleInstances List of nodes that can be upgraded
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $Total Total number
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $UnavailableVersionReason Reason why the upgrade is not available
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("UpgradeAbleInstances",$param) and $param["UpgradeAbleInstances"] !== null) {
            $this->UpgradeAbleInstances = [];
            foreach ($param["UpgradeAbleInstances"] as $key => $value){
                $obj = new UpgradeAbleInstancesItem();
                $obj->deserialize($value);
                array_push($this->UpgradeAbleInstances, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("UnavailableVersionReason",$param) and $param["UnavailableVersionReason"] !== null) {
            $this->UnavailableVersionReason = [];
            foreach ($param["UnavailableVersionReason"] as $key => $value){
                $obj = new UnavailableReason();
                $obj->deserialize($value);
                array_push($this->UnavailableVersionReason, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
