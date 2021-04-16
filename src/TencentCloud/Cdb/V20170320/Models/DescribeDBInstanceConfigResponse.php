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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceConfig response structure.
 *
 * @method integer getProtectMode() Obtain Data protection mode of the primary instance. Value range: 0 (async replication), 1 (semi-sync replication), 2 (strong sync replication).
 * @method void setProtectMode(integer $ProtectMode) Set Data protection mode of the primary instance. Value range: 0 (async replication), 1 (semi-sync replication), 2 (strong sync replication).
 * @method integer getDeployMode() Obtain Master instance deployment mode. Value range: 0 (single-AZ), 1 (multi-AZ)
 * @method void setDeployMode(integer $DeployMode) Set Master instance deployment mode. Value range: 0 (single-AZ), 1 (multi-AZ)
 * @method string getZone() Obtain Instance AZ information in the format of "ap-shanghai-1".
 * @method void setZone(string $Zone) Set Instance AZ information in the format of "ap-shanghai-1".
 * @method SlaveConfig getSlaveConfig() Obtain Configurations of the replica node
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setSlaveConfig(SlaveConfig $SlaveConfig) Set Configurations of the replica node
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method BackupConfig getBackupConfig() Obtain Configurations of the second replica node of a strong-sync instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setBackupConfig(BackupConfig $BackupConfig) Set Configurations of the second replica node of a strong-sync instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method boolean getSwitched() Obtain This parameter is only available for multi-AZ instances. It indicates whether the source AZ is the same as the one specified upon purchase. `true`: not the same, `false`: the same.
 * @method void setSwitched(boolean $Switched) Set This parameter is only available for multi-AZ instances. It indicates whether the source AZ is the same as the one specified upon purchase. `true`: not the same, `false`: the same.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDBInstanceConfigResponse extends AbstractModel
{
    /**
     * @var integer Data protection mode of the primary instance. Value range: 0 (async replication), 1 (semi-sync replication), 2 (strong sync replication).
     */
    public $ProtectMode;

    /**
     * @var integer Master instance deployment mode. Value range: 0 (single-AZ), 1 (multi-AZ)
     */
    public $DeployMode;

    /**
     * @var string Instance AZ information in the format of "ap-shanghai-1".
     */
    public $Zone;

    /**
     * @var SlaveConfig Configurations of the replica node
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $SlaveConfig;

    /**
     * @var BackupConfig Configurations of the second replica node of a strong-sync instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $BackupConfig;

    /**
     * @var boolean This parameter is only available for multi-AZ instances. It indicates whether the source AZ is the same as the one specified upon purchase. `true`: not the same, `false`: the same.
     */
    public $Switched;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ProtectMode Data protection mode of the primary instance. Value range: 0 (async replication), 1 (semi-sync replication), 2 (strong sync replication).
     * @param integer $DeployMode Master instance deployment mode. Value range: 0 (single-AZ), 1 (multi-AZ)
     * @param string $Zone Instance AZ information in the format of "ap-shanghai-1".
     * @param SlaveConfig $SlaveConfig Configurations of the replica node
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param BackupConfig $BackupConfig Configurations of the second replica node of a strong-sync instance
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param boolean $Switched This parameter is only available for multi-AZ instances. It indicates whether the source AZ is the same as the one specified upon purchase. `true`: not the same, `false`: the same.
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
        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SlaveConfig",$param) and $param["SlaveConfig"] !== null) {
            $this->SlaveConfig = new SlaveConfig();
            $this->SlaveConfig->deserialize($param["SlaveConfig"]);
        }

        if (array_key_exists("BackupConfig",$param) and $param["BackupConfig"] !== null) {
            $this->BackupConfig = new BackupConfig();
            $this->BackupConfig->deserialize($param["BackupConfig"]);
        }

        if (array_key_exists("Switched",$param) and $param["Switched"] !== null) {
            $this->Switched = $param["Switched"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
