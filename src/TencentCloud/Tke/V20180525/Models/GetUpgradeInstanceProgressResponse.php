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
 * GetUpgradeInstanceProgress response structure.
 *
 * @method integer getTotal() Obtain Total nodes to upgrade
 * @method void setTotal(integer $Total) Set Total nodes to upgrade
 * @method integer getDone() Obtain Total upgraded nodes
 * @method void setDone(integer $Done) Set Total upgraded nodes
 * @method string getLifeState() Obtain The lifecycle of the upgrade task
process: running
paused: stopped
pausing: stopping
done: completed
timeout: timed out
aborted: canceled
 * @method void setLifeState(string $LifeState) Set The lifecycle of the upgrade task
process: running
paused: stopped
pausing: stopping
done: completed
timeout: timed out
aborted: canceled
 * @method array getInstances() Obtain Details of upgrade progress of each node
 * @method void setInstances(array $Instances) Set Details of upgrade progress of each node
 * @method InstanceUpgradeClusterStatus getClusterStatus() Obtain Current cluster status
 * @method void setClusterStatus(InstanceUpgradeClusterStatus $ClusterStatus) Set Current cluster status
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetUpgradeInstanceProgressResponse extends AbstractModel
{
    /**
     * @var integer Total nodes to upgrade
     */
    public $Total;

    /**
     * @var integer Total upgraded nodes
     */
    public $Done;

    /**
     * @var string The lifecycle of the upgrade task
process: running
paused: stopped
pausing: stopping
done: completed
timeout: timed out
aborted: canceled
     */
    public $LifeState;

    /**
     * @var array Details of upgrade progress of each node
     */
    public $Instances;

    /**
     * @var InstanceUpgradeClusterStatus Current cluster status
     */
    public $ClusterStatus;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total nodes to upgrade
     * @param integer $Done Total upgraded nodes
     * @param string $LifeState The lifecycle of the upgrade task
process: running
paused: stopped
pausing: stopping
done: completed
timeout: timed out
aborted: canceled
     * @param array $Instances Details of upgrade progress of each node
     * @param InstanceUpgradeClusterStatus $ClusterStatus Current cluster status
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Done",$param) and $param["Done"] !== null) {
            $this->Done = $param["Done"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new InstanceUpgradeProgressItem();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = new InstanceUpgradeClusterStatus();
            $this->ClusterStatus->deserialize($param["ClusterStatus"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
