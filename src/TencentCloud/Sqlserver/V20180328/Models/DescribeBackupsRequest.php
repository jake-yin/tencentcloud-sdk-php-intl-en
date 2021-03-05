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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackups request structure.
 *
 * @method string getStartTime() Obtain Start name (yyyy-MM-dd HH:mm:ss)
 * @method void setStartTime(string $StartTime) Set Start name (yyyy-MM-dd HH:mm:ss)
 * @method string getEndTime() Obtain End time (yyyy-MM-dd HH:mm:ss)
 * @method void setEndTime(string $EndTime) Set End time (yyyy-MM-dd HH:mm:ss)
 * @method string getInstanceId() Obtain Instance ID in the format of mssql-njj2mtpl
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of mssql-njj2mtpl
 * @method integer getLimit() Obtain Number of results per page. Value range: 1-100. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of results per page. Value range: 1-100. Default value: 20
 * @method integer getOffset() Obtain Page number. Default value: 0
 * @method void setOffset(integer $Offset) Set Page number. Default value: 0
 * @method string getBackupName() Obtain Filter by backup name. If this parameter is left empty, backup name will not be used in filtering.
 * @method void setBackupName(string $BackupName) Set Filter by backup name. If this parameter is left empty, backup name will not be used in filtering.
 * @method integer getStrategy() Obtain Filter by backup policy. Valid values: 0 (instance backup), 1 (multi-database backup). If this parameter is left empty, backup policy will not be used in filtering.
 * @method void setStrategy(integer $Strategy) Set Filter by backup policy. Valid values: 0 (instance backup), 1 (multi-database backup). If this parameter is left empty, backup policy will not be used in filtering.
 * @method integer getBackupWay() Obtain Filter by backup mode. Valid values: 0 (automatic backup on a regular basis), 1 (manual backup performed by the user at any time). If this parameter is left empty, backup mode will not be used in filtering.
 * @method void setBackupWay(integer $BackupWay) Set Filter by backup mode. Valid values: 0 (automatic backup on a regular basis), 1 (manual backup performed by the user at any time). If this parameter is left empty, backup mode will not be used in filtering.
 * @method integer getBackupId() Obtain Filter by backup ID. If this parameter is left empty, backup ID will not be used in filtering.
 * @method void setBackupId(integer $BackupId) Set Filter by backup ID. If this parameter is left empty, backup ID will not be used in filtering.
 * @method string getDatabaseName() Obtain Filter backups by the database name. If the parameter is left empty, this filter criteria will not take effect.
 * @method void setDatabaseName(string $DatabaseName) Set Filter backups by the database name. If the parameter is left empty, this filter criteria will not take effect.
 */
class DescribeBackupsRequest extends AbstractModel
{
    /**
     * @var string Start name (yyyy-MM-dd HH:mm:ss)
     */
    public $StartTime;

    /**
     * @var string End time (yyyy-MM-dd HH:mm:ss)
     */
    public $EndTime;

    /**
     * @var string Instance ID in the format of mssql-njj2mtpl
     */
    public $InstanceId;

    /**
     * @var integer Number of results per page. Value range: 1-100. Default value: 20
     */
    public $Limit;

    /**
     * @var integer Page number. Default value: 0
     */
    public $Offset;

    /**
     * @var string Filter by backup name. If this parameter is left empty, backup name will not be used in filtering.
     */
    public $BackupName;

    /**
     * @var integer Filter by backup policy. Valid values: 0 (instance backup), 1 (multi-database backup). If this parameter is left empty, backup policy will not be used in filtering.
     */
    public $Strategy;

    /**
     * @var integer Filter by backup mode. Valid values: 0 (automatic backup on a regular basis), 1 (manual backup performed by the user at any time). If this parameter is left empty, backup mode will not be used in filtering.
     */
    public $BackupWay;

    /**
     * @var integer Filter by backup ID. If this parameter is left empty, backup ID will not be used in filtering.
     */
    public $BackupId;

    /**
     * @var string Filter backups by the database name. If the parameter is left empty, this filter criteria will not take effect.
     */
    public $DatabaseName;

    /**
     * @param string $StartTime Start name (yyyy-MM-dd HH:mm:ss)
     * @param string $EndTime End time (yyyy-MM-dd HH:mm:ss)
     * @param string $InstanceId Instance ID in the format of mssql-njj2mtpl
     * @param integer $Limit Number of results per page. Value range: 1-100. Default value: 20
     * @param integer $Offset Page number. Default value: 0
     * @param string $BackupName Filter by backup name. If this parameter is left empty, backup name will not be used in filtering.
     * @param integer $Strategy Filter by backup policy. Valid values: 0 (instance backup), 1 (multi-database backup). If this parameter is left empty, backup policy will not be used in filtering.
     * @param integer $BackupWay Filter by backup mode. Valid values: 0 (automatic backup on a regular basis), 1 (manual backup performed by the user at any time). If this parameter is left empty, backup mode will not be used in filtering.
     * @param integer $BackupId Filter by backup ID. If this parameter is left empty, backup ID will not be used in filtering.
     * @param string $DatabaseName Filter backups by the database name. If the parameter is left empty, this filter criteria will not take effect.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("BackupWay",$param) and $param["BackupWay"] !== null) {
            $this->BackupWay = $param["BackupWay"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }
    }
}
