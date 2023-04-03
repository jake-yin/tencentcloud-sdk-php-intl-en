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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupOverview response structure.
 *
 * @method integer getTotalFreeSize() Obtain Total free space size in bytes
 * @method void setTotalFreeSize(integer $TotalFreeSize) Set Total free space size in bytes
 * @method integer getUsedFreeSize() Obtain Used free space size in bytes
 * @method void setUsedFreeSize(integer $UsedFreeSize) Set Used free space size in bytes
 * @method integer getUsedBillingSize() Obtain Used paid space size in bytes
 * @method void setUsedBillingSize(integer $UsedBillingSize) Set Used paid space size in bytes
 * @method integer getLogBackupCount() Obtain Number of log backups
 * @method void setLogBackupCount(integer $LogBackupCount) Set Number of log backups
 * @method integer getLogBackupSize() Obtain Log backup size in bytes
 * @method void setLogBackupSize(integer $LogBackupSize) Set Log backup size in bytes
 * @method integer getManualBaseBackupCount() Obtain Number of manually created full backups
 * @method void setManualBaseBackupCount(integer $ManualBaseBackupCount) Set Number of manually created full backups
 * @method integer getManualBaseBackupSize() Obtain Size of manually created full backups in bytes
 * @method void setManualBaseBackupSize(integer $ManualBaseBackupSize) Set Size of manually created full backups in bytes
 * @method integer getAutoBaseBackupCount() Obtain Number of automatically created full backups
 * @method void setAutoBaseBackupCount(integer $AutoBaseBackupCount) Set Number of automatically created full backups
 * @method integer getAutoBaseBackupSize() Obtain Size of automatically created full backups in bytes
 * @method void setAutoBaseBackupSize(integer $AutoBaseBackupSize) Set Size of automatically created full backups in bytes
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBackupOverviewResponse extends AbstractModel
{
    /**
     * @var integer Total free space size in bytes
     */
    public $TotalFreeSize;

    /**
     * @var integer Used free space size in bytes
     */
    public $UsedFreeSize;

    /**
     * @var integer Used paid space size in bytes
     */
    public $UsedBillingSize;

    /**
     * @var integer Number of log backups
     */
    public $LogBackupCount;

    /**
     * @var integer Log backup size in bytes
     */
    public $LogBackupSize;

    /**
     * @var integer Number of manually created full backups
     */
    public $ManualBaseBackupCount;

    /**
     * @var integer Size of manually created full backups in bytes
     */
    public $ManualBaseBackupSize;

    /**
     * @var integer Number of automatically created full backups
     */
    public $AutoBaseBackupCount;

    /**
     * @var integer Size of automatically created full backups in bytes
     */
    public $AutoBaseBackupSize;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalFreeSize Total free space size in bytes
     * @param integer $UsedFreeSize Used free space size in bytes
     * @param integer $UsedBillingSize Used paid space size in bytes
     * @param integer $LogBackupCount Number of log backups
     * @param integer $LogBackupSize Log backup size in bytes
     * @param integer $ManualBaseBackupCount Number of manually created full backups
     * @param integer $ManualBaseBackupSize Size of manually created full backups in bytes
     * @param integer $AutoBaseBackupCount Number of automatically created full backups
     * @param integer $AutoBaseBackupSize Size of automatically created full backups in bytes
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
        if (array_key_exists("TotalFreeSize",$param) and $param["TotalFreeSize"] !== null) {
            $this->TotalFreeSize = $param["TotalFreeSize"];
        }

        if (array_key_exists("UsedFreeSize",$param) and $param["UsedFreeSize"] !== null) {
            $this->UsedFreeSize = $param["UsedFreeSize"];
        }

        if (array_key_exists("UsedBillingSize",$param) and $param["UsedBillingSize"] !== null) {
            $this->UsedBillingSize = $param["UsedBillingSize"];
        }

        if (array_key_exists("LogBackupCount",$param) and $param["LogBackupCount"] !== null) {
            $this->LogBackupCount = $param["LogBackupCount"];
        }

        if (array_key_exists("LogBackupSize",$param) and $param["LogBackupSize"] !== null) {
            $this->LogBackupSize = $param["LogBackupSize"];
        }

        if (array_key_exists("ManualBaseBackupCount",$param) and $param["ManualBaseBackupCount"] !== null) {
            $this->ManualBaseBackupCount = $param["ManualBaseBackupCount"];
        }

        if (array_key_exists("ManualBaseBackupSize",$param) and $param["ManualBaseBackupSize"] !== null) {
            $this->ManualBaseBackupSize = $param["ManualBaseBackupSize"];
        }

        if (array_key_exists("AutoBaseBackupCount",$param) and $param["AutoBaseBackupCount"] !== null) {
            $this->AutoBaseBackupCount = $param["AutoBaseBackupCount"];
        }

        if (array_key_exists("AutoBaseBackupSize",$param) and $param["AutoBaseBackupSize"] !== null) {
            $this->AutoBaseBackupSize = $param["AutoBaseBackupSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
