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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSourcePath() Obtain Source path
 * @method void setSourcePath(string $SourcePath) Set Source path
 * @method string getDestinationPath() Obtain Destination path
 * @method void setDestinationPath(string $DestinationPath) Set Destination path
 */

/**
 *Output mapping
 */
class OutputMapping extends AbstractModel
{
    /**
     * @var string Source path
     */
    public $SourcePath;

    /**
     * @var string Destination path
     */
    public $DestinationPath;
    /**
     * @param string $SourcePath Source path
     * @param string $DestinationPath Destination path
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
        if (array_key_exists("SourcePath",$param) and $param["SourcePath"] !== null) {
            $this->SourcePath = $param["SourcePath"];
        }

        if (array_key_exists("DestinationPath",$param) and $param["DestinationPath"] !== null) {
            $this->DestinationPath = $param["DestinationPath"];
        }
    }
}
