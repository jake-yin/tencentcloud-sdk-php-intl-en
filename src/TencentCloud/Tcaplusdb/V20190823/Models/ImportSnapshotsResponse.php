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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportSnapshots response structure.
 *
 * @method string getTaskId() Obtain `TaskId` is in the format of `AppInstanceId-taskId`, used to identify tasks of different clusters.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set `TaskId` is in the format of `AppInstanceId-taskId`, used to identify tasks of different clusters.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getApplicationId() Obtain `ApplicationId` is in the format of `AppInstanceId-applicationId`, which is used to identify applications of different clusters.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set `ApplicationId` is in the format of `AppInstanceId-applicationId`, which is used to identify applications of different clusters.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ImportSnapshotsResponse extends AbstractModel
{
    /**
     * @var string `TaskId` is in the format of `AppInstanceId-taskId`, used to identify tasks of different clusters.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string `ApplicationId` is in the format of `AppInstanceId-applicationId`, which is used to identify applications of different clusters.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TaskId `TaskId` is in the format of `AppInstanceId-taskId`, used to identify tasks of different clusters.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $ApplicationId `ApplicationId` is in the format of `AppInstanceId-applicationId`, which is used to identify applications of different clusters.
Note: u200dThis field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
