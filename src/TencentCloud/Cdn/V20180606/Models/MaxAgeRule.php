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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getMaxAgeType() Obtain Rule types:
all: all files take effect
file: specified file suffixes take effect
directory: specified paths take effect
path: specified absolute paths take effect
 * @method void setMaxAgeType(string $MaxAgeType) Set Rule types:
all: all files take effect
file: specified file suffixes take effect
directory: specified paths take effect
path: specified absolute paths take effect
 * @method array getMaxAgeContents() Obtain Matching content under the corresponding types for MaxAgeType:
For "all", enter an asterisk (*).
For "file", enter the suffix, such as jpg, txt.
For "directory", enter the path, such as /xxx/test/.
For "path", enter the corresponding absolute path, such as /xxx/test.html.
 * @method void setMaxAgeContents(array $MaxAgeContents) Set Matching content under the corresponding types for MaxAgeType:
For "all", enter an asterisk (*).
For "file", enter the suffix, such as jpg, txt.
For "directory", enter the path, such as /xxx/test/.
For "path", enter the corresponding absolute path, such as /xxx/test.html.
 * @method integer getMaxAgeTime() Obtain MaxAge time settings (in seconds)
 * @method void setMaxAgeTime(integer $MaxAgeTime) Set MaxAge time settings (in seconds)
 */

/**
 *MaxAge rules configuration
 */
class MaxAgeRule extends AbstractModel
{
    /**
     * @var string Rule types:
all: all files take effect
file: specified file suffixes take effect
directory: specified paths take effect
path: specified absolute paths take effect
     */
    public $MaxAgeType;

    /**
     * @var array Matching content under the corresponding types for MaxAgeType:
For "all", enter an asterisk (*).
For "file", enter the suffix, such as jpg, txt.
For "directory", enter the path, such as /xxx/test/.
For "path", enter the corresponding absolute path, such as /xxx/test.html.
     */
    public $MaxAgeContents;

    /**
     * @var integer MaxAge time settings (in seconds)
     */
    public $MaxAgeTime;
    /**
     * @param string $MaxAgeType Rule types:
all: all files take effect
file: specified file suffixes take effect
directory: specified paths take effect
path: specified absolute paths take effect
     * @param array $MaxAgeContents Matching content under the corresponding types for MaxAgeType:
For "all", enter an asterisk (*).
For "file", enter the suffix, such as jpg, txt.
For "directory", enter the path, such as /xxx/test/.
For "path", enter the corresponding absolute path, such as /xxx/test.html.
     * @param integer $MaxAgeTime MaxAge time settings (in seconds)
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
        if (array_key_exists("MaxAgeType",$param) and $param["MaxAgeType"] !== null) {
            $this->MaxAgeType = $param["MaxAgeType"];
        }

        if (array_key_exists("MaxAgeContents",$param) and $param["MaxAgeContents"] !== null) {
            $this->MaxAgeContents = $param["MaxAgeContents"];
        }

        if (array_key_exists("MaxAgeTime",$param) and $param["MaxAgeTime"] !== null) {
            $this->MaxAgeTime = $param["MaxAgeTime"];
        }
    }
}
