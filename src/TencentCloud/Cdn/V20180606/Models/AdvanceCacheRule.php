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
 * @method string getCacheType() Obtain Rule types:
all: all files take effect
file: specified file suffixes take effect
directory: specified paths take effect
path: specified absolute paths take effect
default: the cache rules when the origin server has not returned max-age
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCacheType(string $CacheType) Set Rule types:
all: all files take effect
file: specified file suffixes take effect
directory: specified paths take effect
path: specified absolute paths take effect
default: the cache rules when the origin server has not returned max-age
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getCacheContents() Obtain Matching content under the corresponding types:
For "all", enter an asterisk (*).
For "file", enter the suffix, such as jpg, txt.
For "directory", enter the path, such as /xxx/test/.
For "path", enter the corresponding absolute path, such as /xxx/test.html.
For "default", enter "no max-age".
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCacheContents(array $CacheContents) Set Matching content under the corresponding types:
For "all", enter an asterisk (*).
For "file", enter the suffix, such as jpg, txt.
For "directory", enter the path, such as /xxx/test/.
For "path", enter the corresponding absolute path, such as /xxx/test.html.
For "default", enter "no max-age".
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCacheTime() Obtain Cache expiration time
Unit: second. The maximum value is 365 days.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCacheTime(integer $CacheTime) Set Cache expiration time
Unit: second. The maximum value is 365 days.
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Rules of cache configuration advanced version
 */
class AdvanceCacheRule extends AbstractModel
{
    /**
     * @var string Rule types:
all: all files take effect
file: specified file suffixes take effect
directory: specified paths take effect
path: specified absolute paths take effect
default: the cache rules when the origin server has not returned max-age
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CacheType;

    /**
     * @var array Matching content under the corresponding types:
For "all", enter an asterisk (*).
For "file", enter the suffix, such as jpg, txt.
For "directory", enter the path, such as /xxx/test/.
For "path", enter the corresponding absolute path, such as /xxx/test.html.
For "default", enter "no max-age".
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CacheContents;

    /**
     * @var integer Cache expiration time
Unit: second. The maximum value is 365 days.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CacheTime;
    /**
     * @param string $CacheType Rule types:
all: all files take effect
file: specified file suffixes take effect
directory: specified paths take effect
path: specified absolute paths take effect
default: the cache rules when the origin server has not returned max-age
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $CacheContents Matching content under the corresponding types:
For "all", enter an asterisk (*).
For "file", enter the suffix, such as jpg, txt.
For "directory", enter the path, such as /xxx/test/.
For "path", enter the corresponding absolute path, such as /xxx/test.html.
For "default", enter "no max-age".
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CacheTime Cache expiration time
Unit: second. The maximum value is 365 days.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CacheType",$param) and $param["CacheType"] !== null) {
            $this->CacheType = $param["CacheType"];
        }

        if (array_key_exists("CacheContents",$param) and $param["CacheContents"] !== null) {
            $this->CacheContents = $param["CacheContents"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }
    }
}
