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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `LookUpEvents` response parameters structure
 *
 * @method array getEvents() Obtain Logset
 * @method void setEvents(array $Events) Set Logset
 * @method boolean getListOver() Obtain Whether the logset ends
 * @method void setListOver(boolean $ListOver) Set Whether the logset ends
 * @method string getNextToken() Obtain Credential for viewing more logs
 * @method void setNextToken(string $NextToken) Set Credential for viewing more logs
 * @method string getRequestId() Obtain Unique ID of request. Each request returns a unique ID. The `RequestId` is required for troubleshooting.
 * @method void setRequestId(string $RequestId) Set Unique ID of request. Each request returns a unique ID. The `RequestId` is required for troubleshooting.
 */
class LookUpEventsResponse extends AbstractModel
{
    /**
     * @var array Logset
     */
    public $Events;

    /**
     * @var boolean Whether the logset ends
     */
    public $ListOver;

    /**
     * @var string Credential for viewing more logs
     */
    public $NextToken;

    /**
     * @var string Unique ID of request. Each request returns a unique ID. The `RequestId` is required for troubleshooting.
     */
    public $RequestId;

    /**
     * @param array $Events Logset
     * @param boolean $ListOver Whether the logset ends
     * @param string $NextToken Credential for viewing more logs
     * @param string $RequestId Unique ID of request. Each request returns a unique ID. The `RequestId` is required for troubleshooting.
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
        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new Event();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
