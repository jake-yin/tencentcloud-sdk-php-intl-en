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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupUrl response structure.
 *
 * @method array getDownloadUrl() Obtain Download address on the public network (valid for 6 hours)
 * @method void setDownloadUrl(array $DownloadUrl) Set Download address on the public network (valid for 6 hours)
 * @method array getInnerDownloadUrl() Obtain Download address on the private network (valid for 6 hours)
 * @method void setInnerDownloadUrl(array $InnerDownloadUrl) Set Download address on the private network (valid for 6 hours)
 * @method array getFilenames() Obtain File name (only valid for TencentDB for Tendis instances)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFilenames(array $Filenames) Set File name (only valid for TencentDB for Tendis instances)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getBackupInfos() Obtain List of backup file information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setBackupInfos(array $BackupInfos) Set List of backup file information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBackupUrlResponse extends AbstractModel
{
    /**
     * @var array Download address on the public network (valid for 6 hours)
     */
    public $DownloadUrl;

    /**
     * @var array Download address on the private network (valid for 6 hours)
     */
    public $InnerDownloadUrl;

    /**
     * @var array File name (only valid for TencentDB for Tendis instances)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Filenames;

    /**
     * @var array List of backup file information
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $BackupInfos;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $DownloadUrl Download address on the public network (valid for 6 hours)
     * @param array $InnerDownloadUrl Download address on the private network (valid for 6 hours)
     * @param array $Filenames File name (only valid for TencentDB for Tendis instances)
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $BackupInfos List of backup file information
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("InnerDownloadUrl",$param) and $param["InnerDownloadUrl"] !== null) {
            $this->InnerDownloadUrl = $param["InnerDownloadUrl"];
        }

        if (array_key_exists("Filenames",$param) and $param["Filenames"] !== null) {
            $this->Filenames = $param["Filenames"];
        }

        if (array_key_exists("BackupInfos",$param) and $param["BackupInfos"] !== null) {
            $this->BackupInfos = [];
            foreach ($param["BackupInfos"] as $key => $value){
                $obj = new BackupDownloadInfo();
                $obj->deserialize($value);
                array_push($this->BackupInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
