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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteApplication request structure.
 *
 * @method string getApplicationId() Obtain Service ID
 * @method void setApplicationId(string $ApplicationId) Set Service ID
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method integer getSourceChannel() Obtain Retain as default
 * @method void setSourceChannel(integer $SourceChannel) Set Retain as default
 * @method boolean getDeleteApplicationIfNoRunningVersion() Obtain Whether to delete this application automatically when there is no running version.
 * @method void setDeleteApplicationIfNoRunningVersion(boolean $DeleteApplicationIfNoRunningVersion) Set Whether to delete this application automatically when there is no running version.
 */
class DeleteApplicationRequest extends AbstractModel
{
    /**
     * @var string Service ID
     */
    public $ApplicationId;

    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var integer Retain as default
     */
    public $SourceChannel;

    /**
     * @var boolean Whether to delete this application automatically when there is no running version.
     */
    public $DeleteApplicationIfNoRunningVersion;

    /**
     * @param string $ApplicationId Service ID
     * @param string $EnvironmentId Environment ID
     * @param integer $SourceChannel Retain as default
     * @param boolean $DeleteApplicationIfNoRunningVersion Whether to delete this application automatically when there is no running version.
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("DeleteApplicationIfNoRunningVersion",$param) and $param["DeleteApplicationIfNoRunningVersion"] !== null) {
            $this->DeleteApplicationIfNoRunningVersion = $param["DeleteApplicationIfNoRunningVersion"];
        }
    }
}
