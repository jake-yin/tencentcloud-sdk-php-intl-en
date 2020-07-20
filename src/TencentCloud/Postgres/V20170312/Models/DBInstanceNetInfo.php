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
 * Instance network connection information.
 *
 * @method string getAddress() Obtain DNS domain name
 * @method void setAddress(string $Address) Set DNS domain name
 * @method string getIp() Obtain IP address
 * @method void setIp(string $Ip) Set IP address
 * @method integer getPort() Obtain Connection port address
 * @method void setPort(integer $Port) Set Connection port address
 * @method string getNetType() Obtain Network type. Valid values: inner (private address of classic network), private (private address of VPC), public (public address of classic network/VPC)
 * @method void setNetType(string $NetType) Set Network type. Valid values: inner (private address of classic network), private (private address of VPC), public (public address of classic network/VPC)
 * @method string getStatus() Obtain Network connection status
 * @method void setStatus(string $Status) Set Network connection status
 */
class DBInstanceNetInfo extends AbstractModel
{
    /**
     * @var string DNS domain name
     */
    public $Address;

    /**
     * @var string IP address
     */
    public $Ip;

    /**
     * @var integer Connection port address
     */
    public $Port;

    /**
     * @var string Network type. Valid values: inner (private address of classic network), private (private address of VPC), public (public address of classic network/VPC)
     */
    public $NetType;

    /**
     * @var string Network connection status
     */
    public $Status;

    /**
     * @param string $Address DNS domain name
     * @param string $Ip IP address
     * @param integer $Port Connection port address
     * @param string $NetType Network type. Valid values: inner (private address of classic network), private (private address of VPC), public (public address of classic network/VPC)
     * @param string $Status Network connection status
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
