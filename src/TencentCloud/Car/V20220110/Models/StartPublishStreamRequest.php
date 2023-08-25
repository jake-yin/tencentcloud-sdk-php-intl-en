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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartPublishStream request structure.
 *
 * @method string getUserId() Obtain Unique user ID, which is customized by you and is not understood by CAR. It will be used as the `StreamId` for pushing streams. For example, if the bound push domain is **abc.livepush.myqcloud.com**, the push address will be **rtmp://abc.livepush.myqcloud.com/live/UserId?txSecret=xxx&txTime=xxx**.
 * @method void setUserId(string $UserId) Set Unique user ID, which is customized by you and is not understood by CAR. It will be used as the `StreamId` for pushing streams. For example, if the bound push domain is **abc.livepush.myqcloud.com**, the push address will be **rtmp://abc.livepush.myqcloud.com/live/UserId?txSecret=xxx&txTime=xxx**.
 * @method string getPublishStreamArgs() Obtain Push parameter, which is a custom parameter carried during stream pushing.
 * @method void setPublishStreamArgs(string $PublishStreamArgs) Set Push parameter, which is a custom parameter carried during stream pushing.
 */
class StartPublishStreamRequest extends AbstractModel
{
    /**
     * @var string Unique user ID, which is customized by you and is not understood by CAR. It will be used as the `StreamId` for pushing streams. For example, if the bound push domain is **abc.livepush.myqcloud.com**, the push address will be **rtmp://abc.livepush.myqcloud.com/live/UserId?txSecret=xxx&txTime=xxx**.
     */
    public $UserId;

    /**
     * @var string Push parameter, which is a custom parameter carried during stream pushing.
     */
    public $PublishStreamArgs;

    /**
     * @param string $UserId Unique user ID, which is customized by you and is not understood by CAR. It will be used as the `StreamId` for pushing streams. For example, if the bound push domain is **abc.livepush.myqcloud.com**, the push address will be **rtmp://abc.livepush.myqcloud.com/live/UserId?txSecret=xxx&txTime=xxx**.
     * @param string $PublishStreamArgs Push parameter, which is a custom parameter carried during stream pushing.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PublishStreamArgs",$param) and $param["PublishStreamArgs"] !== null) {
            $this->PublishStreamArgs = $param["PublishStreamArgs"];
        }
    }
}
