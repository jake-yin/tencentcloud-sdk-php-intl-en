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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyCardVerification response structure.
 *
 * @method string getCardVerificationToken() Obtain The token used to identify an verification process. It can be used to get the verification result after the process is completed.
 * @method void setCardVerificationToken(string $CardVerificationToken) Set The token used to identify an verification process. It can be used to get the verification result after the process is completed.
 * @method integer getAsyncCardVerificationMaxPollingTimes() Obtain The maximum number of polls for calling the pull result interface polling.
 * @method void setAsyncCardVerificationMaxPollingTimes(integer $AsyncCardVerificationMaxPollingTimes) Set The maximum number of polls for calling the pull result interface polling.
 * @method integer getAsyncCardVerificationPollingWaitTime() Obtain The interval for polling when calling the pull result interface (in seconds).
 * @method void setAsyncCardVerificationPollingWaitTime(integer $AsyncCardVerificationPollingWaitTime) Set The interval for polling when calling the pull result interface (in seconds).
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ApplyCardVerificationResponse extends AbstractModel
{
    /**
     * @var string The token used to identify an verification process. It can be used to get the verification result after the process is completed.
     */
    public $CardVerificationToken;

    /**
     * @var integer The maximum number of polls for calling the pull result interface polling.
     */
    public $AsyncCardVerificationMaxPollingTimes;

    /**
     * @var integer The interval for polling when calling the pull result interface (in seconds).
     */
    public $AsyncCardVerificationPollingWaitTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CardVerificationToken The token used to identify an verification process. It can be used to get the verification result after the process is completed.
     * @param integer $AsyncCardVerificationMaxPollingTimes The maximum number of polls for calling the pull result interface polling.
     * @param integer $AsyncCardVerificationPollingWaitTime The interval for polling when calling the pull result interface (in seconds).
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
        if (array_key_exists("CardVerificationToken",$param) and $param["CardVerificationToken"] !== null) {
            $this->CardVerificationToken = $param["CardVerificationToken"];
        }

        if (array_key_exists("AsyncCardVerificationMaxPollingTimes",$param) and $param["AsyncCardVerificationMaxPollingTimes"] !== null) {
            $this->AsyncCardVerificationMaxPollingTimes = $param["AsyncCardVerificationMaxPollingTimes"];
        }

        if (array_key_exists("AsyncCardVerificationPollingWaitTime",$param) and $param["AsyncCardVerificationPollingWaitTime"] !== null) {
            $this->AsyncCardVerificationPollingWaitTime = $param["AsyncCardVerificationPollingWaitTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
