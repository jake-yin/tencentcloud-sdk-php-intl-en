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
 * DescribeAvailableClusterVersion response structure.
 *
 * @method array getVersions() Obtain Upgradable cluster version
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setVersions(array $Versions) Set Upgradable cluster version
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getClusters() Obtain Cluster information
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setClusters(array $Clusters) Set Cluster information
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAvailableClusterVersionResponse extends AbstractModel
{
    /**
     * @var array Upgradable cluster version
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Versions;

    /**
     * @var array Cluster information
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Clusters;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Versions Upgradable cluster version
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $Clusters Cluster information
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("Versions",$param) and $param["Versions"] !== null) {
            $this->Versions = $param["Versions"];
        }

        if (array_key_exists("Clusters",$param) and $param["Clusters"] !== null) {
            $this->Clusters = [];
            foreach ($param["Clusters"] as $key => $value){
                $obj = new ClusterVersion();
                $obj->deserialize($value);
                array_push($this->Clusters, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
