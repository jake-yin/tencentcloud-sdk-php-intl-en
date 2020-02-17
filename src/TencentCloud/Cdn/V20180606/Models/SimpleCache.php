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
 * @method array getCacheRules() Obtain Cache expiration time rules
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCacheRules(array $CacheRules) Set Cache expiration time rules
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFollowOrigin() Obtain Follows origin server Cache-Control: max-age configurations
on: enabled
off: disabled
If it is enabled, resources that do not match CacheRules rules will be cached by the node according to the max-age value returned by the origin server. Resources that match CacheRules rules will be cached on the node according to the cache expiration time set in CacheRules.
It conflicts with CompareMaxAge. They cannot be enabled at the same time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFollowOrigin(string $FollowOrigin) Set Follows origin server Cache-Control: max-age configurations
on: enabled
off: disabled
If it is enabled, resources that do not match CacheRules rules will be cached by the node according to the max-age value returned by the origin server. Resources that match CacheRules rules will be cached on the node according to the cache expiration time set in CacheRules.
It conflicts with CompareMaxAge. They cannot be enabled at the same time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIgnoreCacheControl() Obtain Forced cache
on: enabled
off: disabled
It is disabled by default. If it is enabled, no-store and no-cache resources returned from the origin server will be cached according to CacheRules rules.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIgnoreCacheControl(string $IgnoreCacheControl) Set Forced cache
on: enabled
off: disabled
It is disabled by default. If it is enabled, no-store and no-cache resources returned from the origin server will be cached according to CacheRules rules.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIgnoreSetCookie() Obtain Ignores the Set-Cookie header of the origin server
on: enabled
off: disabled
It is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIgnoreSetCookie(string $IgnoreSetCookie) Set Ignores the Set-Cookie header of the origin server
on: enabled
off: disabled
It is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCompareMaxAge() Obtain Advanced cache expiration configuration. If it is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node.
on: enabled
off: disabled
It is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCompareMaxAge(string $CompareMaxAge) Set Advanced cache expiration configuration. If it is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node.
on: enabled
off: disabled
It is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Cache configuration basic version
The cache expiration time for all files is 30 days by default.
Static acceleration type domain names .php, .jsp, .asp, and .aspx are not cached by default
Note: this version does not support setting cache expiration rules if the origin server does not return max-age
 */
class SimpleCache extends AbstractModel
{
    /**
     * @var array Cache expiration time rules
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CacheRules;

    /**
     * @var string Follows origin server Cache-Control: max-age configurations
on: enabled
off: disabled
If it is enabled, resources that do not match CacheRules rules will be cached by the node according to the max-age value returned by the origin server. Resources that match CacheRules rules will be cached on the node according to the cache expiration time set in CacheRules.
It conflicts with CompareMaxAge. They cannot be enabled at the same time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FollowOrigin;

    /**
     * @var string Forced cache
on: enabled
off: disabled
It is disabled by default. If it is enabled, no-store and no-cache resources returned from the origin server will be cached according to CacheRules rules.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IgnoreCacheControl;

    /**
     * @var string Ignores the Set-Cookie header of the origin server
on: enabled
off: disabled
It is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IgnoreSetCookie;

    /**
     * @var string Advanced cache expiration configuration. If it is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node.
on: enabled
off: disabled
It is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CompareMaxAge;
    /**
     * @param array $CacheRules Cache expiration time rules
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FollowOrigin Follows origin server Cache-Control: max-age configurations
on: enabled
off: disabled
If it is enabled, resources that do not match CacheRules rules will be cached by the node according to the max-age value returned by the origin server. Resources that match CacheRules rules will be cached on the node according to the cache expiration time set in CacheRules.
It conflicts with CompareMaxAge. They cannot be enabled at the same time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IgnoreCacheControl Forced cache
on: enabled
off: disabled
It is disabled by default. If it is enabled, no-store and no-cache resources returned from the origin server will be cached according to CacheRules rules.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IgnoreSetCookie Ignores the Set-Cookie header of the origin server
on: enabled
off: disabled
It is disabled by default
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CompareMaxAge Advanced cache expiration configuration. If it is enabled, the max-age value returned by the origin server will be compared with the cache expiration time set in CacheRules, and the smallest value will be cached on the node.
on: enabled
off: disabled
It is disabled by default
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
        if (array_key_exists("CacheRules",$param) and $param["CacheRules"] !== null) {
            $this->CacheRules = [];
            foreach ($param["CacheRules"] as $key => $value){
                $obj = new SimpleCacheRule();
                $obj->deserialize($value);
                array_push($this->CacheRules, $obj);
            }
        }

        if (array_key_exists("FollowOrigin",$param) and $param["FollowOrigin"] !== null) {
            $this->FollowOrigin = $param["FollowOrigin"];
        }

        if (array_key_exists("IgnoreCacheControl",$param) and $param["IgnoreCacheControl"] !== null) {
            $this->IgnoreCacheControl = $param["IgnoreCacheControl"];
        }

        if (array_key_exists("IgnoreSetCookie",$param) and $param["IgnoreSetCookie"] !== null) {
            $this->IgnoreSetCookie = $param["IgnoreSetCookie"];
        }

        if (array_key_exists("CompareMaxAge",$param) and $param["CompareMaxAge"] !== null) {
            $this->CompareMaxAge = $param["CompareMaxAge"];
        }
    }
}
