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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getStatus() Obtain Check task status: unavailable, starting, running, finished
 * @method void setStatus(string $Status) Set Check task status: unavailable, starting, running, finished
 * @method integer getErrorCode() Obtain Task error code
 * @method void setErrorCode(integer $ErrorCode) Set Task error code
 * @method string getErrorMessage() Obtain Task error message
 * @method void setErrorMessage(string $ErrorMessage) Set Task error message
 * @method string getProgress() Obtain Check task progress. For example, "30" means 30% completed
 * @method void setProgress(string $Progress) Set Check task progress. For example, "30" means 30% completed
 * @method integer getCheckFlag() Obtain Whether the check succeeds. 0: no; 1: yes; 3: not checked
 * @method void setCheckFlag(integer $CheckFlag) Set Whether the check succeeds. 0: no; 1: yes; 3: not checked
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeMigrateCheckJob response structure.
 */
class DescribeMigrateCheckJobResponse extends AbstractModel
{
    /**
     * @var string Check task status: unavailable, starting, running, finished
     */
    public $Status;

    /**
     * @var integer Task error code
     */
    public $ErrorCode;

    /**
     * @var string Task error message
     */
    public $ErrorMessage;

    /**
     * @var string Check task progress. For example, "30" means 30% completed
     */
    public $Progress;

    /**
     * @var integer Whether the check succeeds. 0: no; 1: yes; 3: not checked
     */
    public $CheckFlag;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $Status Check task status: unavailable, starting, running, finished
     * @param integer $ErrorCode Task error code
     * @param string $ErrorMessage Task error message
     * @param string $Progress Check task progress. For example, "30" means 30% completed
     * @param integer $CheckFlag Whether the check succeeds. 0: no; 1: yes; 3: not checked
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CheckFlag",$param) and $param["CheckFlag"] !== null) {
            $this->CheckFlag = $param["CheckFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
