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
 * UpdateCertificateInstance response structure.
 *
 * @method integer getDeployRecordId() Obtain Cloud resource deployment task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDeployRecordId(integer $DeployRecordId) Set Cloud resource deployment task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDeployStatus() Obtain Deployment status. 1 indicates that the deployment succeeded, and 0 indicates that the deployment failed.
 * @method void setDeployStatus(integer $DeployStatus) Set Deployment status. 1 indicates that the deployment succeeded, and 0 indicates that the deployment failed.
 * @method array getUpdateSyncProgress() Obtain 
 * @method void setUpdateSyncProgress(array $UpdateSyncProgress) Set 
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class UpdateCertificateInstanceResponse extends AbstractModel
{
    /**
     * @var integer Cloud resource deployment task ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DeployRecordId;

    /**
     * @var integer Deployment status. 1 indicates that the deployment succeeded, and 0 indicates that the deployment failed.
     */
    public $DeployStatus;

    /**
     * @var array 
     */
    public $UpdateSyncProgress;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $DeployRecordId Cloud resource deployment task ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DeployStatus Deployment status. 1 indicates that the deployment succeeded, and 0 indicates that the deployment failed.
     * @param array $UpdateSyncProgress 
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
        if (array_key_exists("DeployRecordId",$param) and $param["DeployRecordId"] !== null) {
            $this->DeployRecordId = $param["DeployRecordId"];
        }

        if (array_key_exists("DeployStatus",$param) and $param["DeployStatus"] !== null) {
            $this->DeployStatus = $param["DeployStatus"];
        }

        if (array_key_exists("UpdateSyncProgress",$param) and $param["UpdateSyncProgress"] !== null) {
            $this->UpdateSyncProgress = [];
            foreach ($param["UpdateSyncProgress"] as $key => $value){
                $obj = new UpdateSyncProgress();
                $obj->deserialize($value);
                array_push($this->UpdateSyncProgress, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
