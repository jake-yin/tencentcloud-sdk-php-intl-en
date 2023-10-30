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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getSecretKey() Obtain 
 * @method void setSecretKey(string $SecretKey) Set 
 * @method integer getExpireTime() Obtain 
 * @method void setExpireTime(integer $ExpireTime) Set 
 * @method array getFileExtensions() Obtain 
 * @method void setFileExtensions(array $FileExtensions) Set 
 * @method string getFilterType() Obtain 
 * @method void setFilterType(string $FilterType) Set 
 * @method string getSignParam() Obtain 
 * @method void setSignParam(string $SignParam) Set 
 * @method string getTimeParam() Obtain 
 * @method void setTimeParam(string $TimeParam) Set 
 * @method string getTimeFormat() Obtain 
 * @method void setTimeFormat(string $TimeFormat) Set 
 * @method string getBackupSecretKey() Obtain 
 * @method void setBackupSecretKey(string $BackupSecretKey) Set 
 */
class AuthenticationTypeD extends AbstractModel
{
    /**
     * @var string 
     */
    public $SecretKey;

    /**
     * @var integer 
     */
    public $ExpireTime;

    /**
     * @var array 
     */
    public $FileExtensions;

    /**
     * @var string 
     */
    public $FilterType;

    /**
     * @var string 
     */
    public $SignParam;

    /**
     * @var string 
     */
    public $TimeParam;

    /**
     * @var string 
     */
    public $TimeFormat;

    /**
     * @var string 
     */
    public $BackupSecretKey;

    /**
     * @param string $SecretKey 
     * @param integer $ExpireTime 
     * @param array $FileExtensions 
     * @param string $FilterType 
     * @param string $SignParam 
     * @param string $TimeParam 
     * @param string $TimeFormat 
     * @param string $BackupSecretKey 
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
        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("FileExtensions",$param) and $param["FileExtensions"] !== null) {
            $this->FileExtensions = $param["FileExtensions"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("SignParam",$param) and $param["SignParam"] !== null) {
            $this->SignParam = $param["SignParam"];
        }

        if (array_key_exists("TimeParam",$param) and $param["TimeParam"] !== null) {
            $this->TimeParam = $param["TimeParam"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("BackupSecretKey",$param) and $param["BackupSecretKey"] !== null) {
            $this->BackupSecretKey = $param["BackupSecretKey"];
        }
    }
}
