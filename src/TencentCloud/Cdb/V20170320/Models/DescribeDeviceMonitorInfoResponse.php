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
 * @method DeviceCpuInfo getCpu() Obtain CPU monitoring data of the instance
 * @method void setCpu(DeviceCpuInfo $Cpu) Set CPU monitoring data of the instance
 * @method DeviceMemInfo getMem() Obtain Memory monitoring data of the instance
 * @method void setMem(DeviceMemInfo $Mem) Set Memory monitoring data of the instance
 * @method DeviceNetInfo getNet() Obtain Network monitoring data of the instance
 * @method void setNet(DeviceNetInfo $Net) Set Network monitoring data of the instance
 * @method DeviceDiskInfo getDisk() Obtain Disk monitoring data of the instance
 * @method void setDisk(DeviceDiskInfo $Disk) Set Disk monitoring data of the instance
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeDeviceMonitorInfo response structure.
 */
class DescribeDeviceMonitorInfoResponse extends AbstractModel
{
    /**
     * @var DeviceCpuInfo CPU monitoring data of the instance
     */
    public $Cpu;

    /**
     * @var DeviceMemInfo Memory monitoring data of the instance
     */
    public $Mem;

    /**
     * @var DeviceNetInfo Network monitoring data of the instance
     */
    public $Net;

    /**
     * @var DeviceDiskInfo Disk monitoring data of the instance
     */
    public $Disk;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param DeviceCpuInfo $Cpu CPU monitoring data of the instance
     * @param DeviceMemInfo $Mem Memory monitoring data of the instance
     * @param DeviceNetInfo $Net Network monitoring data of the instance
     * @param DeviceDiskInfo $Disk Disk monitoring data of the instance
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = new DeviceCpuInfo();
            $this->Cpu->deserialize($param["Cpu"]);
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = new DeviceMemInfo();
            $this->Mem->deserialize($param["Mem"]);
        }

        if (array_key_exists("Net",$param) and $param["Net"] !== null) {
            $this->Net = new DeviceNetInfo();
            $this->Net->deserialize($param["Net"]);
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = new DeviceDiskInfo();
            $this->Disk->deserialize($param["Disk"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
