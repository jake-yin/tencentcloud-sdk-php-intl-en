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
 * DescribeCertificateOperateLogs response structure.
 *
 * @method integer getAllTotal() Obtain Total number of logs that meet query conditions
 * @method void setAllTotal(integer $AllTotal) Set Total number of logs that meet query conditions
 * @method integer getTotalCount() Obtain Number of logs returned for this request
 * @method void setTotalCount(integer $TotalCount) Set Number of logs returned for this request
 * @method array getOperateLogs() Obtain Certificate operation log list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOperateLogs(array $OperateLogs) Set Certificate operation log list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCertificateOperateLogsResponse extends AbstractModel
{
    /**
     * @var integer Total number of logs that meet query conditions
     */
    public $AllTotal;

    /**
     * @var integer Number of logs returned for this request
     */
    public $TotalCount;

    /**
     * @var array Certificate operation log list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OperateLogs;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AllTotal Total number of logs that meet query conditions
     * @param integer $TotalCount Number of logs returned for this request
     * @param array $OperateLogs Certificate operation log list
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AllTotal",$param) and $param["AllTotal"] !== null) {
            $this->AllTotal = $param["AllTotal"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("OperateLogs",$param) and $param["OperateLogs"] !== null) {
            $this->OperateLogs = [];
            foreach ($param["OperateLogs"] as $key => $value){
                $obj = new OperationLog();
                $obj->deserialize($value);
                array_push($this->OperateLogs, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
