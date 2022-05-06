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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log context information
 *
 * @method string getSource() Obtain Log source device
 * @method void setSource(string $Source) Set Log source device
 * @method string getFilename() Obtain Collection path
 * @method void setFilename(string $Filename) Set Collection path
 * @method string getContent() Obtain Log content
 * @method void setContent(string $Content) Set Log content
 * @method string getPkgId() Obtain Log package number
 * @method void setPkgId(string $PkgId) Set Log package number
 * @method integer getPkgLogId() Obtain Log number in log package
 * @method void setPkgLogId(integer $PkgLogId) Set Log number in log package
 * @method integer getBTime() Obtain Log timestamp
 * @method void setBTime(integer $BTime) Set Log timestamp
 * @method string getHostName() Obtain Source host name of logs
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setHostName(string $HostName) Set Source host name of logs
Note: This field may return `null`, indicating that no valid value was found.
 */
class LogContextInfo extends AbstractModel
{
    /**
     * @var string Log source device
     */
    public $Source;

    /**
     * @var string Collection path
     */
    public $Filename;

    /**
     * @var string Log content
     */
    public $Content;

    /**
     * @var string Log package number
     */
    public $PkgId;

    /**
     * @var integer Log number in log package
     */
    public $PkgLogId;

    /**
     * @var integer Log timestamp
     */
    public $BTime;

    /**
     * @var string Source host name of logs
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $HostName;

    /**
     * @param string $Source Log source device
     * @param string $Filename Collection path
     * @param string $Content Log content
     * @param string $PkgId Log package number
     * @param integer $PkgLogId Log number in log package
     * @param integer $BTime Log timestamp
     * @param string $HostName Source host name of logs
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Filename",$param) and $param["Filename"] !== null) {
            $this->Filename = $param["Filename"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("BTime",$param) and $param["BTime"] !== null) {
            $this->BTime = $param["BTime"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }
    }
}
