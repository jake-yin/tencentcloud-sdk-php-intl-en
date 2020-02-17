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
 * @method string getSwitch() Obtain Status code cache expiration configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Status code cache expiration configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getCacheRules() Obtain Status code cache expiration rules details
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCacheRules(array $CacheRules) Set Status code cache expiration rules details
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Status code cache expiration configuration. 404 status codes are cached for 10 seconds by default
 */
class StatusCodeCache extends AbstractModel
{
    /**
     * @var string Status code cache expiration configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var array Status code cache expiration rules details
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CacheRules;
    /**
     * @param string $Switch Status code cache expiration configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $CacheRules Status code cache expiration rules details
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CacheRules",$param) and $param["CacheRules"] !== null) {
            $this->CacheRules = [];
            foreach ($param["CacheRules"] as $key => $value){
                $obj = new StatusCodeCacheRule();
                $obj->deserialize($value);
                array_push($this->CacheRules, $obj);
            }
        }
    }
}
